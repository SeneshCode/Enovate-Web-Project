@extends('Layouts.layout2')

@section('content')
    @include('components.path')
@endsection

@section('content2')
    @include('components.article')
    @include('components.blogAuthor')
    @include('components.comments')
@endsection
