<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=  , initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Customer Message</title>
</head>
<body>
     <div class="container mt-5">
         <div class="w-50 mx-auto">
             <h2 class="border-bottom border-secondary pb-1">Customers All Messages</h2>
             <div class="mt-3">
                 <?php
                   define("DB_HOST", "localhost");
                   define("DB_USER", "root");
                   define("DB_PASSWORD", "");
                   define("DB_DATABASE", "carrental");
                   $db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
                 $sql="SELECT * FROM `contactform` ";
                 $query=mysqli_query($db,$sql);
                 while($row= mysqli_fetch_assoc($query)){
                     $EmailOrUsername=$row['email_or_username'];
                     $message=$row['message_text'];
                 
                 ?>
                 <div class="message bg-dark text-light p-2 mb-3">
                     <h4>Name: <?php echo $EmailOrUsername; ?></h4>
                     <p>Message: <?php echo $message; ?></p>
                 </div>
                 <?php } ?>
             </div>
         </div>
     </div>
</body>
</html>