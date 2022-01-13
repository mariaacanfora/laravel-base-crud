@extends('layouts.default')

@section('page_title', "DC Comics - Novel's details")

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
    
    <a class="btn btn-success" href="{{route('novels.index', $novel->id)}}">Torna ai fumetti</a>

    <a class="btn btn-primary" href="{{route('novels.edit', $novel->id)}}">Modifica</a>

    <form action="{{route('novels.destroy', $novel->id)}}" method="POST" class="d-inline-block">
        @csrf
        @method('delete')
        <button class="btn btn-danger" type="submit">Elimina</button>
    </form>


</div>
@endsection