<div class="mt-5">
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif


    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-lg border-light rounded">
                    <div class="card-header text-center fw-bold text-body-color mb-1" style="background-color: rgb(165, 43, 226)">
                        <h4>Cadastro de Sensores</h4>
                    </div>
                    
                @if (session()->has('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                    <div class="card-body">
                        <form wire:submit.prevent="store">
                            <div class="mb-3">
                                <label for="codigo" class="form-label">Codigo</label>
                                <input type="text" class="form-control" id="codigp" wire:model.defer="codigo"
                                    placeholder="EX:.X1...">
                                    @error('codigo')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                            </div>
                            <div class="mb-3">
                        <label for="tipo" class="form-label fw-bold">TIPO</label>
                        <select class="form-select" aria-label="Default select example" wire:model.defer="tipo">
                            <option hidden></option>
                            <option value="luminosidade">Luminosidade</option>
                            <option value="rfid">RFID</option>
                            <option value="infravermelho">Infravermelho</option>
                            <option value="temperatura">Temperatura</option>
                            <option value="umidade">Umidade</option>
                        </select>
                        @error('tipo')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                            <div class="mb-3">
                                <label for="descricao" class="form-label">Descrição</label>
                                <input type="text" class="form-control" id="descricao" wire:model.defer="descricao"
                                    placeholder="digite aqui...">
                                    @error('descricao')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                            </div>

                            <div class=mb-3>
                                <label for="ambiente_id" class="form-label fw-semibold">Ambiente</label>
                                <select class="form-select" id="ambiente_id" name="ambiente_id"
                                    wire:model.defer="ambiente_id">
                                    @foreach ($ambiente as $a)
                                        <option value="{{$a->id }}" > {{ $a->nome }}</option>
                                    @endforeach
                                </select>

                            </div>

                            <div class=mb-3>
                                        <label for="status" class="form-label fw-semibold">Status</label>
                                        <select class="form-select" id="status" name="status"
                                            wire:model.defer="status">
                                            <option hidden>Selecione</option>
                                            <option value="0">Inativo</option>
                                            <option value="1">Ativo</option>
                                        </select>
                                       
                                    </div>


                            <input class="btn btn-dark mt-2" type="submit" value="Cadastrar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
