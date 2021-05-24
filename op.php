<!DOCTYPE html>
<html lang="en">
<head>
  <title>Option Stragey</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  body {
    position: relative;
  }
  ul.nav-pills {
    top: 20px;
    position: fixed;
  }
  div.col-8 div {
    height: auto;
  }
  .t1{
      margin-top: 50px;
        }
        .t2{
            text-align: justify;
            padding-right: 20px;
            font-size: 20px;
        }
        .t3{
            margin-top: 20px;
            margin-left: 48%;
        }
  </style>
</head>
<body>
    <?php include 'upper.php'; ?>  
</body><div class="t3">
    <h1>Option Stragey</h1></div>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="1">
   
<div class="container-fluid">
  <div class="row">
    <nav class="col-sm-3 col-4" id="myScrollspy">
      <ul class="nav nav-pills flex-column">
           <div class="t1">
        <li class="nav-item">
            <a class="nav-link active" href="op1.php">Covered Call</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="op4.php">Married Put</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="op3.php">Bull Call Spread</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="op4.php">Bear Put Spread</a>
         
        </li>
         <li class="nav-item">
            <a class="nav-link" href="op5.php">Protective Collar</a>
        </li>
           </div>
      </ul>
    </nav>
  
    <div class="col-sm-9 col-8">
        <div id="section1" class="t2" > 
    <h1>Main Strategies</h1>
    <p>Traders often jump into trading options with little understanding of the options strategies that are available to them. There are many options strategies that both limit risk and maximize return. With a little effort, traders can learn how to take advantage of the flexibility and power that stock options can provide. Here are some options strategies that every investor should know.
    </p>
    <ul>
    <li>Covered Call</li>
    <li>Married Put</li>
    <li>Bull Call Spread</li>
    <li>Bear Put Spread</li>
    <li>Protective Collar</li>
    </ul>
        </div>
        
    </div><?php
      include 'contact.php';
      ?>
</body>
</html>

