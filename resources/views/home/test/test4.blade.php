<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test3</title>
<link rel="stylesheet" href="{{asset('css')}}/app.css">
</head>
<body>
    <table class="table">
        <tr>
            <th>id</th>
            <th>m_name</th>
            <th>age</th>
            <th>email</th>
        </tr>
        @foreach ($data as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->m_name}}</td>
            <td>{{$item->age}}</td>
            <td>{{$item->email}}</td>
        </tr>
    @endforeach
    </table>
    
    星期{{date('N')}}
</body>
</html>