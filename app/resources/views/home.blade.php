@extends('layouts.app')

@section('content')
    @include('inc.banner')

  



     @include('inc.popular')

     @include('inc.special')

    @include('inc.match_countdown')
    <!-- /Preorder -->


     @include('inc.home-list-event')


     @include('inc.partners')


    @include('inc.features')

    @include('inc.footer')
@endsection