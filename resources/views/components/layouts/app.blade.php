<x-layouts.app.main>
    <!--loader start -->
    <div id="loading-area" class="loading-page-1">
        <div class="loader">
            <div class="ball one"></div>
            <div class="ball two"></div>
            <div class="ball three"></div>
            <div class="ball four"></div>
        </div>
    </div>

    {{-- Main page --}}
    <div class="page-wraper">

        @include('partials.header')

        {{ $slot }}

        @include('partials.footer')
        <button class="scroltop icon-up" type="button"><i class="fas fa-arrow-up"></i></button>
    </div>
</x-layouts.app.main>
