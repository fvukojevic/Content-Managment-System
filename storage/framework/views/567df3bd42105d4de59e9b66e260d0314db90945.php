<?php $__env->startSection('content'); ?>
    <?php if(Session::has('flash_message')): ?>
        <div class="alert alert-warning">
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

        <div class="row">
            <div class="col-md-8">
                <form method="POST" action="<?php echo e(url('/profile/update')); ?>"enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    <?php echo e(method_field('PATCH')); ?>

                <div class="box box-primary">

                    <div class="box-body box-profile">

                        <div class="container text-center">


                            <?php if($user->profile_pic): ?>
                                <div class="box-body">
                                    <div class="form-group">

                                   <span class="btn btn-default btn-file" style=" .btn-file {
            position: relative;
            overflow: hidden;
            width: 0px !important;
            height:0px !important;
        }
        .btn-file input[type=file] {
            position: absolute;
            top: 0;
            right: 0;

            min-width:0;
            min-height:0;
            font-size: 100px;
            text-align: right;
            filter: alpha(opacity=0);
            opacity: 0;
            outline: none;
            background: white;
            cursor: inherit;
            display: block;
        }">
                                        <img class="profile-user-img img-responsive img-circle"
                                             src="<?php echo e(url('/uploads/profile')); ?>/<?php echo e($user->profile_pic); ?>"
                                             alt="User profile picture" style="width:100% !important;"></a>
                                       <input type="file" name="profile_pic" id="profile_pic">
                                        </span>
                                    </div>

                                </div>
                            <?php else: ?>
                                <div class="box-body">
                                    <div class="form-group">

                                   <span class="btn btn-default btn-file">
                                         <img style="position:relative;"
                                              src="<?php echo e(url('/resources/assets/img/avatar.jpg')); ?>"
                                              class="profile-user-img img-responsive img-circle"> <i
                                               class="fa fa-plus-circle "
                                               style="position:absolute; right:5px; top:90px;"></i></a>
                                       <input type="file" name="profile_pic" id="profile_pic"/>
                                        </span>

                                    </div>
                                </div>
                            <?php endif; ?>
                            <h3 class="profile-username text-center"><?php echo e(Auth::user()->name); ?></h3>
                        </div>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Ime i Prezime</b> <a class="pull-right"><?php echo e(Auth::user()->name); ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>E-Mail</b> <a class="pull-right"><?php echo e(Auth::user()->email); ?></a>
                            </li>
                            <li class="list-group-item">
                                <b>Lozinka</b> <a class="pull-right">************</a>
                            </li>
                        </ul>


                    </div>
                    <!-- /.box-body -->
                </div>
                <div class="box-body">
                    <div class="form-group">

                        <h3><label class="badge"> Uredi Profil</label></h3>

                        <div class="form-group">
                            <label>Ime i Prezime</label>
                            <input name="name" id="first_name" type="text" class="form-control"
                                   value="<?php echo e(Auth::user()->name); ?>">
                        </div>

                        <div class="form-group">
                            <label>E-Mail</label>
                            <input name="email" id="user_email" type="text" class="form-control"
                                   value="<?php echo e(Auth::user()->email); ?>">
                        </div>
                        <button type="submit" class="btn btn-success" type="submit" value="Spremi">
                            SPREMI PROMJENE
                        </button>
                        <hr>
                    </div>
                </div>
                </form>
            </div>
        </div>


        <div class="row">
            <div class="col-md-8">
                <div class="box-body">
                    <div class="form-group">

                        <h3><label class="badge"> Promjena Lozinke</label></h3>
                        <form method="POST" action="<?php echo e(url('/profile/password')); ?>" class="form-horizontal"
                              role="form" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>

                            <?php echo e(method_field('PATCH')); ?>


                            <div class="form-group">
                                <label>Stara Lozinka</label>
                                <input type="password" id="pass_old" name="password-old" class="form-control"
                                       placeholder="Lozinka ">
                            </div>


                            <div class="form-group">
                                <label>Lozinka</label>
                                <input type="password" id="pass" name="password" class="form-control"
                                       placeholder="Lozinka ">
                            </div>


                            <div class="form-group">
                                <label>Potvrdi Lozinku</label>
                                <input type="password" id="pass_repet" name="password-repeat"
                                       class="form-control"
                                       placeholder="Lozinka ">
                            </div>
                            <button type="submit" class="btn btn-success" type="submit" value="Spremi">
                                SPREMI PROMJENE
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>












<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>