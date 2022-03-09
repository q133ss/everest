@extends('layouts.admin')
@section('title', 'Занятия')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                {{--                <h4 class="m-t-0 header-title">Категории секций</h4>--}}
                <a href="{{route('admin.occup.create')}}" class="btn btn-success mb-3">Добавить</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Время проведения</th>
                        <th>Секция</th>
                        <th>Тренер</th>
                        <th style="width: 40px;">Изменить</th>
                        <th style="width: 20px;">Удалить</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($occups as $occup)
                        <tr>
                            <th scope="row">{{$occup->id}}</th>
                            <td>{{$occup->time_spending}}</td>
                            <td>{{$occup->section->title}}</td>
                            <td>{{$occup->trainer->name}}</td>
                            <td>
                                <a href="{{route('admin.occup.edit', $occup->id)}}" class="btn btn-info">Изменить</a>
                            </td>
                            <td>
                                <form action="{{route('admin.occup.destroy', $occup->id)}}" method="POST">
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
