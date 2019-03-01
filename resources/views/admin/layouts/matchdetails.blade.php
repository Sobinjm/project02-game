@extends('admin.layouts.app')
@section('contant')
@if(session()->get('username')==="admin"))  
@include('admin.inc.matchdetails');

    
@else
@include('admin.inc.loginheader')
    @include('admin.inc.adminlogin')

@endif
@endsection