<nav id="{{ $toggleId }}" {{ $attributes->merge(['class' => 'w-full px-2 pt-6 pb-2 bg-gray-200 shadow hidden']) }}>
    <ul class="my-0">
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Blog"
                href="/blog"
                class="block mt-0 mb-4 text-sm no-underline {{ $isActive('/blog') ? 'active text-blue-500' : 'text-gray-800 hover:text-blue-500' }}"
            >Blog</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} About"
                href="/about"
                class="block mt-0 mb-4 text-sm no-underline {{ $isActive('/about') ? 'active text-blue-500' : 'text-gray-800 hover:text-blue-500' }}"
            >About</a>
        </li>
    </ul>
</nav>
