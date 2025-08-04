<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.heads')
</head>
<body class="vh-100">

    {{ $slot }}

    @include('partials.scripts')
</body>
</html>
