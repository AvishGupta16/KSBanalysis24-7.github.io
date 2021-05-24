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
        <h2>Protective Collar</h2>
        <p>A protective collar strategy is performed by purchasing an out-of-the-money put option and simultaneously writing an out-of-the-money call option. The underlying asset and the expiration date must be the same. This strategy is often used by investors after a long position in a stock has experienced substantial gains. This allows investors to have downside protection as the long put helps lock in the potential sale price. However, the trade-off is that they may be obligated to sell shares at a higher price, thereby forgoing the possibility for further profits.<br> <br>

An example of this strategy is if an investor is long on 100 shares of IBM at $50 and suppose that IBM rises to $100 as of January 1. The investor could construct a protective collar by selling one IBM March 105 call and simultaneously buying one IBM March 95 put. The trader is protected below $95 until the expiration date. The trade-off is that they may potentially be obligated to sell their shares at $105 if IBM trades at that rate prior to expiry.</p>
        <img src="img/c1.png" class="img-fluid pb-4">
        <p>In the P&L graph above, you can observe that the protective collar is a mix of a covered call and a long put. This is a neutral trade set-up, which means that the investor is protected in the event of a falling stock. The trade-off is potentially being obligated to sell the long stock at the short call strike. However, the investor will likely be happy to do this because they have already experienced gains in the underlying shares</p>
       </div>
          
          
      </div>
  </div>
</div>
    <?php
      include 'contact.php';
      ?>
</body>
</html>

