


<?php $__env->startSection('container'); ?>
<article>

<h1 class="mb-5"><?php echo e($post->title); ?></h1>
<p>Category <a href="/categories/<?php echo e($post->category->slug); ?>"><?php echo e($post->category->name); ?></a></p>

<?php echo $post->body; ?>


</article>

<a href="/blog">Back</a>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Johnny\Documents\New folder\new\resources\views/post.blade.php ENDPATH**/ ?>