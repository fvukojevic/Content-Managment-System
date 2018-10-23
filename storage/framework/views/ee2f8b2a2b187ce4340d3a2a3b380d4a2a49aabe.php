<?php $__env->startSection('content'); ?>
    <h1>Novi Tag</h1>

    <hr>

    <form method="POST" action="<?php echo e(('/public/tag/create')); ?>">
        <?php echo e(csrf_field()); ?>

        <div class="form-group">
            <label for="name">Ime Taga: </label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Pohrani</button>
        </div>
        <?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>