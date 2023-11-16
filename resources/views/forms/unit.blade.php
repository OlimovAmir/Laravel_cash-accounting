@extends('dashboard');

@section('content')
<form action="/save-unit" method="POST">
    @csrf
    <div class="wrapper">
        <div class="add">
            <div>
                <h2>Добавить новое единицы измерения</h2>
                <div class="row">
                    <div class="col-3 mb-2">
                        <input type="text" name="unit" placeholder="ед. изм.">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-info">Добавить</button>
        </div>
        <div class="list">
            <h1 class="titleListUnit" >Наименование  из таблицы</h1>
            <ul>
                @foreach($data as $item)
                <p></p>
                <span>{{ $item->id }} ) {{ $item->name }}</span>
                @endforeach
            </ul>
        </div>
    </div>

</form>
@if(session('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif
@endsection