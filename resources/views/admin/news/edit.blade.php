@extends('layouts.admin')
@section('title', 'Изменить новость')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.news.update', $post->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Изображение</label>
                    <input type="file" name="img" class="form-control" id="inputEmail4">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Текущее</label>
                    <img width="100%" src="{{$post->img}}" alt="">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail5" class="col-form-label">Название</label>
                    <input type="text" value="{{$post->title}}" name="title" class="form-control" id="inputEmail5">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail6" class="col-form-label">Краткое описание</label>
                    <input type="text" name="excerpt" value="{{$post->excerpt}}" class="form-control" id="inputEmail6">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail6" class="col-form-label">Текст</label>
                    <textarea name="text" class="form-control" cols="30" rows="10">{{$post->text}}</textarea>
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Баннер</label>
                    <input type="file" name="banner" class="form-control" id="inputEmail4">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Текущий</label>
                    <img width="100%" src="{{$post->banner}}" alt="">
                </div>

                <div class="form-group col-md-6">
                <button type="submit" class="btn btn-success">Обновить</button>
                </div>
            </form>
        </div>
    </div>
@endsection
