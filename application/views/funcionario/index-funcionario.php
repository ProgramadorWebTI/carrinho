<div class="row">
	<div class="col-md-12">
		<div class="table-responsive">
			<table class="table table-condensed table-striped table-bordered">
				<thead>
					<tr>
						<th>Nome:</th>
						<th>CPF:</th>
						<th>E-mail:</th>
						<th>Telefone Celular:</th>
						<th>Telefone Fixo:</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($funcionarios as $c): ?>
					<tr>
						<td><?=$c->nomeFuncionario?></td>
						<td><?=$c->cpfFuncionario?></td>
						<td><?=$c->emailFuncionario?></td>
						<td><?=$c->telCelularFuncionario?></td>
						<td><?=$c->telFixoFuncionario?></td>
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