# Telepítés
1. .env fájl másolása example-ből
2. Db létrehozása (ha tesztelnél valamit, ez opcionális)
3. Teszt db létrehozása
4. DB nevek beírása az envekbe (sima és testing)
5. `composer install`
6. `php artisan migrate` 
7. `npm i`
8. `npm run prod` -> ezzel meg tudod nézni a felületet

### Tesztek futtatása
#### backend: `php artisan test`
#### frontend: `npm run test`

## Feladatok
- backenden feature tesztek írása a tests/Feature mappába (`php artisan make:test TesztNeve`)
  - minden api végpont legyen lefedve tesztekkel
- frontenden a functions és a components mappa tartalmának tesztelés a megfelelő tesztekkel (js -> sima jest teszt, react -> snapshot vagy dom)

## Elvárás
### Frontend és backend tesztek coverage külön-külön 90% felett legyen!
