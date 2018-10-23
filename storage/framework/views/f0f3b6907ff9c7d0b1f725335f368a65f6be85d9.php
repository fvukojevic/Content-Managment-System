<?php $__env->startSection('content'); ?>

    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="blog-post">
            <h2 class="blog-post-title">
            <a href="post/<?php echo e($post->id); ?>" class="blog-post-title"><?php echo e($post->title); ?></a>
            </h2>
            <p class="blog-post-meta">
                <?php echo e($post->created_at->toFormattedDateString()); ?>, autor <?php echo e($post->user->name); ?>


            </p>

            <?php echo e($post->body); ?>


        </div>
        <hr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>