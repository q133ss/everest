@extends('layouts.admin')
@section('title', 'Добавить тренера')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.trainer.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Имя</label>
                    <input type="text" name="name" class="form-control" id="inputEmail4">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Фото</label>
                    <input type="file" name="photo" class="form-control" id="inputEmail4">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail5" class="col-form-label">Описание</label>
                    <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail6" class="col-form-label">Стаж</label>
                    <input type="text" name="stage" class="form-control" id="inputEmail6">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail6" class="col-form-label">Направления</label>
                    <input type="text" name="directions" class="form-control">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Достижения</label>
                    <textarea class="form-control" name="achievements" id="" cols="30" rows="10"></textarea>
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail6" class="col-form-label">Возрастная категория</label>
                    <input type="text" name="age_category" class="form-control">
                </div>

                <div class="form-group col-md-6">
                    <label for="section" class="col-form-label">Секция</label>
                    <select name="section_id" id="" class="form-control">
                        @foreach($sections as $section)
                        <option value="{{$section->id}}">{{$section->title}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-6">
                <button type="submit" class="btn btn-success">Создать</button>
                </div>
            </form>
        </div>
    </div>
@endsection
