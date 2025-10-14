<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white d-flex align-items-center">
                    <h4 class="mb-0">
                        <i class="fas fa-microchip me-2"></i>
                        Status dos Sensores
                    </h4>
                </div>
                <div class="card-body p-0">
                    @if ($sensors->isEmpty())
                        <div class="alert alert-info m-3" role="alert">
                            Nenhum sensor cadastrado ou disponível.
                        </div>
                    @else
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead class="bg-light">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Código</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($sensors as $s)
                                    <tr>
                                        <td>{{ $s->id }}</td>
                                        <td>{{ $s->nome }}</td>
                                        <td>{{ $s->codigo }}</td>
                                        <td>
                                            <div class="form-check form-switch">
                                                <input
                                                    class="form-check-input"
                                                    type="checkbox"
                                                    role="switch"
                                                    id="switch-{{ $s->id }}"
                                                    wire:click="toggleStatus({{ $s->id }})"
                                                    @if ($s->status == 'ativo' || $s->status == 1) checked @endif
                                                >
                                                <label
                                                    class="form-check-label @if ($s->status == 'ativo' || $s->status == 1) text-primary @else text-danger @endif"
                                                    for="switch-{{ $s->id }}"
                                                >
                                                    @if ($s->status == 'ativo' || $s->status == 1)
                                                        Ativo
                                                    @else
                                                        Inativo
                                                    @endif
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>