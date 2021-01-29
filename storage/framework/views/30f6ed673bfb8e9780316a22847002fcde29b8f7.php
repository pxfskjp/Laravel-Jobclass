<?php
	$label = isset($label) ? $label : (Lang::has('messages.'.$name) ? trans('messages.'.$name) : '');
	$var_name = str_replace('[]', '', $name);
	$var_name = str_replace('][', '.', $var_name);
	$var_name = str_replace('[', '.', $var_name);
	$var_name = str_replace(']', '', $var_name);
	$classes = (isset($rules) && isset($rules[$var_name])) ? ' '.str_replace('|', ' ', $rules[$var_name]) : '';
	$classes = str_replace(['required', 'email'], '', $classes);
	$required = (isset($rules) && isset($rules[$var_name]) && in_array('required', explode('|', $rules[$var_name]))) ? true : '';
?>

<?php if($type == 'checkbox'): ?>
	<?php echo $__env->make('install.helpers._' . $type, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php else: ?>
	<div class="form-group<?php echo e($errors->has($var_name) ? ' has-error' : ''); ?>">
		
	
		<?php if(!empty($label)): ?>
			<label>
				<?php echo $label; ?>

				<?php if($required): ?>
					<span class="text-danger">*</span>
				<?php endif; ?>
			</label>
		<?php endif; ?>
		
		<?php if($type == 'textarea'): ?>
			<?php if($errors->has($var_name)): ?>
				<span class="help-block">
					<strong><?php echo e($errors->first($var_name)); ?></strong>
				</span>
			<?php endif; ?>
		<?php endif; ?>
		
		<?php if(!empty($prefix)): ?>
			<span class="prefix">
				<?php echo $prefix; ?>

			</span>
		<?php endif; ?>
		
		<?php echo $__env->make('install.helpers._' . $type, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		
		<?php if(!empty($subfix)): ?>
			<span class="subfix">
				<?php echo $subfix; ?>

			</span>
		<?php endif; ?>
		
		<?php if(isset($help_class) && Lang::has('messages.' . $help_class . '.' . $name . '.help')): ?>
			<div class="help alert alert-info">
				<?php echo trans('messages.' . $help_class . '.' . $name . '.help'); ?>

			</div>
		<?php endif; ?>
		
		<?php if($type != 'textarea'): ?>
			<?php if($errors->has($var_name)): ?>
				<span class="help-block">
					<strong><?php echo e($errors->first($var_name)); ?></strong>
				</span>
			<?php endif; ?>
		<?php endif; ?>
	</div>
<?php endif; ?><?php /**PATH F:\tasks\jobclass\resources\views/install/helpers/form_control.blade.php ENDPATH**/ ?>