<!DOCTYPE html>
<html lang="en">
<head>
  <title>Modern Index Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <link rel="stylesheet" href="stylesindex.css">

</head>
<body>

<header class="jumbotron text-center text-white mb-0">
  <h1>Welcome to MySite</h1>
  <p>Explore. Learn. Grow.</p>
</header>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
  <a class="navbar-brand" href="#">MySite</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Login.php">Login</a>
      </li>
    </ul>
  </div>  
</nav>

<div class="container mt-4">
  <div class="row">
    <div class="col-md-4">
      <h2 class="text-info">About Me</h2>
      <img src="your-photo.jpg" alt="About Me" class="img-fluid rounded shadow-sm mb-3">
      <p class="text-white">Welcome to my personal space. I am here to share my journey and projects.</p>
      <h3 class="text-info">Quick Links</h3>
      <ul class="list-group">
        <li class="list-group-item bg-dark text-info"><a href="#" class="text-info text-decoration-none">Home</a></li>
        <li class="list-group-item bg-dark text-info"><a href="#" class="text-info text-decoration-none">Profile</a></li>
        <li class="list-group-item bg-dark text-info"><a href="#" class="text-info text-decoration-none">Projects</a></li>
        <li class="list-group-item bg-dark text-muted">Disabled</li>
      </ul>
    </div>
    <div class="col-md-8">
      <h2 class="text-info">Latest Blog</h2>
      <div class="card bg-dark text-white mb-4">
        <div class="card-header bg-info">Dec 7, 2017</div>
        <div class="card-body">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae nisi id libero facilisis fermentum.</p>
        </div>
      </div>
      <h2 class="text-info">Another Post</h2>
      <div class="card bg-dark text-white mb-4">
        <div class="card-header bg-info">Sep 2, 2017</div>
        <div class="card-body">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vitae nisi id libero facilisis fermentum.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<footer class="bg-dark text-white text-center py-3">
  <p>© 2024 MySite | Designed with ❤️ by You</p>
</footer>

</body>
</html>
