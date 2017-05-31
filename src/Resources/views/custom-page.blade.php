@extends('base::layouts.main', ['title' => $page->getName()])

@section('title')
    <h3>{{ $page->getName() }}</h3>
@endsection

@section('content')
    {!! $page->getValue() !!}
@endsection