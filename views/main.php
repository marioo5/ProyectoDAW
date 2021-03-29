 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shareboard</title>
    <link rel="stylesheet" href="<?php echo ROOT_PATH;?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo ROOT_PATH;?>assets/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Shareboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo ROOT_URL;?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo ROOT_URL;?>shares">Shares</a>
        </li>
        <?php if(isset($_SESSION['is_logged_in'])) : ?>
          <li class="nav-item">
          <a class="nav-link " href="<?php echo ROOT_URL;?>">Welcome <?php echo $_SESSION['user_data']['name']; ?></a>
        </li>
        <li class="nav-item">
        <a class="nav-link " href="<?php echo ROOT_URL;?>users/logout">Logout</a>
        </li>
        <?php else : ?>
        <li class="nav-item">
          <a class="nav-link " href="<?php echo ROOT_URL;?>users/login">Login</a>
        </li>
        <li class="nav-item">
        <a class="nav-link " href="<?php echo ROOT_URL;?>users/register">Register</a>
        </li>
        <?php endif; ?>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<main class="container">

  <div class="starter-template text-center py-5 px-3">
    <?php Messages::display(); ?>
    <?php require ($view);?>
  </div>

</main><!-- /.container -->
</body>
</html>

