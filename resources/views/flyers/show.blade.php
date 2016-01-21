@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-4">
        <h1>{{ $flyer->street }}</h1>
        <h2>$ {{ number_format($flyer->price) }}</h2>
        <hr>
        <div class="description">{!! nl2br($flyer->description) !!}</div>
    </div>
    <div class="col-md-8">
        @foreach ($flyer->photos as $photo)
            <img src="/{{ $photo->path }}" alt="">
        @endforeach
    </div>
</div>
<hr>
<h2>Add Photos</h2>
<form   id="formAddPhoto"
        action="{{ route('store_flyer_photo', [$flyer->zip, $flyer->street]) }}"
        method="POST"
        class="dropzone">
    {{ csrf_field() }}
</form>
@stop

@section('scripts.footer')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/dropzone.js"></script>
    <script>
    Dropzone.options.formAddPhoto = {
        paramName: 'photo',
        acceptedFiles: '.jpg, jpeg, .png, .bpm'
    }
    </script>
@stop