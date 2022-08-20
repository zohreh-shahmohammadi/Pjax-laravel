<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<h1>A pjax  for Laravel</h1>
<hr>
<p>Pjax is a jQuery plugin that uses ajax to speed up the loading time of your pages. It only works by fetching specific pieces of html from the server, and client-
<hr>
<br>
##How to use in LARAVEL
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
  protected $middleware = [
 
        \App\Http\Middleware\PjaxMiddleware::class,
    ];
    ##create layout.blade.php
<h4 >Time : <span style="color: red">{{time()}}</span></h4>
    <hr>
    <section id="pjax-container">
       @yield('content')
    </section>
    <br>
##add in layout.php CDN jquery.pjax and jquery

 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.pjax/2.0.1/jquery.pjax.min.js"  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<br>
##add script
<script>
 $(document).pjax('a','#pjax-container');   
</script>
<br>
##create welcom_pjax.blade.php
<br>
@extends('Pjax.layout');
@section('content');
<h1>WELCOME .PJAX</h1>
<hr>
<span>click Link New Page</span>
<br><br>
<a href="/pjax">Pjax</a>
@endsection
<br>
##create pjax.blade.php
<br>
@extends('Pjax.layout')
@section('content')
<div>
   <h1 style="color:orange">New Page Pjax With Larvel</h1>
</div>

@endsection
##add this route in routes\web.php
Route::get('/', function () {
    return view('Pjax.welcom_pjax');
});
Route::get('/pjax', function () {
    return view('Pjax.pjax');
});
<br>

##in the end run php artisan serve

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
