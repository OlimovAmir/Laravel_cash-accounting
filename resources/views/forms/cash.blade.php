@extends('dashboard');

@section('content')
<div class="mb-3">
    <h2>Приходный кассовый ордер</h2>
    <div class="row">
        <div class="col-3 mb-2">
            <input type="number" placeholder="Номер документа">
        </div>
        <div class="col-3">

        </div>
        <div class="col-3">
            <input type="date">
        </div>
    </div>
</div>
<div class="row mb-2">
    <div class="col-6">
        <input type="text" placeholder="От кого" style="width: 80%">
    </div>
   
</div>
<div class="row mb-2">
    <div class="col-6">
        <input type="text" placeholder="Основание" style="width: 80%">
    </div>
    <div class="col-6">
        <span> Статья дохода </span> 
        <select>
            <option value="">Контрагенты</option>
            <option value="">Подотчетники</option>
            <option value="">Прочие</option>
        </select>
    </div>
</div>
<div class="row mb-2">
    <div class="col-6 ">
        <input type="text" placeholder="Документ" style="width: 80%">
    </div>
   
</div>
<button type="button" class="btn btn-info">Провести</button>
@endsection