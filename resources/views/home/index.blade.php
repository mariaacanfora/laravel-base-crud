@extends('layouts.default')

@section('page_title', 'DC Comics - Homepage')

@section('main_content')
<div class="container" style="height: calc(100vh - 176px)">
    <a class="btn btn-primary text-light my-5" href="{{ route('novels.index') }}">Vai alla sezione fumetti</a>
</div>
@endsection