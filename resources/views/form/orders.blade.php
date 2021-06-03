@extends('layouts.main')
@section('title') заказы @parent @stop
@section('content')
    <div class="col-md-6 container text-verticals"> 
        <br>
        <h1 class="h2">Заказ на получение выгрузки данных</h1>
        <div class="/*btn-toolbar mb-2 mb-md-0*/">
            <form method="POST" action="{{ route('orders.store') }}">
                @csrf
                <div class="farm-group">
                    <label for="title">Имя *</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
                </div>
                <br>
                <div class="farm-group">
                    <label for="tel">Номер телефона *</label>
                    <input type="tel" class="form-control" name="phone" id="phone" value="{{ old('tel') }}">
                </div>
                <br>
                <div class="farm-group">
                    <label for="email">Email - адрес *</label>
                    <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}">
                </div>
                <br>
                <div class="farm-group">
                    <label for="description">Что Вы хотите получить? *</label>
                    <textarea class="form-control" name="description" id="description">{!! old('description') !!}</textarea>
                </div>
                <br>
                <button class="btn btn-success" type="submit">Отправить заказ</button>
            </form>
        </div>
    </div>
@endsection