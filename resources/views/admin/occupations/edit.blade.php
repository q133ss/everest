@extends('layouts.admin')
@section('title', 'Изменить занятие')
@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{route('admin.occup.update', $occup->id)}}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Время проведения</label>
                    <input type="text" name="time" value="{{$occup->time_spending}}" placeholder="12:00 - 14:00" class="form-control" id="inputEmail4">
                </div>


                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Секция</label>
                    <select name="section_id" id="">
                        @foreach($sections as $section)
                            <option value="{{$section->id}}" @if($occup->section_id == $section->id) selected @endif>{{$section->title}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Тренер</label>
                    <select name="trainer_id" id="">
                        @foreach($trainers as $trainer)
                            <option value="{{$trainer->id}}" @if($occup->trainer_id == $trainer->id) selected @endif>{{$trainer->name}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Неделя</label>
                    <select name="week_id" id="">
                        @foreach($weeks as $week)
                            <option value="{{$week->id}}" @if($occup->week_id == $week->id) selected @endif>{{$week->date}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">День</label>
                    <select name="day_id" id="">
                        @foreach($days as $day)
                            <option value="{{$day->id}}" @if($occup->day_id == $day->id) selected @endif>{{$day->day}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group col-md-6">
                    <label for="inputEmail4" class="col-form-label">Время</label>
                    <select name="time_id" id="">
                        @foreach($times as $time)
                            <option value="{{$time->id}}" @if($occup->time_id == $time->id) selected @endif>{{$time->time}}</option>
                        @endforeach
                    </select>
                </div>


                <div class="form-group col-md-6">
                    <button type="submit" class="btn btn-success">Обновить</button>
                </div>
            </form>
        </div>
    </div>
@endsection
