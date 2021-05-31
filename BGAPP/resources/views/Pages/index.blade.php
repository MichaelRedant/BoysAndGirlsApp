<!DOCTYPE html>
<html lang="nl">
<head>
    @include('Pages.meta')
    @include('Pages.links')
    <title>Boys and Girls</title>
</head>
<body>

    {{-- Header section --}}
    @include('Pages.Sections.header')
    {{--  End Header section --}} 

    {{-- go-to-top button section  --}}
    @include('Pages.Components.gototopButton')
    {{-- End go-to-top section --}}

    {{-- Hero section --}}
    @include('Pages.Sections.hero')
    {{-- End Hero section --}}

    {{-- New section --}}
    @include('Pages.Sections.new')
    {{-- End New section --}}

    {{-- Boys section --}}
    @include('Pages.Sections.boys')
    {{-- End Boys section --}}

    {{-- Girls section --}}
    @include('Pages.Sections.girls')
    {{-- End Girls section --}}

    {{-- Inspired By You section  --}}
    @include('Pages.Sections.inspired')
    {{-- End Inspired By You section  --}}
    
    {{-- social section  --}}
    @include('Pages.Sections.social')
    {{-- End social section --}}

    {{-- Over ons section  --}}
    @include('Pages.Sections.overOns')
    {{-- End Over ons section --}}

    {{-- Onze merken section --}}
    @include('Pages.Sections.onzeMerken')
    {{-- End Onze merken section --}}

    {{-- Contact section  --}}
    @include('Pages.Sections.contact')
    {{-- End Contact section  --}}

    {{-- Footer section  --}}
    @include('Pages.Sections.footer')
    {{-- End Footer section  --}}

</body>
    @include('Pages.scripts')
</html>
