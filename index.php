<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css"href="style.css">
  <link rel="stylesheet" href="test.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   <title></title>
   <style>
       .s1
       {
           margin-top: 0px;
           color: black;
               
       }
       .s2{
          margin-top: 10px;
           
       }
       .card-body{
           text-align: center;
           
       }
       .text-center{
           color: black;
       }
       
       
   </style>
    </head>
    <body>
<?php include 'upper.php'; ?>
        
            
       
<div class="r" >
    <span>K</span>
    <span>S</span>
    <span>B</span>
    <span>A</span>
    <span>N</span>
    <span>A</span>
    <span>L</span>
    <span>Y</span>
    <span>S</span>
    <span>I</span>
    <span>S</span>
    <span>.</span>
    <span>.</span>
    
   
    
</div>
  
  
 
  <div class="s1">
        <section>
            <?php include 'about.php'; ?>
        </section>
        <section class="my-5">
            <div class="py-5">
                <h2 class="text-center">Our Services
            </div>
            <div class="container-fluid">
                <div class="row" class="s2">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card">
                            <img class="card-img-top" src="img/i1.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Daily Intraday Calls</h4>
    <a href="ipo1.php" class="btn btn-primary">Check Details</a>
  </div>
</div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card">
                            <img class="card-img-top" src="img/i2.jpg" alt="Card image">
  <div class="card-body">
      <h4 class="card-title">Latest IPO Details</h4>    
      <a href="ipo.php" class="btn btn-primary">Check Details</a>
  </div>
</div>
                    </div>
      <div class="col-lg-4 col-md-4 col-12">
                        <div class="card">
                            <img class="card-img-top" src="img/i3.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Trading Strategy</h4>
    <a href="trading.php" class="btn btn-primary">Check Details</a>
  </div>
</div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="card">
                            <img class="card-img-top" src="img/i4.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Long Term Investment</h4>
    <a href="#" class="btn btn-primary">Coming soon!!!!</a>
  </div>
</div>
      
                </div>
           <div class="col-lg-4 col-md-4 col-12">
                        <div class="card">
                            <img class="card-img-top" src="img/i5.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Daily Pivot Level</h4>
    <a href="daily pivot level.php" class="btn btn-primary">Check here</a>
  </div>
</div>
           </div>
               <div class="col-lg-4 col-md-4 col-12">
                        <div class="card">
                            <img class="card-img-top" src="img/i6.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Intercourse in any stocks</h4>
    <a href="#" class="btn btn-primary">Coming Soon!!!!</a>
  </div>
</div>
         </div>
                </div> 
            
        </section>
        
        <section>
            <div class="py-5">
                <h2 class="text-center">Contact us</h2>                
            </div>
            <div class="w-50 m-auto">
                <form action="userinfo.php" method="post" >
  <div class="form-group">
    <label>Name:</label>
    <input type="text" name="user" class="form-control" placeholder="Enter Your Name" autocomplete="off">
  </div>
  <div class="form-group">
    <label>Email:</label>
    <input type="text" name="email" class="form-control" placeholder="Enter Email" autocomplete="off">
  </div>
     <div class="form-group">
    <label>Mobile:</label>
    <input type="text" name="mobile" class="form-control" placeholder="Enter Number" autocomplete="off">
  </div>
                     <div class="form-group">
    <label>Comment:</label>
    <textarea class="form-control" name="comment"></textarea>
  </div>
                    
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
            </div>
        </section>
        
      <?php
      include 'footer.php';
      ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        
    </body>
</html>
