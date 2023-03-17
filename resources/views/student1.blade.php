<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>StudentData</title>
    <style>
        body{
            height: 100vh;
            background-color: rgb(53, 50, 50);
            display: flex;
            justify-content: center;
            align-items: center
        }
        .container{
            width: 500px;
            height: 500px;
            background-color: #cfc6c6;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center
        }
        table td,th{
            border: 2px solid black;
            padding: 10px;
        }
        table h3{
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <div class="container">
        <table>
            <tr>
                <th><h3>Student</h3></th>
            </tr>
            <tr>
                <td>{{$id}} - {{$name}}</td>
            </tr>
            <tr>
                <td>{{$city}}</td>
            </tr>
            <tr>
                <td>{{$phone}}</td>
            </tr>
            <tr>
                <td> {{$email}}</td>
            </tr>
        </table>
    </div>

    <br>


</body>
</html>
