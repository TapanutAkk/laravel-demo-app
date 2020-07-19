<?php $__env->startSection('title'); ?>

    Articles

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div id="wrapper">
        <div id="page" class="container">
            <ul class="style1">
                <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="first">
                        <h3><a href="<?php echo e($article->path()); ?>"><?php echo e($article->title); ?></a></h3>
                        <p><?php echo e($article->excerpt); ?></p>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/tapanut/code/freshproject/resources/views/articles/index.blade.php ENDPATH**/ ?>