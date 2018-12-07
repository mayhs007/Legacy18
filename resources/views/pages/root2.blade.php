@extends('layouts.new_root')

@section('content')
<div class="hide-on-small-only">
<div id="fullpage">
  <div class="section aboutme" data-anchor="aboutme">
    <div class="opaque-bg animated fadeInDown">
      <p><span id="holder"></span><span class="blinking-cursor">!</span></p>
      <a class="waves-effect waves-light btn modal-trigger pulse" href="#modal1">IMPORTANT NEWS!!</a>
    </div>
    
   <i id="moveDown" class="fa fa-chevron-down fa-3x bounce"></i>
  </div>
 

<!-- Modal Structure -->
<div id="modal1" class="modal">
  <div class="modal-content">
    <h4>IMPORTANT NEWS!</h4>
    <ol>
      <li>DIFFICULTY IN ONLINE REGISTRATION ? 
                          FOR OFFLINE REGISTRATION SEND MAIL TO: LEGACY18@MEPCOENG.AC.IN OR 
                            CONTACT: 9841780299, 04562-235601.</li>
      <li>THE LAST DATES FOR REGISTRATION AND PAYMENTS FOR LEGACY18 HAS BEEN EXTENDED TO 26TH OF AUGUST,2018</li>
    </ol> 
    </div>
  </div>
  <div class="section" data-anchor="about">
      <h1 id="legacy" class="wow fadeInLeft" data-wow-delay="0.6s">LEGACY’18</h1>
      <p class="present wow fadeInDown" data-wow-delay="0.6s">AN INTER COLLEGE CULTURAL AND TALENT FEST</p>
      <p class="present wow fadeInDown" data-wow-delay="0.6s">PRESENTED BY</p>
      <p class="present  wow fadeInRight" data-wow-delay="0.6s">MEPCO SCHLENK ENGINEERING COLLEGE</p>
      <p class="present wow fadeInUp" data-wow-delay="0.6s">SIVAKASI</p>
      <p class="present  wow fadeInLeft" data-wow-delay="0.6s">(AN AUTONOMOUS INSTITUTION)</p>
  </div>
  <div class="section" data-anchor="date">
      <h1  class="wow fadeInRight" data-wow-delay="0.6s">MAKE YOUR PRESENCE ON</h1>
      <p  class="wow fadeInLeft" data-wow-delay="0.6s">
      <span id="aug" >AUG</span>
      <span id="one">31</span><br>
      <span id="onetwo">1</span>
      <span id="sep">SEP</span></p>
  </div>
  <!-- end section -->
  <div class="section" data-anchor="timeline">
    <div class="s12 m12">
      <div class="card" id="card">
        <div class="card-image">
              <img src="images/background/timeline @legacy.png" class="wow fadeInDown">
        </div>
      </div>
    </div>
  </div>
  <!-- begin section-->
  
  <div class="section fp-auto-height">
    <div class="footer">
      <p>CONNECT WITH US</p>
      <div class="social-links">
        <p>legacy18@mepcoeng.ac.in</p>
      </div>
    </div>
</div>
</div>
</div>
<div class="hide-on-med-and-up">
<div class="col s12 m4">
    <div class="sections aboutmes">
      <div class="opaque-bg animated fadeInDown">
        <p><span id="holder2"></span><span id="cursor" class="blinking-cursor2">!</span></p>
        <a class="waves-effect waves-light btn modal-trigger pulse" href="#modal2">IMPORTANT NEWS!!</a>
      </div>
    </div>
    <!--end-->
    <div id="modal2" class="modal">
  <div class="modal-content">
    <h4>IMPORTANT NEWS!</h4>
    <ol>
      <li>DIFFICULTY IN ONLINE REGISTRATION ? 
                          FOR OFFLINE REGISTRATION SEND MAIL TO: LEGACY18@MEPCOENG.AC.IN OR 
                            CONTACT: 9841780299, 04562-235601.</li>
      <li>THE LAST DATES FOR REGISTRATION AND PAYMENTS FOR LEGACY18 HAS BEEN EXTENDED TO 26TH OF AUGUST,2018</li>
    </ol> 
    </div>
  </div>
    <div class="sections background">
      <h2 id="legacy" class="wow fadeInLeft" data-wow-delay="0.6s">LEGACY’18</h2>
      <p class="wow fadeInDown" data-wow-delay="0.6s">AN INTER COLLEGE CULUTRAL AND TALENT FEST</p>
      <p class="wow fadeInDown" data-wow-delay="0.6s">PRESENTED BY</p>
      <p class="wow fadeInRight" data-wow-delay="0.6s">MEPCO SCHLENK ENGG COLLEGE</P>
  </div>
    <div class="sections background">
      <h2  class="wow fadeInRight" data-wow-delay="0.6s">MAKE YOUR PRESENCE ON</h2>
      <p  class="wow fadeInLeft" data-wow-delay="0.6s">
      <span id="aug">AUG 31</span><br>
     <span id="color">AND<span><br>
      <span id="sep">1</span>
      <span id="sep">SEP</span></p>
  </div>

  <div class="sections background">
  <img src="images/background/timeline @legacy.png" class="responsive-img">
 </div>
  <div class="sectionss">
  
    <div class="footer">
      <p>CONNECT WITH US</p>
      <div class="social-links">
        <p>legacy18@mepcoeng.ac.in</p>
      </div>
    </div>
  </div>
</div>
@endsection