<ul class="nav nav-pills install-steps">
	<li class="nav-item<?php echo e($step >= 0 ? ' enabled' : ''); ?>">
		<a class="nav-link<?php echo e($current == 1 ? ' active' : ''); ?>" href="<?php echo e($installUrl . '/system_compatibility?mode=manual'); ?>">
			<i class="icon-info-circled-alt"></i> <?php echo e(trans('messages.system_compatibility')); ?>

		</a>
	</li>
	<li class="nav-item<?php echo e($step >= 1 ? ' enabled' : ''); ?>">
		<a class="nav-link<?php echo e($current == 2 ? ' active' : ''); ?>" href="<?php echo e($installUrl . '/site_info'); ?>">
			<i class="icon-cog"></i> <?php echo e(trans('messages.configuration')); ?>

		</a>
	</li>
	<li class="nav-item<?php echo e($step >= 2 ? ' enabled' : ''); ?>">
		<a class="nav-link<?php echo e($current == 3 ? ' active' : ''); ?>" href="<?php echo e($installUrl . '/database'); ?>">
			<i class="icon-database"></i> <?php echo e(trans('messages.database')); ?>

		</a>
	</li>
	<li class="nav-item<?php echo e($step >= 4 ? ' enabled' : ''); ?>">
		<a class="nav-link<?php echo e($current == 5 ? ' active' : ''); ?>" href="<?php echo e($installUrl . '/cron_jobs'); ?>">
			<i class="icon-clock"></i> <?php echo e(trans('messages.cron_jobs')); ?>

		</a>
	</li>
	<li class="nav-item<?php echo e($step >= 5 ? ' enabled' : ''); ?>">
		<a class="nav-link<?php echo e($current == 6 ? ' active' : ''); ?>" href="<?php echo e($installUrl . '/finish'); ?>">
			<i class="icon-ok-circled2"></i> <?php echo e(trans('messages.finish')); ?>

		</a>
	</li>
</ul>
<?php /**PATH F:\tasks\jobclass\resources\views/install/_steps.blade.php ENDPATH**/ ?>