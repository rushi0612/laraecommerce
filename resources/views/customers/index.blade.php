<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Customers List</title>
     <style>
        body{
            width: 50%;
        }
        button{
            float: right;
            margin: 10px;
        }
        table {
            width: 60%;
            border-collapse: collapse;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px 12px;
            text-align: left;
        }
      </style>

</head>
<body >
    <h1 style="margin: 20px ;  ">Customers List</h1>
    
    <form action="" method="GET" id="customer-form">
        <input type="text" name="search" placeholder="Search" value="{{ !empty($_GET['search']) ? $_GET['search'] : '' }}">         
        <input type="hidden" id="sortmethod" name="sortmethod" value="{{ !empty($_GET['sortmethod']) ? $_GET['sortmethod'] : 'ASC' }}">
        <input type="hidden" id="sortcolumn" name="sortcolumn" value="{{ !empty($_GET['sortcolumn']) ? $_GET['sortcolumn'] : 'name' }}">
        <button type="submit">search</button>
    </form>
    
    <div>
    <button><a href="{{url('/customers/create')}}">Create Customer</a></button>
    <button><a href="{{url('/customers/create')}}">Insert Row</a></button>
    </div>
    <table>
      
            <tr >
                <th>ID</th>
                <th onclick="sort('name', 'desc');">Name</th>
                <th onclick="sort('email', 'desc');">Email</th>
                <th onclick="sort('name', 'desc');">Number</th>
                <th>Action</th>
            </tr>
            @foreach($customers as $customer)
               <tr >
                <td>{{$customer->id}}</td>
                <td>{{$customer->name}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->number}}</td>
                <td><a href="{{ url('/customers/edit/' . $customer->id) }}">Edit</a>
                
                    <form action="{{url('/customers/destroy/' . $customer->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
                </td>
            </tr>
            @endforeach
    </table>  
    
    <script>
        function sort(name, method) {
            var sortmethod = document.getElementById('sortmethod');
            var sortcolumn = document.getElementById('sortcolumn');

            if(sortmethod.value == 'ASC') {
                document.getElementById('sortmethod').value = 'DESC';
            } else {
                document.getElementById('sortmethod').value = 'ASC';
            }
            document.getElementById('sortcolumn').value = name;
            document.getElementById('customer-form').submit();
        }
    </script>
</body>
</html>

