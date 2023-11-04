@extends('dashboard');

@section('content')

<div class="mb-3">
    <div> <h2 class="h4" >Форма добавление нового контрагента</h2> </div>
    <form>
        <input type="text" placeholder="Наименование"/>
        <input type="number" placeholder="ИНН"/>
        <input type="text" placeholder="Адресс"/>
        <input type="phone" placeholder="Телефон"/>
        <input type="email" placeholder="Email"/>
        
    </form>
    <button type="button" class="btn btn-info">Записать</button>
</div>

@endsection