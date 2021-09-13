<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>  3D Contacts Page  </title>
    <!-- Style.css -->
     <link rel="stylesheet" href="resources/css/style.css"> 
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body>
    
<div class="container">
    <div class="menu">
        <div class="menuFront"><i class="fas fa-map-marker-alt"></i></div>
        <div class="menuBack"><?=$data['location']?></div>
    </div>
    <div class="menu">
        <div class="menuFront"><i class="fab fa-github"></i></div>
        <div class="menuBack"><?=$data['github']?></div>
    </div>
    <div class="menu">
        <div class="menuFront"><i class="fab fa-instagram"></i></div>
        <div class="menuBack"><?=$data['instagram']?></div>
    </div>
</div>

</body>
</html>




