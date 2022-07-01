<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   <title>les delices Alloco</title>
</head>
<body>
<div class="container-fluid p-5 bg-primary text-white text-center">
  <h1>Alloco Chaud</h1>
  <p>Les délices de Hari Food!</p> 
  
</div>

<div class="container mt-3">
<?php
include("nav.php");

?>
</div>

   
</body>
</html>

<?php
if (isset($_GET["id"])){
   $id=$_GET["id"];
}

if($id==1) {
  include("present.php");


}
elseif ($id==2) {
  include("description.php");

}
else {
  include("astuce.php");
 
}

?>




