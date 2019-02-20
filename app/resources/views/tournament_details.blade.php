@extends('layouts.app')

@section('content')
    @include('inc.banner')

     @include('inc.single-page-banner')

   <div class="container youplay-store">
@include('inc.description')   	
@include('inc.detail-sidebar')



</div>

    @include('inc.footer')
@endsection