Instrukcja instalacji:

1. git clone https://github.com/Rav9zw/t2geurope.git
2. w folderze z projektem: cd docker/
3. docker compose up
4. docker exec  --user=www-data t2geurope cp .env.example .env
5. docker exec  --user=www-data t2geurope composer install
6. docker exec  --user=www-data t2geurope npm install
7. utwórz baze danych t2geurope
8. docker exec  --user=www-data t2geurope php artisan migrate --seed
9. docker exec  --user=www-data t2geurope npm run build
