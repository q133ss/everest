@extends('layouts.admin')
@section('title', 'Добавить вакансию')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.vacancy.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Название</label>
                    <input required type="text" name="title" class="form-control" id="inputEmail4">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Краткое описание</label>
                    <input required type="text" name="excerpt" class="form-control" id="inputEmail4">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail5" class="col-form-label">Описание</label>
                    <textarea required name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                </div>

                <div class="form-group col-md-6">
                <button type="submit" class="btn btn-success">Создать</button>
                </div>
            </form>
        </div>
    </div>
@endsection
