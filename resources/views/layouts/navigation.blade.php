<nav class="bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">

            <!-- Brand -->
            <a href="/" class="text-xl font-bold tracking-wide text-gray-800">
                GEA
            </a>

            <!-- Navigation (Desktop) -->
            <div class="hidden md:flex gap-6">                <a href="/dinar" class="nav-link {{ request()->is('dinar') ? 'active' : '' }}">Dinar</a>
                <a href="/custom-gold" class="nav-link {{ request()->is('custom-gold') ? 'active' : '' }}">Custom Gold</a>
                <a href="/blog" class="nav-link {{ request()->is('blog') ? 'active' : '' }}">Blog</a>
                <a href="/about-us" class="nav-link {{ request()->is('about-us') ? 'active' : '' }}">About Us</a>
            </div>

        </div>
    </div>
</nav>