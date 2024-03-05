<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staff Registration</title>
</head>
<body>
    <div>
       {{-- {{dd($errors)}} --}}
        @if($errors->any())
            {{-- <ul style="color: red;">
                @foreach ($errors->all() as $error )
                    <li>{{$error}}</li>
                @endforeach
            </ul> --}}
            {{-- {{dd($errors->name)}} --}}
        @endif
        <form method="post" action="{{url('/staffreg/process')}}">
            @csrf
            <label >Name</label>
            <input type="text" name="name" value="">
            <br>
            @error('name')
            <p style="color:red;">{{$message}}</p>
            @enderror
            <label >Email</label>
            <input type="text" name="email" value="">
            <br>
            @error('email')
            <p style="color:red;">{{$message}}</p>
            @enderror
            <label >password</label>
            <input type="password" name="password" value="">
            <br>
            @error('password')
            <p style="color:red;">{{$message}}</p>
            @enderror
            <button type="submit">Submit</button>
        </form>
    </div>

</body>
</html>
