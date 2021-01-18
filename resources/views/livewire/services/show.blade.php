@push('title')
Lista de Serviços
@endpush

<div class="row">
    <div class="col s6">           
        @foreach($services as $service)  
            <div class="row">                              
                @livewire('services.update',['serviceId' => $service->id])               
            </div>                                                     
        @endforeach   
    </div> 
    <div class="col s6">
        
    </div>
</div>                            
        


@push('scripts')
    <!-- bs-custom-file-input -->
    <script src="/adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- SweetAlert2 -->
    <script src="/adminlte/plugins/sweetalert2/sweetalert2.min.js"></script>

@endpush