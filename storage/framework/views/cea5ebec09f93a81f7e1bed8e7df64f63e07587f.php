

<?php $__env->startSection('container'); ?>
<h1>Categories</h1>

<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<article class="mb-5">
<ul><li>

<h2><a href="/categories/<?php echo e($c->slug); ?>"><?php echo e($c->name); ?></a></h2>

</li></ul>
</article>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Johnny\Documents\New folder\new\resources\views/categories.blade.php ENDPATH**/ ?>