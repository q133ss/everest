@extends('layouts.admin')
@section('title', 'Изменить категорию секции')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.section.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Изображение</label>
                    <input type="file" name="img" class="form-control" id="inputEmail4">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Категория</label>
                    <select name="category" class="form-control">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
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
                    <label for="inputEmail6" class="col-form-label">Полное описание</label>
                    <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
                </div>


                <div class="form-group col-md-6">
                    <label for="inputEmail6" class="col-form-label">Баннер</label>
                    <input name="banner" class="form-control" type="file">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail6" class="col-form-label">Цвет для календаря <small><a href="https://g.co/kgs/ebi2SP" target="_blank">Цвета</a></small> </label>
                    <input name="color" class="form-control" placeholder="#f02e46" type="text">
                </div>

                <div class="form-group col-md-6">
                <button type="submit" class="btn btn-success">Создать</button>
                </div>
            </form>
        </div>
    </div>
@endsection
