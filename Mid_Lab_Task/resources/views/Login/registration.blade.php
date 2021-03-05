<!DOCTYPE html>
<html>
<head>
	<title>Registration page</title>
</head>
<body>
  <h1 style="text-align: center">Registration Page</h1>

  <form method="post">

    @csrf

     <fieldset>

      <legend>ADD</legend>

      <table>
           <td></td>
          <tr>
            <td>Full Name</td>
            <td><input type="text" name="name" value="{{old('name')}}"><br>
                <span style="color: red">{{ $errors->first('name') }}</span><br>
            </td>


          </tr>

          <tr>
            <td>username</td>
            <td><input type="text" name="username" value="{{old('username')}}">
                <br>
                <span style="color: red">{{ $errors->first('username') }}</span><br>
            </td>
          </tr>
          <tr>
            <td>Email</td>
            <td><input type="email" name="email" value="{{old('email')}}">
                <br>
                <span style="color: red">{{ $errors->first('email') }}</span><br>
            </td>
          </tr>
          <tr>
            <td>Password</td>
            <td><input type="password" name="password" value="{{old('password')}}">
                <br>
                <span style="color: red">{{ $errors->first('password') }}</span><br>
            </td>
          </tr>
          <tr>
            <td>Confirm Password</td>
            <td><input type="password" name="cpassword" value="{{old('cpassword')}}">
                <br>
                <span style="color: red">{{ $errors->first('cpassword') }}</span><br>
            </td>
          </tr>
          <tr>
            <td>Address</td>
            <td><input type="text" name="address" value="{{old('address')}}"><br><br></td>
          </tr>
          <tr>
            <td>Company</td>
            <td><input type="text" name="company_name" value="{{old('company_name')}}"><br><br></td>
          </tr>
          <tr>
            <td>Phone Number</td>
            <td><input type="text" name="phone" value="{{old('phone')}}">
                <br>
                <span style="color: red">{{ $errors->first('phone') }}</span><br>
            </td>
          </tr>
          <tr>
            <td>City</td>
            <td><input type="text" name="city" value="{{old('city')}}"><br><br></td>
          </tr>
          <tr>
            <td>Country</td>
            <td><input type="text" name="country" value="{{old('country')}}"><br><br></td>
          </tr>
          <tr>
            <td>User Type</td>
            <td><input type="text" name="usertype" value="Active" ></td>
          </tr>

          <tr>
            <td></td>
            <td><input type="submit" name="submit" value="SignUp"></td>


          </tr>
      </table>

     <h2 style="color: red">{{session('msg')}}</h2>

     </fieldset>


  </form>
  <a href="/login">Back</a>

</body>
</html>
