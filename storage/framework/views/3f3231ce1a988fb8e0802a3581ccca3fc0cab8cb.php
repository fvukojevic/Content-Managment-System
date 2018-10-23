<?php $__env->startSection('content'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <?php if(Session::has('flash_message')): ?>
            <div class="alert alert-success">
                <?php echo e(Session::get('flash_message')); ?>

            </div>
        <?php endif; ?>
        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>
        <section class="content-header">
            <h1>
                Tagovi

            </h1>
            <ol class="breadcrumb">
                <li><a href="../Pocetna.html"><i class="fa fa-dashboard"></i> Pocetak</a></li>
                <li>Objave</li>
                <li class="active">Dodaj Tag</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box box-primary">
                        <div class="box-header">
                            <form method="POST" action="<?php echo e(url('/tag/create')); ?>">
                                <?php echo e(csrf_field()); ?>

                                <div class="input-group margin">
                                    <div class="input-group-btn">
                                        <button type="submit" class="btn btn-warning">DODAJ OZNAKU</button>
                                    </div>
                                    <input type="text" id="dodaj_tag" name="name" class="form-control">
                                </div>
                            </form>

                            <div class="box-tools">

                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Naziv</th>
                                    <th>Status</th>
                                    <th>Uređeno</th>
                                    <th>Upravljanje</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($tag->id); ?></td>
                                        <td><?php echo e($tag->name); ?></td>
                                        <td><span class="label label-success">AKTIVNA</span></td>
                                        <td><?php echo e($tag->updated_at->diffForHumans()); ?></td>
                                        <td><a href="<?php echo e(url('/admin/tag/edit/')); ?>/<?php echo e($tag->id); ?>"><span
                                                        class="label label-warning">UREDI</span></a>
                                            <a href="<?php echo e(url('/tag/delete/')); ?>/<?php echo e($tag->id); ?>"><span
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

        <!-- Main content -->

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>