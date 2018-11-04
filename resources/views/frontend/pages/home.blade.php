@extends('frontend.layout')
@section('pages')
<!-- about -->
@include('frontend.block.home.about')
<!-- //about -->
<!-- services -->
@include('frontend.block.home.service')
<!-- //services -->
<!-- work environment -->
@include('frontend.block.home.environment')
<!-- //work environment -->
<!-- project -->
@include('frontend.block.home.project')
<!-- //project -->
<!-- product -->
@include('frontend.block.home.product')
<!-- //product -->
<!-- team -->
@include('frontend.block.home.team')
<!-- //team -->
<!-- customer -->
@include('frontend.block.home.customer')
<!-- //customer -->
<!-- contact -->
@include('frontend.block.home.contact')
<!-- //contact -->
@endsection