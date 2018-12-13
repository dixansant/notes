<ul class="nav navbar-nav navbar-right">
    @php($level=[])
    @foreach($menues as $k=>$mnu)
        @php($next=isset($menues[$k+1])?$menues[$k+1]:(object)['parent'=>-1])

        @if($next->parent==$mnu->id)
            @php($level[]=$mnu->id)

            <li class="@if(count($level)>1) dropdown-submenu @else dropdown-main-menu @endif">
                <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                   aria-expanded="false">{{$mnu->title}}</a>
                <ul class="dropdown-menu multi-level">


                    @else
                        @if($mnu->title=='-')
                            <li class="divider"></li>
                        @else
                            @switch($mnu->linkref)
                                @case('view')
                                @if (view()->exists($mnu->href))
                                    <li class="dropdown-menu-content">
                                        @include($mnu->href)
                                    </li>
                                @else
                                    <li><a>Missing view: {{$mnu->href}}</a></li>
                                @endif
                                @break
                                @default
                                <li><a href="!{{ \App\Util\Umenu::createLink($mnu) }}">{{$mnu->title}}</a></li>
                            @endswitch

                        @endif
                        @if($next->parent!=$mnu->id && $next->parent!=$mnu->parent)
                            @while(count($level)>0 && $next->parent!=$level[count($level)-1] )
                                @php(array_pop($level))
                </ul>
            </li>
            @endwhile
        @endif

        @endif




    @endforeach

    <script>

    </script>

</ul>


{{--
<ul class="nav navbar-nav navbar-right">
    @foreach($menues as $mnu)
        @if(count($mnu['childs'])>0)

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{$mnu['data']->title}} <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    @foreach($mnu['childs'] as $child)
                        <li><a href="!{{ \App\Util\Umenu::createLink($child['data']) }}">{{$child['data']->title}}</a></li>
                    @endforeach
                </ul>
            </li>
        @else
            <li><a href="#">{{$mnu['data']->title}}</a></li>
        @endif

    @endforeach
</ul>








<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">NavBar</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="https://github.com/fontenele/bootstrap-navbar-dropdowns" target="_blank">GitHub Project</a></li>
            </ul>
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu 1 <b class="caret"></b></a>
                    <ul class="dropdown-menu multi-level">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">One more separated link</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Menu 2 <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                        <li class="dropdown-submenu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li class="divider"></li>
                                <li class="dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-submenu">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">One more separated link</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</div>

<div class="container">
    <div class="navbar-template text-center">
        <h1>Bootstrap NavBar</h1>
        <p class="lead text-info">NavBar with too many childs.</p>
        <a target="_blank" href="https://bootsnipp.com/snippets/featured/multi-level-dropdown-menu-bs3">Thanks to msurguy (Multi level dropdown menu BS3)</a>
    </div>
</div>





--}}