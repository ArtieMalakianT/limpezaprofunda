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
                                <h3>Salvar Imagens para Galeria</h3>
                            </div>
                        </div>

                        <form id="comment" action="{{Route('uploadGallery')}}"  method="post" enctype="multipart/form-data">                                                
                        @method('post')
                        @CSRF
                            <div class="card-body">
                                
                                <div class="form-group">
                                    <label>Imagens:</label>
                                    <input type="file" name="images[]" class="form-control" accept="image/*" multiple>                                    
                                    @error('imgages')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror 
                                </div>

                                <div class="form-group">
                                    <label for="service">Serviço</label>
                                    <select class="form-control" name="service" id="service">
                                        @foreach($services as $service)
                                            <option value="{{$service->id}}">{{$service->nome}}</option>
                                        @endforeach
                                    </select>
                                    @error('service')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror 
                                </div>

                            </div>                            

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success" id="save">Enviar Fotos</button>
                            </div>
                        </form>                    
                    </div>            
                    
                </div>
                <div class="col s6">   
                                                        
        </div>
    </div>
</x-app2-layout>

