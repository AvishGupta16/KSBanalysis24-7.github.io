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
       .q1{
           background-color: black;
           color: blue;
           margin: 0;
           padding: 0;
           box-sizing: border-box;
           font-family: 'poppins',sans-serif;
           display: flex;
           justify-content: center;
           align-items: center;
           min-height: 100vh;
          
             
                 }
                 .list{
                     position: relative;
                 }
                 .list h2{
                     position: relative;
                     color: blue;
                     font-weight: 500;
                     letter-spacing: 1px;
                         
                 }
                 .list ul{
                     position: relative;
                     margin-top: 20px;
                 }
                 .list ul li{
                     position: relative;
                     left: 0;
                     color: #999;
                     list-style: none;
                     margin: 4px 0;
                     border-left: 2px solid blue;
                     transition: 0.5s;
                     cursor: pointer;
                 }
                 .list ul li:before
                 {
                     content: '';
                     position: absolute;
                     width:100%;
                     height: 100%;
                     background: white;
                     transform: scaleX(0);
                     transform-origin:left;
                     transition: 0.5s;
                 }
                 .list ul li:hover::before{
                     transform: scaleX(1);
                 }
                 .list ul li:hover
                 {
                     left: 10px;
                 }
                 .list ul li span{
                     position: relative;
                     padding: 8px;
                     display: inline-block;
                     z-index: 1;
                     transition: 0.5s;
                 }
                 .listul li:hover span{
                     color: red;
                 }
   </style>
    </head>
    <body>
        <div class="q1"> <div class="list">
          
                              <h2> Why Join KSB Analysis:</h2>
                   
                    <ul>
                        <li><span>WE SAVE YOUR MONEY</span></li>
                        <li><span>WE SAVE YOUR TIME</span></li>
                        <li><span>WE DO THE HARD WORK</span></li>
                        <li><span>WE ARE CONSISTENT</span></li>
                        <li><span>24/7 SUPPORT</span></li>
                    </ul>
                    
                    
                    <a href="about.php"class="btn btn-outline-success">More Details</a>
                </div>
            </div>
           
    </body>
</html>
