<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Laravel: A Framework For Web Artisans</title>
    <meta name="viewport" content="width=device-width">
</head>
<body>
    {{ Form::open('task2')}}
        {{ Form::label('img1', 'Image1') }}
        {{ Form::text('img1', 'http://minaev.local/img/img1.jpg')}}
        {{ Form::label('img2', 'Image2') }}
        {{ Form::text('img2', 'http://minaev.local/img/img2.png')}}
        {{ Form::submit('Send')}}
    {{ Form::close()}}
</body>
</html>