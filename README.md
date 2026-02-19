php artisan install:api
User.php = HasApiTokens
like this -> use HasFactory, Notifiable, HasApiTokens;
php artisan make:model DeviceType -a
php artisan make:resource DeviceTypeResource
ha modositunk ez nem jo:
php artisan migrate --seed
php artisan make:model Device -a

php artisan migrate:fresh --seed
php artisan make:resource DeviceResource

###

GitHub

 git init <!-- After git init runs, your folder is now officially a local Git repository, but it's still empty — no files are tracked yet. -->