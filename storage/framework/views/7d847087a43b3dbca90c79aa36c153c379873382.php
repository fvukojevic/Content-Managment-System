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
                Uređivač Objava

            </h1>
            <ol class="breadcrumb">
                <li><a href="/fsr-cms/public/admin"><i class="fa fa-dashboard"></i> Pocetak</a></li>
                <li>Objave</li>
                <li class="active">Uređivač Objava</li>
            </ol>
        </section>

        <section class="content">
            <div class="row">
                <form method="POST" action="/fsr-cms/public/create" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                    <div class="col-md-10">
                        <div class="box box-primary">
                            <div class="box-header">
                                <!-- /.box-header -->
                                <div class="box-body pad">
                                    <div class="input-group margin">
                                        <div class="input-group-btn">
                                            <button type="button" class="btn btn-warning">Naslov</button>
                                        </div>
                                        <input type="text" id="title" name="title" class="form-control">
                                    </div>

                                    <div class="form-group">
                                        Kategorije:
                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <label>
                                                <input type="checkbox" value="<?php echo e($category->id); ?>" name="categories[]"
                                                       class="flat-red">
                                                <span class="label label-warning"
                                                      style="padding-top: 5px"> <?php echo e($category->name); ?></span>
                                            </label>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </div>


                                    <textarea id="editor1" name="body" rows="10" cols="80">
                                            Tekst koji ćete vi promjeniti da bi napisali novu objavu.
                                    </textarea>
                                    <div class="form-group">
                                        <div class="pull-right">
                                            <button type="submit" class="btn btn-success"> OBJAVI</button>
                                            <button class="btn btn-warning"> SPREMI KAO SKICU</button>
                                            <button class="btn btn-danger"> OBRIŠI</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- /.col-->
                    </div>
                    <div class="col-md-2">

                        <div class="box box-primary">
                            <div class="box-header"><h3> ISTAKNUTA SLIKA </h3><span class="small">Slika koja će biti izdvojena u objavi.</span>
                            </div>
                            <div class="box-body">
                                <div class="form-group">

                                   <span class="btn btn-default btn-file">
                                         <i class="fa fa-plus-circle " style="margin-top:65px"></i> <span>Dodaj Istaknutu Sliku</span></a>
                                       <input type="file" name="post_thumbnail" id="post_thumbnail">
                                        </span>
                                </div>
                            </div>
                        </div>

                        <div class="box box-primary">
                            <div class="box-header"><h3> TAGOVI </h3><span class="small">Odaberite odgovarajuće tagove za vašu objavu.</span>
                            </div>
                            <div class="box-body">
                                <div class="form-group">

                                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <label>
                                            <input type="checkbox" value="<?php echo e($tag->id); ?>" name="selectedtags[]"
                                                   class="flat-red">
                                            <span class="label label-warning"
                                                  style="padding-top: 5px"> <?php echo e($tag->name); ?></span>
                                        </label>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>
                            </div>
                        </div>

                    </div>
                </form>
                <!-- ./row -->
            </div>
        </section>

        <!-- Main content -->

    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>