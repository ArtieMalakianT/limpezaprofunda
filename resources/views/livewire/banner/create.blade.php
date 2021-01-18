<div>
    @push('title')
        Registrar novo Banner
    @endpush

    <div class="row">
                <div class="col s12">
                    <div class="card card-success">
                        <div class="card-header">
                            <div class="card-title">
                                <h3>Registrar</h3>
                            </div>
                        </div>

                        <form id="servicereg" wire:submit.prevent="upload" method="POST">                                                

                            <div class="card-body">

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
                            </div>
                            <div class="card-footer">
                            <button type="submit" class="btn btn-success" id="save">Enviar</button>
                            </div>
                        </form>                    
                    </div>            
                    
                </div>
                <div class="col s6">                
                <div class="card card-primary"> 
                    <div class="card-header">
                        <div class="card-title"><h3>Prévia</h3></div>                        
                    </div>
                    <div class="card-body">                                                                     
                        <div class="card card-success">
                            <div class="card-img-top img-fluid">
                                @if($photo)
                                <img src="{{$photo->temporaryUrl()}}">
                                @else
                                <img src="{{Storage::url($banner->path)}}" />
                                @endif
                            </div>                            
                        </div>
                    </div>                     
                </div>               
                </div>
            </div>
            @push('scripts')
                <!-- SweetAlert2 -->
                <script src="/adminlte/plugins/sweetalert2/sweetalert2.min.js"></script>         
            @endpush
</div>

