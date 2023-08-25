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


=> task-6(crud datatable)
create resource controller,model,route and blade files for crud operation. here also use laravel blade file's yield,extends attribute.


=> task-5(Use Seed and Generate testing data )
first create factory and write code after update databaseseeder and run cmd php artisan db:seed
here we can use also tinker for that write in command prompt -> php artisan tinker
->User::factory()->count(20)->create()

=> task-6(validation in add/edit)
add validation logic in controller and for showing error message code in blade file

=> task-10(getter/setter)
first create funcions in model according to column name after that use that function in controller for get full name(combine two column value and show)
here i also set mr before first_name if already exist then not add and get first capital letter value of forst_name 

=> task-7(yajratable)
composer require yajra/laravel-datatables:"^1.0" --ignore-platform-req=ext-gd -w first run command
add in config/app.php in the providers add  Yajra\DataTables\DataTablesServiceProvider::class
pass data and button using cointroller
