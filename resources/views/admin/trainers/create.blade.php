@extends('layouts.admin')
@section('title', 'Добавить тренера')
@section('meta')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
@endsection
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
                    <label for="inputEmail6" class="col-form-label">Образование</label>
                    <input type="text" name="education" class="form-control">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail6" class="col-form-label">Квалификация</label>
                    <input type="text" name="qua" class="form-control">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail6" class="col-form-label">Стаж</label>
                    <input type="text" name="stage" class="form-control" id="inputEmail6">
                </div>


                <div class="form-group col-md-6">
                    <label for="inputEmail6" class="col-form-label">Возрастная категория</label>
                    <input type="text" name="age_category" class="form-control">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail6" class="col-form-label">Основые направления</label>
                    <input type="text" name="directions" class="form-control">
                </div>

{{--                <div class="form-group col-md-6">--}}
{{--                    <label for="inputEmail5" class="col-form-label">Описание</label>--}}
{{--                    <textarea name="description" class="form-control" id="editor" cols="30" rows="20"></textarea>--}}
{{--                </div>--}}

                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Достижения</label>
                    <textarea class="form-control" name="achievements" id="editor1" cols="30" rows="20"></textarea>
                </div>

{{--                <div class="form-group col-md-6">--}}
{{--                    <label for="section" class="col-form-label">Секция</label>--}}
{{--                    <select name="section_id" id="" class="form-control">--}}
{{--                        @foreach($sections as $section)--}}
{{--                        <option value="{{$section->id}}">{{$section->title}}</option>--}}
{{--                        @endforeach--}}
{{--                    </select>--}}
{{--                </div>--}}

                <input type="hidden" name="section_id" value="1">

                <div class="form-group col-md-6">
                <button type="submit" class="btn btn-success">Создать</button>
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
