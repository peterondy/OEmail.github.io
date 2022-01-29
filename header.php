<?php include 'init.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="<?php echo $css . 'main.css'; ?>">
    <link rel="stylesheet" href="<?php echo $css . 'style.css'; ?>">

    <title>Registre Email</title>
</head>
<body>
    
<header class="row" style="margin: 0 !important;">
  <nav class="navbar float-start navbar-expand-lg navbar-light bg-light col-md-12">
    <div class="container-fluid col-md-9 col-sm-9">
      <a class="float-start fs-2" href="index.php">Online Registration Email</a>
    </div>
      <a href="create.php" id="create" class="col-md-1 col-sm-2 fs-2">Create</a>
  </nav>      
</header>