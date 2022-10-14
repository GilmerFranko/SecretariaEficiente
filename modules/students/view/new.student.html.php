<?php
/**
 * codigo para que calcule mediante la edad el grado en el que debe estar el estudiante y seleccionarlo automaticamente
 */

?>

<section class="container">
	<blockquote class="flow-text">Registra un nuevo estudiante</strong></blockquote>
	<div class="row">
		<div class="col l12">
			<form action="<?php echo $extra->generateUrl('students', 'new.student', NULL, array('new-student' => true)); ?>" class="form-horizontal" role="form" method="post" enctype="multipart/form-data">

				<!-- Cedula -->
				<div class="col l6 form-group">
					<label for="dni" class="control-label">
						DNI/CI <span class="text-red">*</span>
					</label>
					<div class="">
						<input type="text" class="" id="dni" name="dni" value="<?php echo $student->dni ?>">
					</div>
					<span class="control-label">
					</span>
				</div>

				<!-- Pasaporte -->
				<div class="col l6 form-group">
					<label for="passport" class="control-label">
						Pasaporte <span class="text-red">*</span>
					</label>
					<div class="">
						<input type="text" class="" id="passport" name="passport" value="<?php echo $student->passport ?>">
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
						<input type="text" class="" id="names" name="names" value="<?php echo $student->names ?>">
					</div>
				</div>

				<!-- Apellidos -->
				<div class="col l6 form-group">
					<label for="surnames" class="	 control-label">
						Apellidos<span class="text-red">*</span>
					</label>
					<div class="">
						<input type="text" class="" id="surnames" name="surnames" value="<?php echo $student->surnames ?>">
					</div>
					<span class="col-sm-4 control-label">
					</span>
				</div>

				<!-- Fecha de nacimiento -->
				<div class="col l6 form-group">
					<label for="birth" class="control-label">
						Fecha De Nacimiento
					</label>
					<div class="">
						<input type="text" class="" id="birth" name="birth" value="<?php echo $student->birth ?>">
					</div>
					<span class="col-sm-4 control-label">
					</span>
				</div>

				<!-- Email -->
				<div class="col l6 form-group">
					<label for="email" class="	 control-label">
						Email
					</label>
					<div class="">
						<input type="text" class="" id="email" name="email" value="<?php echo $student->email ?>">
					</div>
					<span class="col-sm-4 control-label">
					</span>
				</div>

				<!-- Telefono -->
				<div class="col l6 form-group">
					<label for="num_phone" class="	 control-label">
						Teléfono
					</label>
					<div class="">
						<input type="text" class="" id="num_phone" name="num_phone" value="<?php echo $student->num_phone ?>">
					</div>
					<span class="col-sm-4 control-label">
					</span>
				</div>

				<!-- Direccion -->
				<div class="col l6 form-group">
					<label for="address" class="	 control-label">
						Dirección
					</label>
					<div class="">
						<input type="text" class="" id="address" name="address" value="<?php echo $student->address ?>">
					</div>
				</div>

				<!-- Estado -->
				<div class="col l6 form-group">
					<label for="state" class="	 control-label">
						Estado
					</label>
					<div class="">
						<input type="text" class="" id="state" name="state" value="<?php echo $student->state ?>">
					</div>
					<span class="col-sm-4 control-label">
					</span>
				</div>

				<!-- N° Registro -->
				<div class="col l6 form-group">
					<label for="registerNO" class="	 control-label">
						Nº Registro <span class="text-red">*</span>
					</label>
					<div class="">
						<input type="text" class="" id="registerNO" name="registerNO" value="" disabled="">
					</div>
					<span class="col-sm-4 control-label">
					</span>
				</div>


			<!-- Nombre de usuario
			<div class="form-group">
				<label for="username" class="	 control-label">
					Nombre De Usuario <span class="text-red">*</span>
				</label>
				<div class="">
					<input type="text" class="" id="username" name="username" value="">
				</div>
				<span class="col-sm-4 control-label">
				</span>
			</div>
			<!-- Password
			<div class="form-group">
				<label for="password" class="	 control-label">
					Contraseña <span class="text-red">*</span>
				</label>
				<div class="">
					<input type="password" class="" id="password" name="password" value="">
				</div>
				<span class="col-sm-4 control-label">
				</span>
			</div>-->

			<!----- Selects ---->

			<!-- Sección -->
			<div class="col l6 form-group">
				<label for="s2id_autogen5" class="	 control-label">
					Sección <span class="text-red">*</span>
				</label>
				<select name="sectionID" id="sectionID" class="browser-default select2 select2-offscreen" tabindex="-1">
					<option value="1" selected="">A</option>
					<option value="2">B</option>
					<option value="3">C</option>
				</select>
			</div>

			<!-- Representante -->
			<div class="col l6 form-group">
				<label for="s2id_autogen1" class="control-label">
					DNI del Tutor
				</label>
				<div class="">
					<input class="select2-focusser select2-offscreen" type="text" id="s2id_autogen1" name="tutor_id" value="<?php echo $student->tutor_id ?>">
				</div>
						<!--<div class="coselect2-container  guargianID select2" id="s2id_guargianID"><a href="javascript:void(0)" onclick="return false;" class="select2-choice" tabindex="-1">
							<span class="select2-chosen">Seleccionar Tutor</span>
							<abbr class="select2-search-choice-close"></abbr>
							<span class="select2-arrow">
								<b>
								</b>
							</span>
						</a>
					</div>-->

				</div>

				<!-- Nivel Academico -->
				<div class="col l6 form-group">
					<label for="s2id_autogen4" class="	 control-label">
						Nivel Académico<span class="text-red"> *</span>
					</label>

					<select class="browser-default">
						<option value="0">Seleccionar Clase</option>
						<option value="1">1° año</option>
						<option value="2">2° año</option>
						<option value="3">3° año</option>
						<option value="4">4° año</option>
						<option value="5">5° año</option>
					</select>
				</div>

				<!-- País -->
				<div class="col l6 form-group">
					<label for="country" class="control-label">
						País
					</label>
					<div class="">
						<input type="text" class="" id="country" name="country" value="<?php echo $student->country ?>">
					</div>
				</div>

				<!-- Grupo sanguineo
				<div class="col l6 form-group">
					<label for="s2id_autogen2" class="control-label">
						Grupo Sanguíneo
					</label>
					<div class="">
						<select name="bloodgroup" id="bloodgroup" class="browser-default" tabindex="-1">
							<option value="0">Seleccionar Grupo sanguíneo</option>
							<option value="A+">A+</option>
							<option value="A-">A-</option>
							<option value="B+">B+</option>
							<option value="B-">B-</option>
							<option value="O+">O+</option>
							<option value="O-">O-</option>
							<option value="AB+">AB+</option>
							<option value="AB-">AB-</option>
						</select>
					</div>
				</div>-->

				<!-- Genero -->
				<div class="col l6 form-group">
					<label for="gender" class="	 control-label">
						Género
					</label>
					<select name="gender" id="gender" class="browser-default">
						<option value="0" selected="">Masculino</option>
						<option value="1">Femenino</option>
					</select>
				</div>

				<div class="col l6 form-group"></div>

				<!-- Agregar -->
				<div class="col l6 form-group">
					<input type="submit" class="btn waves-effect waves-red grey darken-3" value="Agregar Estudiante">
				</div>

				<!-- Foto -->
				<div class="col l2 form-group">
					<div class="">
						<div class="input-group image-preview" data-original-title="" title="">
							<input type="text" class=" image-preview-filename" disabled="disabled" hidden>
							<span class="input-group-btn">
								<button type="button" class="btn waves-effect waves-red grey darken-3 image-preview-clear" style="display:none;">
									<span>photo</span>
								</button>
								<div class="btn waves-effect waves-red grey darken-3 image-preview-clear image-preview-input">
									<span class="fa fa-repeat"></span>
									<span class="image-preview-input-title">
									Foto</span>
									<input type="file" accept="image/png, image/jpeg, image/gif" name="photo">
								</div>
							</span>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>

	<style type="text/css">
		.form-group{
			height: 100px;
			display: flex;
			flex-direction: column;
			justify-content: center;
		}
	</style>

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
