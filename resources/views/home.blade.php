@extends('layouts.base')
@section('content')

    @include('home.startpage.loading')

    <!-- Static navbar -->
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <b><a class="navbar-brand" href="#">{{ \App\Appvar::where('name','appname')->first()->value }}</a></b>
            </div>
            <div id="topMenuParent">
                @include('home.partials.topmenu')

            </div><!--/.nav-collapse -->
        </div>
    </nav>


    <div id="zone_scenes" class="container">

        <div id="scenes">
            <div id="mainScene" class="scene partial" reference="/home" parent="#scenes" style="display:none">
                @include('home.startpage')
            </div>
        </div>

    </div> <!-- /container -->


    {{--



    <nav class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <b><a class="navbar-brand" href="#">{{ \App\Appvar::where('name','appname')->first()->value }}</a></b>
            </div>
            <div id="topMenuParent">
                @include('home.partials.topmenu')
            </div>

        </div>
    </nav>


    <div id="zone_scenes" class="container">
        <div id="scenes">
            <div id="mainScene" class="scene partial" reference="/home" parent="#scenes" style="display:none">
                @include('home.startpage')
            </div>
        </div>
    </div>

    --}}

    {{-- escena para clonar cuando expiran otras --}}
    <div id="hide_zone" class="hidden">
        @php
            $ref = 'errortemplate';
            $title_error = 'Expired';
            $type_error = 'error600';
            $details = 'View at';
            $no_js = true;
        @endphp
        @include('errors.json')

        <iframe id="uploadcontent" name="uploadcontent">

        </iframe>
    </div>



    {{-- @include('home.rightnavbar') --}}
    <div id="user-menu" class="navbar menu-fixed-right close" style="padding-top: 4px">

    </div>


    <script>

        base_path = '{{url()->current()}}';
                {{-- confirms para las alertas del sistema --}}
        var validations = {};


        var confirms = {
            'logout': {
                'title': '',
                'content': '{{ __('You want logout now? ')}}'
            },
            'delres': {
                'title': '{!! __('Remove Resource') !!}',
                'content': '{!! __('You want remove this resource<br> from your team? ')  !!}'
            },

        }

        var alerts = {
            'buylater': {
                'title': '{!! __('app.buylater_title') !!} ',
                'content': `{!!  __('app.buylater_content') !!}`
            }

        }

        function getconfirm(uri) {
            ret = (confirms[uri] != null)
                ? confirms[uri]
                : {
                    'title': '',
                    'content': '{{ __('Are you sure?')}}'
                }
            return ret;
        }

    </script>
<style>

</style>
@endsection
