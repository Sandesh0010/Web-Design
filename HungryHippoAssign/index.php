 <?php
$hostname="localhost";
$db_username="root";
$db_password="root";
$db_name="hungry_hippo";

$conn=mysqli_connect($hostname,$db_username,$db_password,$db_name);
// var_dump($conn);
$query="SELECT * FROM foods order by createdAt DESC";
$result=mysqli_query($conn,$query);
$rows=mysqli_fetch_all($result, MYSQLI_ASSOC);

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hungry Hippo | Sandesh Khanal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</head>

<body class="container">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/add-product.php">Add Products</a>
     
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li> -->
      </ul>
    </div>
  </div>
</nav>
  <div class="row">
        <?php foreach ($rows as $data): ?>

    <div class="card" style="width: 18rem;">
    <img src="<?=$data["imageURL"];?>" class="card-img-top" alt="... " width="400" height="200">
    <div class="card-body">
      <h3 class="card-title"><?=$data["name"];?> </h3>
      <h4> <?= $data["category"] ?> </h4>
      <h5> Rs  <?=$data["price"]*134?></h5>
    
  
<?php if ($data["recommendedForKid"] == 1) {
          echo '<span class="badge bg-success">Recommended for kids</span>';
          
        } else{
          echo '<span class="badge bg-danger">Not recommended for kids</span>';
        } ?>
</div>


      <div>
      <button type="button" class="btn btn-danger">Delete</button>
      <button type="button" class="btn btn-primary">Edit</button>
       </div>

    <div class="card-footer">
   
          <h6> <small class="text-body-secondary">  <?=$data["nutritionInfo"] ?> </small> </h6>

      
    </div>
  </div>
      
  <?php  endforeach;  ?>
      </div>
</body>
</html>