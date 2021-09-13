<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>  List Page  </title>
    <!-- Style.css -->
     <link rel="stylesheet" href="resources/css/style-index.css"> 
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body>
    
<main>
  <ol class="gradient-list">
    <?php foreach ($listData as $data): ?>
      <li><?=$data?></li>
    <?php endforeach; ?>
  </ol>
</main>

</body>
</html>




