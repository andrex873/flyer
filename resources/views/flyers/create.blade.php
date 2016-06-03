@extends('layout')

@section('content')

    <h1>Nuevo flyer</h1>
    <hr>
    <form method="POST" action="/flyers" enctype="multipart/form-data">
        @include('flyers.partials.form')
        <hr>
        <div class="form-group">
            <button type="submit" name="save" id="save" class="btn btn-primary">Create flyer</button>
        </div>
    </form>

@stop