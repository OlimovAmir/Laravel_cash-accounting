@extends('dashboard');

@section('content')
<form action="" method="POST">
    @csrf
    <div>
        <h2>Добавить новое единица измерения</h2>
        <div class="row">
            <div class="col-3 mb-2">
                <input type="text" name="unit" placeholder="ед. изм.">
            </div>
            
        </div>
    </div>
    <button type="submit" class="btn btn-info">Добавить</button>
</form>
@endsection