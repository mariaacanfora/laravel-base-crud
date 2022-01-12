@extends('layouts.default')

@section('page_title', 'DC Comics - Add novel')

@section('main_content')
<div class="container" style="height: calc(100vh - 176px)">
    <form action="{{route('index')}}" method="post">
        @csrf
        <div class="text-start mt-5">
            <div class="mb-3">
                <label for="field_title" class="form-label">Titolo</label>
                <input type="text" class="form-control {{ $errors->has("name") ? 'is-invalid' : '' }}" name="name" id="field_title">
            </div>
    
            <div class="mb-3">
                <label for="field_price" class="form-label">Prezzo</label>
                <input type="text" class="form-control {{ $errors->has("name") ? 'is-invalid' : '' }}" name="name" id="field_price">
            </div>
    
            <div class="mb-3">
                <label for="field_type" class="form-label">Tipologia</label>
                <input type="text" class="form-control {{ $errors->has("name") ? 'is-invalid' : '' }}" name="name" id="field_type">
            </div>

            <input type="submit" value="Submit">
        </div>
    </form>
</div>
@endsection