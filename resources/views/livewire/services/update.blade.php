<div class="col s6">                  
    <div class="card card-primary">
        <div class="card-header">
            <div class="card-title">
                <h5>{{$nome}}</h5>
                <div class="btn-group left">                                                
                    <button class="btn btn-danger" wire:click="delete({{$serviceId}})">Excluir <i class="fa fa-trash"></i></button>
                </div>
            </div>
        </div>                                        
        <form enctype="multipart/form-data" id="service{{$serviceId}}" wire:submit.prevent="update" method="POST">
            <div class="card-body">                                    
                <div class="form-group">
                    <label>Nome</label>
                    <input class="form-control" name="nome" value="{{$nome}}" wire:model="nome" />
                    @error('nome')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror 
                </div>
                <div class="form-group"  >
                    <label>Copy</label>
                    <textarea class="form-control" name="copy" wire:ignore wire:model="copy"></textarea>                
                    
                    @error('copy')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror                                              
                </div>                         
                <div class="form-group">
                    <label>Ordem</label>
                    <input class="form-control" name="ordem"  type="number" value="{{$ordem}}" wire:model="ordem"/>
                    @error('ordem')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    @if($photo)
                    <img src="{{$photo->temporaryUrl()}}" style="height: 50px;">    
                    @else
                        <img src="{{Storage::url($oldImg)}}" style="height: 50px;">
                    @endif
                </div>
                <div class="form-group">
                    <label>Imagem</label>
                    <input type="file" name="photo" wire:model="photo" accept="image/*"/>  
                    @error('img')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror                                              
                </div>                                                                               
            </div>  
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Salvar Alterações</button>
            </div>                                                                          
        </form>                 
    </div>  
</div>   