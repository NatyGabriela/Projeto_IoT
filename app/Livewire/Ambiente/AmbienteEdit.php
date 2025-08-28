<?php

namespace App\Livewire\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteEdit extends Component
{
     public $ambienteId;  
     public $nome;
     public $descricao;
     public $status;

      public function mount($id)
    {
        $ambiente = Ambiente::find($id);

        if ($ambiente == null) {
            return redirect()->route('ambiente.list');
        }

        $this->ambienteId = $ambiente->id;
        $this->nome = $ambiente->nome;
        $this->descricao = $ambiente->descricao;
        $this->status = $ambiente->status;
    }
     
    public function salvar()
    {
        $ambiente = Ambiente::find($this->ambienteId);
        $ambiente->nome = $this->nome;
        $ambiente->descricao = $this->descricao;
        $ambiente->status = $this->status;
       

       
        $ambiente->save();
        session()->flash('success', 'Ambiente atualizado com Sucesso');
        return redirect()->route('ambiente.list');
    }
     

    public function render()
    {
        return view('livewire.ambiente.ambiente-edit');
    }
}


