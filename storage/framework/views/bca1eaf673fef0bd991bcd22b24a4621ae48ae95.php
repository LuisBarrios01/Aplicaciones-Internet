<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<?php $__env->startSection('content'); ?>
<br>
<h1 class="text-success"><b>Lista de Productos</b></h1>
<br>

<body style="background-color: #c8d6e5;">
<table class="table table-bordered border-secondary" id="tableProductos">
  <thead>
    <tr>
        <th class="text-center text-success border-secondary" style="background-color: #F0F4C3;"><b>Codigo</b></th>
        <th class="text-center text-success border-secondary" style="background-color: #F0F4C3;"><b>Nombre</b></th>
        <th class="text-center text-success border-secondary" style="background-color: #F0F4C3;"><b>Fecha de Exportacion</b></th>
        <th class="text-center text-success border-secondary" style="background-color: #F0F4C3;"><b>Pais de Origen</b> </th>
        <th class="text-center text-success border-secondary" style="background-color: #F0F4C3;"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-award-fill" viewBox="0 0 16 16">
          <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
          <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
          </svg> <b>Descripcion</b> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-award-fill" viewBox="0 0 16 16">
          <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
          <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
    </svg> </th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
        <td class="text-center border-success" style="background-color: #F5F5F5;"><b><?php echo e($producto->idproducto); ?></td>
            <td class="text-center border-success" style="background-color: #F5F5F5;"><b><?php echo e($producto->nombre); ?></td>
            <td class="text-center border-success" style="background-color: #F5F5F5;"><b><?php echo e($producto->fecha_exportacion); ?></td>
            <td class="text-center border-success" style="background-color: #F5F5F5;"><b><?php echo e($producto->pais_origen); ?></td>
            <td class="text-center border-success" style="background-color: #F5F5F5;"><b><?php echo e($producto->descripcion); ?></td>
            <td>
                <a href="<?php echo e(route('productos.show', $producto->idproducto)); ?>" class="btn border-dark text-light bg-success">Ver</a>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>
<?php $__env->stopSection(); ?>
</body>
<?php echo $__env->make('app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\BDA\Laravel\proyecto\resources\views/productos/index.blade.php ENDPATH**/ ?>