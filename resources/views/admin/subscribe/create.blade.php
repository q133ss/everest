@extends('layouts.admin')
@section('title', 'Добавить абонемент')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.subscribe.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Название</label>
                    <input type="text" name="title" placeholder="Тренажёрный зал" class="form-control" id="inputEmail4">
                </div>

                <div class="form-group col-md-6">
                    <label class="col-form-label">Цены</label>
                    <div id="p-wrap">
                        <div class="d-flex">
                            <input type="text" name="price_title[]" class="form-control" placeholder="Название">
                            <input type="text" name="price_price[]" class="form-control w-25" placeholder="Цена">
                        </div>
                    </div>
                    <button type="button" class="btn btn-info mt-1" onclick="create_new();">+</button>
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Описание</label>
                    <textarea name="description" class="form-control" cols="30" rows="10"></textarea>
                </div>

                <div class="form-group col-md-6">
                <button type="submit" class="btn btn-success">Создать</button>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('js')
    <script>
        let count = 1;
        function create_new(){
            count++;
            $('#p-wrap').append('<div class="d-flex" id="block_'+count+'"> <input type="text" name="price_title[]" class="form-control" placeholder="Название"> <input type="text" name="price_price[]" class="form-control w-25" placeholder="Цена"> <button class="btn btn-dark" type="button" onclick="remove('+count+')">-</button></div>');
        }

        function remove(count){
            $('#block_'+count).remove();
        }
    </script>
@endsection
