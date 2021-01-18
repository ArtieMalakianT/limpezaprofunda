<x-app2-layout>
    <div id="toastsContainerTopRight" class="toasts-top-right fixed">
        @if(session('status'))
        <div id="toast-container" class="toast-top-right"><div class="toast toast-success" aria-live="polite" ><div class="toast-message">{{session('status')}}</div></div></div>
        @endif
        @if(session('error'))
        <div id="toast-container" class="toast-top-right"><div class="toast toast-error" aria-live="assertive" ><div class="toast-message">Lorem ipsum dolor sit amet, consetetur sadipscing elitr.</div></div></div>
        @endif
    </div>
    <div class="row">
                <div class="col s12">
                    <div class="card card-success">
                        <div class="card-header">
                            <div class="card-title">
                                <h3>Atualizar Informações de parceiros</h3>
                            </div>
                        </div>

                        <form id="about" action="{{Route('parceirosUpdate')}}"  method="post" enctype="multipart/form-data">                                                
                        @method('post')
                        @CSRF
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="copy">Copy</label>                       
                                    @php $path = getcwd () @endphp                                                                                                                        
                                    <textarea class="form-control" id="summernote" name="copy"><?php $file = fopen(public_path($parceiro->copy),'r'); while(!feof($file)){$linha = fgets($file,'1024'); echo $linha;} fclose($file); ?></textarea>                                   
                                    @error('copy')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror 
                                </div>      
                                <div class="form-group">
                                    <label for="img">Imagem</label>                                                                                                                                               
                                    <input type="file" class="form-control" id="img" name="img" accept="image/*">
                                    @error('img')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror 
                                </div>  
                                <div class="form-group">
                                    <label for="cidades">Cidades</label>
                                    @php $path = getcwd () @endphp                                                                                                                        
                                    <textarea class="form-control" id="summernote2" name="cidades"><?php $file2 = fopen(public_path($parceiro->cidades),'r'); while(!feof($file2)){$linha = fgets($file2,'1024'); echo $linha;} fclose($file2); ?></textarea>                                   
                                    @error('cidades')
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
</x-app2-layout>

