<script type="text/javascript">

	$(document).ready(function(){

		/* Inicializar input.autocomplete periodo */
		$('#period').autocomplete({
			data: {
				<?php echo $periods ?>
			},
		});

		/* Inicializar input.autocomplete clases */
		$('#class_id').autocomplete({
			data: {
				<?php echo $courses ?>
			},
		});
	});


	$("#dni").change(function(){
		$.ajax({
			url: '<?php echo $extra->generateUrl('collective', 'new.enrollment', null, array('getNameStudent' => true)) ?>',
			type: 'post',
			data: {'dni': $('#dni').val(), 'ajax': true},
			success: function (data) {
				if(data == 0)
				{
					$('#names').val('Estudiante no encontrado')
					$('#names').css('color', 'red')
				}
				else
				{
					$('#names').val(data)
				}

			}
		});
	})


</script>
