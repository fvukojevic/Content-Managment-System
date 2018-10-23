<?php $__env->startSection('content'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Korisnici

            </h1>
            <ol class="breadcrumb">
                <li><a href="/fsr-cms/public/admin"><i class="fa fa-dashboard"></i> Pocetak</a></li>
                <li class="active">Korisnici</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Pregled svih korisnika registriranih u našoj bazi.</h3>


                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Korisnik</th>
                                    <th>Datum Registracije</th>
                                    <th>Uloga</th>
                                    <th>Razlog</th>
                                    <th>Upravljanje</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($user->id); ?></td>
                                        <td><?php echo e($user->name); ?></td>
                                        <td><?php echo e($user->created_at->diffForHumans()); ?></td>
                                        <?php if($user->role == 'admin'): ?>
                                            <td><span class="label label-danger">Administrator</span></td>
                                        <?php elseif($user->role == 'moderator'): ?>
                                            <td><span class="label label-warning">Moderator</span></td>
                                        <?php else: ?>
                                            <td><span class="label label-success">Registriran</span></td>
                                        <?php endif; ?>
                                        <td><?php echo e($user->email); ?></td>
                                        <td>
                                            <button class="btn btn-xs btn-warning">UREDI</button>
                                            <button class="btn btn-xs btn-danger">OBRIŠI</button>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.box-body -->
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