<?php 
require_once ('php/CreateDb.php');
$database = new CreateDb("Productdb","Producttb",);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gjirafa 70 BETA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<script src="https://kit.fontawesome.com/99ed0f49ff.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<div class="container">
    <div class="row text-center py-5"> 
        
             <div class="col-md-3 col-sm-6 my-3 my-md-0">
                 <form action="index.php" method="POST">
                     <div class="card shadow">
                         <div>
                             <img src="img/product1.webp" alt="image1" class="img-fluid card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">HyperX Cloud II</h5>
                            <h6>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                
                            </h6>
                            <p class="card-text">
                               Be the first player to hear everything inside the game
                            </p>
                            <h5>
                                <small><s class="text-secondary">$250</s></small>
                                <span class="price">$100</span>
                            </h5>
                            <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                        </div>

                     </div>
                 </form>
             </div>
             <div class="col-md-3 col-sm-6 my-3 my-md-0">
             <form action="index.php" method="POST">
                     <div class="card shadow">
                         <div>
                             <img src="img/product2.webp" alt="image1" class="img-fluid card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">HyperX Cloud II</h5>
                            <h6>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                
                            </h6>
                            <p class="card-text">
                               Be the first player to hear everything inside the game
                            </p>
                            <h5>
                                <small><s class="text-secondary">$250</s></small>
                                <span class="price">$100</span>
                            </h5>
                            <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                        </div>

                     </div>
                 </form>

             </div>
             <div class="col-md-3 col-sm-6 my-3 my-md-0">
             <form action="index.php" method="POST">
                     <div class="card shadow">
                         <div>
                             <img src="img/product3.webp" alt="image1" class="img-fluid card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">HyperX Cloud II</h5>
                            <h6>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                
                            </h6>
                            <p class="card-text">
                               Be the first player to hear everything inside the game
                            </p>
                            <h5>
                                <small><s class="text-secondary">$250</s></small>
                                <span class="price">$100</span>
                            </h5>
                            <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                        </div>

                     </div>
                 </form>
            

             </div>
             <div class="col-md-3 col-sm-6 my-3 my-md-0">
             <form action="index.php" method="POST">
                     <div class="card shadow">
                         <div>
                             <img src="img/product5.webp" alt="image1" class="img-fluid card-img-top">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">HyperX Cloud II</h5>
                            <h6>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                
                            </h6>
                            <p class="card-text">
                               Be the first player to hear everything inside the game
                            </p>
                            <h5>
                                <small><s class="text-secondary">$250</s></small>
                                <span class="price">$100</span>
                            </h5>
                            <button type="submit" class="btn btn-warning my-3" name="add">Add to Cart <i class="fas fa-shopping-cart"></i></button>
                        </div>

                     </div>
                 </form>
            

             </div>
    </div>
</div>



</body>
</html>
