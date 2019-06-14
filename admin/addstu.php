

 <!DOCTYPE html>
 <html>
 <head>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <link href="css/style1.css" rel='stylesheet' type='text/css' />
  <!--// Stylesheets -->
  <!--fonts-->
  <link href="//fonts.googleapis.com/css?family=Poiret+One&amp;subset=cyrillic,latin-ext" rel="stylesheet">

  <title></title>
 </head>
 <body>
  <h1 style="float: left;"><a href="admindash.php" style="color: white;">Back</a></h1>

   <h1 style="float: right;"><a href="logout.php" style="color: white;">Logout</a></h1>
     <h1>Welcome to Admin Dashboard</h1>
    <div class="w3ls-login box box--big">

  <form action="adds.php" method="POST">
      <div class="agile-field-txt">
      <label>Roll No.</label>
        <input type="text" name="rollno" placeholder="Enter Roll No." required>
      </div>
      <div class="agile-field-txt">
        <label>Name</label>
        <input type="text" name="name" placeholder="Enter your Name" required="" />
      </div>
      <div class="agile-field-txt">
        <label>Standard</label>
        <input type="text" name="std" placeholder="Enter your Standard" required="" />
      </div>
      <div class="agile-field-txt">
        <label>City</label>
        <input type="text" name="city" placeholder="Enter your City" required="" />
      </div>
      <div class="agile-field-txt">
        <label>Contact no</label>
        <input type="text" name="pcon" placeholder="Enter your Contact no" required="" />
      </div>
      <input type="submit" value="Submit" name="Submit">

    
  </form>
 </div>
 </body>
 </html>

 
