                        <h1 class="mt-4"><?=$titulo?></h1>
                        <ol class="breadcrumb mb-4">
                        	<li class="breadcrumb-item"><a href="">Dashboard</a></li>
                        	<li class="breadcrumb-item active"><?=$titulo?></li>
                        </ol>
                        <div class="card mb-4">
                        	<div class="card-body">
                        		<a href="<?=base_url()?>/public/Unidades" class="btn btn-primary">Regresar</a>
                        	</div>
                        </div>
                        <div class="card mb-4">
                        	<div class="card-header">
                        		<i class="fas fa-table me-1"></i>
                        		<?=$titulo?>
                        	</div>
                        	<div class="card-body">

                        		<form method="post" action="<?=base_url()?>/public/Unidades/actualizar">
                        			<div class="form-group row">
                        				<label for="nombre" class="col-4 col-form-label">Id Unidad</label>
                        				<div class="col-8">
                        					<input id="idunidad" name="idunidad" type="text" class="form-control" value="<?=$datos['idunidad']?>" readonly>
                        			</div>
									<div class="form-group row">
                        				<label for="nombre" class="col-4 col-form-label">Unidad</label>
                        				<div class="col-8">
                        					<input id="nombre" name="nombre" placeholder="Ingrese de unidad de medida" type="text" class="form-control" value="<?=$datos['nombre']?>">
                        				</div>
                        			</div><br>
                        			<div class="form-group row">
                        				<label for="nombre_corto" class="col-4 col-form-label">Abreviación</label>
                        				<div class="col-8">
                        					<input id="nombre_corto" name="nombre_corto" placeholder="Ingrese la abreviación de la unidad" type="text" class="form-control"  value="<?=$datos['nombre_corto']?>">
                        				</div>
                        			</div><br>
                        			<div class="form-group row">
                        				<div class="offset-4 col-8">
                        					<button name="submit" type="submit" class="btn btn-primary">Actualizar</button>
                        				</div>
                        			</div>
                        		</form>
                        	</div>
                        </div>
