<div class="row">
	<div class="col-md-12">
		<div class="table-responsive">
			<table class="table table-condensed table-striped table-bordered">
				<thead>
					<tr>
						<th>Nome:</th>
						<th>CPF:</th>
						<th>Modelo:</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($emprestimos as $e): ?>
					<tr>
						<td><?=$e->nomeFuncionario?></td>				
						<td><?=$e->cpfFuncionario?></td>				
						<td><?=$e->nomeEquipamento?></td>				
						<td width="200" class="text-center">
							<a href="#"><span class="glyphicon glyphicon-eye-open"></span></a>
							<a href="#"><span class="glyphicon glyphicon-pencil bg-amarelo"></span></a>
							<a href="#"><span class="glyphicon glyphicon-remove bg-vermelho"></span></a>
							<a href="#" data-toggle="tooltip" title="Fazer o emprestimo"><span class="glyphicon glyphicon-ok"></span></a>
						</td>
					</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>