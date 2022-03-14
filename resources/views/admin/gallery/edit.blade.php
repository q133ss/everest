@extends('layouts.admin')
@section('title', 'Изменить вакансию')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.gallery.update', $gallery->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Фото</label>
                    <input required type="file" name="img" class="form-control" id="inputEmail4">
                </div>

                <label for="" class="col-form-label">Текущее:</label><br>
                <img src="{{$gallery->src}}" alt="">

                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-success">Изменить</button>
                </div>
            </form>
        </div>
    </div>
@endsection
