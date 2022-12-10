<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/images/navbar_Categoria.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-end justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<br>
				<br><br><br><br>
			</div>
		</div>
	</div>
</section>
<section class="food-area" style="text-align:center;margin:auto; ">
	<div class="container-fluid px-0">
		<div class="row d-flex no-gutters">
			<div class="col-md-12 order-md-last ftco-animate makereservation p-4 p-md-5 pt-5">
				<div class="py-md-5">
					<div class="heading-section ftco-animate mb-5">
						<h2 class="mb-4" style="color:black;">Agregar Categoria</h2>
						<p>En esta pestaña pdoras agreagar una categoria nueva. En caso de querer eliminarla podras hacerlo desde el apartado eliminar</p>
					</div>
					<form method="POST" action="<?php echo "index.php?c=" . seg::codificar("categoria_plato") . "&m=" . seg::codificar("insertar") ?>">
						<div class="row justify-content-center">
							<div class="col-md-6">
								<div class="form-group">
									<label for="">Categorias <span class="text-danger">(*)</span></label>
									<input type="text" class="form-control" placeholder="Descripción de categoria" name="txtDescripcion" value="<?php echo isset($resultados["descripcion"]) ? $resultados["descripcion"] : "" ?>">
									<span class="text-danger"><?php echo isset($error[0]) ? $error[0] : "" ?></span>

								</div>
							</div>
							<div class="col-md-12 mt-12">
								<input type="hidden" name="token" value="<?php echo seg::getToken() ?>">

								<div class="form-group">
									<div class="row justify-content-center">
										<div class="col-md-6"><span class="text-danger">(*) Obligatorio</span></div>
										<br><br>
									</div>
									<input type="submit" value="Agregar" class="btn btn-success py-3 px-5">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>
</section>