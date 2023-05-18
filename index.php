<?php

include './Views/header.php';
?>

<?php

include __DIR__ . '/Database/db.php';


?>
 <main class="container">
   <div class="row">
    
        <?php foreach ($products as $product) { ?>
        <div class="col col-lg-4">
                    <div class="card p-3 ms-3 mt-4">
                        <div class="card-img">
                            <img class="img-fluid" src=<?php echo $product->image; ?> alt="">
                               <?php try{
                                echo $product->getIcon();
                               } catch (Exception $e) {
                                  echo 'Immagine mancante';
                               }
                                ?>
                            
                        </div>

                        <div class="card-body mt-3">
                            <h1 class="card-title fs-3"> <?php echo $product->title ?></h1>
                            <p> Prezzo:<?php echo $product->price ?>€</p>
                            <p> Genere: <?php echo $product->category->genre ?></p>
                            <p> Tipologia: <?php echo $product->category->type ?></p>
                            <p> peso: <?php echo $product->category->weight ?>kg</p>
                           

                        </div>


                    </div>
        </div>
         <?php } ?>
   
   </div>
 </main>
<?php
include './Views/footer.php';
?>