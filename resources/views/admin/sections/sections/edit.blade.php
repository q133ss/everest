@extends('layouts.admin')
@section('title', 'Изменить категорию секции')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.section.update', $section->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Изображение</label>
                    <input type="file" name="img" class="form-control" id="inputEmail4">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Категория</label>
                    <select name="category" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{$category->id}}" @if($category->id == $section->category_id) selected @endif>{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Текущее</label>
                    <img width="100%" src="{{$section->img}}" alt="">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail5" class="col-form-label">Название</label>
                    <input type="text" value="{{$section->title}}" name="title" class="form-control" id="inputEmail5">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail6" class="col-form-label">Краткое описание</label>
                    <input type="text" name="excerpt" value="{{$section->excerpt}}" class="form-control" id="inputEmail6">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail6" class="col-form-label">Полное описание</label>
                    <textarea name="description" class="form-control" cols="30" rows="10">{{$section->description}}</textarea>
                </div>


                <div class="form-group col-md-6">
                    <label for="inputEmail6" class="col-form-label">Баннер</label>
                    <input name="banner" class="form-control" type="file">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Текущий</label>
                    <img width="100%" src="{{$section->banner}}" alt="">
                </div>

                <div class="form-group col-md-6">
                <button type="submit" class="btn btn-success">Обновить</button>
                </div>
            </form>
        </div>
    </div>
@endsection
