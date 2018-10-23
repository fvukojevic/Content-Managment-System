<?php $__env->startSection('content'); ?>
    <!-- Content Wrapper. Contains page content -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">


            <h1>
                Uredi Korisnika

            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo e(url('/admin')); ?>"><i class="fa fa-dashboard"></i> Pocetak</a></li>
                <li>Korisnici</li>
                <li class="active">Uredi Korisnika</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <div class="row">
                <div class="col-md-4">

                    <div class="box box-primary">

                        <div class="box-body box-profile">
                            <div style="max-height:200px !important;">
                                <?php if($user->profile_pic): ?>
                            <img class="profile-user-img img-responsive img-circle"
                                 src="<?php echo e(url('/uploads/profile/')); ?>/<?php echo e($user->profile_pic); ?>" alt="User profile picture" height="150px" width="150px">
                                <?php else: ?>
                                    <img
                                         src="<?php echo e(url('/resources/assets/img/avatar.jpg')); ?>"
                                         class="profile-user-img img-responsive img-circle" height="150px" width="150px">
                                    <?php endif; ?>

                            </div>

                            <h3 class="profile-username text-center"> <?php echo e($user->name); ?></h3>


                            <ul class="list-group list-group-unbordered">
                                <li class="list-group-item">
                                    <b>Ime i Prezime</b> <a class="pull-right"><?php echo e($user->name); ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>E-Mail</b> <a class="pull-right"><?php echo e($user->email); ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Lozinka</b> <a class="pull-right">************</a>
                                </li>
                            </ul>


                        </div>
                        <!-- /.box-body -->
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4 ">
                    <div class="box box-primary">
                        <div class="box-body pad">
                            <form method="post" action="<?php echo e(url('/admin/users/edit')); ?>/<?php echo e($user->id); ?>">
                                <?php echo e(csrf_field()); ?>

                                <?php echo e(method_field('PATCH')); ?>


                            <div class="form-group">
                                <label>Ime i Prezime</label>
                                <input type="text" name="name" class="form-control" placeholder="Ime i Prezime " value="<?php echo e($user->name); ?>">
                            </div>

                            <div class="form-group">
                                <label>E-Mail</label>
                                <input type="text" name="email" class="form-control" placeholder="E-Mail " value="<?php echo e($user->email); ?>">
                            </div>

                            <div class="form-group">
                                <label>Uloga</label>
                                <select class="form-control" name="role">
                                    <option>Korisnik</option>
                                    <option>Moderator</option>
                                    <option>Administrator</option>
                                </select>
                            </div>
                            <button type="button" class="btn btn-success" data-toggle="modal"
                                    data-target="#modal-default">
                                SPREMI PROMJENE
                            </button>
                                <div class="modal fade" id="modal-default">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title">Jeste li sigurni?</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>Ukoliko želite potvrditi radnju kliknite spremi promjene&hellip;</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">ZATVORI
                                                </button>
                                                <button type="submit" class="btn btn-success">SPREMI PROMJENE</button>
                                            </div>
                                        </div>
                                        <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                </div>
                                <!-- /.modal -->

                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-4 ">
                    <div class="box box-primary">
                        <div class="box-body pad">
                            <form method="post" action="<?php echo e(url('/admin/users/edit')); ?>/<?php echo e($user->id); ?>">
                                <?php echo e(csrf_field()); ?>

                                <?php echo e(method_field('PUT')); ?>

                            <div class="form-group">
                                <label>Nova Lozinka</label>
                                <input type="password" class="form-control" placeholder="Lozinka " name="password">
                            </div>

                            <div class="form-group">
                                <label>Potvrdi Lozinku</label>
                                <input type="password" class="form-control" placeholder="Lozinka " name="password-repeat">
                            </div>
                            <button type="submit" class="btn btn-success" data-toggle="modal"
                                    data-target="#modal-default">
                                SPREMI PROMJENE
                            </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <!-- /.content -->
    </div>

    <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>