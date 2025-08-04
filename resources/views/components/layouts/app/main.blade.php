
{{-- Globals layouts --}}

<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.heads')
</head>
<body >

    {{ $slot }}

    @include('partials.footer')

    <x-ui.modals />

     @include('partials.scripts')

</body>
</html>
