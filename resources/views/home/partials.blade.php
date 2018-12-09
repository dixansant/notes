{{-- Se llama desde el login correcto / logout para actualizar los partials del home --}}





<div class="partials">

    <!-- DIVISION -->

    @include('home.partials.topmenu')

    <!-- DIVISION -->

    @include('home.startpage');

    <!-- DIVISION -->


    <script class="partial">
        // Al iniciar, borra todas las escenas
        //clearScenes('home');

    </script>
</div>