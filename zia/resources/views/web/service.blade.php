@extends('layouts.web')
@section('innerstyle')

@endsection
@section('content')
    <x-web.inner-header/>
    <x-web.service :services="$service"/>
    <x-web.counter/>
    <x-web.cta/>
@endsection
@section('innerjs')

@endsection
