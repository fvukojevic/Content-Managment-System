<div class="sidebar-module">
    <h4>Arhiva</h4>
    <ol class="list-unstyled">
        <?php $__currentLoopData = $archives; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $archive): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><a href="/fsr-cms/public/?month=<?php echo e($archive['month']); ?>&year=<?php echo e($archive['year']); ?>"><?php echo e($archive['month'] . ' ' .  $archive['year']); ?></a></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ol>
</div>