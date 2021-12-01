<div>
    @foreach ($lista as $titulo=>$ruta)
    <li class="nav-item ">
        <a class="nav-link {{Request::url()==route($ruta)?'active':''}} " href="{{ route($ruta) }}">
            <i class="ni ni-planet text-blue"></i> {{$titulo}}
           
        </a>
    </li>
    @endforeach
</div>