@ECHO OFF 
call composer dump-autoload
call php artisan cache:clear
call php artisan route:cache
php artisan migrate:refresh --seed --force