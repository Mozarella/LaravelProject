

<?php $__env->startSection('container'); ?>
<h1>POST Category : <?php echo e($category); ?></h1>

<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<article class="mb-5">
<h2><a href="/posts/<?php echo e($p->id); ?>"><?php echo e($p->title); ?></a></h2>
<p><?php echo e($p["excerpt"]); ?></p>
</article>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Johnny\Documents\New folder\new\resources\views/category.blade.php ENDPATH**/ ?>