<section class="container">
	<blockquote class="flow-text"><?php echo $page['name'] ?></strong></blockquote>

	<a class="btn btn-success" href="<?php echo $extra->generateUrl('collective', 'new.teacher') ?>"><i class="fa fa-plus"></i>Agregar nuevo docente</a>
</h5>

<table class="centered">
	<thead>
		<tr>
			<th>#</th>
			<th>DNI</th>
			<th>Nombres</th>
			<th>Apellidos</th>
			<th>Designación</th>
			<th></th>
		</tr>
	</thead>
	<tbody>

		<?php foreach ($teachers as $teacher): ?>
			<tr role="row" class="odd">
				<td><?php echo $teacher['id'] ?></td>
				<td><?php echo $teacher['dni'] ?></td>
				<td><?php echo $teacher['names'] ?></td>
				<td><?php echo $teacher['surnames'] ?></td>
				<td><?php echo $teacher['designation'] ?></td>
				<td><button></button></td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>
</div>
</div>

