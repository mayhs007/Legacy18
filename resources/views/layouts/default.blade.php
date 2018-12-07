<!DOCTYPE html>
<html lang="en" >

<head>
    <title>Legacy18</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        {{ HTML::Style("css/raleway.css") }}
        {{ HTML::Style("css/animate.min.css") }} 
        {{ HTML::Style("css/materialize.min.css") }}
        {{ HTML::Style("css/font-awesome.min.css") }}
        {{ HTML::Style("css/fontawesome.min.css") }}  
        {{ HTML::Style("css/my.css") }}        
        {{ HTML::Style("css/materialize-stepper.min.css") }}                                                     
        {{ HTML::Style("css/material-icons.css") }}                                                    
        {{ HTML::Script("js/jquery.min.js") }}
        {{ HTML::Script("js/jquery.js") }}
        {{ HTML::Script("js/wow.js") }}          
        {{ HTML::Script("js/materialize.min.js") }} 
        {{ HTML::Script("js/materialize-stepper.min.js") }} 
        {{ HTML::Script("js/app.js") }}     
</head>
 
  <body>
        @include('layouts.partials.default_nav')    
        @include('layouts.partials.flash')
          
            @yield('content')
        
    </body>
    <script>
        $('.stepper').activateStepper();
    </script>
</html>
