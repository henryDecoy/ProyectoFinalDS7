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
		<div class="row d-flex no-gutters  justify-content-center">
			<div class="col-md-12 order-md-last ftco-animate makereservation p-4 p-md-5 pt-5">
				<div class="py-md-5">
					<div class="heading-section ftco-animate mb-5">
						<h2 class="mb-4" style="color:black;">Modificar Categoria</h2>
						<p>En esta podrás modificar a tu gusto la categoría que seleccionaste: <?php echo isset($resultado->nombre_categoria) ? $resultado->nombre_categoria : "" ?> </p>
					</div>
					<form method="POST" action="<?php echo "index.php?c=" . seg::codificar("categoria_plato") . "&m=" . seg::codificar("actualizar") ?>">
						<div class="row justify-content-center" >
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Descripción de categoria" name="txtDescripcion" value="<?php echo isset($resultado->nombre_categoria) ? $resultado->nombre_categoria : "" ?>">
									<span class="text-danger"><?php echo isset($error[0]) ? $error[0] : "" ?></span>
									<input type="hidden" name="_id" value="<?php echo $id ?>">
								</div>
							</div>

							<div class="col-md-12 mt-12 ">
								<input type="hidden" name="token" value="<?php echo seg::getToken() ?>">
								<div class="form-group" >
									<div class="row justify-content-center">
										<div class="col-md-6"><span class="text-danger">(*) Obligatorio</span></div>
										<br><br> 
									</div>
									<input type="submit" value="Guardar " class="btn btn-success py-8 px-5">
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>

		</div>
	</div>
</section>