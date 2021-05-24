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
        <h2>Bull Call Spread</h2>
        <p>In a bull call spread strategy, an investor simultaneously buys calls at a specific strike price while also selling the same number of calls at a higher strike price. Both call options will have the same expiration date and underlying asset. This type of vertical spread strategy is often used when an investor is bullish on the underlying asset and expects a moderate rise in the price of the asset. Using this strategy, the investor is able to limit their upside on the trade while also reducing the net premium spent (compared to buying a naked call option outright).

</p>
        <img src="img/c1.png" class="img-fluid pb-4">
        <p>From the P&L graph above, you can observe that this is a bullish strategy. For this strategy to be executed properly, the trader needs the stock to increase in price in order to make a profit on the trade. The trade-off of a bull call spread is that your upside is limited (even though the amount spent on the premium is reduced). When outright calls are expensive, one way to offset the higher premium is by selling higher strike calls against them. This is how a bull call spread is constructed.
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

