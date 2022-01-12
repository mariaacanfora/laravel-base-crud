@extends('layouts.default')

@section('page_title', 'DC Comics - Add novel')

@section('main_content')
<div class="container" style="height: calc(100vh - 176px)">
    <form action="{{route('novels.store')}}" method="post">
        @csrf
        <div class="text-start mt-5">
            <div class="mb-3">
                <label for="field_title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="field_title">
            </div>
            
            <div class="mb-3">
                <label for="field_price" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" id="field_price">
            </div>

            <div class="mb-3">
                <label for="field_thumb" class="form-label">Poster</label>
                <input type="url" class="form-control" name="thumb" id="field_thumb">
            </div>
            
            <div class="mb-3">
                <label for="field_series" class="form-label">Series:</label>
                <input type="text" class="form-control" name="series" id="field_series">
            </div>

            <div class="mb-3">
                <label for="field_sales" class="form-label">Sale date:</label>
                <input type="date" class="form-control" name="saleDate" id="field_sales">
            </div>
    
            <div class="mb-3">
                <label for="field_type" class="form-label">Tipologia</label>
                <input type="text" class="form-control" name="type" id="field_type">
            </div>
            
            <div class="mb-3">
                <label for="field_description" class="form-label">Description</label>
                <input type="text" class="form-control" name="description" id="field_description">
            </div>

            

            <button class="btn btn-primary" type="submit">Aggiungi</button>
        </div>
    </form>
</div>
@endsection