<!DOCTYPE html>
<html>
    <head>
        <title>Triple Forms Responsive Widget Template :: w3layouts</title>

        <!-- Meta tag Keywords -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8" />
        <meta name="keywords" content="Triple Forms Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
        <script>
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <!-- Meta tag Keywords -->
        <!-- css files -->
        <link rel="stylesheet" href="loginD/css/style.css" type="text/css" media="all" />
        <!-- Style-CSS -->
        <link href="loginD/css/font-awesome.min.css" rel="stylesheet">
        <!-- Font-Awesome-Icons-CSS -->
        <!-- //css files -->

        <!-- web-fonts -->
        <link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext"
         rel="stylesheet">
        <!-- //web-fonts -->
    </head>
<body>
    <div class="main-bg">
		<!-- title -->
		<h1>Login Forms</h1>
		<!-- //title -->
		<div class="sub-main-w3">
			<div class="image-style">

			</div>
			<!-- vertical tabs -->
			<div class="vertical-tab">

                <div id="section1" class="section-w3ls">
					<input type="radio" name="sections" id="option1" checked>
					<label for="option1" class="icon-left-w3pvt"><span class="fa fa-pencil-square" aria-hidden="true"></span>
                        <a href="/registration">Register</a>
                        </label>
					<article>
						<form method="post">
                            @csrf
							<h3 class="legend">Register Here</h3>

							<div class="input">
                                <span class="fa fa-user-o" aria-hidden="true"></span>
                                <input type="text" name="name" value="{{old('name')}}" placeholder="Full-Name"><br>
							</div>
                            <span style="color: red">{{ $errors->first('name') }}</span>

							<div class="input">
                                <span class="fa fa-user-o" aria-hidden="true"></span>
                                <input type="text" name="username" value="{{old('username')}}" placeholder="UserName"><br>

							</div>
                            <span style="color: red">{{ $errors->first('username') }}</span><br>

							<div class="input">
                                <span class="fa fa-user-o" aria-hidden="true"></span>
                                <input type="text" name="email" value="{{old('email')}}" placeholder="Email"><br>
							</div>
                            <span style="color: red">{{ $errors->first('email') }}</span>

							<div class="input">
								<span class="fa fa-key" aria-hidden="true"></span>
								<input type="password" placeholder="Password" name="password"  />
							</div>
                            <span style="color: red">{{ $errors->first('password') }} </span>
							<div class="input">
								<span class="fa fa-key" aria-hidden="true"></span>
								<input type="password" placeholder="Confirm Password" name="cpassword"  />
							</div>
                            <span style="color: red">{{ $errors->first('cpassword') }}</span>

							<div class="input">
								<span class="fa fa-key" aria-hidden="true"></span>
								<input type="text" placeholder="Company Name" name="company_name" value="{{old('company_name')}}" />
							</div>

							<div class="input">
								<span class="fa fa-key" aria-hidden="true"></span>
								<input type="text" placeholder="Phone" name="phone" value="{{old('phone')}}"/>
							</div>
                            <span style="color: red">{{ $errors->first('phone') }}</span>

							<div class="input">
								<span class="fa fa-key" aria-hidden="true"></span>
								<input type="text" placeholder="City" name="city" value="{{old('city')}}"/>
							</div>

							<div class="input">
								<span class="fa fa-key" aria-hidden="true"></span>
								<input type="text" placeholder="Country" name="country" value="{{old('country')}}"  />
							</div>

							<div class="input">
								<span class="fa fa-key" aria-hidden="true"></span>
								<input type="text" placeholder="Usertype" name="usertype"  />
							</div>


							<button type="submit" class="btn submit">Register</button>
						</form>
					</article>
				</div>


				<div id="section2" class="section-w3ls">
					<input type="radio" name="sections" id="option2">
					<label for="option2" class="icon-left-w3pvt"><span class="fa fa-user-circle" aria-hidden="true"></span>
                        <a href="/login">Login</a>
                    </label>

				</div>


			</div>
			<!-- //vertical tabs -->
			<div class="clear"></div>
		</div>
		<!-- copyright -->
		<div class="copyright">
			<h2>&copy; 2019 Triple Forms. All rights reserved | Design by
				<a href="http://w3layouts.com" target="_blank">W3layouts</a>
			</h2>
		</div>
		<!-- //copyright -->
	</div>

  {{session('msg')}} <!-- session global helper. jekno jayga theke access kora jabe  -->

</body>
</html>
