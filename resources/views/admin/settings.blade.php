@extends('layouts.admin')
@section('title', 'Настройки')
@section('content')
    <form action="{{route('admin.settings.save')}}" method="POST">
        @csrf
        <div class="form-group row">
            <label class="col-2 col-form-label">Email администратора</label>
            <div class="col-10">
                <input type="email" class="form-control" name="email" value="{{$email}}">
            </div>
        </div>
        <button type="submit" class="btn btn-success">Сохранить</button>
    </form>
@endsection
