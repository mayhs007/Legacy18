<style>
      .fa-bars {
      margin-top: 20px;
      padding-right: 30px;
  }
  
  #name:hover {
      background-color: #ff8533;
      color: white;
  }
  .colors{
      color: #ff8533;
  }
    </style>
<i  class="fa fa-bars fa-3x" id="btn"></i>
  <div class="nav-screen">
    <i class="fa fa-times fa-3x"></i>
    <div class="nav-container">
        <div class="nav-links">
            <ul id='myMenu'>
               
              @if(Auth::Check())
                  <li id="name" class="btn"><i class="fa fa-user"></i> Hi, {{ Auth::user()->full_name }}</li>                 
              @endif
              <li class="side"><a href="{{ route('pages.root') }}"><i class="fa fa-home"></i>HOME</a></li>
                  <li class="side"><a href="{{ route('pages.events') }}"><i class="fa fa-tasks"></i>&nbsp EVENTS</a></li>
              @if(Auth::Check())
                  <li class="side"><a href="{{ route('pages.dashboard') }}"><i class="fa fa-shopping-cart"></i>&nbspCART</a></li>  
              @endif
                <li class="side"><a href="{{ route('pages.about') }}"><i class="fa fa-child"></i>&nbspABOUT</a></li>
                <li class="side"><a href="{{ route('pages.prizes') }}"><i class="fa fa-gift"></i> PRIZES</a></li>
                <li class="side"><a href="{{ route('pages.instruction') }}"><i class="fa fa-question-circle"></i>&nbspINSTRUCTIONS</a></li>
              @if(App\Config::getConfig('offline_link'))              
                  <li class="side"><a href="{{ route('pages.registration.offline') }}"><i class="fa fa-download"></i>&nbspOffline  Registration</a></li>                                          
              @endif
              @if(Auth::Check())
                  <li class="side"><a href="{{ route('pages.hospitality') }}"><i class="fa fa-child"></i>&nbspACCOMMODATION</a></li>
                  <li class="side"> <a href="{{route('auth.changePassword')}}"><i class="material-icons prefix">dialpad</i>&nbspCHANGE PASSWORD</a> </li>            
                  <li class="side"><a href="{{ route('auth.logout') }}"><i class="fa fa-power-off"></i>LOGOUT</a></li>
              @else
                  <li class="side"><a href="{{ route('auth.login') }}"><i class="fa fa-key"></i>&nbspLOGIN</a></li>
                  <li class="side"><a href="{{ route('auth.register') }}"><i class="fa fa-user"></i>&nbspENROLL ME</a></li>  
              @endif
               @if(Auth::Check())
                    
                        <li class="side"><span class="colors"> REGISTRATION FROM YOUR COLLEGE {{$user_count}}/50</span></li>    
                
               @endif
            </ul>
       
        </div>
    </div>
</div>