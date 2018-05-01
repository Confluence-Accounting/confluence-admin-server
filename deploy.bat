@ECHO OFF 
call composer dump-autoload
call php artisan clear-cache
call php artisan clear-compiled
call php artisan migrate:refresh --seed --force
call php artisan route:cache
call php artisan optimize --force