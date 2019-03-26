<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css')}}/app.css">
</head>

<body>
    <table class="table table-striped">
        <tr>
            <th>id</th>
            <th>名字</th>
            <th>年龄</th>
            <th>邮箱</th>
            <th>头像</th>
        </tr>
        @foreach ($data as $item)
            <tr>
            <td>{{$item->id}}</td>
                <td>{{$item->m_name}}</td>
                <td>{{$item->age}}</td>
                <td>{{$item->email}}</td>
                <td><img src="{{ asset('/') . ltrim($item->avatar, '.')}}" alt="avatar" srcset="" style="width:40px;"></td>
            </tr>
        @endforeach
    </table>
    {{$data->links()}}
</body>

</html>