<div class="sidebar-module">
    <h4>Kategorije</h4>
    <ol class="list-unstyled">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><a href="/fsr-cms/public/category/<?php echo e($category->name); ?>"> <?php echo e($category->name); ?> </a></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ol>
</div>