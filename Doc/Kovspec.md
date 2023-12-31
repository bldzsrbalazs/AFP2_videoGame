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

1. Bejelentkezési felület:
 * A felhasználók ezen a felületen tudnak bejelentkezni a weboldalra a bővebb elérhetőség érdekében.
2. Regisztrációs felület:
 * A felhasználók ezen a felületen tudnak beregisztrálni a weboldalra.
3. Játékok:
 * A felhasználók itt érik el a bővebb funkciókat
 * Új játékokat tudnak felvenni a kijátszottak lista közé.
 * Meglévő kijátszott játékokat tudnak törölni a profiljukból.
 * Ugyanitt valósul meg az kijátszott játékok listázása is
4. Cégek:
 * Megtekinthetik itt a felhasználó a cégeket és a kedvenceik közé rakhatják azt
 * Kedvencek törléséből is itt történik
5. Jogosultságok:
 * Admin: Teljes hozzáférése van a weboldalhoz, szerkesztheti, kilistázhatja és törölheti a felhasználók adatait is.
 * Felhasználó: Tud a személyes kijátszott játékok listába új játékokat rögzíteni, tud kijátszott játékokat törölni, tud listázni játékokat, tud listázni cégeket, megtekintheti a kijátszott játékait..
 * Vendég: Csak egy betekintő áll rendelkezésére amikor megnyitja a weblapot és megtekintheti a játékok és cégek listáját.

## 5. Rendszerre vonatkozó törvények, szabványok, ajánlások

Opensource szoftver. Bárki által letölthető és felhasználható. Az értékesítése nem megengedett!

## 6. Jelenlegi üzleti folyamatok modellje

6.1 A játékok és cégek adatainak nyilvántartása
        6.1.1 Új kijátszott játék rögzítése
                - Regisztrált felhasználó végzi
                - Kijátszott játék rendszerbe való rögzítése
        6.1.2 Kijátszott játék törlése
                - Regisztrált felhasználó végzi
                - Kijátszott játék törlése a rendszerből
        6.1.3 Játékok kedvencekbe adása
                - Regisztrált felhasználó végzi
                - A játékok kedvencek listába adása
        6.1.4 Játékok kedvencek törlése
                - Regisztrált felhasználó végzi
                - A játékok törlése a kedvencek listából
        6.1.5 Cégek kedvencekbe adása
                - Regisztrált felhasználó végzi
                - A cégek kedvencek listába adása
        6.1.6 Cégek kedvencek törlése
                - Regisztrált felhasználó végzi
                - A cégek törlése a kedvencek listából

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

Modul | ID | Név | Kifejtés
--- | --- | --- | ----------------------------------------------------------------------
Jogosultság | K1 | Bejelentkezési felület | A felhasználó a felhasználónevével és jelszava segítségével jelentkezhet be. Nem megfelelő felhasználónév vagy jelszó esetén, a felhasználó hibaüzenetet kap.
Jogosultság | K2 | Regisztrációs felület | A felhasználó felhasználónév, e-mail cím és jelszó megadásával regisztrálhatja magát. A jelszó tárolása titkosított formában történik az adatbázisban. Bármely adat hiánya vagy a követelményeknek való nem megfelelése esetén, a felhasználó hibaüzenetet kap.
Jogosultság | K3 | Jogosultsági szintek | -Admin: Teljes hozzáférése van a weboldalhoz, szerkesztheti, kilistázhatja és törölheti a felhasználók adatait is. <br> -Felhasználó: Tud a személyes listájába új kijátszott játékokat rögzíteni illetve játékokat tud kedvencekbe adni, tud kedvencekből törölni, tudja a kijátszott játékait módosítani. <br> -Vendég: Csak egy betekintő áll rendelkezésére amikor megnyitja a weblapot és ki tudja listázni a játékok és cégek listáját.
Felület | K4 | Felhasználók listája | Admin jogosultsággal megtekinthető és megváltoztatható a felhasználók felhasználóneve, e-mail címe és jogosultsági szintje.
Felület | K5 | Játékok | Admin jogosultsággal lehet játékokat felvenni és törölni az adatbázisból.
Felület | K6 | Játékok | Felhasználó jogosultsággal lehet játékokat felvenni és törölni az kijátszott játékok listából.
Felület | K7 | Cégek | Regisztrált felhasználó tud kedvencekbe adni cégeket és törölni onnan.
Felület | K8 | Cégek | Admin jogosultsággal lehet cégeket felvenni és törölni az adatbázisból.

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