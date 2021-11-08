						
                        <h1 class="mt-4"><?=$titulo?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active"><?=$titulo?></li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                <a href="<?=base_url()?>/public/Unidades/nuevo" class="btn btn-primary">Añadir</a>
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
                                            <th>Id Unidad</th>
                                            <th>Nombre</th>
                                            <th>Nombre Corto</th>
                                            <th>Editar</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?PHP
											foreach ($datos as $fila){
												echo "<tr>";
												echo "<td>{$fila['idunidad']}</td>";
												echo "<td>".$fila['nombre']."</td>";
												echo "<td>".$fila['nombre_corto']."</td>";
												$ruta1 = base_url()."/public/Unidades/editar/".$fila['idunidad'];
												echo "<td><a class ='btn btn-success' href='$ruta1'>Editar</a></td>";
												$ruta2 = base_url()."/public/Unidades/eliminar/".$fila['idunidad'];
												echo "<td><a class ='btn btn-danger' href='$ruta2'><i class='fas fa-trash-alt'></i> Eliminar</a></td>";
												echo "</tr>";
											}
										?>
                                    </tbody>
                                </table>
                            </div>
                        </div>