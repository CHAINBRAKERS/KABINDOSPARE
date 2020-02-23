<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>contact us form</title>
    <style>
      body{
        margin: 0;
        padding: 0;
        background-image: url("img/ec01.webp");
        background-size: cover;
      }
      .contact-form{
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
      .contact-form h1{
        margin-top: 0;
        font-weight: 200;
      }
      .txtb{
        border: 1px solid gray;
        margin: 8px 0;
        padding: 12px 18px;
        border-radius: 8px;
      }
      .txtb label{
        display: block;
        text-align: left;
        color: #333;
        text-transform: uppercase;
        font-size: 14px;
      }
      .txtb input, .txtb textarea{
        width: 100%;
        border:none;
        background: none;
        outline: none;
        font-size: 18px;
        margin-top: 6px;
      }
      .btn{
        display:inline-block;
        background-color:#9b59b6;
        padding: 14px 0;
        color: white;
        text-transform: uppercase;
        cursor: pointer;
        margin-top: 8px;
        width:100%;
      }

       
    </style>
  </head>
  <body>
    <div class="contact-form">
      <h1>contact us</h1>
      <div class="txtb">
        <label>Full Name :</label>
        <input type="text" name="" values="" placeholder="Enter your name">
      </div>
      <div class="txtb">
        <label>Email :</label>
        <input type="Email" name="" values="" placeholder="Enter your Email">
      </div>
      <div class="txtb">
        <label>Phone number :</label>
        <input type="text" name="" values="" placeholder="Enter your phone number">
      </div>
      <div class="txtb">
        <label>Message :</label>
        <textarea></textarea>
      </div>
        <a class="btn">send</a>
      </div>
   


   
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="js/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>