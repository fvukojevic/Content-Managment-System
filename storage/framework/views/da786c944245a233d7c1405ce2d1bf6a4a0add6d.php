<?php $__env->startSection('content'); ?>
    <h1>Nova objava</h1>

    <hr>

    <form method="POST" action="<?php echo e(('create')); ?>">
        <?php echo e(csrf_field()); ?>

        <div class="form-group">
            <label for="title">Naslov: </label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="body">Sadržaj: </label>
            <textarea id="body" name="body" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Pohrani</button>
        </div>

        <?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>