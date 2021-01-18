<x-app2-layout>
    @push('title')
        <h3>Editar Copy Treinamento</h3>
    @endpush
    
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
            <div class="card card-black">
                <div class="card-header">
                    <div class="card-title"></div>
                </div>
                <form action="{{Route('courseUpdate')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="card-body">
                        <div class="form-group">
                            <label>Copy</label>                            
                            <textarea class="form-control" id="summernote" name="copy"><?php $file = fopen(public_path($course->copy),'r'); while(!feof($file)){$linha = fgets($file,'1024'); echo $linha;} fclose($file); ?></textarea>
                            @error('copy')
                                <div class="aler alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Link</label>
                            <input class="form-control" type="text" name="link" value="{{$course->link}}" />
                            @error('link')
                                <div class="aler alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Imagem</label>
                            <input type="file" class="form-control" name="img" accept="image/*">
                            @error('img')
                                <div class="aler alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-success">Salvar Alterações</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col s6">

        </div>
    </div>

</x-app2-layout>