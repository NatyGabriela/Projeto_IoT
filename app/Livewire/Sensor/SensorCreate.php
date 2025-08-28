<?php

namespace App\Livewire\Sensor;

use App\Models\Ambiente;
use App\Models\Sensor;
use Livewire\Component;
use Livewire\WithPagination;

class SensorCreate extends Component

{
 public $ambiente_id;
    public $codigo;
    public $tipo;
    public $descricao;
    public $status;


   
    protected $rules = [
            'codigo' => 'required|unique:sensors',
            'tipo' => 'required',
            'status' => 'required',
            'descricao' => 'required'
    ];

     protected $messages = [
        'codigo.unique' => 'Esse código é unico',
          'codigo.required' => 'Esse código é obrigatório',
        'tipo.required' => 'Esse campo é obrigatório',
        'status' => 'Esse campo é obrigatório',
        'descricao'=> 'Esse campo é obrigatório'
    ];

    public function store(){

        $this->validate();

        Sensor::create([
            'codigo'=>$this->codigo,
            'tipo' => $this->tipo,
            'descricao' => $this->descricao,
            'status' => $this->status,
            'ambiente_id' => $this->ambiente_id
        ]);

          session()->flash('success', 'Cadastro Realizado '); 
          return redirect()->route('sensor.list');
    }


    public function render()
    {
         $ambiente = Ambiente::all();
        return view('livewire.sensor.sensor-create', compact('ambiente'));
    }
}
