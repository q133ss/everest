@extends('layouts.admin')
@section('title', 'Изменить вакансию')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.vacancy.update', $vacancy->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Название</label>
                    <input required type="text" name="title" class="form-control" value="{{$vacancy->title}}" id="inputEmail4">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Краткое описание</label>
                    <input required type="text" name="excerpt" class="form-control" value="{{$vacancy->excerpt}}" id="inputEmail4">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail5" class="col-form-label">Описание</label>
                    <textarea required name="description" class="form-control" id="" cols="30" rows="10">{{$vacancy->text}}</textarea>
                </div>

                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-success">Изменить</button>
                </div>
            </form>
        </div>
    </div>
@endsection
