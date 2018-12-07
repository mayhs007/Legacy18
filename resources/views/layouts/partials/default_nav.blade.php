<style>
      #name:hover {
      background-color: ;
      color: white;
  }
    </style>
<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper">
            <a href="{{ route('pages.root') }}"><div class="nav-brand">
                    <img src="images/background/6.png"></img></div><div class="brand-logo">legacy</div></a>
        <ul class="right">
        <li>
            <i  class="fa fa-bars fa-2x"></i>
            <li>
        </ul>
    </nav>
  <div class="nav-screen">
    <i class="fa fa-times fa-3x"></i>
    <div class="nav-container">
        <div  class="nav-links">
            <ul id='myMenu'>
            
              @if(Auth::Check())
              <li id="name" class="btn"><i class="fa fa-user"></i> Hi, {{ Auth::user()->full_name }}</li>
              @endif
              <li class="side"><a href="{{ route('pages.root') }}"><i class="fa fa-home"></i>HOME</a></li>
                  <li><a href="{{ route('pages.events') }}"><i class="fa fa-tasks"></i>&nbspEVENTS</a></li>
              @if(Auth::Check())
                  <li><a href="{{ route('pages.dashboard') }}"><i class="fa fa-shopping-cart"></i>&nbspCART</a></li>  
              @endif
                <li><a href="{{ route('pages.about') }}"><i class="fa fa-child"></i>&nbspABOUT</a></li>
                <li><a href="{{ route('pages.prizes') }}"><i class="fa fa-gift"></i>&nbspPRIZES</a></li>
                <li><a href="{{ route('pages.instruction') }}"><i class="fa fa-question-circle"></i>&nbspINSTRUCTIONS</a></li>
              @if(App\Config::getConfig('offline_link'))              
                  <li><a href="{{ route('pages.registration.offline') }}"><i class="fa fa-download"></i> Offline  Registration</a></li>                                          
              @endif
              @if(Auth::Check())
                  <li><a href="{{ route('pages.hospitality') }}"><i class="fa fa-child"></i>&nbspACCOMMODATION</a></li>
                  <li> <a href="{{route('auth.changePassword')}}"><i class="material-icons prefix">dialpad</i>&nbspCHANGE PASSWORD</a> </li>            
                  <li><a href="{{ route('auth.logout') }}"><i class="fa fa-power-off"></i>&nbspLOGOUT</a></li>
              @else
                  <li><a href="{{ route('auth.login') }}"><i class="fa fa-key"></i>&nbspLOGIN</a></li>
                  <li><a href="{{ route('auth.register') }}"><i class="fa fa-user"></i>&nbspENROLL ME</a></li>  
              @endif
            </ul>
        </div>
    </div>
</div>

</nav>
</div>