<?php include 'upper.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pivot Point Intraday Trading Strategy</title>
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
    height: 90%;
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
            margin-left: 28%;
        }
  </style>
</head><div class="t3">
    <h1>Pivot Point Intraday Trading Strategy</h1></div>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="1">
   
<div class="container-fluid">
  <div class="row">
    <nav class="col-sm-3 col-4" id="myScrollspy">
      <ul class="nav nav-pills flex-column">
           <div class="t1">
        <li class="nav-item">
          <a class="nav-link active" href="#section1">Definition</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section2">Key Points</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section3">What Does a Golden Cross Tell You?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#section4">Bullish Golden Cross Pattern </a>
          
        </li>
         <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
       More Trading Tools
      </a>
      <div class="dropdown-menu">
          <a class="dropdown-item" href="trade1.php">Golden Crossover</a>
          <a class="dropdown-item" href="trade2.php">Supertrend</a>
        <a class="dropdown-item" href="trade4.php">Top 5 Trading</a>
        
</a></div>
          
        </li>
           </div>
      </ul>
    </nav>
  
    <div class="col-sm-9 col-8">
        <div id="section1" class="t2" >    
<p>Pivot Point Intraday Trading Strategy [Breakout]: This as the name suggests is a intraday trading system using pivot points.  Pivot Points are one of the more popular indicators when it comes to intraday trading. In this post we will show you a totally mechanical system based approach to trade Pivot Points. Just a point to note that, this system is not back tested by me, and you are free to do so on an instrument of your choice. If you need more discussion I am readily available to discuss the results.</p>



<p>So so we use the basic building blocks of a trading system for this strategy. We are going to use 2 indicators for this intraday trading system. </p>



<p>We are going to use 2 indicators for the system.</p>



<p><a rel="noreferrer noopener" href="https://en.wikipedia.org/wiki/Pivot_point_(technical_analysis)" target="_blank">Pivot Points</a>: A widely popular indicator that comes inbuilt in most trading platforms. It shows support and resistances as S1, R1, S2, R2 etc and has a central line known as pivot line. We will be using this for setup and entry.</p>



<p><a rel="noreferrer noopener" href="https://en.wikipedia.org/wiki/Moving_average" target="_blank">SMA</a>: Moving average another popular indicator that shows us the trend of the instrument at the moment. We will be using this for setup and exit.</p>

        </div>
<div id="section2" class="t2">  
<h4>Setup:</h4>



<p>The first building block of trading is the setup. In our situation we have 3 types of setup. Timeframe used is 15 mins</p>



<ol><li><strong>Neutral Setup</strong>: Time less than 9:30 AM or more than 2:30 PM. That is to say we wait 15 minutes for market to settle after opening and after 2:30 there is not much time left for market to close so we do not take a trade after that.  <br>Another condition that will fall under neutral setup is if price is above the pivot line but below the 50 SMA. Or vice versa price is above 50 SMA and below pivot line.</li><li><strong>Long Setup</strong>: Time between 9:30 AM to 2:30 PM. Price is above pivot line and above 50 SMA.</li><li><strong>Short Setup</strong>: Time between 9:30 AM to 2:30 PM. Price is below pivot line and below 50 SMA.</li></ol>



<p>One thing to note that till Entry is not made, the setups can keep changing between long, short and neutral. You might have to keep adjusting the entry orders accordingly.</p>

</div>
       <div id="section3" class="t2">  

<h4>Entry:</h4>



<p>The entry in the pivot points intraday trading system will be as follows. Since this is a breakout system entries will be of breakout of support and resistance of pivot points.</p>



<ol><li>Neutral Setup: No orders are placed, wait for a long or short setup to form.</li><li>Long Setup: <br>Price between PP and R1: SL-M buy order .25 points above R1.<br>Price between R1 and R2: SL-M buy order .25 points above R2.</li><li>Short Setup:<br>Price between PP and S1: SL-M buy order .25 points below S1.<br>Price between S1 and S2: SL-M buy order .25 points Below S2.</li></ol>



<p>This is a breakout system so we keep the order on breakout. You can manually observe and wait for breakout then place limit or market orders directly, but that requires heavy monitoring of charts so I do not recommend that.</p>



<h4>Risk Management:</h4>



<p>Risk is something that creates drawdown so it is recommended to backtest this system and then plan what risk you are comfortable with. But in general terms a risk of 2 percent generally goes down well with most system, with the only condition that you have sufficient balance to not go out of business in case of prolonged drawdown.</p>

      
    

<h4>Position Size:</h4>



<p>Position Size for this system will be based on risk and stop loss. The basic formula for position sizing will be [(total risk )/abs(entry-stop loss)]. The position size will keep changing for us after a setup, after every new candle. This is because the stop loss we are going to use will be based on 50 SMA, and this value will keep changing after every new candle.</p>



<h4>Exit:</h4>



<p>This exit method in this system is trailing stop loss based. And we are going to use the 50 SMA line for the same. The initial stop loss will be the 50 SMA line just below the entry candle. The value will keep changing after every candle is completed in the direction of the trade. This means if we are long and the SMA value after a candle is below what it was previously we will not update the stop loss. Trailing Stop Loss in essence should move only in the direction of the trade. Also if exit signal is not generated during the day, manual exit at 3:15, since this is an intraday setup.</p>

<div id="section4" class="t2">  

<h4>Key Points:</h4>



<p>What actually works for this system is that the trailing stop loss keeps moving up aggressively so you can take higher risks in this, because its going to be rare when your loss equals to the entire risk.</p>



<h2>Few Examples of pivot points intraday trading strategy with 50 SMA</h2>
</div></div></div></div></div>
</body></html>





