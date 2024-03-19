
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Staff Registrations</title>
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
            <h2>Staff Register Form</h2>
            <form action="{{route('staffprocess')}}" method="post" class="regform" enctype="multipart/form-data">
                @csrf
                <label for="name">Name</label>
                <input type="text" name="name" >
                <label for="email">Email</label>
                <input type="email" name="email">
                <label for="address">Address</label>
                <textarea name="address"type="text"></textarea>
                <label for="phone">Phone Number</label>
                <input type="text" name="phone" >
                <label for="image">Image Upload</label>
                <input type="file" name="image">

                <button type="submit" name="submit">Submit</button>

            </form>
        </div>
    </div>

</body>
</html>
