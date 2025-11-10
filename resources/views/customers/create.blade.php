<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Contact</title>
    <style>
    </style>

</head>
<body>
    <h4> New Contact</h4>
    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
    <form action="{{ route('customers.store') }}" method="POST">
        @csrf
          <label for="name">Name:</label><br>
        <input type="text" id="name" name="user_name" value="{{ old('user_name') }}"> <br>
        @error('user_name')
            <div class="alert alert-danger" style="color: red;">{{ $message }}</div>
        @enderror
        <br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="user_email" value="{{ !empty($_POST['user_email']) ? $_GET['user_email'] : '' }}"><br>
        @error('user_email')
            <div class="alert alert-danger" style="color: red;">{{ $message }}</div>
        @enderror
        <br>

        <label for="phone">Phone Number:</label><br>
        <input type="tel" id="phone" name="user_phone" value="{{ old('user_phone') }}"><br>
        @error('user_phone')
            <div class="alert alert-danger" style="color: red;">{{ $message }}</div>
        @enderror
        <br>

         <input type="submit" value="Submit">
    </form>
</body>
</html>