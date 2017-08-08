<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Latihan</title>

	<link href="<?php echo e(asset('bootstrap_3_3_6/css/bootstrap.min.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
	<script src="<?php echo e(asset('js/html5shiv_3_7_2.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/respond_1_4_2.min.js')); ?>"></script>

</head>
<body>
	<div class="container">
		<?php echo $__env->make('partials.navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php echo $__env->yieldContent('main'); ?>
	</div>

	<?php echo $__env->yieldContent('footer'); ?>

	<script src="<?php echo e(asset('js/jquery_2_2_1.min.js')); ?>"></script>
	<script src="<?php echo e(asset('bootstrap_3_3_6/js/bootstrap.min.js')); ?>"></script>
	<script src="<?php echo e(asset('js/laravelapp.js')); ?>"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$(document).on('change','.Category', function() {
				console.log('hmm its change');

				var cat_id=$(this).val();
				//console.log(cat_id);
				var op=" ";

				$.ajax({
					type:'get',
					url:'<?php echo URL::to('findSubCatName'); ?>',
					data:{'id':cat_id},
					success:function(datasubkat) {
						//console.log('success');
						//console.log(datasubkat);
						op+='<option value="0" selected disabled>-Pilih Subkategori-</option>';
						for(var i=0;i<datasubkat.length;i++){
							op+='<option value="'+datasubkat[i].id+'">'+datasubkat[i].nama_subkategori+'</option>';
						}
					//console.log(op);
					$('.subCategory').html(" ");
					$('.subCategory').append(op);
					},
					error:function() {

					}
				});
			});
		});
		</script>

</body>
</html>