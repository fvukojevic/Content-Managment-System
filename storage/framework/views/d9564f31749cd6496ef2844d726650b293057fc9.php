<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
        <div class="logo-container ">
            <div class="logo">
                <img src="<?php echo e(url('/resources/assets/img/fsrcmslogo.png')); ?>" alt="FSRcms LOGO" rel="tooltip">
            </div>
        </div>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php echo e(Request::is('/') ? 'active' : ''); ?> }}">
                <a class="nav-link" href="<?php echo e(url('/')); ?>">Početna <span class="sr-only">(current)</span></a>
            </li>
            <?php $__currentLoopData = $menuCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="nav-item <?php echo e(Request::segment(2) === $menuCategory->name ? 'active' : ''); ?>">
                    <a class="nav-link" href="<?php echo e(url('/category')); ?>/<?php echo e($menuCategory->name); ?>"><?php echo e($menuCategory->name); ?></a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </ul>
        <form class="form-inline my-2 my-lg-0 pomakni">
            <?php if(Auth::check()): ?>

                <div class="btn-group">
                    <button type="button" class="btn btn-luksha dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        <?php echo e(Auth::user()->name); ?>

                    </button>
                    <div class="dropdown-menu" style="right: 0; left: auto;">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('moderator-access')): ?>
                        <a class="dropdown-item" href="<?php echo e(url('/admin')); ?>">Administracija</a>
                        <?php endif; ?>
                        <a class="dropdown-item" href="<?php echo e(url('/profile/edit')); ?>">Moj profil</a>
                        <a class="dropdown-item" href="<?php echo e(url('/logout')); ?>">Odjava</a>

                    </div>
                </div>



            <?php else: ?>
                <a href="<?php echo e(url('/login')); ?>" class="btn btn-light" type="submit" style="margin-right:8px;">Prijava</a>
                <a href="<?php echo e(url('/register')); ?>" class="btn btn-luksha" type="submit">Registriracija</a>
            <?php endif; ?>

        </form>
    </div>
</nav>