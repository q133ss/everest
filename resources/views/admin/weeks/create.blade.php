@extends('layouts.admin')
@section('title', 'Добавить неделю')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.week.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Дата</label>
                    <input type="text" name="date" placeholder="07 февраля - 14 февраля" class="form-control" id="inputEmail4">
                </div>

                <div class="form-group col-md-6">
                <button type="submit" class="btn btn-success">Создать</button>
                </div>
            </form>
        </div>
    </div>
@endsection
