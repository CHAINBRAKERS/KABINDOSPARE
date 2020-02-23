<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>LOGIN FORM</title>
</head>
<style>
	body{
		margin: 0;
		padding: 0;
		background-image: url("img/ec01.webp");
		background-size: cover;
	}
	.container-fluid{
		width:85%;
        max-width: 600px;
        background:#f1f1f1;
        position: Absolute;
        top: 50%;
        left: 50%;
        padding:30px 40px;
        box-sizing: border-box;
        border-radius: 8px;
        text-align: center;
        box-shadow: 0 0 20px #000000b3;
        font-family: "Montserrat", sans-serif;
        transform: translate(-50%, -50%);
	}
	.form-group h1{
		border: 1px solid gray;
		padding: 12px 18px;
		border-radius: 8px;
	}
	.form-group label{
		width:100px;
		outline: none;
		text-transform: uppercase;
		text-align: left;
		font-size: 18px;
	}

		
	</style>
    <body>
    	<div class="container-fluid">
    		<h1 class="text-center">LOGIN</h1>
   <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
    </body>
    </html>