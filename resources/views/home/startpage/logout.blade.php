@extends('layouts.partials')
@section('content_partial')

    <script>
        // eliminar todas las scenas execto

        {{--
        clearScenes('{{$ref}}');


        @if($auth)
            toastr.success('{{ _('You have been disconect!....')}}', '{{ __('User Logout!') }}')
        @else
            toastr.warning('{{ _('You have already disconnected before!....')}}', '{{ __('User Logout!') }}')
        @endif
        --}}

        toastr.success('{{ _('You have been disconect!....')}}', '{{ __('User Logout!') }}')
        //alert('desconectando .....')
    </script>

    @include('home.partials.topmenu')
    @include('home.startpage');

@endsection