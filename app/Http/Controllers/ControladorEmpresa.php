<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;

class ControladorEmpresa extends Controller
{
    
    public function Index(){
      
        return view('empresas.index')->with(['empresas'=>Empresa::all()]);
    }
    public function create(){
        return view('empresas.create');
    }
    public function store(){
       $empresa = Empresa::create(request()->all());
       return redirect()
       ->route('empresas.index');
    }
    public function show($empresa){
        return "Mostrando la empresa desde el controlador{$empresa}";
    }

    public function edit($empresa){
        return view ('empresas.edit')->with(['empresa'=>Empresa::findOrFail($empresa),]);
    }
    public function update($empresa){
      $empresa = Empresa::findOrFail($empresa);
      $empresa->update(request()->all());
      return redirect()
       ->route('empresas.index');
        
    }

    public function delete($empresa){
        $empresa =Empresa::findOrFail($empresa);
        $empresa->delete();
        return redirect()
         ->route('empresas.index');
        
    }

}
