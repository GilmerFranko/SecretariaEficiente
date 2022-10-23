<!-- Al colocar la cedula que aparezca el nombre -->

<section class="container">
	<blockquote class="flow-text">Registra una matricula</strong></blockquote>
	<div class="row">
		<div class="col l12">
			<form action="<?php echo $extra->generateUrl('collective', 'new.enrollment', NULL, array('new-enrollment' => true)); ?>" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">

				<!-- DNI Estudiante -->
				<div class="col l6 form-group">
					<label for="dni" class="control-label">
						DNI/CI <span class="text-red">*</span>
					</label>
					<div class="">
						<input type="text" class="" id="dni" name="dni">
					</div>
					<span class="control-label">
					</span>
				</div>

				<!-- Nombres -->
				<div class="col l6 form-group">
					<label for="names" class="control-label">
						Nombres <span class="text-red">*</span>
					</label>
					<div class="">
						<input type="text" class="" id="names" value="" disabled="">
					</div>
				</div>

				<!-- Periodo -->
				<div class="col l6 form-group">
					<div class="row">
						<div class="col s12">
							<div class="row">
								<div class="input-field col s12">
									<i class="material-icons prefix">textsms</i>
									<input type="text" id="period" name="period" class="autocomplete">
									<label for="period">Periodo</label>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Clase -->
				<div class="col l6 form-group">
					<div class="row">
						<div class="col s12">
							<div class="row">
								<div class="input-field col s12">
									<i class="material-icons prefix">textsms</i>
									<input type="text" id="class_id" name="class_id" class="autocomplete">
									<label for="class_id">Clase</label>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Agregar -->
				<div class="col l6 form-group">
					<input type="submit" class="btn waves-effect waves-red grey darken-3" value="Agregar Estudiante">
				</div>
			</form>
		</div>
	</div>

	<script type="text/javascript">
		$( ".select2" ).select2();
		$('#birth').datepicker({ startView: 2 });

		$('#classesID').change(function(event) {
			var classesID = $(this).val();
			if(classesID === '0') {
				$('#sectionID').val(0);
			} else {
				$.ajax({
					async: false,
					type: 'POST',
					url: "https://www.socialavisos.com/sistemas/sys-escolar/student/sectioncall",
					data: "id=" + classesID,
					dataType: "html",
					success: function(data) {
						$('#sectionID').html(data);
					}
				});
			}
		});

		$(document).on('click', '#close-preview', function(){
			$('.image-preview').popover('hide');
    // Hover befor close the preview
    $('.image-preview').hover(
    	function () {
    		$('.image-preview').popover('show');
    		$('.content').css('padding-bottom', '100px');
    	},
    	function () {
    		$('.image-preview').popover('hide');
    		$('.content').css('padding-bottom', '20px');
    	}
    	);
  });

		$(function() {
    // Create the close button
    var closebtn = $('<button/>', {
    	type:"button",
    	text: 'x',
    	id: 'close-preview',
    	style: 'font-size: initial;',
    });
    closebtn.attr("class","close pull-right");
    // Set the popover default content
    $('.image-preview').popover({
    	trigger:'manual',
    	html:true,
    	title: "<strong>Preview</strong>"+$(closebtn)[0].outerHTML,
    	content: "There's no image",
    	placement:'bottom'
    });
    // Clear event
    $('.image-preview-clear').click(function(){
    	$('.image-preview').attr("data-content","").popover('hide');
    	$('.image-preview-filename').val("");
    	$('.image-preview-clear').hide();
    	$('.image-preview-input input:file').val("");
    	$(".image-preview-input-title").text("Archivo De Búsqueda");
    });
    // Create the preview image
    $(".image-preview-input input:file").change(function (){
    	var img = $('<img/>', {
    		id: 'dynamic',
    		width:250,
    		height:200,
    		overflow:'hidden'
    	});
    	var file = this.files[0];
    	var reader = new FileReader();
        // Set preview image into the popover data-content
        reader.onload = function (e) {
        	$(".image-preview-input-title").text("Archivo De Búsqueda");
        	$(".image-preview-clear").show();
        	$(".image-preview-filename").val(file.name);
        	img.attr('src', e.target.result);
        	$(".image-preview").attr("data-content",$(img)[0].outerHTML).popover("show");
        	$('.content').css('padding-bottom', '100px');
        }
        reader.readAsDataURL(file);
      });
  });


</script>
</div>
</div>
</section>
