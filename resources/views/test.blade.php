<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table class="table">
    <thead>
    <tr>
        <th></th>
        @foreach($days as $day)
            <th>{{$day->day}}</th>
        @endforeach
    </tr>
    </thead>
    <tbody>
    @foreach($times as $time)
    <tr>
        <th scope="row">
            {{$time->time}}
        </th>
        @foreach($days as $day)
            @php
            $oc = App\Models\Occupation::where('day_id', $day->id)->where('time_id', $time->id)->first();
            @endphp
        @if($oc != NULL)
        <td>{{$oc->time_spending}}</td>
        @else
            <td>NULL</td>
        @endif
        @endforeach
    </tr>
    @endforeach

    </tbody>
</table>
</body>
</html>
