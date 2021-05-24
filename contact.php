<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>text</title>
        
        <style></style> 
    </head>
    <body>
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
    </body>
</html>
