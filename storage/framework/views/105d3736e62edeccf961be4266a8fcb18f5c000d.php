
<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale', 'en')); ?>">
<head>
	<meta charset="utf-8">
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="noindex,nofollow"/>
	<meta name="googlebot" content="noindex">
	<title><?php echo $__env->yieldContent('title'); ?></title>
	
	<?php echo $__env->yieldContent('before_styles'); ?>
	
	<link href="<?php echo e(url(mix('css/app.css'))); ?>" rel="stylesheet">
	
	<?php echo $__env->yieldContent('after_styles'); ?>

    <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

	<script>
		paceOptions = {
			elements: true
		};
	</script>
	<script src="<?php echo e(URL::asset('assets/js/pace.min.js')); ?>"></script>
</head>
<body>
<div id="wrapper">

	<?php $__env->startSection('header'); ?>
		<?php echo $__env->make('install.layouts.inc.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php echo $__env->yieldSection(); ?>

	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<h1 class="text-center title-1 font-weight-bold mt-5 mb-3" style="text-transform: none;">
					<?php echo e(trans('messages.installation')); ?>

				</h1>
	
				<?php echo $__env->make('install._steps', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				
				<?php if(isset($errors) and $errors->any()): ?>
					<div class="alert alert-danger mt-4">
						<ul class="list list-check">
							<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li><?php echo $error; ?></li>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</ul>
					</div>
					<?php $paddingTopExists = true; ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
	
	<?php echo $__env->make('common.spacer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<div class="main-container">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-xl-12">
					<div class="inner-box">
						<?php echo $__env->yieldContent('content'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<?php $__env->startSection('footer'); ?>
		<?php echo $__env->make('install.layouts.inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<?php echo $__env->yieldSection(); ?>

</div>

<?php echo $__env->yieldContent('before_scripts'); ?>

<script>
	/* Init. vars */
	var siteUrl = '<?php echo e(url('/')); ?>';
	var languageCode = '<?php echo e(config('app.locale')); ?>';
	var countryCode = '<?php echo e(config('country.code', 0)); ?>';
	
	/* Init. Translation vars */
	var langLayout = {
		'hideMaxListItems': {
			'moreText': "<?php echo e(t('View More')); ?>",
			'lessText': "<?php echo e(t('View Less')); ?>"
		}
	};
</script>

<script src="<?php echo e(url(mix('js/app.js'))); ?>"></script>
<?php if(file_exists(public_path() . '/assets/plugins/select2/js/i18n/'.config('app.locale').'.js')): ?>
	<script src="<?php echo e(url('assets/plugins/select2/js/i18n/'.config('app.locale').'.js')); ?>"></script>
<?php endif; ?>

<script>
	$(document).ready(function () {
		/* Select Boxes */
		$(".selecter").select2({
			language: '<?php echo e(config('app.locale', 'en')); ?>',
			dropdownAutoWidth: 'true',
			/*minimumResultsForSearch: Infinity*/
		});
	});
</script>

<?php echo $__env->yieldContent('after_scripts'); ?>

</body>
</html><?php /**PATH F:\tasks\jobclass\resources\views/install/layouts/master.blade.php ENDPATH**/ ?>