<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<?php $__env->startSection('content'); ?>
<br>
<h1 class="text-success">
<b>Producto: <?php echo e($producto->producto); ?></b>
</h1>
<br>

<body style="background-color: #c8d6e5;">
<div class="card border-secondary mb-3" style="max-width: 30rem;">
<div class="card-body text-secondary">
  <p><b>Id Producto: <?php echo e($producto->idproducto); ?></b></p>
  <p><b>Nombre: <?php echo e($producto->nombre); ?></b></p>
  <p><b>Fecha de Exportacion: <?php echo e($producto->fecha_exportacion); ?></b></p>
  <p><b>Pais de Origen: <?php echo e($producto->pais_origen); ?></b></p>
  <p><b>Pais de Importacion: <?php echo e($producto->pais_importacion); ?></b></p>
  <p><b>Descripcion: <?php echo e($producto->descripcion); ?></b></p>
<hr>
<div class="" style="text-align:center">
  <a href="<?php echo e(route('productos.index')); ?>" class="btn btn-success">Volver al índice</a>
  <a href="<?php echo e(route('productos.show', $producto->idproducto)); ?>" class="btn btn-success">Recargar</a>
<?php $__env->stopSection(); ?>
</div>
</div>
</div>
</body>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\BDA\Laravel\proyecto\resources\views/productos/show.blade.php ENDPATH**/ ?>