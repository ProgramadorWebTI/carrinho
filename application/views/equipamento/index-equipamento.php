<?php if(isset($_SESSION['lista'])): ?>
	<ul class="list-group">
		<li class="list-group-item">
			<a href="<?=site_url('carrinho/lista');?>">
				<i class="fa fa-credit-card" style="font-size:16px"></i>
			</a> 
			<span class="badge"><?php echo count($_SESSION['lista'])?></span>
		</li>
	</ul>	
	<br>
<?php endif; ?>
<div class="row">	
	<div class="col-md-12">		
		<div class="table-responsive">
			<table class="table table-condensed table-striped table-bordered">
				<thead>
					<tr>
						<th>Nome:</th>
						<th>Modelo:</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($equipamentos as $e): ?>
					<tr>
						<td><?=$e->nomeEquipamento?></td>				
						<td><?=$e->modeloEquipamento?></td>				
						<td width="200" class="text-center">
							<a href="#"><span class="glyphicon glyphicon-eye-open"></span></a>
							<a href="#"><span class="glyphicon glyphicon-pencil bg-amarelo"></span></a>
							<a href="#"><span class="glyphicon glyphicon-remove bg-vermelho"></span></a>
							<a href="carrinho/sessao/<?=$e->idEquipamento?>" data-toggle="tooltip" title="Fazer o emprestimo"><span class="glyphicon glyphicon-ok"></span></a>
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