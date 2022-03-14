@extends('layouts.admin')
@section('title', 'Настройки учетной записи')
@section('content')
    <form action="{{route('admin.settings.account.save')}}" method="POST">
        @csrf
        <div class="form-group row">
            <label class="col-2 col-form-label">Email</label>
            <div class="col-10">
                <input type="email" class="form-control" name="email" value="{{$email}}">
            </div>
        </div>

        <h5>Сменить пароль</h5>
        <hr>
        <div class="form-group row">
            <label class="col-2 col-form-label">Пароль</label>
            <div class="col-10">
                <input type="password" class="form-control" name="password" value="">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-2 col-form-label">Пароль еще раз</label>
            <div class="col-10">
                <input type="password" class="form-control" name="password2" value="">
            </div>
        </div>

        <button type="submit" class="btn btn-success">Сохранить</button>
    </form>
@endsection
