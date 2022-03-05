@extends('layouts.admin')
@section('title', 'Заявки')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card-box">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Имя</th>
                        <th>Телефон</th>
                        <th style="width: 40px;">Просмотр</th>
                        <th style="width: 20px;">Удалить</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <th scope="row">{{$order->id}}</th>
                            <td>{{$order->name}}</td>
                            <td>{{$order->phone}}</td>
                            <td>
                                <a href="{{route('admin.orders.show', $order->id)}}" class="btn btn-info">Просмотр</a>
                            </td>
                            <td>
                                <form action="{{route('admin.news.destroy', $order->id)}}" method="POST">
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
