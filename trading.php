<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.b {
  background-color: lightblue;
  border: none;
  color: black;
  font-family: bold;
  height: 100px;
  width: 400px;
  text-align: center;
  font-size: 32px;
  margin-left: 30px;
  margin-right: 0px;
  margin-top: 10px;
  margin-bottom: 10px;
  opacity: 0.6; 
  transition: 0.3s;
}

.b:hover {opacity: 2}
.t{
    margin: 10px;
    color: red;
    background-color: white; 
}
.t1{
    background-color: white;
}
</style>
</head>
<body>
    <div class="t1">
<?php include 'upper.php'; ?>    
    <div class="t">
        <center><h2>Trading Stragey</h2></center></div>

    <a href="trade1.php"><button class="b">Golden Crossover</button></a>
    <a href="trade4.php"> <button class="b">5 Strategies</button></a>
    <a href="trade3.php"><button class="b">Pivot Points</button></a>
    <a href="trade2.php"><button class="b">Supertrend with Ema</button></a>
    <button class="b">Coming Soon!!!</button>
<button class="b">Coming Soon!!!</button>

<div class="t">
    <a> <center><h2> Option Trading Stragey</h2></center></div>

<a href="op1.php"><button class="b">Covered Call</button></a>
<a href="op2.php"><button class="b">Married Put</button></a>
<a href="op3.php.php"><button class="b">Bull Call Spread</button></a>
<a href="op4.php"><button class="b">Bear Put Spread</button></a>
<a href="op4.php"><button class="b">Protective Collar</but</a>
<button class="b">Coming Soon!!!</button>
</div>
</body>

</html>