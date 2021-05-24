<?php include 'upper.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Supertrend Intraday System with EMA Crossover</title>
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
    <h1>Supertrend Intraday System with EMA Crossover</h1></div>
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
          <a class="dropdown-item" href="trade3.php">Pivot Point Intraday</a>
        <a class="dropdown-item" href="trade4.php">Top 5 Trading</a>
        
</a></div>
          
        </li>
           </div>
      </ul>
    </nav>
  
    <div class="col-sm-9 col-8">
        <div id="section1" class="t2" >    
        <p>The Supertrend indicator is a trend following overlay on your trading chart, much like a moving average, that shows you the current trend direction.</p><p>

            The indicator works well in a trending market but can give false signals when a market is trading in a range.</p><p>

            It uses the ATR (average true range) as part of its calculation which takes into account the volatility of the market.  The ATR is adjusted using the multiplier setting which determines how sensitive the indicator is.</p>

        <img src="img/s1.jpg" width="100%">
        <p>Once the indicator is on your chart, you will see a line that turns red and green.</p>
        
        
      </div>
        <div id="section2" class="t2" > 
        <h3>How Does It Work?</h3>
        <p>The changing colors determine the trend direction of the instrument you are trading.</p><p>

            When the indicator flips to green due to the closing price being above the line, a buy signal is generated.</p><p>

Once price closes on the oppositive side of the line, it flips from green to red and a sell signal is generated.</p>
      </div> 
        
        <div id="section3" class="t2">         
        <h1>Supertrend Intraday with EMA Crossover</h1>
        <p>Supertrend is a huge hit in new traders for trading intraday or swing trades. I think when ever a new trader comes across supertrend indicator their first thought is they have found the holy grail. Not sure if its a holy grail or not, but can definitely be used as a good indicator in intraday strategies.</p>
        <img src="img/s2.jpg" class="img-fluid pb-4">
        <p>Supertrend EMA intraday trading strategy
            This supertrend intraday strategy uses 2 primary indicators supertrend with default settings of [7,3] and EMA crossover of 50 EMA and 13 EMA.</p><p> You can change the values for EMAs and supertrend to test out separate scenarios.
Also you can use SMA instead of EMA if you are more comfortable with that.</p>
        <h5>Timeframe:</h5>   
        <p>This is an intraday trading system and timeframe used for the same is 5 mins candlestick charts.</p>
        <h5>Setup:</h5>
        <ol>
            <li>
                <p> <b>Neutral Setup: </b> ime less than 9:30 AM or more than 2:30 PM. That is to say we wait 15 minutes for market to settle after opening and after 2:30 there is not much time left for market to close so we do not take a trade after that.
</p><p>Also if 13 EMA is below 50 EMA but price is above supertrend or 13 EMA is above 50 EMA but price is below supertrend. Since both the indicators are shwoing different trends, this is also a neutral setup and no trades are placed in that time.</p>
            </li>
            <li>
                <p><b>Long Setup:</b> Time between 9:30 AM to 2:30 PM. Price above supertrend and 13 EMA above 50 EMA.</p>
            </li>
            <li>
                <p><b>Short Setup:</b> Time between 9:30 AM to 2:30 PM. Price is below supertrend and 13 EMA below 50 EMA.</p>
            </li>
        </ol>
        <h5>Entry:</h5>
       



<p>The entry in the supertrend intraday trading strategy is on breakout of day high or low. If day high or low is already broken entry is made as soon as setup completes.</p>



<ol><li>Neutral Setup: No orders are placed, wait for a long or short setup to form.</li><li>Long Setup: Place order at break of day high. If high is already broken when setup happens, enter at close of 5 minute candle.</li><li>Short Setup: Place order at break of day low. If low is already broken when setup happens, enter at close of 5 minute candle.</li></ol>



<p>This is a supertrend intraday breakout system so we keep the order on breakout. You can manually observe and wait for breakout then place limit or market orders directly, but that requires heavy monitoring of charts so I do not recommend that.</p>



<h4>Risk Management:</h4>



<p>Risk is something that creates drawdown so it is recommended to backtest this system and then plan what risk you are comfortable with. But in general terms a risk of 2 percent generally goes down well with most system, with the only condition that you have sufficient balance to not go out of business in case of prolonged drawdown.</p>



<h4>Position Size:</h4>



<p><a >Position Size</a> for this system will be based on risk and stop loss. The basic formula for position sizing will be [(total risk )/abs(entry-stop loss)]. The position size will keep changing for us after a setup, after every new candle. This is because the stop loss we are going to use will be based supertrend line.</p>



<h4>Exit:</h4>



<p>Exit of this system is going to be stop loss or the trailing stop loss. Trailing stop loss will be the supertrend indicator. Also if trailing stop loss is not triggered, enter when market closes or 15 mins before it.</p>
<div class="addtoany_share_save_container addtoany_content addtoany_content_bottom"><div class="a2a_kit a2a_kit_size_32 addtoany_list" data-a2a-url="https://equrve.com/trading-strategies/intraday-trading-strategies/supertrend-intraday-system-with-ema-crossover" data-a2a-title="Supertrend Intraday System with EMA Crossover"><a class="a2a_button_facebook" href="https://www.addtoany.com/add_to/facebook?linkurl=https%3A%2F%2Fequrve.com%2Ftrading-strategies%2Fintraday-trading-strategies%2Fsupertrend-intraday-system-with-ema-crossover&amp;linkname=Supertrend%20Intraday%20System%20with%20EMA%20Crossover" title="Facebook" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_twitter" href="https://www.addtoany.com/add_to/twitter?linkurl=https%3A%2F%2Fequrve.com%2Ftrading-strategies%2Fintraday-trading-strategies%2Fsupertrend-intraday-system-with-ema-crossover&amp;linkname=Supertrend%20Intraday%20System%20with%20EMA%20Crossover" title="Twitter" rel="nofollow noopener" target="_blank"></a><a class="a2a_button_email" href="https://www.addtoany.com/add_to/email?linkurl=https%3A%2F%2Fequrve.com%2Ftrading-strategies%2Fintraday-trading-strategies%2Fsupertrend-intraday-system-with-ema-crossover&amp;linkname=Supertrend%20Intraday%20System%20with%20EMA%20Crossover" title="Email" rel="nofollow noopener" target="_blank"></a><a class="a2a_dd addtoany_share_save addtoany_share" href="https://www.addtoany.com/share"></a></div></div>                             
                        </div>
                                                
                    
    </div>
 
        </div>
        </div>
</div>
   
</body>
</html>



