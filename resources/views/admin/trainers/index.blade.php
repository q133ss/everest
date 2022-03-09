@extends('layouts.admin')
@section('title', 'Тренеры')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                {{--                <h4 class="m-t-0 header-title">Категории секций</h4>--}}
                <a href="{{route('admin.trainer.create')}}" class="btn btn-success mb-3">Добавить</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Фото</th>
                        <th>Имя</th>
                        <th>Секция</th>
                        <th style="width: 40px;">Изменить</th>
                        <th style="width: 20px;">Удалить</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($trainers as $trainer)
                        <tr>
                            <th scope="row">{{$trainer->id}}</th>
                            <td><img src="{{$trainer->photo}}" width="100px" alt=""></td>
                            <td>{{$trainer->name}}</td>
                            <td>{{$trainer->section->title}}</td>
                            <td>
                                <a href="{{route('admin.trainer.edit', $trainer->id)}}" class="btn btn-info">Изменить</a>
                            </td>
                            <td>
                                <form action="{{route('admin.trainer.destroy', $trainer->id)}}" method="POST">
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
