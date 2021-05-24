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
        <h2>Covered Call</h2>
        <p>With calls, one strategy is simply to buy a naked call option. You can also structure a basic covered call or buy-write. This is a very popular strategy because it generates income and reduces some risk of being long on the stock alone. The trade-off is that you must be willing to sell your shares at a set price– the short strike price. To execute the strategy, you purchase the underlying stock as you normally would, and simultaneously write–or sell–a call option on those same shares. <br> <br>

            For example, suppose an investor is using a call option on a stock that represents 100 shares of stock per call option. For every 100 shares of stock that the investor buys, they would simultaneously sell one call option against it. This strategy is referred to as a covered call because, in the event that a stock price increases rapidly, this investor's short call is covered by the long stock position. <br> <br>

Investors may choose to use this strategy when they have a short-term position in the stock and a neutral opinion on its direction. They might be looking to generate income through the sale of the call premium or protect against a potential decline in the underlying stock’s value.

</p>
        <img src="img/c1.png" class="img-fluid pb-4">
        <p>In the profit and loss (P&L) graph above, observe that as the stock price increases, the negative P&L from the call is offset by the long shares position. Because the investor receives a premium from selling the call, as the stock moves through the strike price to the upside, the premium that they received allows them to effectively sell their stock at a higher level than the strike price: strike price plus the premium received. The covered call’s P&L graph looks a lot like a short, naked put’s P&L graph.

</p>
       </div>
        
   <?php
      include 'contact.php';
      ?>
</body>
</html>


