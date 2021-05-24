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
        <h2>Married Put</h2>
        <p>In a married put strategy, an investor purchases an asset—such as shares of stock—and simultaneously purchases put options for an equivalent number of shares. The holder of a put option has the right to sell stock at the strike price, and each contract is worth 100 shares.<br> <br>

            An investor may choose to use this strategy as a way of protecting their downside risk when holding a stock. This strategy functions similarly to an insurance policy; it establishes a price floor in the event the stock's price falls sharply.<br> <br>

For example, suppose an investor buys 100 shares of stock and buys one put option simultaneously. This strategy may be appealing for this investor because they are protected to the downside, in the event that a negative change in the stock price occurs. At the same time, the investor would be able to participate in every upside opportunity if the stock gains in value. The only disadvantage of this strategy is that if the stock does not fall in value, the investor loses the amount of the premium paid for the put option.
</p>
        <img src="img/c1.png" class="img-fluid pb-4">
        <p>In the P&L graph above, the dashed line is the long stock position. With the long put and long stock positions combined, you can see that as the stock price falls, the losses are limited. However, the stock is able to participate in the upside above the premium spent on the put. A married put's P&L graph looks similar to a long call’s P&L graph.
</p>
       </div>
          
          
      </div>
  </div>
</div><?php
      include 'contact.php';
      ?>
</body>
</html>