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
                                <h3>Atualizar Popup</h3>
                            </div>
                        </div>

                        <form id="comment" action="{{Route('popupUpdate')}}"  method="post" enctype="multipart/form-data">                                                
                        @method('post')
                        @CSRF
                            <div class="card-body">
                                
                                <div class="form-group">
                                    <label>Imagem</label>
                                    <input type="file" name="img" class="form-control" accept="image/*">
                                    @error('img')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror 
                                </div>

                                <div class="form-group">
                                    <labe>Link</labe>
                                    <input type="text" name="link" class="form-control" value="{{$popup->link}}"/>
                                    @error('link')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror 
                                </div>

                            </div>                            

                            <div class="card-footer">
                            <button type="submit" class="btn btn-success" id="save">Atualizar</button>
                            </div>
                        </form>                    
                    </div>            
                    
                </div>
                <div class="col s6">   
                                                        
        </div>
    </div>
</x-app2-layout>

