@extends('layouts.admin')
@section('title', 'Добавить категорию секции')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.section_cat.update', $cat->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="inputText3" class="col-form-label">Название</label>
                    <input id="inputText3" name="name" type="text" value="{{$cat->name}}" class="form-control" placeholder="Единоборства">
                </div>

                <div class="custom-file mb-3">
                    <input type="file" name="img" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Выберите фото</label>
                </div>
                <label for="">Текущее:</label> <br>
                <img src="{{$cat->img}}" alt="">
                <br>
                <button type="submit" class="btn mt-3 btn-success">Создать</button>
            </form>
        </div>
    </div>
@endsection
