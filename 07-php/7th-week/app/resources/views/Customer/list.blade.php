<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer List</title>
</head>
<body>
    {{-- {{dd($customer[0]->name)}} --}}
    <h1 style="text-align: center;">{{$title}}</h1>
    <table border="1">
        <tr>
            <th>#ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Date</th>
            <th colspan="2">Action</th>
        </tr>
        @foreach($customer as $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->name}}</td>
            <td>{{$value->email}}</td>
            <td>{{$value->address}}</td>
            <td>{{$value->phonenumber}}</td>
            <td>{{$value->age}}</td>
            <td>{{$value->gender}}</td>
            <td>{{$value->droptest}}</td>
            <td><a href="{{url('/customeredit/'.$value->id)}}">Edit</a></td>
            <td><a href="{{url('/customerdelete/'.$value->id)}}">Delete</a></td>
        </tr>

        @endforeach

    </table>
    <br>
    <a href="{{url('/customerreg')}}">Go to Register</a>

</body>
</html>
