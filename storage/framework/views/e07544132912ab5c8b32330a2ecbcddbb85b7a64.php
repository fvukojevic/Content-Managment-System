<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

    <a class="navbar-brand" href="/fsr-cms/public">
        <div class="logo-container ">
            <div class="logo">
                <img src="/fsr-cms/public/resources/assets/img/fsrcmslogo.png" alt="FSRcms LOGO" rel="tooltip">
            </div>
        </div>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>


    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/fsr-cms/public">Početna <span class="sr-only">(current)</span></a>
            </li>
            <?php $__currentLoopData = $menuCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $menuCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="nav-item">
                    <a class="nav-link" href="/fsr-cms/public/category/<?php echo e($menuCategory->name); ?>"><?php echo e($menuCategory->name); ?></a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown" aria-haspopup="true"
                   aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="#">Kategorija</a>
                    <a class="dropdown-item" href="#">Kategorija</a>
                    <a class="dropdown-item" href="#">Kategorija</a>
                </div>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0 pomakni">
            <?php if(Auth::check()): ?>

                <div class="btn-group">
                    <button type="button" class="btn btn-luksha dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        <?php echo e(Auth::user()->name); ?>

                    </button>
                    <a id="nightmodeID"><img class="nightmodeCLS" src="/fsr-cms/public/resources/assets/img/brightness.png"></a>
                    <div class="dropdown-menu" style="right: 0; left: auto;">
                        <a class="dropdown-item" href="/fsr-cms/public/admin">Administracija</a>
                        <a class="dropdown-item" href="/fsr-cms/public/profile/edit">Moj profil</a>
                        <a class="dropdown-item" href="/fsr-cms/public/logout">Odjava</a>

                    </div>
                </div>



            <?php else: ?>
                <a href="/fsr-cms/public/login" class="btn btn-light" type="submit" style="margin-right:8px;">Login</a>
                <a href="/fsr-cms/public/register" class="btn btn-luksha" type="submit">Register</a>
                <a id="nightmodeID" style="cursor:pointer;"><img class="nightmodeCLS"
                                                                 src="/fsr-cms/public/resources/assets/img/brightness.png"></a>
            <?php endif; ?>

        </form>
    </div>
</nav>