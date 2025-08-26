<div>

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="col-md-6 mx-auto">
        <div class="card bg-primary-subtle " >
            <h5 class="card-header fw-bold text-center" $font-family="sans-serif">Sensor</h5>
            <div class="card-body">
                <form wire:submit.prevent="salvar">
                    <div class="mb-3">
                        <label for="codigo" class="form-label fw-bold text-center">Código</label>
                        <input type="text" class="form-control" id="codigo" name="codigo"
                            placeholder="ex:1234" wire:model.defer="codigo">
                            </select>
                            @error('codigo')<span class="text-warning small">{{$message}}</span>@enderror
                    </div>

                    <div class="mb-3">
                        <label for="descricao" class="form-label fw-bold text-center">Descrição</label>
                        <input type="text" class="form-control" id="descricao" name="descricao"
                        placeholder="" wire:model.defer="descricao">
                    </select>
                    @error('descricao')<span class="text-warning small">{{$message}}</span>@enderror
                    </div>

                  <div class="mb-3">
                        <label for="text" class="form-label fw-bold text-center">Tipo</label>
                        <div class="input-group ">
                            <select class="form-select" aria-label="Default select example" wire:model.defer="tipo">
                                <option selected>Selecione os tipos</option>
                                <option value="1">Temperatura</option>
                                <option value="0">Sensor de Presença</option>
                               
                              </select>
                                @error('tipo') <span class="text-warning small">{{ $message }}</span>@enderror
                        </div>


                    <div class="mb-3">
                        <label for="text" class="form-label fw-bold text-center">Status</label>
                        <div class="input-group ">
                            <select class="form-select" aria-label="Default select example" wire:model.defer="status">
                                <option selected>Selecione os status</option>
                                <option value="1">Ativo</option>
                                <option value="0">Nativo</option>
                               
                              </select>
                                @error('status') <span class="text-warning small">{{ $message }}</span>@enderror
                        </div>

                    

                    

                   

                    <div class="mb-3 text-center">
                        <button type="submit" class="btn btn-sm btn-primary">Salvar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    
</div>