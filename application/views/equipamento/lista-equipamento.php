	<div class="row">	
		<div class="col-md-12">		
			<div class="table-responsive">
				<?php foreach($equipamentoLista[0] as $valor): ?>
					<?php echo $valor->nomeEquipamento; ?>
				<?php endforeach; ?>
				<pre style="background-color: black; color: white">
					<?php print_r($equipamentoLista); ?>
					<hr>
					<?php print_r($_SESSION['lista']); ?>
				</pre>
			</div>
		</div>
	</div>