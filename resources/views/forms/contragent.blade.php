@extends('dashboard');

@section('content')

<div class="mb-3">
    <div class="titleContragent"> Форма добавление нового контрагента </div>
    <form action="/save-contragent" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Наименование" />
        <input type="number" name="inn" placeholder="ИНН" />
        <input type="text" name="adress" placeholder="Адресс" />
        <input type="phone" name="phone" placeholder="Телефон" />
        <input type="email" name="email" placeholder="Email" />
        <button type="submit" class="btn btn-info">Записать</button>
    </form>
    

</div>
@if(session('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif
@endsection