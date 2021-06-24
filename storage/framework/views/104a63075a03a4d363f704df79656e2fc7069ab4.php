<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<?php $__env->startSection('content'); ?>
<br>
<h1>
  Pais: <?php echo e($pais->pais); ?>

</h1>
<br>

<body style="background-color: #c8d6e5;"> 
<div class="card border-secondary mb-3" style="max-width: 30rem;  ">
<div class="card-body text-secondary">
<p><b>Codigo; <?php echo e($pais->idpais); ?></b></p>
<p><b>Nombre: <?php echo e($pais->nombre); ?></b></p>
<p><b>Fecha de Ingreso: <?php echo e($pais->fecha_ingreso); ?></b></p>
<hr>
<div class="" style="text-align:center">
  <a href="<?php echo e(route('paises.index')); ?>" class="btn btn-success">Volver al índice</a>
  <a href="<?php echo e(route('paises.show', $pais->idpais)); ?>" class="btn btn-success">Recargar</a>
<?php $__env->stopSection(); ?>
</div>
</div>
</div>
</body>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\BDA\Laravel\proyecto\resources\views/paises/show.blade.php ENDPATH**/ ?>