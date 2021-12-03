<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{asset('js/lib/jquery.js')}}"></script>
    <script src="{{asset('js/dist/jquery.validate.js')}}"></script>
    <title>Admin Login</title>
    <link rel="stylesheet" 
    href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<style>
    /* @import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: blue; /* fallback for old browsers 
  background: -webkit-linear-gradient(right,  blue,  blue);
  background: -moz-linear-gradient(right,  blue);
  background: -o-linear-gradient(right,  blue);
  background: linear-gradient(to left,  blue);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}
    
label.error {
  color: #a94442;
  background-color: #f2dede;
  
}
.input-icons i {
            position: absolute;
        }
          
        .input-icons {
            width: 100%;
            margin-bottom: 10px;
        }
          
        .icon {
            padding: 10px;
            min-width: 40px;
        }
          
        .input-field {
            width: 100%;
            padding: 10px;
            text-align: center;
        } */
        body{
        background: url(../img/admin.png) no-repeat;
        background-size: 100%;
    }
    .codehim-form{
        max-width: 400px;
        min-height: 400px;
        box-sizing: border-box;
        background: rgba(255, 255, 255, 0.6);
        box-shadow: 4px 2px 16px rgba(0, 0, 0, 0.4);
        border-radius: 8px;
        margin:  20px auto 0 auto;
        padding: 25px;
        color: #414141;
            
    }
    .cm-input{
        display: block;
        box-sizing: border-box;
        padding: 10px;
        width: 100%; 
        margin: 14px auto;
        border-radius: 20px;
        border: 1px solid #ccc;
        
        
    }
    .cm-input:focus{
        outline: 0;
        border-color: #f9cb81;
        
    }
    .cm-input:invalid{
        border-color: #e41b17;
        
    }
    .btn-login{
        display: block;
        width: 100%;
        padding: 10px;
        border: 0;
        color: #fff;
        border-radius: 20px;
        cursor: pointer;
        
    }
    .btn-login:focus{
        outline: 0;
    }
    
    .btn-login:hover{
        opacity: 0.8;
        transition: .3s;
    }
    
    /* Gradient Background */
    .gr-bg{
        background: rgb(252,205,128);
        background: linear-gradient(90deg, rgba(252,205,128,1) 0%, rgba(209,122,142,1) 55%, rgba(220,159,174,1) 100%);   
    }
    .form-title{
        padding: 12px;
        text-align: center;
        position: relative;
    }
    .form-title h2{
        color: #5c86e1;
    }
    .form-title .user-icon{
        position: absolute;
        font-size: 42px;
        color: #fff;
        width: 90px;
        height: 90px;
        line-height: 90px;
        text-align: center;
        border-radius: 45px;
        top: -60px;
        left: -45px;
}
</style>
<body>
    <div class="login-page">
        <div class="form" >
            <form class="login-form codehim-form" id="loginForm" method="post">
            {{csrf_field()}}
            <div class="form-title">
              <div class="user-icon gr-bg">
                 <i class="fa fa-user"></i>
              </div>
              <h2> Login Admin</h2>
            </div>
            <div class="input-icons">
              <label for="email"><i class="fa fa-envelope"></i> Name:</label>
             <input class=" cm-input" type="text" name="Username" id="Username" placeholder="username" value="admin"/>
            <label for="pass"><i class="fa fa-lock"></i> Password:</label>
             <input class=" cm-input" type="password" name="Password" id="Password" placeholder="password" value="12345" />
            <input   class="btn-login  gr-bg" type="submit" name="loginButton" id="loginButton" value="LOGIN" />
            </div>
            </form>
        </div>
    </div>
</body>
</html>


<!--JQUERY Validation-->
<script>
	
	$(document).ready(function() {
		// validate the comment form when it is submitted
		//$("#commentForm").validate();

		// validate signup form on keyup and submit
		$("#loginForm").validate({
			rules: {
				Username: "required",
                Password: "required"

				
				
			},
			messages: {
				Username: "No Input Entered",
				Password: "No Input Entered",
                
				
				
			}
		});

		
	});
	</script>
<!--/JQUERY Validation-->
