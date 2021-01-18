<x-app2-layout>
    <div class="row">
        <div class="col s6">
            <div class="card card-success">
                <div class="card-header">
                    <div class="card-title">Comentários</div>
                </div>
                <div class="card-body">
                    @foreach($comments as $comment)
                        <img src="{{Storage::url($comment->img)}}" />
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col s6">

        </div>
    </div>
</x-app2-layout>