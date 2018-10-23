<?php $__env->startSection('content'); ?>

    <h1><?php echo e($post->title); ?></h1>

    <div class="categories">

        <?php if($post->categories()->count()>0): ?>
            <p>Kategorije:
                <?php $__currentLoopData = $post->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <strong>
                        <a href="/fsr-cms/public/category/<?php echo e($category->name); ?>"><?php echo e($category->name); ?></a>
                    </strong>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </p>
        <?php endif; ?>
    </div>

    <hr>

    <?php echo $post->body; ?>


    <hr>

    <div class="tags">

        <?php if($post->tags()->count()>0): ?>
            <p>Oznake:
                <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <strong>
                    #<a href="/fsr-cms/public/tags/<?php echo e($tag->name); ?>"><?php echo e($tag->name); ?></a>
                    </strong>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </p>
        <?php endif; ?>
    </div>

    <div class="comments">
        <ul class="list-group">

            <?php if($post->comments()->count()>0): ?>

                <?php $__currentLoopData = $post->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <li class="list-group-item" >
                        <div class="row">
                        <div class="col-sm-2" style="text-align:center;">
                            <img src="/fsr-cms/public/uploads/no_thumbnail_pic/NULL.png" alt="Istaknuta Slika"
                                 style="border:solid white 1px; height: 100px; width:100px;">
                            <p><strong style="position:absolute;left:15px;bottom:-5px">Luka Bjelica</strong></p>
                        </div>
                            <div class="col-sm-10">
                                <p><strong>Komentar: </strong><?php echo e($comment->body); ?></p>
                        <p style="position:absolute;right:3px;bottom:-20px">  <strong>Objavljeno: </strong> <?php echo e($comment->created_at->diffForHumans()); ?></p>
                            </div>
                        </div>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            <?php else: ?>
                <li class="list-group-item">

                    <strong>
                        Još nema komentara. Budite prvi!
                    </strong>

                </li>
            <?php endif; ?>
        </ul>
    </div>
    <?php if(Auth::check()): ?>
        <hr>

        <div class="card">
            <div class="card-block" style="padding:15px;">
                <form method="POST" action="<?php echo e($post->id); ?>/comments">
                    <?php echo e(csrf_field()); ?>

                    <div class="form-group">
                        <textarea name="body" placeholder="Unesite komentar:" class="form-control" required></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Objava</button>
                    </div>

                </form>
                <?php echo $__env->make('layouts.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
        </div>
    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>