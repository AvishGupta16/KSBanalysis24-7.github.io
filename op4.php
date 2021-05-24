<!DOCTYPE html>
<html lang="en">
<head>>Bootstrap Example</title>
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
            <a class="nav-link" href="op2.php">Married Put</a>
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
        <h2>Bear Put Spread</h2>
        <p>The bear put spread strategy is another form of vertical spread. In this strategy, the investor simultaneously purchases put options at a specific strike price and also sells the same number of puts at a lower strike price. Both options are purchased for the same underlying asset and have the same expiration date. This strategy is used when the trader has a bearish sentiment about the underlying asset and expects the asset's price to decline. The strategy offers both limited losses and limited gains.

</p>
        <img src="img/c1.png" class="img-fluid pb-4">
        <p>In the P&L graph above, you can observe that this is a bearish strategy. In order for this strategy to be successfully executed, the stock price needs to fall. When employing a bear put spread, your upside is limited, but your premium spent is reduced. If outright puts are expensive, one way to offset the high premium is by selling lower strike puts against them. This is how a bear put spread is constructed.
        </p>
       </div>
          
          
      </div>
  </div>
</div>
    <?php
      include 'contact.php';
      ?>
</body>
</html>

