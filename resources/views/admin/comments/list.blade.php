<x-app2-layout>
    @push('title')
        <h3>Lista de comentários</h3>
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
            @foreach($comments as $comment)
                <div class="card card-primary">                    
                    <div class="card-header">
                        <div class="card-title">{{$comment->link}}</div>
                        <div class="card-tools">
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger{{$comment->id}}">
                                <i class="fa fa-trash"></i>Excluir
                              </button>                            
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="img-fluid pad">
                            <img src="{{Storage::url($comment->path)}}" style="max-height: 200px;" />
                        </div>
                    </div>
                </div>

                <!--Modal Delete-->
                <div class="modal fade show" id="modal-danger{{$comment->id}}" aria-modal="true" role="dialog" style="padding-right: 15px; display: none;">
                    <div class="modal-dialog">
                      <div class="modal-content bg-danger">
                        <div class="modal-header">
                          <h4 class="modal-title">Aviso!</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>Tem certeza que deseja excluir este comentário?</p>
                        </div>
                        <div class="modal-footer justify-content-between">
                          <button type="button" class="btn btn-outline-light" data-dismiss="modal">Fechar</button>
                          <form action="/comments/delete" method="POST">
                              @method('delete')
                            @CSRF
                            <input type="hidden" name="commentId" value="{{$comment->id}}"/>
                            <button type="submit" class="btn btn-outline-light">Sim</button>
                          </form>                          
                        </div>
                      </div>
                      <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                  </div>
            @endforeach
        </div>
        <div class="col s6">

        </div>
    </div>
</x-app2-layout>
