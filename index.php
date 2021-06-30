<?php 
    include __DIR__ . '/partials/creditCard.php';
    include __DIR__ . '/partials/user.php';
    include __DIR__ . '/partials/prodotti.php';
    include __DIR__ . '/partials/premiumuser.php';
    include __DIR__ . '/db/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>OOP 2</title>
</head>
<body>
<div class="product">
    <?php 
        foreach ($prodotti as $product) : ?>
        <h1><?= $product->name;?></h1>
        <p><?= $product->model;?></p>
        <p><?= $product->price;?> &euro; </p>

    <?php endforeach; ?>
</div>
   
        <div class="user">
            <?php 
                foreach ($users as $user) :?>                    
                <h1>Ciao <?= $user->getName()?> <?= method_exists($user, 'isPremium') ? '&star;' : ''?></h1>
                <p><?=  $user->insertCreditCard($card)?></p>
                
            <?php endforeach; ?>
        </div>
   
</body>
</html>