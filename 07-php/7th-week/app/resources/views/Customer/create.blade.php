@php
    $updateStatus = false;
    if(isset($data)){
        $updateStatus = true;
    }
@endphp
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customer Registrations</title>
    <style>
        .container{
            display:flex;
            justify-content: center;
        }
        .register{
            border:1px solid gray;
            border-radius: 10px;
            padding:10px;
            background-color:lightgray;

        }
        .regform{
            display:flex;
            flex-direction: column;
            gap: 10px;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="register">
            <h2>{{$updateStatus == true? 'Customer Registrations Update Form' : 'Customer Registrations Form'}}</h2>
            <form action="{{$updateStatus == true? route('regupdate') : route('regprocess')}}" method="post" class="regform">
                @if($updateStatus == true)
                @method('PATCH')
                @endif

                @csrf
                <input type="hidden" name="id" value="{{$updateStatus == true? $data->id : ''}}">
                <label for="name">Name</label>
                <input type="text" name="name" value="{{$updateStatus == true ? $data->name : ''}}">
                <label for="email">Email</label>
                <input type="email" name="email" value="{{$updateStatus == true ? $data->email : ''}}">
                <label for="address">Address</label>
                <textarea name="address"type="text">{{$updateStatus == true ? $data->address : ''}}</textarea>
                <label for="age">age</label>
                <input type="number" name="age" min="18" max="70" value="{{$updateStatus == true ? $data->age : ''}}">
                <label for="phone">Phone Number</label>
                <input type="text" name="phone" value="{{$updateStatus == true ? $data->phonenumber : ''}}">
                <label for="gender">Gender</label>
                <input type="text" name="gender" value="{{$updateStatus == true ? $data->gender : ''}}">
                <label for="password">Password</label>
                <input type="password" name="password" >
                <input type ="hidden" name="oldpassword" value={{$updateStatus == true ? $data->password : ''}}>
                <button type="submit" name="submit"> {{$updateStatus == true ?'Update' : 'Submit'}}</button>

            </form>
        </div>
    </div>

</body>
</html>
