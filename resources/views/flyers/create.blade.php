@extends('layout')

@section('content')
    <h1>Nuevo flyer</h1>
    <hr>
    <div class="row">
        <form method="POST" action="/flyers" enctype="multipart/form-data" class="col-md-6">
            @include('flyers.partials.form')
            <hr>
            <div class="form-group">
                <button type="submit" name="save" id="save" class="btn btn-primary">Create flyer</button>
            </div>
        </form>
    </div>
@stop