<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>表单测试</title>
    <link rel="stylesheet" href="{{asset('css')}}/app.css">

    <style>
    .form{
        max-width: 667px;
    }
    </style>
</head>

<body>
{{-- {{$errors}} --}}
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        

    @endif
    <form action="" method="post" class="form" enctype="multipart/form-data">
        {{--  <input type="hidden" name="_token" value="{{csrf_token()}}">  --}}

        {{--  {{ csrf_field() }}  --}}

    
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" placeholder="name" name='m_name'>
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="text" class="form-control" id="age" placeholder="20" name='age'>
        </div>
        <div class="form-group">
            <label for="emial">Email address</label>
            <input type="text" class="form-control" id="emial" placeholder="Email" name='email'>
        </div>

        <div class="form-group">
            <label for="file">头像</label>
            <input type="file" class="form-control" id="file" name='avatar'>
        </div>
        {{ csrf_field() }}
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</body>

</html>