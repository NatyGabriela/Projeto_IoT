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

    public function mount(Sensor $sensor)
    {
        $this->sensor = $sensor;
        $this->status = (bool) $this->sensor->status;
    }

    public function toggleStatus($sensorId)
    {
        $sensor = Sensor::find($sensorId);

        if ($sensor) {
            // Alterna o status: se for 'ligado', muda para 'desligado', e vice-versa
            $sensor->status = ($sensor->status == 'ativo') ? 'inativo' : 'ativo';
            $sensor->save();
        }
    }
    


    public function render()
    {
        $sensors = Sensor::where('codigo', 'like', "%{$this->search}%")
            ->orWhere('tipo', 'like', "%{$this->search}%")
            ->orWhere('status', 'like', "%{$this->search}%")
            ->paginate($this->perPage);

        return view('livewire.sensor.sensor-status',compact('sensors'));
}



}
