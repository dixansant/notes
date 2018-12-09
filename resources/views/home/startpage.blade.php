<div id="startPage" class="partial" parent="#mainScene">
    <!-- BEGIN -->
    @if(Auth()->check())
        @include('home.startpage.check')
    @else
        @include('home.startpage.login')
    @endif
    <!-- END -->
</div>


