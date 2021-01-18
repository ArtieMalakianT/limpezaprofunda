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
                                <h3>Atualizar Copy</h3>
                            </div>
                        </div>

                        <form id="about" action="{{Route('aboutUpdate')}}"  method="post">                                                
                        @method('post')
                        @CSRF
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="copy">Nova Copy</label>                       
                                    @php $path = getcwd () @endphp                                                                                                                        
                                    <textarea class="form-control" id="summernote" name="copy">{{$obj->copy}}</textarea>                                   
                                    @error('copy')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror 
                                </div>      
                                <div class="form-group">
                                    <label for="link">Link do vídeo</label>                                                                                                                                               
                                    <input type="text" class="form-control" id="link" name="link" wire:model="link" value="{{$obj->link}}">
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
</x-app2-layout>

