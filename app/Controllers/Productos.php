<?php

namespace App\Controllers;

use App\Models\ProductosModel;

class Productos extends BaseController
{
	protected $productos;
	
	public function __construct(){
            $this->productos = new ProductosModel();
    }
	
    public function index($activo = 1)
    {
		$resultado = $this->productos->where('activo',$activo)->findAll();
            $data = [ 
                'titulo' => 'Productos',
                'datos' => $resultado
            ];
        echo view('plantilla/cabecera');
		echo view('productos/productos',$data);
		echo view('plantilla/pie');
    }
	
	public function nuevo(){
		$data = [
			'titulo' => 'Nuevos Productos'
		];
		echo view('plantilla/cabecera');
		echo view('productos/nuevo',$data);
		echo view('plantilla/pie');
	}
	
	public function guardar(){
		$valores = [
			'codigo' => $this->request->getPost('codigo'),
			'nombre' => $this->request->getPost('nombre'),
			'idunidad' => $this->request->getPost('idunidad'),
			'idcategoria' => $this->request->getPost('idcategoria'),
			'precio_venta' => $this->request->getPost('precio_venta'),
			'precio_compra' => $this->request->getPost('precio_compra'),
			'existencias' => $this->request->getPost('existencias'),
			'stock_minimo' => $this->request->getPost('stock_minimo'),
			'inventariable' => $this->request->getPost('inventariable'),
			'activo' => 1
		];
		$this->productos->insert($valores);
		return redirect()->to(base_url()."/public/Productos");
	}
	
	public function editar($id){
		$resultado = $this->productos->where('idproducto',$id)->first();
		$data = [
			'titulo'=> 'Productos - Editar',
			'datos' => $resultado
		];
		echo view('plantilla/cabecera');
		echo view('productos/editar',$data);
		echo view('plantilla/pie');
	}
	
	public function actualizar(){
		$id = $this->request->getPost('idproducto');
		$valores = [
			'codigo' => $this->request->getPost('codigo'),
			'nombre' => $this->request->getPost('nombre'),
			'idunidad' => $this->request->getPost('idunidad'),
			'idcategoria' => $this->request->getPost('idcategoria'),
			'precio_venta' => $this->request->getPost('precio_venta'),
			'precio_compra' => $this->request->getPost('precio_compra'),
			'existencias' => $this->request->getPost('existencias'),
			'stock_minimo' => $this->request->getPost('stock_minimo'),
			'inventariable' => $this->request->getPost('inventariable')
		];
		$this->productos->update($id, $valores);
        return redirect()->to(base_url()."/public/Productos");
	}
	
	public function eliminar($id){
		$valores = [
			'activo' => 0
		];
		$this->productos->update($id, $valores);
		return redirect()->to(base_url()."/public/Productos");
	}
	
	public function eliminados($activo = 0)
    {
		$resultado = $this->productos->where('activo',$activo)->findAll();
            $data = [ 
                'titulo' => 'Productos Eliminadas',
                'datos' => $resultado
            ];
        echo view('plantilla/cabecera');
		echo view('productos/eliminados',$data);
		echo view('plantilla/pie');
    }
	
	public function restaurar($id){
		$valores = [
			'activo' => 1
		];
		$this->productos->update($id, $valores);
		return redirect()->to(base_url()."/public/Productos");
	}
}