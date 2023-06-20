<nav {{ $attributes->merge(['class' => 'items-center justify-end text-lg']) }}>

    <a title="{{ $page->siteName }} Contact" href="/contact"
        class="ml-4 text-gray-700 hover:text-blue-600 {{-- $page->isActive('/contact') ? 'active text-blue-600' : '' --}}">
        Contact
    </a>

</nav>
