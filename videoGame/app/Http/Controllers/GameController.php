<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Play;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $games = Game::paginate(4);
        return view("game.index")->with(compact('games'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(Game $game)
    {
        return view('game.details')->with(compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Game $game)
    {
        return view('game.edit', compact('game'));
    }

    public function update(Request $request, Game $game)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'smalldesc' => 'required',
            'description' => 'required',
            // Add validation rules for other fields
        ]);

        $game->update($validatedData);

        // Handle other fields and relationships if needed

        return redirect()->route('game.edit', $game)->with('success', 'Game updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Game $game)
    {
        //
    }
    public function gameisPlayed(Game $game, Request $request)
    {
        $request->validate([
            'seen' => 'required|',
        ]);
        $existingPlay = Play::where('user_id', Auth::user()->id)
                    ->where('game_id', $game->id)
                    ->first();

        if ($existingPlay)
        {
            $existingPlay->delete();
            return back()->with('success',__("Deleted from played"));
        }
        else
        {
            $play = new Play();
            $play->user_id = Auth::user()->id;
            $play->game_id = $game->id;
            $play->save();
            return back()->with('success',__("Added to played"));
        }

    }
    public function listPlayedGames()
    {
        $user = Auth::user();
        $plays = Play::where('user_id', $user->id)->with('game')->get();

        return view('game.played')->with(compact('plays'));
    }
    public function deletePlayedGame(Play $play)
    {
        $play->delete();

        return redirect()->route('game.listPlayedGames')->with('success', __("Deleted from played"));
    }

    public function addGame()
    {
        if (!auth()->user()->isAdmin()) {
            return redirect()->route('home');
        }
        $companies = Company::all();
        return view('game.create', compact('companies'));
    }

    public function storeGame(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'smalldesc' => 'required',
            'description' => 'required',
            'cover' => 'required|image|mimes:jpeg,png',
            'topics' => 'array',
            'company' => 'required',
        ]);
   if ($request->hasFile('cover') && $request->file('cover')->isValid())
   {
        $file = $request->file('cover');
        $extension = $file->getClientOriginalExtension();
        $fileName = time() . '.' . $extension;
        $folderPath = public_path('upload/img/cover');
        $file->move($folderPath, $fileName);

        $validatedData['cover'] = $fileName;
   }
    $game = new Game($validatedData);

    $companyId = $request->input('company');
    $company = Company::findOrFail($companyId);
    $game->company()->associate($company);

    $game->save();

    if ($request->has('topics')) {
        $topics = $request->input('topics');
        $game->topics()->sync($topics);
    }

    return redirect()->route('game.create')->with('success', 'Game added successfully.');
    }

}
