<!DOCTYPE html>
<html lang="">
    <?php 
  $name =  $_POST["firstname"]
      ?>
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
   <script src="http://code.jquery.com/jquery-latest.js"></script>
     <script>
     $( document ).ready(function() {

});
   
    </script>
</head>

<body>
  <?php 
    echo "<script>var name =".$name.";</script>";
    ?>
    <script>  $('#which').html("name") ;</script>

    <div id="which">hello</div>
</body>
</html>
