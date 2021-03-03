<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
      {{-- <h1>Welcome Home!!</h1> --}}
    <h1>Welcome Home!! {{ session('username') }} </h1>
    {{-- <a href="/home/create">Create user</a> |
    <a href="/home/userlist">View UserList</a> |
    <a href="/logout">Logout</a>
 --}}
   {{-- <br>
   {{$id}} --}}

</body>
</html>
