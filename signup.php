<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-6.2.1-web\css\all.css">
    <title>Signup Form</title>
    <style>
        form{
            margin-top: 20%;
            border: 2px solid black;
            padding: 50px;
        }
        h1{
            text-align: center;
        }

    </style>
</head>
    
<body>
<header>
        <div class="container-fluid" >
            <nav style="height:10%;" class="navbar fixed-top navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">
                <img src="logo.jpg" class="d-inline-block align-top" alt=""> YourHR
            </a>
            </nav>
        </div>
    </header>
<div  class="container" id="div1">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      
      <form action="submit.php" method="post" enctype="multipart/form-data">
      <h1>Sign up form</h1>
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="phone">Phone:</label>
          <input type="tel" class="form-control" id="phone" name="phone" required>
        </div>
        <div class="form-group">
          <label for="resume">Resume:</label>
          <input type="file" class="form-control-file" id="resume" name="resume" accept=".pdf" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
