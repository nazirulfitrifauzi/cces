<div>
    <div class="w-full max-w-full py-8 mx-auto lg:px-8 sm:px-6">
        {{-- page header --}}
        <div class="mb-8">
            {{-- title --}}
            <h1 class="font-bold md:text-3xl text-slate-800">
                Users Settings ✨
            </h1>
        </div>
        {{-- card content --}}
        <div class="mb-8 bg-white rounded-md shadow-lg">
            <div class="flex flex-col md:flex-row md:-mr-px">
                {{-- sidebar --}}
                <div class="flex px-3 py-6 overflow-x-scroll border-b border-slate-200 md:border-r md:border-b-0 md:overflow-auto md:block flex-nowrap min-w-60">
                    {{-- group1 --}}
                    <div>
                        <div class="mb-3 text-xs font-semibold text-opacity-100 uppercase text-slate-400">Business Settings</div>
                        <ul class="flex mr-3 md:block md:mr-0 flex-nowrap">
                            <li class="md:mb-0.5 md:mr-0 mr-0.5">
                                <a href="#" class="flex items-center rounded px-2.5 py-2 bg-opacity-100 bg-indigo-50 whitespace-nowrap">
                                    <i class="w-4 h-4 mr-2 text-indigo-400 fill-current fa fa-user shrink-0" aria-hidden="true"></i>
                                    <span class="text-sm font-medium text-indigo-500">My Account</span>
                                </a>
                            </li>
                            <li class="md:mb-0.5 md:mr-0 mr-0.5">
                                <a href="#" class="flex items-center rounded px-2.5 py-2  whitespace-nowrap">
                                    <i class="w-4 h-4 mr-2 fill-current fa fa-user shrink-0 text-slate-400" aria-hidden="true"></i>
                                    <span class="text-sm font-medium text-slate-600">My Account 2</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                {{-- panel content --}}
                <div class="flex-grow ">
                    <div class="p-6 ">
                        <h2 class="mb-5 text-2xl font-bold text-slate-800">
                            Content Title
                        </h2>
                    </div>
                    <footer>
                        <div class="flex flex-col px-6 py-5 border-t border-slate-200">
                            <div class="flex self-end">
                                <x-button.simple type="tertiary">Cancel</x-button.simple>
                                <x-button.simple class="ml-3" type="primary" icon="fa fa-play">Save Changes</x-button.simple>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>
</div>
