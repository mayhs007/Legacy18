@extends('layouts.default')

@section('content')
<style>
    .sections{
        background: url("3.jpg") no-repeat;
        background-size: cover;
    }    
</style>
<div class="section">
    <div class="container">
    <div class="row">
        @foreach($events as $event)
            <div class="col m6 s12">
                @include('partials.events', ['event' => $event])
            </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col s12 center-align">
            {{ $events->render() }}
        </div>
    </div>
    <script>
        $(function(){
            $('.btn-register-event').on('click', function(evt){
                evt.preventDefault();
                var eventId = $(this).attr('data-event');
                var url = "events/" + eventId + "/" + "register";
                var registerLink = $(this);
                $.ajax({
                    url: url,
                    success: function(res){
                        if(res.error){
                            Materialize.toast(res.message, 8000);                        
                        }
                        else{
                            registerLink.text("ADDED TO CART");                        
                            registerLink.attr('href', "{{ route('pages.dashboard') }}");
                            registerLink.unbind("click");
                            Materialize.toast('EVENT ADDED TO CART!', 8000);
                        }
                    },
                    error: function(){
                        Materialize.toast('Something went wrong!, please try again', 8000);
                    }
                });
            });
        });
    </script>
    </div>
</div>

@endsection