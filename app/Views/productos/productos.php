						
                        <h1 class="mt-4"><?=$titulo?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?=base_url()?>/public/Productos">Dashboard</a></li>
                            <li class="breadcrumb-item active"><?=$titulo?></li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <a href="<?=base_url()?>/public/Productos/nuevo" class="btn btn-primary">Añadir</a>
								<a href="<?=base_url()?>/public/Productos/eliminados" class="btn btn-danger">Ver Eliminados</a>
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
                                            <th>Id</th>
                                            <th>Código</th>
                                            <th>Nombre</th>
                                            
											<th>P. Venta</th>
                                            <th>P. Compra</th>
											<th>Cant.</th>
											<th>Stock Min.</th>
                                            <th>Invent.</th>
											<th>Editar</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?PHP
											foreach ($datos as $fila){
												echo "<tr>";
												echo "<td>{$fila['idproducto']}</td>";
												echo "<td>".$fila['codigo']."</td>";
												echo "<td>".$fila['nombre']."</td>";

												echo "<td>".$fila['precio_venta']."</td>";
												echo "<td>".$fila['precio_compra']."</td>";
												echo "<td>".$fila['existencias']."</td>";
												echo "<td>".$fila['stock_minimo']."</td>";
												echo "<td>".$fila['inventariable']."</td>";
												$ruta1 = base_url()."/public/Productos/editar/".$fila['idproducto'];
												echo "<td><a class ='btn btn-success' href='$ruta1'>Editar</a></td>";
												$ruta2 = base_url()."/public/Productos/eliminar/".$fila['idproducto'];
												echo "<td><a class ='btn btn-danger' href='$ruta2'><i class='fas fa-trash-alt'></i> Eliminar</a></td>";
												echo "</tr>";
											}
										?>
                                    </tbody>
                                </table>
                            </div>
                        </div>