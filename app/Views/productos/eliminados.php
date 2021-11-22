						
                        <h1 class="mt-4"><?=$titulo?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?=base_url()?>/public/Productos">Dashboard</a></li>
                            <li class="breadcrumb-item active"><?=$titulo?></li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
								<a href="<?=base_url()?>/public/Productos" class="btn btn-danger">regresar</a>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Regitros de la tabla <?=$titulo?>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Id Producto</th>
                                            <th>Código</th>
                                            <th>Nombre</th>
                                            <th>Unidad</th>
                                            <th>Categoría</th>
											<th>P. Venta</th>
                                            <th>P. Compra</th>
											<th>Existencias</th>
											<th>Stock Min./th>
                                            <th>Inventariable</th>
											<th>Restaurar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?PHP
											foreach ($datos as $fila){
												echo "<tr>";
												echo "<td>{$fila['idproducto']}</td>";
												echo "<td>".$fila['codigo']."</td>";
												echo "<td>".$fila['nombre']."</td>";
												echo "<td>".$fila['idunidad']."</td>";
												echo "<td>".$fila['idcategoria']."</td>";
												echo "<td>".$fila['precio_venta']."</td>";
												echo "<td>".$fila['precio_compra']."</td>";
												echo "<td>".$fila['existencias']."</td>";
												echo "<td>".$fila['stock_minimo']."</td>";
												echo "<td>".$fila['inventariable']."</td>";
												
												$ruta2 = base_url()."/public/Productos/restaurar/".$fila['idproducto'];
												echo "<td><a class ='btn btn-primary' href='$ruta2'><i class='fas fa-trash-restore'></i>Restaurar</a></td>";
												echo "</tr>";
											}
										?>
                                    </tbody>
                                </table>
                            </div>
                        </div>