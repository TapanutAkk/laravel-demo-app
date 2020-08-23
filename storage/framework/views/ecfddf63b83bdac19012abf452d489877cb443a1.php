<?php $__env->startSection('title'); ?>

    <?php echo e($article->title); ?>


<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div id="wrapper">
        <div id="page" class="container">
            <div id="content">
                <div class="title">
                    <h2><?php echo e($article->title); ?></h2>
                <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
                <?php echo e($article->body); ?>

                <p style="margin-top:1em">
                    <?php $__currentLoopData = $article->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(route('articles.index', ['tag' => $tag->name])); ?>"><?php echo e($tag->name); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </p>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/tapanut/code/freshproject/resources/views/articles/show.blade.php ENDPATH**/ ?>