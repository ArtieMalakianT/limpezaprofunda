<div>
    @push('title')
        Atualizar Copy "Quem Somos"
    @endpush

    <div class="row">
                <div class="col s12">
                    <div class="card card-success">
                        <div class="card-header">
                            <div class="card-title">
                                <h3>Atualizar Copy</h3>
                            </div>
                        </div>

                        <form id="about" wire:submit.prevent="update" method="POST">                                                

                            <div class="card-body">

                                <div class="form-group">
                                    <label for="copy">Nova Copy</label>                                                                                                                                               
                                    <textarea class="form-control" id="summernote" name="copy" wire:ignore wire:model="copy"></textarea>
                                    @error('copy')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror 
                                </div> 
                                <div class="form-group">
                                    <label for="link">Link do vídeo</label>                                                                                                                                               
                                    <input type="text" class="form-control" id="link" name="link" wire:model="link">
                                    @error('link')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror 
                                </div>                                                        
                            </div>
                            <div class="card-footer">
                            <button type="submit" class="btn btn-success" id="save">Salvar alterações</button>
                            </div>
                        </form>                    
                    </div>            
                    
                </div>
                <div class="col s6">   
                                                        
                </div>
            </div>
            @push('scripts')
                <!-- SweetAlert2 -->
                <script src="/adminlte/plugins/sweetalert2/sweetalert2.min.js"></script>         
            @endpush
</div>

