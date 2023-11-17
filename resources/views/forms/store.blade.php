@extends('dashboard');

@section('content')
<form action="/save-store" method="POST">
    @csrf
    <div class="wrapper">
        <div class="add">
            <div>
                <h2>Добавить новый склад</h2>
                <div class="row">
                    <div class="col-3 mb-2">
                        <input type="number" name="number" placeholder="номер склада">
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-3 mb-2">
                        <input type="text" name="name" placeholder="Название склада">
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-info">Добавить</button>
        </div>
    </div>
    <div class="list">
            <h1 class="titleListUnit" >Наименование  из таблицы</h1>
            <ul class="wrapperListUnit">
                
                    @foreach($dataStore as $item)
                    <div class="listUnit">
                        <span>{{ $item->id }} ) {{ $item->name }}</span>
                    </div>
                
               
                
                @endforeach
            </ul>
        </div>

</form>
@if(session('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif
@endsection