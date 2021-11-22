                        <h1 class="mt-4"><?=$titulo?></h1>
                        <ol class="breadcrumb mb-4">
                        	<li class="breadcrumb-item"><a href="<?=base_url()?>/public/Unidades">Dashboard</a></li>
                        	<li class="breadcrumb-item active"><?=$titulo?></li>
                        </ol>
                        <div class="card mb-4">
                        	<div class="card-body">
                        		<a href="<?=base_url()?>/public/Productos" class="btn btn-primary">Regresar</a>
                        	</div>
                        </div>
                        <div class="card mb-4">
                        	<div class="card-header">
                        		<i class="fas fa-table me-1"></i>
                        		Regitros de la tabla <?=$titulo?>
                        	</div>
                        	<div class="card-body">

                        		<form method="post" action="<?=base_url()?>/public/Productos/actualizar">
                        			<div class="form-group row">
									<label for="idproducto" class="col-4 col-form-label">Id Producto</label> 
									<div class="col-8">
									  <div class="input-group">
										<div class="input-group-prepend">
										  <div class="input-group-text">
											<i class="fa fa-address-card"></i>
										  </div>
										</div> 
										<input id="codigo" name="idproducto" type="text" class="form-control"  value="<?=$datos['idproducto']?>" readonly>
									  </div>
									</div>
								  </div>
								  <div class="form-group row">
									<label for="codigo" class="col-4 col-form-label">Código</label> 
									<div class="col-8">
									  <div class="input-group">
										<div class="input-group-prepend">
										  <div class="input-group-text">
											<i class="fa fa-address-card"></i>
										  </div>
										</div> 
										<input id="codigo" name="codigo" type="text" class="form-control"  value="<?=$datos['codigo']?>">
									  </div>
									</div>
								  </div>
								  <div class="form-group row">
									<label for="nombre" class="col-4 col-form-label">Nombre</label> 
									<div class="col-8">
									  <input id="nombre" name="nombre" type="text" class="form-control" value="<?=$datos['nombre']?>">
									</div>
								  </div>
								  <div class="form-group row">
									<label for="idunidad" class="col-4 col-form-label">Unidad</label> 
									<div class="col-8">
									  <input id="idunidad" name="idunidad" type="text" class="form-control" value="<?=$datos['idunidad']?>">
									</div>
								  </div>
								  <div class="form-group row">
									<label for="idcategoria" class="col-4 col-form-label">Categoría</label> 
									<div class="col-8">
									  <input id="idcategoria" name="idcategoria" type="text" class="form-control" value="<?=$datos['idcategoria']?>">
									</div>
								  </div>
								  <div class="form-group row">
									<label for="precio_venta" class="col-4 col-form-label">Precio de Venta</label> 
									<div class="col-8">
									  <div class="input-group">
										<div class="input-group-prepend">
										  <div class="input-group-text">S/</div>
										</div> 
										<input id="precio_venta" name="precio_venta" type="text" class="form-control" value="<?=$datos['precio_venta']?>">
									  </div>
									</div>
								  </div>
								  <div class="form-group row">
									<label for="precio_compras" class="col-4 col-form-label">Precio de Compras</label> 
									<div class="col-8">
									  <div class="input-group">
										<div class="input-group-prepend">
										  <div class="input-group-text">S/</div>
										</div> 
										<input id="precio_compras" name="precio_compra" type="text" class="form-control" value="<?=$datos['precio_compra']?>">
									  </div>
									</div>
								  </div>
								  <div class="form-group row">
									<label for="existencias" class="col-4 col-form-label">Existencias</label> 
									<div class="col-8">
									  <input id="existencias" name="existencias" type="text" class="form-control" value="<?=$datos['existencias']?>">
									</div>
								  </div>
								  <div class="form-group row">
									<label for="stock_minimo" class="col-4 col-form-label">Stock mínimo</label> 
									<div class="col-8">
									  <input id="stock_minimo" name="stock_minimo" type="text" class="form-control" value="<?=$datos['stock_minimo']?>">
									</div>
								  </div>
								  <div class="form-group row">
									<label for="inventariable" class="col-4 col-form-label">Inventariable</label> 
									<div class="col-8">
									  <select id="inventariable" name="inventariable" class="custom-select">
										<option value="1">Sí</option>
										<option value="0">No</option>
									  </select>
									</div>
								  </div> 
								  <div class="form-group row">
									<div class="offset-4 col-8">
									  <button name="submit" type="submit" class="btn btn-primary">Actualizar</button>
									</div>
								  </div>
								</form>

									
                        	</div>
                        </div>
