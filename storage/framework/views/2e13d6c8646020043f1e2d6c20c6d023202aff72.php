<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<?php $__env->startSection('content'); ?>
<br>
<h1 class="text-success">
<b>Decisiones: <?php echo e($<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<?php $__env->startSection('content'); ?>
<br>
<h1 class="text-success">
<b>Decisiones: {{ $decision->decision); ?></b>
</h1>
<br>

<body style="background-color: #c8d6e5;">
<div class="card border-secondary mb-3" style="max-width: 30rem;">
<div class="card-body text-secondary"> 
  <p><b>Id Decision; <?php echo e($decision->iddecision); ?></b></p>
  <p><b>Numero: <?php echo e($decision->numero); ?></b></p>
  <p><b>Titulo: <?php echo e($decision->titulo); ?></b></p>
  <p><b>Fecha creación: <?php echo e($decision->created_at); ?></b></p>
<hr>
<div class="" style="text-align:center">
  <a href="<?php echo e(route('decisiones.index')); ?>" class="btn btn-success">Volver al índice</a>
  <a href="<?php echo e(route('decisiones.show', $decision->iddecision)); ?>" class="btn btn-success">Recargar</a>
<?php $__env->stopSection(); ?>
</div>
</div>
</div>
</body>->decision}}</b>
</h1>
<br>

<body style="background-color: #c8d6e5;">
<div class="card border-secondary mb-3" style="max-width: 30rem;">
<div class="card-body text-secondary"> 
  <p><b>Id Decision; <?php echo e($decision->iddecision); ?></b></p>
  <p><b>Munero: <?php echo e($decision->numero); ?></b></p>
  <p><b>Titulo: <?php echo e($decision->titulo); ?></b></p>
  <p><b>Fecha creación: <?php echo e($decision->created_at); ?></b></p>
<hr>
<div class="" style="text-align:center">
  <a href="<?php echo e(route('decisiones.index')); ?>" class="btn btn-success">Volver al índice</a>
  <a href="<?php echo e(route('decisiones.show', $decision->iddecision)); ?>" class="btn btn-success">Recargar</a>
<?php $__env->stopSection(); ?>
</div>
</div>
</div>
</body>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\BDA\Laravel\proyecto\resources\views/decisiones/show.blade.php ENDPATH**/ ?>