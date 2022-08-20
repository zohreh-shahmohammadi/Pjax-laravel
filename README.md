<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<h1>A pjax  for Laravel</h1>
<hr>
<p>Pjax is a jQuery plugin that uses ajax to speed up the loading time of your pages. It only works by fetching specific pieces of html from the server, and client-
<hr>
<br>
#Usage
<hr>
<span>install pakage in laravel</span>
<br>
<span>$ composer require spatie/laravel-pjax</span> 
<hr>
<br>
##Next you must create PjaxMiddleware
<br>
you can use JeffreyWay methods
<br>
https://gist.github.com/JeffreyWay/8526696b6f29201c4e33

<hr>
##Next step you must add the \Spatie\Pjax\Middleware\PjaxMiddleware to the kernel.php
<br>
// namespace App\Http\kernel.php
<br>
  protected $middleware = [
 
        \App\Http\Middleware\PjaxMiddleware::class,
    ];
<hr>
    ##create layout.blade.php
    <br>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jquery Pjax</title>
</head>
<body>
    <h4 >Time : <span style="color: red">{{time()}}</span></h4>
    <hr>
    <section id="pjax-container">
       @yield('content')
    </section>
</body>
</html>
    <br>
    <hr>
##add in layout.php CDN jquery.pjax and jquery
<br>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
   <br>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.pjax/2.0.1/jquery.pjax.min.js"  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<br>
##add script
<br>
<script>
 $(document).pjax('a','#pjax-container');   
</script>
<hr>
##create welcom_pjax.blade.php
<br>
@extends('Pjax.layout');
@section('content');
<h1>WELCOME .PJAX</h1>
<br>
<span>click Link New Page</span>
<br><br>
<a href="/pjax">Pjax</a>
@endsection
<hr>
##create pjax.blade.php
<br>
@extends('Pjax.layout')
<br>
@section('content')
<br>
<div>
   <h1 style="color:orange">New Page Pjax With Larvel</h1>
</div>
<br>
@endsection
<hr>
##add this route in routes\web.php
<br>
Route::get('/', function () {
    return view('Pjax.welcom_pjax');
});
<br>
Route::get('/pjax', function () {
    return view('Pjax.pjax');
});

<hr>
##in the end run php artisan serve
<hr>

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
