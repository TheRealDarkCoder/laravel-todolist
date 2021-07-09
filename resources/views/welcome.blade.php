<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>
        <h1> Todo list</h1>
        <ul>
            @foreach ($todolist as $todos)
                <li>{{$todos->title}}</li>
            @endforeach
        </ul>
        
        <form method="POST" action="/new">
            @csrf
            <input type="text" name="title" id="title" />
            <input type="submit" name="submit" value="Submit" />
        </form>
    </div>
</body>

</html>