<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Edit Customer: {{ $customer->name }}</h2>

<form action="{{url('/customers/update', $customer->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Name:</label><br>
    <input type="text" name="user_name" value="{{ $customer->name }}"><br><br>
    <label for="email">Email:</label><br>
    <input type="email" name="user_email" value="{{ $customer->email }}"><br><br>
    <label for="phone">Phone Number:</label><br>
    <input type="tel" name="user_phone" value="{{ $customer->number }}"> <br><br>
    

    <button type="submit">Update</button>
</form>

</body>
</html>