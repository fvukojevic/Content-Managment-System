<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/resources/assets/img/favicons/favicon.ico">

    <title>FSR CMS | Dobrodošli!</title>

    <!-- Bootstrap CSS -->
    <link href="<?php echo e(url('/resources/dist/css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('/resources/dist/css/bootstrap.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('/resources/dist/css/bootstrap-grid.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('/resources/dist/css/bootstrap-grid.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('/resources/dist/css/bootstrap-reboot.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(url('/resources/dist/css/bootstrap-reboot.min.css')); ?>" rel="stylesheet">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo e(url('/dist/css/AdminLTE.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(url('/dist/css/skins/skin-blue.min.css')); ?>">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo e(url('/bower_components/font-awesome/css/font-awesome.min.css')); ?>">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?php echo e(url('/bower_components/Ionicons/css/ionicons.min.css')); ?>">


    <!-- CSS za FSRCMS -->
    <link href="<?php echo e(url('/resources/fsrcms.css')); ?>" rel="stylesheet">
    <style type="text/css"> .btn-file {
            position: relative;




        }
        .btn-file input[type=file] {
            position: absolute;
            top: 0;
            right: 0;

            font-size: 100px;
            text-align: right;
            filter: alpha(opacity=0);
            opacity: 0;
            outline: none;
            background: white;
            cursor: inherit;
            display: block;
        }</style>

</head>

<body>

<?php echo $__env->make('layouts.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('layouts.slider', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<hr>

<main role="main">
    <div class="container">

        <div class="row" >
            <!-- SADRZAJ -->
            <div class="col-sm-8">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
            <!-- KRAJ -->

            <!-- SIDEBAR -->
            <div class="col-sm-4">
                <div class="jumbotron" style="padding-top:15px;">
                    <aside>
                        <?php echo $__env->make('sidebar.categories', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <hr>
                        <?php echo $__env->make('sidebar.archive', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <hr>
                        <?php echo $__env->make('sidebar.socialNetworks', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    </aside>
                </div>
            </div>
            <!-- SIDEBAR KRAJ-->
        </div>

    </div>

</main> <!-- KRAJ MAINA -->

<?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="<?php echo e(url('/resources/assets/js/vendor/jquery.min.js')); ?>"><\/script>')</script>
<script src="<?php echo e(url('/resources/assets/js/vendor/popper.min.js')); ?>"></script>
<script src="<?php echo e(url('/resources/dist/js/bootstrap.min.js')); ?>"></script>
</body>
</html>