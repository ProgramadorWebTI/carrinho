<div class="row">
	<div class="col-md-12">
		<div class="table-responsive">
			<table class="table table-condensed table-striped table-bordered">
				<tbody>
					<?php foreach($cargos as $c): ?>
					<tr>
						<td><?=$c->nomeCargo?></td>
						<td width="200" class="text-center">
							<a href="#"><span class="glyphicon glyphicon-pencil bg-amarelo"></span></a>
							<a href="#"><span class="glyphicon glyphicon-remove bg-vermelho"></span></a>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>