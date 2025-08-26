<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteEdit extends Component
{
       
     public $nome;
     public $descricao;
     public $status;

     

    public function salvar()
    {
        $ambiente = Ambiente::find($this->ambiente->id);
        $ambiente->nome = $this->nome;
        $ambiente->descricao = $this->descricao;
        $ambiente->status = $this->status;
        

        
        $ambiente->save();
        session()->flash('success', 'Ambiente atualizado com Sucesso');
        return redirect()->route('ambientes.create');
    }
     

    public function render()
    {
        return view('livewire.ambiente.ambiente-edit');
    }
}
