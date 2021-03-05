<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
</head>
<body>
  <h1>Login Page</h1>
  <div style="text-align: right;"><a href="/registration">SignUp</a></div>
  <form method="post">

    @csrf

     <fieldset>
      <legend>Login</legend>
      <table>
          <tr>
            <td>Useremail</td>
            <td><input type="email" name="useremail"></td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
          </tr>
          <tr>

            <td><input type="submit" name="submit" value="Submit"></td>
          </tr>
      </table>

     </fieldset>


  </form>


  {{session('msg')}} <!-- session global helper. jekno jayga theke access kora jabe  -->

</body>
</html>
