    @push('title')
        Registrar novo Serviço
    @endpush

            <div class="row">
                <div class="col s12">
                    <div class="card card-success">
                        <div class="card-header">
                            <div class="card-title">
                                <h3>Registrar</h3>
                            </div>
                        </div>

                        <form id="servicereg" wire:submit.prevent="save" method="POST">                                                

                            <div class="card-body">

                                <div class="form-group">
                                    <label>Nome</label>
                                    <input class="form-control @error('nome') is-invalid @enderror" required type="text" name="nome" placeholder="Digite o Nome do serviço" wire:model="nome">
                                    @error('nome')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror 
                                </div>

                                <div class="form-group">
                                    <label>Copy</label>
                                    <textarea id="summernote" name="copy" class="form-control" wire:model="copy">Digite aqui sua Copy.</textarea>                                
                                </div>                                                                                         

                                <div class="form-group">
                                    <label for="exampleInputFile">Imagem</label>
                                    <div class="input-group">
                                    <div class="custom-file">                                    
                                        <input type="file" name="photo" class="custom-file-input" id="exampleInputFile" accept="image/*" wire:model="photo">
                                        <label class="custom-file-label" for="exampleInputFile">Escolha o arquivo</label>
                                    </div>                                  
                                    </div>
                                    @error('photo')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror 
                                </div> 

                                <div class="form-group">
                                    <label>Ordem</label>
                                    <input type="number" class="form-control @error('ordem') is-invalid @enderror" name="ordem" wire:model="ordem"> 
                                    @error('ordem')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror                               
                                </div>

                            </div>
                            <div class="card-footer">
                            <button type="submit" class="btn btn-success" id="save">Salvar</button>
                            </div>
                        </form>                    
                    </div>            
                    
                </div>
                <div class="col s6">                
                <div class="card card-primary"> 
                    <div class="card-header">
                        <div class="card-title"><h3>Prévia</h3><small>Não ficará exatamente igual</small></div>                        
                    </div>
                    <div class="card-body">                                                                     
                        <div class="card card-success">
                            <div class="card-img-top img-fluid">
                                @if($photo)
                                <img src="{{$photo->temporaryUrl()}}">
                                @endif
                            </div>
                            <div class="card-header">
                                <div class="card-title">
                                    <h3 style="text-transform: uppercase;">{{$nome}}</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <p>{{$copy}}</p>
                            </div>
                        </div>
                    </div>                     
                </div>               
                </div>
            </div>                             

    @push('scripts')
        <!-- bs-custom-file-input -->
        <script src="/adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
        <!-- SweetAlert2 -->
        <script src="/adminlte/plugins/sweetalert2/sweetalert2.min.js"></script>                
    @endpush