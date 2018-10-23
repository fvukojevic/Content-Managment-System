<?php $__env->startSection('content'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Početna Stranica

            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>Pocetak</a></li>
                <li class="active">Pocetna</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-aqua">
                        <div class="inner">
                            <h3><?php echo e($numofPosts); ?></h3>

                            <p>Objava</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-file-o"></i>
                        </div>
                        <a href="<?php echo e(url('/admin/posts')); ?>" class="small-box-footer">Više <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-green">
                        <div class="inner">
                            <h3><?php echo e($numofComments); ?></h3>

                            <p>Komentara</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-comment"></i>
                        </div>
                        <a href="#" class="small-box-footer">Više <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow">
                        <div class="inner">
                            <h3><?php echo e($numofUsers); ?></h3>

                            <p>Korisnika Registrirano</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="<?php echo e(url('/admin/users')); ?>" class="small-box-footer">Više <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red">
                        <div class="inner">
                            <h3><?php echo e($numOfCategories); ?></h3>

                            <p>Kategorija</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="<?php echo e(url('/admin/categories/add')); ?>" class="small-box-footer">Više <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
            </div>

        </section>

        <div class="col-md-6" style="margin-top:-30px">
            <div class="box box-primary">
                <div class="box-header">
                    <i class="ion ion-clipboard"></i>

                    <h3 class="box-title">Podsjetnik</h3>
                    <form method="POST" action="<?php echo e(url('/reminder/create')); ?>">
                        <?php echo e(csrf_field()); ?>

                        <div class="input-group margin">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-warning">Dodaj podsjetnik</button>
                            </div>
                            <input title="podsjetnik" type="text" id="dodaj_podsjetnik" name="name" class="form-control">
                        </div>
                    </form>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <ul class="todo-list">
                        <?php $__currentLoopData = $reminders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reminder): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                        <span class="handle">
                        <i class="fa fa-ellipsis-v"></i>
                        <i class="fa fa-ellipsis-v"></i>
                      </span>
                                <span class="text"><?php echo e($reminder->name); ?></span>
                                <small class="label label-info"><i
                                            class="fa fa-clock-o"></i> <?php echo e($reminder->created_at->diffForHumans()); ?>

                                </small>
                                <div class="tools">
                                    <a href="<?php echo e(url('/reminder/edit/')); ?>/<?php echo e($reminder->id); ?>"><i class="fa fa-edit"></i></a>
                                    <a href="<?php echo e(url('/reminder/delete/')); ?>/<?php echo e($reminder->id); ?>"> <i class="fa fa-trash-o"></i></a>
                                </div>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix no-border">
                    <div class="pull-right inline">
                        <?php echo e($reminders->links()); ?>

                    </div>
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- ./wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>