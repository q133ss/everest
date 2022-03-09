@extends('layouts.admin')
@section('title', 'Изменить неделю')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.week.update', $week->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Дата</label>
                    <input type="text" name="date" value="{{$week->date}}" placeholder="07 февраля - 14 февраля" class="form-control" id="inputEmail4">
                </div>
                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-success">Изменить</button>
                </div>
            </form>
        </div>
    </div>
@endsection
