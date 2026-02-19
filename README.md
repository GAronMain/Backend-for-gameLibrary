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
 git config --global user.name "Aron"                                                                                      
 git config --global user.email "kustar.aron@students.jedlik.eu"


 git init  <!-- After git init runs, your folder is now officially a local Git repository, but it's still empty — no files are tracked yet. -->

 git add . <!-- Add all files to staging (This tells Git: "track these files from now on". It skips anything in .gitignore — Laravel's default one should already protect .env vendor/, etc.) -->

…or create a new repository on the command line
echo "# Backend-for-gameLibrary" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin git@github.com:GAronMain/Backend-for-gameLibrary.git
git push -u origin main


<!-- …or push an existing repository from the command line -->
git remote add origin git@github.com:GAronMain/Backend-for-gameLibrary.git
git branch -M main
git push -u origin main


<!-- Normal daily workflow from now onPowerShell# Pull latest (if working from another computer or after collaboration) -->
git pull

# Do your work (edit files, add new controllers, etc.)
git add .                  # or git add specific/file.php
git commit -m "added authentication routes and Sanctum setup"
git push
Clone it on another computer (future-proof)
On a new machine:PowerShellgit clone git@github.com:GAronMain/Backend-for-gameLibrary.git
cd Backend-for-gameLibrary
composer install
cp .env.example .env
php artisan key:generate
# ... continue setup