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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.pjax/2.0.1/jquery.pjax.min.js"  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
 $(document).pjax('a','#pjax-container');   
</script>
</body>
</html>