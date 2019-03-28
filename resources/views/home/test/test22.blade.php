<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css') }}/app.css">
</head>
<body>
    <table class = 'tabke'>
        <tr><th>id</th>
            <th>article_name</th>
            <th>comments</th></tr>
        

        @foreach ($data as $article)
            <tr>
            <td>{{$article->id}}</td>
                <td>{{$article->article_name}}</td>
                <td>
                    @foreach ($article->comments as $comment)
                        {{$comment->comment}}<br>
                    @endforeach
                </td>
            </tr>
        @endforeach
        
    </table>
</body>
</html>