@extends('layouts.app')

@section('content')
@if(auth::user()->status==="1")
    @include('inc.profile')
@else
    @include('inc.profile_edit')
@endif
@include('inc.footer')
@endsection
