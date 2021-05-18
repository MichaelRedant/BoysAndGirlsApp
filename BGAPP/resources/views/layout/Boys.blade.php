<!DOCTYPE html>
<html lang="nl">
<head>
    @include('Pages.meta')
    @include('Pages.links')
</head>
<body>
    {{-- Header section --}}
    @include('Pages.Sections.header')
    {{--  End Header section --}} 
    
    <title>Boys and Girls - @yield('title')</title>
    
    {{-- go-to-top button section  --}}
    @include('Pages.Components.gototopButton')
    {{-- End go-to-top section --}}

    @yield('content')

{{-- Footer section  --}}
@include('Pages.Sections.footer')
{{-- End Footer section  --}}
</body>
@include('Pages.scripts')
</html>