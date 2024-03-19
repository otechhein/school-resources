<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staff Image</title>
</head>
<body>
    @foreach ($stafflist as $staff )
    <img src="{{asset('img/staff/'.$staff->image)}}" width="200" height="300"><br>
    @endforeach


</body>
</html>
