<div>
    <li class="px-3 py-2 mb-0.5 last:mb-0 rounded-lg @if(Request::is($route)) bg-slate-900 @endif" x-data="{ open: {{ Request::is($route) ? 1 : 0 }} }">
        <a class="block text-slate-200 truncate transition duration-150 @if(Request::is($route)) hover:text-slate-200 @else hover:text-white @endif" href="{{ url($route) }}">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <div class="text-slate-400">
                        <i class="{{ $icon }}"></i>
                    </div>
                    <span class="ml-3 text-sm font-medium duration-200 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100">{{ $title }}</span>
                </div>
                @if($submenu)
                <!-- Icon -->
                <div class="flex ml-2 duration-200 shrink-0 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100 text-slate-400 @if(Request::is($route)){{ 'rotate-180' }}@endif :class="open ? 'rotate-180' : 'rotate-0'" ">
                    <i class="fa fa-chevron-down"></i>
                </div>
                @endif
            </div>
        </a>

        {{-- child --}}
        @if($submenu)
            <div class="lg:hidden lg:sidebar-expanded:block 2xl:block">
                <ul class="pl-9 mt-1 @if(Request::is($route)){{ 'hidden' }}@endif" :class="open ? '!block' : 'hidden'">
                    @foreach ($submenuData as $list)
                        <li class="mb-1 last:mb-0">
                            <a class="block text-slate-400 hover:text-slate-200 transition duration-150 truncate @if(Route::is($list['route'])){{ '!text-indigo-500' }}@endif" href="{{ route('dashboard') }}">
                                <span class="text-sm font-medium duration-200 lg:opacity-0 lg:sidebar-expanded:opacity-100 2xl:opacity-100">{{ $list['title'] }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif
    </li>
</div>