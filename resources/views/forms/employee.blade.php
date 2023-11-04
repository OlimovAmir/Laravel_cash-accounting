@extends('dashboard');

@section('content')

<div class="mb-3">
    <div> <h2 class="h4" >Форма добавление нового сотрудника</h2> </div>
    <form>
        <input type="text" placeholder="Имя"/>
        <input type="text" placeholder="Должность"/>
        
    </form>
    <button type="button" class="btn btn-info">Записать</button>
</div>

@endsection