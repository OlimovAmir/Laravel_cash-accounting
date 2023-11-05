@extends('dashboard');

@section('content')
<form action="/create" method="POST">
    @csrf
    <div class="mb-3">
        <h2>Расходный кассовый ордер</h2>
        <div class="row">
            <div class="col-3 mb-2">
                <input type="number" name="number" placeholder="Номер документа">
            </div>
            <div class="col-3">
                <!-- Добавьте атрибут name для других полей -->
            </div>
            <div class="col-3">
                <input type="date" name="date">
            </div>
            <div class="col-3">
                <input type="number" name="summ" placeholder="Сумма расхода">
            </div>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-6">
            <input type="text" name="to_whom" placeholder="Кому" style="width: 80%">
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-6">
            <input type="text" name="document" placeholder="Основание" style="width: 80%">
        </div>
        <div class="col-6">
            <span> Статья расходов </span>
            <select name="item_of_expenditure_id">
                <option value="">Контрагенты</option>
                <option value="">Зарплата</option>
                <option value="">Налоги</option>
            </select>
        </div>
    </div>
    <div class="row mb-2">
        <div class="col-6 ">
            <input type="text" name="other_field" placeholder="Документ" style="width: 80%">
        </div>
    </div>
    <button type="submit" class="btn btn-info">Провести</button>
</form>


@endsection