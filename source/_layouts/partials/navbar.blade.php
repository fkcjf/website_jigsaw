<div class="fixed w-full">
    <nav class="w-full h-16 flex items-center shadow bg-white border-b" role="banner">
        <div class="container flex items-center max-w-8xl mx-auto px-4 lg:px-8">
            <div class="flex items-center">
                <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                    <img class="h-8 md:h-10 mr-3" src="/assets/img/logo.svg" alt="{{ $page->siteName }} logo" />

                    <h1 class="text-lg md:text-2xl text-blue-800 font-semibold hover:text-blue-600 my-0">{{ $page->siteName }}</h1>
                </a>
            </div>

            <div id="vue-search" class="flex flex-1 justify-end items-center">
                <search></search>

                <x-menu :page="$page" class="" />

                <x-menu-toggle-button class="ml-4" :toggleId="'js-nav-menu'" />
            </div>
        </div>
    </nav>
    <x-menu-togglable :page="$page" :toggleId="'js-nav-menu'" />
</div>
<div class="w-full h-16">{{-- placeholder for above fixed item --}}<div>
