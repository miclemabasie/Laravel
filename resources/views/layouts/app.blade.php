<x-base-layout :$title cssClass="base">
    <x-layouts.header />
    {{ $slot }}

    @hasSection('footerLinks')
        <footer>
            @section('footerLinks')
                <a href="#">Link 1</a>
                <a href="#">Link 2</a>
            @endsection
            @yield('footerLinks')
        </footer>
    @endif
</x-base-layout>