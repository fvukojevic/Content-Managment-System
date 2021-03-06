<?php $__env->startSection('content'); ?>
    <!-- Content Wrapper. Contains page content -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Slajdovi
            </h1>
            <ol class="breadcrumb">
                <li><a href="<?php echo e(url('/admin')); ?>"><i class="fa fa-dashboard"></i> Pocetak</a></li>
                <li>Personalizacija</li>
                <li class="active">Slider</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content container-fluid">

            <div class="row">
                <div class="col-xs-12">


                    <!-- /.box-header -->
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab_1" data-toggle="tab">Slajdovi</a></li>
                            <li><a href="#tab_2" data-toggle="tab"><i class="fa fa-plus-circle"></i> Dodaj Slajd</a>


                            </li>


                        </ul>


                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1">
                                <div class="box-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Naslov</th>
                                            <th>Aktivan</th>
                                            <th>Kreiran</th>
                                            <th>Uređen</th>
                                            <th>Upravljanje</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($slide->id); ?></td>
                                                <td><?php echo e($slide->title); ?></td>

                                                <?php if($slide->active == 1): ?>
                                                    <td><span class="label label-success">Aktivan</span></td>

                                                <?php else: ?>
                                                    <td><span class="label label-danger">Nije Aktivan</span></td>
                                                <?php endif; ?>
                                                <td><?php echo e($slide->created_at->diffForHumans()); ?></td>
                                                <td><?php echo e($slide->updated_at->diffForHumans()); ?></td>
                                                <td><a href="<?php echo e(url('admin/slider/edit')); ?>/<?php echo e($slide->id); ?>"><span
                                                                class="label label-warning">UREDI</span></a>
                                                    <a href="<?php echo e(url('admin/slider/delete')); ?>/<?php echo e($slide->id); ?>"><span
                                                                class="label label-danger">OBRIŠI</span></a></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.box-body -->
                                <!-- /.box-body -->
                            </div>
                            <div class="tab-pane" id="tab_2">

                                <h3><label class="label label-warning"> Dodaj Slajd</label> </h3>

                                <form method="POST" action="<?php echo e(url('/admin/slider/create')); ?>">
                                <?php echo e(csrf_field()); ?>


                                <!-- text input -->
                                    <div class="form-group">
                                        <label>Naslov Slajdera</label>
                                        <input type="text" class="form-control" placeholder="Naslov " name="title"/>
                                    </div>

                                    <!-- textarea -->
                                    <div class="form-group">
                                        <label>Tekst Ispod Naslova</label>
                                        <textarea class="form-control" rows="3" placeholder="Tekst " name="body"></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Pozadinska slika</label>
                                        <input type="text" class="form-control" placeholder="URL slike " name="image"/>
                                    </div>

                                    <div class="form-group">
                                        <p><label>Slider aktivan:</label></p>
                                            <label>
                                                Aktivan
                                                <input type="checkbox" name="active"/>
                                            </label>
                                    </div>

                                    <div class="form-group">
                                        <p><label>Gumb aktivan:</label></p>
                                        <label>
                                            Aktivan
                                            <input type="checkbox" name="button_active"/>
                                        </label>
                                    </div>

                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Naziv Buttona</label>
                                        <input type="text" name="button_title" class="form-control" placeholder="Button "/>
                                    </div>

                                    <!-- text input -->
                                    <div class="form-group">
                                        <label>Link Gdje Button Vodi
                                            <small>(http://www.google.com)</small>
                                        </label>
                                        <input type="text" name="button_link" class="form-control" placeholder="Link "/>
                                    </div>

                                    <h3><button type="submit" class="btn btn-success"> Spremi</button></h3>

                                </form>

                            </div>


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