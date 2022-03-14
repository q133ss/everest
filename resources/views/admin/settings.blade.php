@extends('layouts.admin')
@section('title', 'Настройки')
@section('content')
    <form action="{{route('admin.settings.save')}}" method="POST">
        @csrf
        <h3>Общие настройки</h3>

        <div class="form-group row">
            <label class="col-2 col-form-label">Email администратора</label>
            <div class="col-10">
                <input type="email" class="form-control" name="email" value="{{$email}}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-2 col-form-label">Телефон 1</label>
            <div class="col-10">
                <input type="text" placeholder="+7 921 33 33 840" class="form-control" name="header_phone" value="{{$header_phone}}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-2 col-form-label">Телефон 2</label>
            <div class="col-10">
                <input type="text" class="form-control" placeholder="+7 921 33 33 840" name="phone2" value="{{$phone2}}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-2 col-form-label">Адрес в футоре</label>
            <div class="col-10">
                <input type="text" class="form-control" placeholder="Пр. Ветеранов, д. 169, к. 4 ТК «Солнечный» 3 этаж" name="footer_adr" value="{{$phone2}}">
            </div>
        </div>


        <div class="form-group row">
            <label class="col-2 col-form-label">Instagram</label>
            <div class="col-10">
                <input type="text" class="form-control" placeholder="https://instagram.com/123" name="inst" value="{{$inst}}">
            </div>
        </div>


        <div class="form-group row">
            <label class="col-2 col-form-label">VK</label>
            <div class="col-10">
                <input type="text" class="form-control" placeholder="https://vk.com/123" name="vk" value="{{$vk}}">
            </div>
        </div>


        <hr>
        <h3>Контакты</h3>

        <div class="form-group row">
            <label class="col-2 col-form-label">Email</label>
            <div class="col-10">
                <input type="email" placeholder="" class="form-control" name="cont_email" value="{{$cont_email}}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-2 col-form-label">Адрес</label>
            <div class="col-10">
                <input type="text" placeholder="Пр. Ветеранов, д. 169, к. 4 ТК «Солнечный» 3 этаж" class="form-control" name="cont_adr" value="{{$cont_adr}}">
            </div>
        </div>

        <div class="form-group row">
            <label class="col-2 col-form-label">График работы</label>
            <div class="col-10">
                <input type="text" placeholder="Пн-Пт: 7:00 - 23:00" class="form-control" name="cont_gr" value="{{$cont_gr}}">
            </div>
        </div>




        <button type="submit" class="btn btn-success">Сохранить</button>
    </form>
@endsection
