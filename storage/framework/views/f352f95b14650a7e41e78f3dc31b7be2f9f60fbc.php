
<?php $__env->startSection('content'); ?>
<br>
<h1 class="text-success"> 
<b>Reunión: <?php echo e($reunion->reunion); ?></b>
</h1>
<br>

<body style="background-color: #c8d6e5;"> 
<div class="card border-secondary mb-3" style="max-width: 30rem;">
<div class="card-body text-secondary">
  <p><b>Id Reunion; <?php echo e($reunion->idreunion); ?></b></p>
  <p><b>Fecha de Ingreso: <?php echo e($reunion->fecha_ingreso); ?></b></p>
  <p><b>Fecha de Fin: <?php echo e($reunion->fecha_fin); ?></b></p>
  <p><b>Numero: <?php echo e($reunion->numero); ?></b></p>
  <p><b>Documento Final: <?php echo e($reunion->doc_final); ?></b></p>
  <p><b>Modalidad: <?php echo e($reunion->modalidad); ?></b></p>
  <p><b>Estado: <?php echo e($reunion->estado); ?></b></p>
  <p><b>Cuidad / Pais: <?php echo e($reunion->cuidad_pais); ?></b></p>
<hr>
<div class="" style="text-align:center">
  <a href="<?php echo e(route('reuniones.index')); ?>" class="btn btn-success">Volver al índice</a>
  <a href="<?php echo e(route('reuniones.show', $reunion->idreunion)); ?>" class="btn btn-success">Recargar</a>
<?php $__env->stopSection(); ?>
</div>
</div>
</div>
</body>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\BDA\Laravel\proyecto\resources\views/reuniones/show.blade.php ENDPATH**/ ?>