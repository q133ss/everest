@extends('layouts.admin')
@section('title', 'Создать новость')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.news.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Изображение</label>
                    <input type="file" name="img" class="form-control" id="inputEmail4">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail5" class="col-form-label">Название</label>
                    <input type="text" name="title" class="form-control" id="inputEmail5">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail6" class="col-form-label">Краткое описание</label>
                    <input type="text" name="excerpt" class="form-control" id="inputEmail6">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail6" class="col-form-label">Текст</label>
                    <textarea name="text" class="form-control" cols="30" rows="10"></textarea>
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Баннер</label>
                    <input type="file" name="banner" class="form-control" id="inputEmail4">
                </div>

                <div class="form-group col-md-6">
                <button type="submit" class="btn btn-success">Создать</button>
                </div>
            </form>
        </div>
    </div>
@endsection
