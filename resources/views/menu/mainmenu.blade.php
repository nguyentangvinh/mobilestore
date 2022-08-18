<div class="classy-menu">
    <!-- close btn -->
    <div class="classycloseIcon">
        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
    </div>
    <!-- Nav Start -->
    <div class="classynav">
        <ul>
            <li><a href="/">Home</a></li>

            @foreach ($menuLimit as $parent)

            <li><a href="/products/all">{{ $parent->name }}</a>
                @include('menu.childmenu', ['parent' => $parent])
            </li>

            @endforeach
            
            <li><a href="khach-hang">Khách Hàng</a></li>
            <li><a href="lien-he">Liên Hệ</a></li>
        </ul>
    </div>
    <!-- Nav End -->
</div>