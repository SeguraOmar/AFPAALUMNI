<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style/style.css">
    <title>Document</title>
</head>
<body>
<?php include './components/navbar.php'; ?> 




<div class="container mt-4">
    <div class="row">
        <?php
        include 'assets/data/data.php';

        foreach ($data as $personne) {
            echo "<div class='col-md-4 mb-4'>";
            echo "<div class='card'>";
            echo "<img src='assets/img/{$personne['image']}' class='card-img-top' alt='{$personne['name']}'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>{$personne['name']}</h5>";
            echo "<p class='card-text'><strong>Téléphone:</strong> {$personne['phone']}</p>";
            echo "<p class='card-text'><strong>Email:</strong> {$personne['email']}</p>";
            echo "<p class='card-text'><strong>Région:</strong> {$personne['region']}</p>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
        ?>
    </div>
</div>




<?php include './components/footer.php'; ?> 
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-eS5k+dvQQBO3OFL5HlyFl/3ERWCD3IwUQerWYAAe1zVo6z9LQ+8YMyaSEbMOWw"
    crossorigin="anonymous"></script>
</body>
</html> 