@extends('layouts.admin')
@section('title', 'Вакансии')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                {{--                <h4 class="m-t-0 header-title">Категории секций</h4>--}}
                <a href="{{route('admin.vacancy.create')}}" class="btn btn-success mb-3">Добавить</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Название</th>
                        <th style="width: 40px;">Изменить</th>
                        <th style="width: 20px;">Удалить</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($vacancies as $vacancy)
                        <tr>
                            <th scope="row">{{$vacancy->id}}</th>
                            <td>{{$vacancy->title}}</td>
                            <td>
                                <a href="{{route('admin.vacancy.edit', $vacancy->id)}}" class="btn btn-info">Изменить</a>
                            </td>
                            <td>
                                <form action="{{route('admin.vacancy.destroy', $vacancy->id)}}" method="POST">
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
