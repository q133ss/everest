@extends('layouts.admin')
@section('title', 'Категории секций')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
{{--                <h4 class="m-t-0 header-title">Категории секций</h4>--}}
                <a href="{{route('admin.section_cat.create')}}" class="btn btn-success mb-3">Добавить</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Изображение</th>
                        <th>Название</th>
                        <th style="width: 40px;">Изменить</th>
                        <th style="width: 20px;">Удалить</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $cat)
                    <tr>
                        <th scope="row">{{$cat->id}}</th>
                        <td><img src="{{$cat->img}}" width="100px" alt=""></td>
                        <td>{{$cat->name}}</td>
                        <td>
                            <a href="{{route('admin.section_cat.edit', $cat->id)}}" class="btn btn-info">Изменить</a>
                        </td>
                        <td>
                            <form action="{{route('admin.section_cat.destroy', $cat->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                            <button class="btn btn-dark delete-btn"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>

    </div>
@endsection
