<style>
    .nav_link {
        position: relative;
        width: 100%;
        height: 100%;
    }

    .nav_link.active {
        position: relative;
        width: 100%;
        height: 100%;
        font-weight: 600;
    }

    .nav_link.active::before {
        content: '';
        position: absolute;
        width: 120%;
        height: 4px;
        bottom: -14px;
        left: 50%;
        transform: translateX(-50%);
        background-color: #059848;
    }

    .nav_link::before {
        content: '';
        position: absolute;
        width: 0;
        height: 4px;
        bottom: -14px;
        left: 50%;
        transform: translateX(-50%);
        background-color: #059848;
        transition: all 0.5s;
    }

    .nav_link:hover::before {
        width: 120%;
    }
</style>

<nav class="w-full absolute left-1/2 -translate-x-1/2 mt-4 z-30 px-4 hidden lg:block">
    <ul class="w-full h-[70px] max-w-7xl mx-auto px-4 flex items-center justify-center py-4 bg-cover bg-center gap-6" style="background-image: url('{{ asset('assets/images/nav_bg.png') }}')">
        <li>
            <a href="{{ route('home') }}"
                class="text-[#000] px-4 py-4 w-full nav_link text-[16px] text-decoration-none {{ Route::is('home') ? 'active' : '' }}">Home</a>
        </li>
        <li>
            <a href="{{ route('export') }}"
                class="text-[#000] px-4 py-4 w-full nav_link text-[16px] text-decoration-none {{ Route::is('export') ? 'active' : '' }}">Export</a>
        </li>
        <li>
            <a href="{{ route('import') }} "
                class="text-[#000] px-4 py-4 w-full nav_link text-[16px] text-decoration-none {{ Route::is('import') ? 'active' : '' }}">Import</a>
        </li>
        <li>
            <a href="{{ route('about') }} "
                class="text-[#000] px-4 py-4 w-full nav_link text-[16px] text-decoration-none {{ Route::is('about') ? 'active' : '' }}">About
                Us</a>
        </li>
        <li>
            <a href="{{ route('events') }} "
                class="text-[#000] px-4 py-4 w-full nav_link text-[16px] text-decoration-none {{ Route::is('events') ? 'active' : '' }}">Events</a>
        </li>
        <li>
            <a href="{{ route('career') }} "
                class="text-[#000] px-4 py-4 w-full nav_link text-[16px] text-decoration-none {{ Route::is('career') ? 'active' : '' }}">Career</a>
        </li>
        <li>
            <a href="{{ route('contact') }}"
                class="text-[#000] px-4 py-4 w-full nav_link text-[16px] text-decoration-none {{ Route::is('contact') ? 'active' : '' }}">Contact Us</a>
        </li>
    </ul>
</nav>
