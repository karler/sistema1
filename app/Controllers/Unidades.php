<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UnidadesModel;

class Unidades extends BaseController
{
	protected $unidades;
	
	public function __construct(){
            $this->unidades = new UnidadesModel();
        }
	
    public function index($activo = 1)
    {
		$resultado = $this->unidades->where('activo',$activo)->findAll();
            $data = [ 
                'titulo' => 'Unidades',
                'datos' => $resultado
            ];
        echo view('plantilla/cabecera');
		echo view('unidades/unidades',$data);
		echo view('plantilla/pie');
    }
	
	public function nuevo(){
		$data = [
			'titulo' => 'Nuevas Unidades'
		];
		echo view('plantilla/cabecera');
		echo view('unidades/nuevo',$data);
		echo view('plantilla/pie');
	}
	
	public function guardar(){
		$valores = [
			'nombre' => $this->request->getPost('nombre'),
			'nombre_corto' => $this->request->getPost('nombre_corto'),
			'activo' => 1
		];
		$this->unidades->insert($valores);
		return redirect()->to(base_url()."/public/Unidades");
	}
	
	public function editar($id){
		$resultado = $this->unidades->where('idunidad',$id)->first();
		$data = [
			'titulo'=> 'Unidades - Editar',
			'datos' => $resultado
		];
		echo view('plantilla/cabecera');
		echo view('unidades/editar',$data);
		echo view('plantilla/pie');
	}
	
	public function actualizar(){
		$id = $this->request->getPost('idunidad');
		$valores = [
			'nombre' => $this->request->getPost('nombre'),
			'nombre_corto' => $this->request->getPost('nombre_corto')
		];
		$this->unidades->update($id, $valores);
        return redirect()->to(base_url()."/public/Unidades");
	}
	
	public function eliminar($id){
		$valores = [
			'activo' => 0
		];
		$this->unidades->update($id, $valores);
		return redirect()->to(base_url()."/public/Unidades");
	}
	
	public function eliminados($activo = 0)
    {
		$resultado = $this->unidades->where('activo',$activo)->findAll();
            $data = [ 
                'titulo' => 'Unidades Eliminadas',
                'datos' => $resultado
            ];
        echo view('plantilla/cabecera');
		echo view('unidades/eliminados',$data);
		echo view('plantilla/pie');
    }
	
	public function restaurar($id){
		$valores = [
			'activo' => 1
		];
		$this->unidades->update($id, $valores);
		return redirect()->to(base_url()."/public/Unidades");
	}
}