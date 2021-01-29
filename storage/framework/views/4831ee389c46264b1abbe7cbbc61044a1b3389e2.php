<select name="<?php echo e($name); ?>" class="select-search<?php echo e($classes); ?> <?php echo e(isset($class) ? $class : ""); ?> selecter" <?php echo e(isset($multiple) && $multiple == true ? "multiple='multiple'" : ""); ?>>
	<?php if(isset($include_blank)): ?>
		<option value=""><?php echo e($include_blank); ?></option>
	<?php endif; ?>
	<?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<option<?php echo e(in_array($option['value'], explode(",", $value)) ? " selected" : ""); ?> value="<?php echo e($option['value']); ?>"><?php echo e($option['text']); ?></option>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</select><?php /**PATH F:\tasks\jobclass\resources\views/install/helpers/_select.blade.php ENDPATH**/ ?>