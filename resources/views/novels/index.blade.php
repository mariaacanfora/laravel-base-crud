@extends('layouts.default')

@section('page_title', 'DC Comics - Homepage')

@section('main_content')
<div class="container" style="height: calc(100vh - 176px)">
    <a class="btn btn-primary text-light my-5" href="{{ route('novels.create') }}">Aggiungi un fumetto</a>

    <div class="text-start">
        <h3 class="mb-3">
            Titoli già presenti
        </h3>

        @foreach($novels as $novel)
            <div class="card d-inline-block me-4" style="width: 18rem;">
                <img src="{{$novel->thumb}}" class="card-img-top" style="max-height: 200px" alt="novel's thumb">
                <div class="card-body">
                    <h5 class="card-title">{{$novel->title}}</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Type: {{$novel->type}}</li>
                </ul>
                <div class="card-body">
                    <a href="{{route('novels.show', $novel->id)}}" class="card-link">Visualizza di più</a>
                    <a href="{{route('novels.edit', $novel->id)}}" class="card-link">Modifica</a>
                </div>
            </div>
        @endforeach

    </div>

</div>
@endsection
