<li class="{{ Request::is('rols*') ? 'active' : '' }}">
    <a href="{!! route('rols.index') !!}"><i class="fa fa-edit"></i><span>Rols</span></a>
</li>


<li class="{{ Request::is('productos*') ? 'active' : '' }}">
    <a href="{!! route('productos.index') !!}"><i class="fa fa-edit"></i><span>Productos</span></a>
</li>

<li class="{{ Request::is('personas*') ? 'active' : '' }}">
    <a href="{!! route('personas.index') !!}"><i class="fa fa-edit"></i><span>Personas</span></a>
</li>

