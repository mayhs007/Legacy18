@extends('layouts.default')

@section('content')

<div class="row">
    <div class="col s12 offset-m2 m8">
        @include('partials.errors')
        <div class="card rounded-box">
            <div class="card-content">
                <span class="card-title center-align">
                    Register Team
                </span>
                <div class="row">
                    <div class="col s12">
                        <ul class="collection with-header">
                            <li class="collection-header"><strong>Note</strong></li>
                            <li class="collection-item">You are the team leader and you are already included, dont re-enter your email id in team members list</li>
                            <li class="collection-item">The Team members must also register.Then only the Email id of your team members will be displayed in "Email ids of all team members" </li> 
                            <li class="collection-item">The Team members must be of same college</li>   
                        </ul>
                    </div>
                </div>
                {!! Form::model($team, ['url' => route('pages.registerteam', ['event_id' => Route::Input('event_id')])]) !!}
                    @include('teams.partials.form')
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<script>
    $(function(){
        var chips = $(".chips-autocomplete");
        $.ajax({
            url: "{{ route('users.college_mate', ['user_id' => Auth::user()->id]) }}",
            method: 'get',
            success: function(res){
                var suggestions = {};
                $.each(res, function(index, val){
                    suggestions[val.email] = null;
                });
                chips.material_chip({
                    placeholder: '+Team Members',
                    data: loadChips(),
                    autocompleteOptions:{
                        data: suggestions,
                        limit: Infinity,
                        minLength: 1
                    }
                });
            },
            error: function(){
                Materialize.toast('Sorry! something went wrong please try again')
            }
        });
        // Update team members in the hidden field
        function updateTeamMembers(evt, chip){
            var data = chips.material_chip('data');
            var tags = [];
            $.each(data, function(index, val){
                tags.push(val.tag);
            });
            $("#team-members").val(tags.join(','));
        }
        function loadChips(){
            var teamMembers = $("#team-members").val().split(',');
            var initialChips  = [];
            $.each(teamMembers, function(index, val){
                if(val != ""){
                    var chip = { 'tag': val }
                    initialChips.push(chip);
                }
            });
            return initialChips;
        }
        // Update team members hidden field on changes to chips
        chips.on('chip.add', updateTeamMembers);
        chips.on('chip.delete', updateTeamMembers);        
    });
</script>

@endsection