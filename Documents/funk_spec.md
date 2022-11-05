# Funkcionális specifikáció

2.1 Bevezetés

A weboldalunk célja az, hogy különböző tesztek kitöltésével bővíthessék a felhasználók a tudásukat vagy csak szimpla szórakozásból használják ki a weboldal adottságait.
A weboldal megjelenésével, élénk színek használatával szeretnénk ösztönözni az embereket ennek használatára. Helyes kitöltés esetén pontszámokat lehet gyűjteni.
Ezáltal elérhető egy bizonyos kompetencia a regisztrált felhasználók közt.
- csak regisztráció után elérhetőek a kérdőívek
  - egy guest nem érheti el ezeket
- regisztrált felhasználók tudnak kérdőíveket csinálni, amik elérhetőek lesznek a többi ember számára is
- igényes megjelenés

2.2 Feltételek

A weboldal feltétele, hogy html kódon alapuló weblapot kell szerkeszteni. A kinézetett CSS programozási nyelv segítségével kell elérni, míg a funkciók a PHP 
segítégével fognak megtörténni. A felhasználók adatbázisát a phpMyAdmin software segítségével oldanánk meg. Melyet egy projekt menedzser felületen lesz végre hajtva. Ezen project menedzser lesz a Laravel.

2.3 Használati esetek

Vendég:
  - megtekintheti a főoldalt, de nincs jogosultsága a kvízek kitöltéséhez és létrehozásához, regisztráció szükséges
Felhasználó:
  - megtekintheti a főoldalt, a kvízeket
  - létrehozhat kvízeket, és ki is tölthet mások által feltöltött kvízt is
  - tud képet feltölteni, jelszót módosítani

2.4 Forgatókönyvek

Bejelentkezés után a felhasználó teszteket tud kitölteni, ezeknek az összpontszáma megtekinthető a felhasználó profilján. A felhasználó tud kvízeket létrehozni esetlegesen módosítani azokat. 
