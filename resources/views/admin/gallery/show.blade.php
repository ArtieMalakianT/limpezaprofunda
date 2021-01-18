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
        <div class="col s6">
            <div class="card card-primary">
                <div class="card-header">
                    <div class="card-title">Galerias</div>                    
                </div>
                <div class="card-body">
                        @foreach($services as $service)

                        @php $gallery = $service->nome @endphp                        
                        <div class="card card-outline card-primary">
                            <div class="card-header">
                                <div class="card-title">{{$gallery}}</div>
                                <div class="card-tools">
                                    <button class="btn btn-primary" data-toggle="collapse" data-target="#fotos{{$gallery}}">
                                        <i class="fas fa-edit"></i>
                                        Mostrar Fotos
                                    </button>
                                </div>
                            </div>
                            <div class="collapse" id="fotos{{$gallery}}">                                
                                <form id="form{{$gallery}}" action="{{Route('deleteFotos')}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    @php $files = Storage::files('public/galerias/'.$gallery)  @endphp
                                    <div class="card-body">
                                        @foreach($files as $file)
                                        <input type="checkbox" id="{{$file}}" name="fotos[]"  class="minimal" value="{{$file}}">
                                        <label for="{{$file}}"><img src="{{Storage::url($file)}}" alt="" style="max-height: 100px;"></label>
                                        @endforeach
                                    </div> 
                                    <div class="card-footer">
                                        <button class="btn btn-danger">Excluir selecionadas</button>
                                    </div>                                  
                                </form>                                                                    
                            </div>
                        </div>

                    @endforeach()                   
                </div>
            </div>
        </div>
        <div class="col s6">

        </div>
    </div>
</x-app2-layout>