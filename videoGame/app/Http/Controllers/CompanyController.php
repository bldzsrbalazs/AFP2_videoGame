<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::paginate(8);
        //dd($companies);
        return view("company.index")->with(compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!auth()->user()->isAdmin()) {
            return redirect()->route('home');
        }
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
        ]);

        $company = new Company();
        $company->name = $validatedData['name'];
        $company->save();

        return redirect()->route('company.create')->with('success', 'Company added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        $companygames= $company->games()->paginate(8);
        return view("company.show")->with(compact('companygames'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
    }

    public function storeGame(Request $request)
    {
        // ...

        // Vállalatok lekérdezése
        $companies = Company::all();

        // ...

        return view('game.create')->with(compact('companies'))->with('success', __("Game added successfully"));
    }
}
