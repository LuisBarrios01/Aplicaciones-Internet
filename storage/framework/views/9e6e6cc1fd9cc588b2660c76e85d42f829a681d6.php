<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body style="background-color: #c8d6e5;">
<nav class="navbar navbar-expand-lg navbar-light  navbar-fixed-top" style="background-color: #54a0ff;">
<a class="navbar-brand" href="<?php echo e(url('/')); ?>" style="padding-left: 50px;"><b><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16">
  <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z"/>
</svg> MERCOSUR</b> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16">
  <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z"/>
</svg> </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0" style="padding-left: 120px;">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(url('/paises')); ?>"><b>Paises</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(url('/productos')); ?>"><b>Productos</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(url('/reuniones')); ?>"><b>Reuniones</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo e(url('/decisiones')); ?>"><b>Decisiones</b></a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="" aria-label="">
        <button class="btn btn-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>


<?php $__env->startSection('content'); ?>

<!-- <div class="container">
<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="https://www.mercosur.int/wp-content/uploads/2018/10/mercosur-imagen-seo-1.png" class="card-img-top" height="290px">
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://cdnmundo1.img.sputniknews.com/img/07e5/03/10/1110043710_0:661:3195:1939_1920x0_80_0_0_862b636b466432a4eea4e1fd05952456.jpg" class="card-img-top" width="60%" height="290px">
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="https://i1.wp.com/blog.realinstitutoelcano.org/wp-content/uploads/2017/07/Cumbre-Mercosur-2017-CasaRosada.jpg?fit=600%2C380&ssl=1" class="card-img-top" height="290px">
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="data:image/jpeg;base64,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" class="card-img-top" height="290px">
  </div>
</div>
<div class="d-grid gap-2 col-6 mx-auto">
<a href="<?php echo e(url('/paises')); ?>" class="btn btn-primary">Ingresar</a>
</div>  -->

<div class="container">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img height="400" width="100" src="https://www.mercosur.int/wp-content/uploads/2018/12/LogoMERCOSUR_ES.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img height="400" width="200" src="https://www.mercosur.int/wp-content/uploads/2018/12/LogoMERCOSUR_ES.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>

</body>
</div>
</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\BDA\Laravel\proyecto\resources\views/home.blade.php ENDPATH**/ ?>