@extends('layouts.admin')
@section('title', 'Новости')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                {{--                <h4 class="m-t-0 header-title">Категории секций</h4>--}}
                <a href="{{route('admin.news.create')}}" class="btn btn-success mb-3">Добавить</a>
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
                    @foreach($news as $post)
                        <tr>
                            <th scope="row">{{$post->id}}</th>
                            <td><img src="{{$post->img}}" width="100px" alt=""></td>
                            <td>{{$post->title}}</td>
                            <td>
                                <a href="{{route('admin.news.edit', $post->id)}}" class="btn btn-info">Изменить</a>
                            </td>
                            <td>
                                <form action="{{route('admin.news.destroy', $post->id)}}" method="POST">
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
