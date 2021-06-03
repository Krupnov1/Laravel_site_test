@extends('layouts.main')
@section('title') отзывы @parent @stop
@section('content')
    <div class="col-md-6 container text-verticals"> 
        <br>
        <h1 class="h2">Форма обратной связи</h1>
        <div class="/*btn-toolbar mb-2 mb-md-0*/">
            <form method="POST" action="{{ route('reviews.store') }}">
                @csrf
                <div class="farm-group">
                    <label for="title">Имя *</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
                </div>
                <br>
                <div class="farm-group">
                    <label for="description">Комментарий/отзыв *</label>
                    <textarea class="form-control" name="description" id="description">{!! old('description') !!}</textarea>
                </div>
                <br>
                <button class="btn btn-success" type="submit">Отправить отзыв</button>
            </form>
        </div>
    </div>
@endsection