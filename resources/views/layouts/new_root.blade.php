<!DOCTYPE html>
<html lang="en" >

<head>
    <title>Legacy18</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

  {{ HTML::Style("css/jqueryfullpage.css") }}   
  {{ HTML::Style("css/font-awesome.min.css") }} 
  {{ HTML::Style("css/material-icons.css") }}
  {{ HTML::Style("css/fontawesome.min.css") }}    
  {{ HTML::Style("css/materialize.min.css") }} 
  {{ HTML::Style("css/animate.min.css") }}   
  {{ HTML::Style("css/my.css") }}             
  {{ HTML::Script("js/jquery.min.js") }}  
  {{ HTML::Script("js/jquery.fullpage.js") }} 
  {{ HTML::Script("js/jquery.js") }}
  {{ HTML::Script("js/wow.js") }}
  {{ HTML::Script("js/materialize.min.js") }} 
  {{ HTML::Script("js/app.js") }}    
</head>
  <body>
<!-- navbar header -->
@include('layouts.partials.nav', ['user_count' => $user_count])
<!-- end navbar header -->
<div class="col s12 m4">
<!-- begin fullpage -->
  @yield('content')

</div>
</body>
</html>
