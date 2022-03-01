@extends('layouts.admin')
@section('title', 'Категории секций')
@section('content')
    <a href="{{route('admin.section_cat.create')}}" class="btn btn-success">Добавить</a>
    <div class="card-body">
        <div class="table-responsive ">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Изображение</th>
                    <th scope="col">Название</th>
                    <th scope="col" style="width: 40px;"></th>
                    <th scope="col" style="width: 10px;"></th>
                </tr>
                </thead>
                <tbody>
                @foreach($categories as $cat)
                <tr>
                    <th scope="row">{{$cat->id}}</th>
                    <td>
                        <img src="{{$cat->img}}" width="100px" alt="">
                    </td>
                    <td>
                        {{$cat->name}}
                    </td>
                    <td>
                        <a href="{{route('admin.section_cat.edit', $cat->id)}}" class="btn btn-warning">Изменить</a>
                    </td>
                    <td>
                        <form action="{{route('admin.section_cat.destroy', $cat->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                        <button class="btn btn-dark delete-btn">
                            <i class="fa fa-trash"></i>
                        </button>
                        </form>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
