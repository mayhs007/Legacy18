<p>Hi, {{ $user->full_name}}</p>
<h3>Thanking you for Enrolling to Legacy18.</h3>
<h4>Its  just a verification mail.Your successfully completed Step 1 out of Step 4</h4>
<p>
{{ link_to_route('auth.activate', 'Click Here', ['email' => $user->email, 'activation_code' => $user->activation_code]) }} to confirm your account</p>
<img src="{{ $message->embed(public_path() . '/images/background/3.jpg') }}" alt="" />