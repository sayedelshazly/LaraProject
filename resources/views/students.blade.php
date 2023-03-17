<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaraP</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        body{
            height: 100vh;
            background-color: rgb(53, 50, 50);
            display: flex;
            justify-content: center;
            align-items: center
        }
        .nav{
            padding: 50px;
            height: 160px;
            background-color: #cfc6c6;
        }
        .nav a{
            text-decoration: none;
            color: black;
            font-size: 1.5em;
            text-transform: uppercase;
        }
        .nav h1{
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <div class="nav">
        @foreach ($students as $student)

        <a href="/students/{{$student['id']}}">
            {{ $student['id']}} - {{ $student['name']}}
        </a>


        <br>

        @endforeach
        <h1>Hello, Click in your</h1>
    </div>

</body>
</html>
