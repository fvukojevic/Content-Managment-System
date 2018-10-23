<header>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li data-target="#myCarousel" data-slide-to="<?php echo e($loop->index); ?>" class="<?php echo e($loop->first ? 'active' : ''); ?>"></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ol>

        <div class="carousel-inner" role="listbox">
            <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="carousel-item <?php echo e($loop->first ? ' active' : ''); ?>" >
                    <img src="<?php echo e($slide->image); ?>" alt="<?php echo e($slide->title); ?>">
                    <div class="container">
                        <div class="carousel-caption text-center">
                            <h1><?php echo e($slide->title); ?></h1>
                            <p><?php echo e($slide->body); ?></p>
                            <p><a class="btn btn-lg btn-luksha" href="<?php echo e($slide->button_link); ?>" role="button"><?php echo e($slide->button_title); ?></a></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>


        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Naprijed</span>
        </a>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Nazad</span>
        </a>
    </div>

    <div class="container">

        <div class="starter-template">
            <h1>FSR CMS</h1>
            <p class="lead">RWA 2017/2018</p>
        </div>

    </div><!-- /.container -->
</header>