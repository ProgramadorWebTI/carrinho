<div class="row">
	<div class="col-md-12">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="text-center text-uppercase">formulário de cadastro</h3>
			</div>
			<div class="panel-body">

				<form action="<?=base_url('cargo/dadoFormCargo')?>" method="post">

					<div class="form-group">
						<label for="nomeCargo">Cargo:</label>
						<input type="text" name="nomeCargo" id="nomeCargo" class="form-control nomeCargo" placeholder="Nome do cargo.">
					</div>



				</div>

				<div class="panel-footer">
					<div class="row">
						<div class="col-xs-12">						
							<button class="pull-right btn btn-primary">Cadastrar</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>