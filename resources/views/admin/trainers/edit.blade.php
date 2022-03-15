@extends('layouts.admin')
@section('title', 'Изменить тренера')
@section('meta')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endsection
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.trainer.update', $trainer->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Имя</label>
                    <input type="text" name="name" class="form-control" value="{{$trainer->name}}" id="inputEmail4">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Фото</label>
                    <input type="file" name="photo" class="form-control" id="inputEmail4">
                </div>

                <label for="" class="col-form-label">Текущее:</label> <br>
                <img src="{{$trainer->photo}}" style="max-width: 500px;" width="100%" alt="">

                <div class="form-group col-md-6">
                    <label for="inputEmail6" class="col-form-label">Образование</label>
                    <input type="text" name="education" class="form-control" value="{{$trainer->education}}">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail6" class="col-form-label">Квалификация</label>
                    <input type="text" name="qua" value="{{$trainer->qua}}" class="form-control">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail6" class="col-form-label">Стаж</label>
                    <input type="text" name="stage" value="{{$trainer->stage}}" class="form-control" id="inputEmail6">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail6" class="col-form-label">Возрастная категория</label>
                    <input type="text" name="age_category" value="{{$trainer->age_category}}" class="form-control">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail6" class="col-form-label">Основые направления</label>
                    <input type="text" name="directions" value="{{$trainer->directions}}" class="form-control">
                </div>

{{--                <div class="form-group col-md-6">--}}
{{--                    <label for="inputEmail5" class="col-form-label">Описание</label>--}}
{{--                    <textarea name="description" class="form-control" id="editor" cols="30" rows="20">{{$trainer->description}}</textarea>--}}
{{--                </div>--}}

                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Достижения</label>
                    <textarea class="form-control" name="achievements" id="editor1" cols="30" rows="10">{{$trainer->achievements}}</textarea>
                </div>

{{--                <div class="form-group col-md-6">--}}
{{--                    <label for="section" class="col-form-label">Секция</label>--}}
{{--                    <select name="section_id" id="" class="form-control">--}}
{{--                        @foreach($sections as $section)--}}
{{--                            <option value="{{$section->id}}" @if($section->id == $trainer->section_id) selected @endif>{{$section->title}}</option>--}}
{{--                        @endforeach--}}
{{--                    </select>--}}
{{--                </div>--}}

                <input type="hidden" name="section_id" value="1">

                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-success">Изменить</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('js')
    <script>
        tinymce.init({
            selector: '#editor'
        });

        tinymce.init({
            selector: '#editor1'
        });
    </script>
@endsection
