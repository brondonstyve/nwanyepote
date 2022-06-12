<div>
    @if (!auth()->guest())
        <span class="badge badge-cart bg-primary">{{$this->nombre}}</span>
    @endif
    
</div>
