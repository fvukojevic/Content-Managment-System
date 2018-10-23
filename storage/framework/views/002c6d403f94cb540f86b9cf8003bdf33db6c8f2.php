<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/resources/assets/img/favicons/favicon.ico">

    <title>FSR CMS | Dobrodošli!</title>

    <!-- Bootstrap CSS -->
    <link href="/resources/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/resources/dist/css/bootstrap.css" rel="stylesheet">
    <link href="/resources/dist/css/bootstrap-grid.css" rel="stylesheet">
    <link href="/resources/dist/css/bootstrap-grid.min.css" rel="stylesheet">
    <link href="/resources/dist/css/bootstrap-reboot.css" rel="stylesheet">
    <link href="/resources/dist/css/bootstrap-reboot.min.css" rel="stylesheet">


    <!-- CSS za FSRCMS -->
    <link href="/resources/fsrcms.css" rel="stylesheet">
</head>

<body>

<?php echo $__env->make('layouts.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

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
                        <?php echo $__env->make('sidebar.socialNetworks', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <hr>
                        <?php echo $__env->make('sidebar.archive', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                        <hr>
                        <?php echo $__env->make('sidebar.test', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
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
<script>window.jQuery || document.write('<script src="/resources/assets/js/vendor/jquery.min.js"><\/script>')</script>
<script>
    $(document).ready(function()
    {
        var mode=false;
        $('a[id="nightmodeID"]').click(function()
        {
            if(mode==false)
            {
                $('body').css('background','#142634');
                $('body').css('color','#BDC7C1');
                $('div[class="jumbotron"]').css('background','#142634');
                $('hr').css('background','white');
                $('nav').css('border-bottom','1px solid white');
                $('footer').css('background','#142634');
                $('ul[class="paginator"]').css('background','#142634');
                mode=true;
            }else
            {
                $('body').css('background','#fff');
                $('body').css('color','black');
                $('div[class="jumbotron"]').css('background','#e9ecef');
                $('hr').css('background','grey');
                $('nav').css('background','#343a40');
                $('footer').css('background','#e9ecef');
                mode=false;
            }
        });
    })
</script>
<script src="/resources/assets/js/vendor/popper.min.js"></script>
<script src="/resources/dist/js/bootstrap.min.js"></script>
</body>
</html>