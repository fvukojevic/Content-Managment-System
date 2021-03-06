<?php $__env->startSection('content'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Objave

            </h1>
            <ol class="breadcrumb">
                <li><a href="../Pocetna.html"><i class="fa fa-dashboard"></i> Pocetak</a></li>
                <li class="active">Objave</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Pregled svih objava u našoj bazi.</h3>
                        </div>
                        <!-- /.box-header -->


                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Naslov</th>
                                    <th>Datum Objave</th>
                                    <th>Status</th>
                                    <th>Autor</th>
                                    <th>Upravljanje</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($post->id); ?></td>
                                        <td><?php echo e($post->title); ?></td>
                                        <td><?php echo e($post->created_at->diffForHumans()); ?></td>
                                        <td><span class="label label-success">OBJAVLJENO</span></td>
                                        <td><?php echo e($post->user->name); ?></td>

                                        <td><a href="/public/admin/post/edit/<?php echo e($post->id); ?>"><span
                                                        class="label label-warning">UREDI</span></a>
                                            <a href="/public/post/delete/<?php echo e($post->id); ?>"><span
                                                        class="label label-danger">OBRIŠI</span></a></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>