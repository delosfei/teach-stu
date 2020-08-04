@foreach(['danger','info','success','primary','secondary','warning','light','dark','error'] as $item)
    @if(session()->has($item))
        <div class="alert alert-{{$item}}" role="alert">
            {{session()->get($item)}}
        </div>
    @endif
@endforeach
