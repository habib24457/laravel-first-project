##### ----------- Locations -----------

1. View

resources > views

2. controllers

app > Http > Controllers

3.

# ---------------- Basic commands -----------

1. Create a controller : php artisan make:controller ControllerName

->Then bring the controller inside the route: location: (resources > routes > web.php)  
Then import your controller from the controller folder as follows  
 use use App\Http\Controllers\HomeController;

-> Create a route for the imported controller  
 route::get('/',[YourControllerName::class,'yourFunctionNameFromTheController']);

->Then return a view from your controller.

2.Create a view  
-> Go to the location of views.
-> Then name your view, e.g: index.blade.php  
->Call your views inside your desired controller.
