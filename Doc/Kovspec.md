## 1. Áttekintés

A rendszer egy videójáték weboldalt valósít meg, ahol a felhasználók saját, meg tudják tekinteni a már kijátszott játékaikat, így nyomon követve azt, hogy mi amit ki kell még játszaniuk.
A rendszert teljes mértékben online formában kell megvalósítani, weblap keretében. 
A weblap teljes értékű kihasználásához szüksége lesz a felhasználónak regisztrálni. 
Regisztráció nélkül semmilyen funkciót nem ér el, számára csak betekintő áll rendelkezésre illetve a játékok és cégek listázása.

## 2. Jelenlegi helyzet

Jelenleg a számítógépes játékoknak fontos szerepe van az életben. Szinte már mindenkinek van okostelefonja és számítógépe otthon. 
Ezek mellett pedig az internet az, ami körbe vesz minket. Manapság már nem meglepő az, ha van mobilinternete egyeseknek, sőt lassan már az lenne a meglepő, ha nem lenne. 
Vannak akik telefonos alkalmazásokban tárolják a kijátszott játékokat, esetleg excel táblában viszont mi történik ha elromlik a telefonjuk és nem kapcsol be?
(Az esetek nagy részében ezek az alkalmazások nem rendelkeznek felhő alapú adatmentéssel mentéssel ha az alkalmazás ingyenes verzióját használjuk.) 
Muszáj támogatnunk azokat, akik ebbe a problémába estek, így úgy gondoltuk, hogy csinálunk egy weboldalt, ahol minden egyes ember be tud regisztrálni és fel tudja tölteni az adatbázisba, milyen játékokat játszott eddig ki. Leülünk egy számítógéphez és betöltjük a weboldalt. 
Bejelentkezünk és újra láthatjuk, módosíthatjuk, törölhetjük csodás játékainkat amit kijátszottunk.

## 3. Vágyálom rendszer 

A projekt célja egy olyan felület biztosítása, ahol sokkal könnyebb elérni a kijátszott játékaid. A projekt csak webes felülettel rendelkezzen. Regisztráció nélkül csak a regisztáló felülettel rendelkezzen, ahol ha már regisztált valaki akkor be is tudjon jelentkezni.
Miután létrehozta fiókját a felhasználó és bejelentkezett utána elérhetővé válnak a különböző opciók. Képes a játékok listázására, kijátszottakhoz adásához, kijátszottak listából törlésére. Hozzáfér a további felhasználókhoz és azoknak a kijátszott játékok listájához.
A weblap maga egy letisztult oldal, könnyen kezelhető, mindenki számára egyértelmű működéssel bírjon. A játék feltöltése esetben szükséges megadni a nevét, cégnevét.
Szükség van egy magasabb szintű felhasználóra is, aki rendelkezik jogusoltságokkal a fiókok módosításához, játékok törléséhez, módosításához, cégek hozzáadásához és módosításához.

## 4. Funkcionális követelmények


## 5. Rendszerre vonatkozó törvények, szabványok, ajánlások


## 6. Jelenlegi üzleti folyamatok modellje


## 7. Igényelt üzleti folyamatok modellje
    7.1 Bejelentkezés
        7.1.1 Játékok
                7.1.1.1 Új kijátszott játék rögzítése
                7.1.1.2 Játékok listázása
                7.1.1.3 Kijátszott játékok listázása
        7.1.2 Játékok
                7.1.2.1 Cégek listáázsa
                7.1.2.2 Cégekhez való játékok listázása
        Admin joggal rendelkezőknek:
        7.1.3 Felhasználók szerkesztése
        7.1.4 Felhasználók listázása
        7.1.5 Felhasználók törlése
        7.1.6 Új játékok feltöltése
        7.1.7 Cégek feltöltése
        7.1.8 Játékok és cégek módosítása
        7.1.9 Kijelentkezés
    7.2 Regisztráció

## 8. Követelménylista


## 9. Fogalomtár

- **UML** - Unified Modeling Language
- **Reszponzív felület** - Mobilon, Tableten, PC-n igazodik a
képernyőhöz a felület mérete, azaz több eszközön is probléma nélkül
üzemelhet
- **Releváns** - fontos, lényeges, meghatározó, jelentős
- **Corrective Maintenance:** A felhasználók által felfedezett és "user reportban"
elküldött hibák kijavítása.
- **Adaptive Maintenance:** A program naprakészen tartása és finomhangolása.
- **Perfective Maintenance:** A szoftver hosszútávú használata érdekében végzett
módosítások, új funkciók, a szoftver teljesítményének és működési
megbízhatóságának javítása.
- **Preventive Maintenance:** Olyan problémák elhárítása, amelyek még nem
tűnnek fontosnak, de később komoly problémákat okozhatnak.