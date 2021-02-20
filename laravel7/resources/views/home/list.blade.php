<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View User List</title>
</head>
<body>
<h1>User List</h1>
    <a href="/home">Back</a> |
    <a href="/logout">Logout</a>

    <br>

    <table border="1">
       <tr>
         <td>ID</td>
         <td>Name</td>
         <td>Email</td>
         <td>PASSWORD</td>
         <td>Action</td>
       </tr>
    <!-- using php
      <?php for($i=0; $i < count($list); $i++){?>

       <tr>
         <td><?=$list[$i]['id']?></td>
         <td><?=$list[$i]['name']?></td>
         <td><?=$list[$i]['email']?></td>
         <td><?=$list[$i]['password']?></td>
       </tr>

       <?php } ?> -->

    <!-- using blade -->

     @for($i=0; $i < count($list); $i++)

       <tr>
         <td>{{ $list[$i]['id'] }}</td>
         <td>{{ $list[$i]['name'] }}</td>
         <td>{{ $list[$i]['email'] }}</td>
         <td>{{ $list[$i]['password'] }}</td>
         <td>
             <a href="/home/edit/{{ $list[$i]['id'] }}">Edit</a> |
             <a href="">Delete</a>
         </td>
     </tr>

      @endfor

       <!-- <tr>
         <td>2</td>
         <td>Abid</td>
         <td>abid@gmail.com</td>
         <td>123</td>
       </tr> -->


    </table>
</body>
</html>
