@extends('layouts.admin')
@section('title', 'Добавить вакансию')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.gallery.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Фото</label>
                    <input required type="file" name="img" class="form-control" id="inputEmail4">
                </div>

                <div class="form-group col-md-6">
                <button type="submit" class="btn btn-success">Создать</button>
                </div>
            </form>
        </div>
    </div>
@endsection
