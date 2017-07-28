<h1>Images</h1>
<?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<img src="<?php echo e(asset('storage/upload').'/'.$image->img_name); ?>" name="<?php echo e($image->img_name); ?>" height="300" width="300"><br/>
<?php echo e("storage/upload/".$image->img_name); ?><br/>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>