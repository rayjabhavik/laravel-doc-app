git init
git remote add origin path
git add . 
git commit -m "task-1"
git push --set-upstream origin master


=> task-4(make auth)
composer require laravel/ui
php artisan ui bootstrap --auth
run this 2 command for laravel inbuilt authantication 
after this cmd run in project automatically created controllers,middleware and blade files<br>

=> here add css and js cdn links of bootstrap in views/layouts/app.blade.php file <br>
in public folder create file and copy paste bootstrap 5 cdn links content and that link add in views/layouts/app.blade.php file
