<div id="navbar" class="navbar-collapse collapse partial" aria-expanded="false" style="height: 1px;" parent="#topMenuParent">

        @if(Auth()->check())
            @include('home.partials.topmenu.check')
        @else
            @include('home.partials.topmenu.guest')
        @endif
</div>
