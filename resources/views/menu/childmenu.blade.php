@if ($parent->menuChildren->count())
<ul class="dropdown">
    @foreach ($parent->menuChildren as $menuChildren)
        <li><a href="/products/{{ $menuChildren->id }}-{{ Str::slug($menuChildren->name) }}">{{ $menuChildren->name }}</a>
            @if ($menuChildren->menuChildren->count())
                @include('menu.childmenu', ['parent' => $menuChildren])
            @endif
        </li>
       
    @endforeach
        
</ul>
@endif