@extends('layouts.default')

@section('page_title', 'DC Comics - Add novel')

@section('main_content')
<div class="container" style="height: calc(100vh - 176px)">
    <ul class="list-unstyled mt-5">
        <li><h5>{{$novel->title}}</h5></li>
        <li>Price: {{$novel->price}}$</li>
        <li>Type:{{$novel->type}}</li>
        <li>Series:{{$novel->series}}</li>
        <li>Description: {{$novel->description}}</li>
        <li>Sale date: {{$novel->saleDate}}</li>
    </ul>
</div>
@endsection