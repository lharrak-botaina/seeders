<!DOCTYPE html>
<html lang="en">
<head>
 <?php echo $__env->make('layouts/head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
  <!-- /.navbar -->
 <?php echo $__env->make('layouts/navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- Main Sidebar Container -->
<?php echo $__env->make('layouts/sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <!-- Content Wrapper. Contains page content -->
<?php echo $__env->yieldContent('content'); ?>



<!-- /.content-wrapper -->
<?php echo $__env->make('layouts/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


  <!-- Control Sidebar -->
<?php echo $__env->make('layouts/scripts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<!-- ./wrapper -->



<!-- Page specific script -->


</html>
<?php /**PATH C:\Users\dell\Desktop\Projet-4-Group\Realisation\API\resources\views/master.blade.php ENDPATH**/ ?>