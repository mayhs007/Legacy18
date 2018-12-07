@extends('layouts.admin')

@section('content')
@include('pages.admin.partials.search_bar')
@if(!$college_count > 0)
     No result2
@else
     
@endif
@endsection