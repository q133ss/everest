@extends('layouts.admin')
@section('title', 'Изменить категорию секции')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.section_cat.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Название</label>
                    <input id="inputText3" name="name" type="text" class="form-control" placeholder="Единоборства">
                </div>
                <label class="" for="customFile">Выберите фото</label>
                <div class="custom-file mb-3">
                    <input type="file" name="img" class="form-control" id="customFile">
                </div>
                <button type="submit" class="btn btn-success">Создать</button>
            </form>
        </div>
    </div>
@endsection
