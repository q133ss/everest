@extends('layouts.admin')
@section('title', 'Добавить занятие')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.occup.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Время проведения</label>
                    <input type="text" name="time" placeholder="12:00 - 14:00" class="form-control" id="inputEmail4">
                </div>

                <input type="hidden" name="section_id" value="1">

                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Направление</label>
                    <select name="direction_id" id="">
                        @foreach($directions as $key => $direction)
                            <option value="{{$key}}">{{$direction}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Тренер</label>
                    <select name="trainer_id" id="">
                        <option value="0" selected>Отсутсвует</option>
                        @foreach($trainers as $trainer)
                            <option value="{{$trainer->id}}">{{$trainer->name}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Неделя</label>
                    <select name="week_id" id="">
                        @foreach($weeks as $week)
                            <option value="{{$week->id}}">{{$week->date}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">День</label>
                    <select name="day_id" id="">
                        @foreach($days as $day)
                            <option value="{{$day->id}}">{{$day->day}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Время</label>
                    <select name="time_id" id="">
                        @foreach($times as $time)
                            <option value="{{$time->id}}">{{$time->time}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group col-md-6">
                <button type="submit" class="btn btn-success">Создать</button>
                </div>
            </form>
        </div>
    </div>
@endsection
