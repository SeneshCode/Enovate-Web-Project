@extends('Layouts.layout1')

@section('content')
    @include('components.hero')
@endsection

@section('content2')
    @include('components.about')
    @include('components.service')
    @include('components.team')
    @include('components.contact')
@endsection
