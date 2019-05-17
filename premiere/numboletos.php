


<!--MODALES
en "id" se ingresa las palabras que se definieron como data-target de donde se está
llamando, este será el lugar desde donde se llamará el modal-->
<div class="modal fade" id="1-1" tabindex="-1" role="dialog" style="overflow-y: scroll;" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Cantidad de boletos</h4>
			</div>
			<div class="modal-body">
				<table class="table table-sm">
				  <thead>
				    <tr>
				      <th scope="col">Tipo de boleto</th>
							<th scope="col">Precio</th>
				      <th scope="col">Cantidad</th>
							<th scope="col">Total</th>
				    </tr>
				  </thead>
				  <tbody>
				    <tr>
				      <td>Niños</td>
							<td>$40</td>
				      <td><!--pagina de donde saque el input stepper
							https://shaack.com/projekte/bootstrap-input-spinner/
						-->
							<input type="number" value="0" min="0" max="10" step="1"/></td>
							<td><div class="input-group-append">
								    <span class="input-group-text">$</span>
								    <span class="input-group-text">0.00</span>
								  </div>
							</td>
				    </tr>
						<tr>
				      <td>Adultos</td>
							<td>$60</td>
				      <td><!--pagina de donde saque el input stepper
							https://shaack.com/projekte/bootstrap-input-spinner/
						-->
							<input type="number" value="0" min="0" max="10" step="1"/></td>
							<td><div class="input-group-append">
								    <span class="input-group-text">$</span>
								    <span class="input-group-text">0.00</span>
								  </div>
							</td>
				    </tr>
						<tr>
				      <td>Adultos 60+</td>
							<td>$40</td>
				      <td><!--pagina de donde saque el input stepper
							https://shaack.com/projekte/bootstrap-input-spinner/
						-->
							<input type="number" value="0" min="0" max="10" step="1"/></td>
							<td><div class="input-group-append">
								    <span class="input-group-text">$</span>
								    <span class="input-group-text">0.00</span>
								  </div>
							</td>
				    </tr>
						<tr>
							<td colspan="3">
								<div class="input-group-append" align="right">
									<span class="input-group-text">$</span>
									<span class="input-group-text">0.00</span>
								</div>
							</td>
						</tr>
				  </tbody>
				</table>

				<a class="btn btn-primary" href="asientos.php" role="button" style="position: fixed;left: 40%;">Seleccionar asientos</a>

			</div>
		</div>
	</div>
</div>
