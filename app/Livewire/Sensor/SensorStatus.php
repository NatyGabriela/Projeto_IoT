<?php

namespace App\Livewire\Sensor;

use App\Models\Sensor;
use Livewire\Component;
use Livewire\WithPagination;

class SensorStatus extends Component
{
         use WithPagination;

    public Sensor $sensor;
    public bool $status;
    
     public $search = '';
    public $perPage = 15;

    protected $queryString = [
        'search' => ['except' => ''],
        'perPage' => ['except' => 15],
    ];
    public function render()
    {
      // Usa a sintaxe `when` para aplicar o filtro de forma mais limpa.
        $sensores = Sensor::query()
            ->when($this->search, function ($query) {
                $query->where('tipo', 'like', '%' . $this->search . '%')
                      ->orWhere('codigo', 'like', '%' . $this->search . '%');
            })
            ->get();
return view('livewire.sensor.sensor-status',[
        'sensores' => $sensores
        ]);
    }

    

    public function toggleStatus($sensorId)
    {
        $sensor = Sensor::find($sensorId);

        if ($sensor) {
            // Lógica para determinar o novo status de forma mais legível.
            $novoStatus = ($sensor->status === 'ativo' || $sensor->status == 1) ? 'inativo' : 'ativo';
           
            $sensor->update(['status' => $novoStatus]);
           
            // Emite a mensagem de sucesso para a sessão.
            session()->flash('success', 'Status do ambiente alterado com sucesso!');
        }
    }








    
}






