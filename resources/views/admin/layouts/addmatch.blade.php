@extends('admin.layouts.app')
@section('contant')
@if(session()->get('username')==="admin"))  
@include('admin.inc.header')
@include('admin.inc.sidebar')
@include('admin.inc.weeklymatch')    
@else
@include('admin.inc.loginheader')
    @include('admin.inc.adminlogin')

@endif
@endsection