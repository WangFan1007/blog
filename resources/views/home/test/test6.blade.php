<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>表单测试csrf</title>
    <link rel="stylesheet" href="{{asset('css')}}/app.css">

    <style>
    .form{
        max-width: 667px;
    }
    </style>
</head>

<body>

    <form action="{{route('test7')}}" method="post" class="form">
        {{--  <input type="hidden" name="_token" value="{{csrf_token()}}">  --}}

        {{--  {{ csrf_field() }}  --}}

    
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email" name='email'>
        </div>
        
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</body>

</html>