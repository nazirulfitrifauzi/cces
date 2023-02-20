<div>
    @php
        if ($disabled) {
            $class = 'shadow-none cursor-not-allowed text-slate-400 bg-slate-100 border-slate-200';
        } else {
            if ($type == 'primary') {
                $class = 'text-white bg-indigo-500 hover:border-slate-300 hover:text-indigo-500 hover:bg-white';
            }
            elseif ($type == 'secondary') {
                $class = 'text-indigo-500 border-slate-200 hover:border-slate-300';
            }
            elseif ($type == 'tertiary') {
                $class = 'border-slate-200 hover:border-slate-300 text-slate-600';
            }
            elseif ($type == 'danger') {
                $class = 'text-white bg-rose-500 hover:border-slate-300 hover:text-rose-500 hover:bg-white';
            }
            elseif ($type == 'success') {
                $class = 'text-white bg-emerald-500 hover:border-slate-300 hover:text-emerald-500 hover:bg-white';
            }
        }

        if ($size == 'xs') {
            $size = 'btn-xs ';
        }
        elseif ($size == 's') {
            $size = 'btn-s ';
        }
        elseif ($size == 'lg') {
            $size = 'btn-lg ';
        }
        else {
            $size = 'btn ';
        }
    @endphp

    <button {{ $attributes->merge(['class' => $size . $class]) }}>
        @if($icon)
        <div class="flex items-center">
            <div>
                <i class="{{ $icon }} flex-shrink-0 w-4 h-4 "></i>
            </div>
            <span class="ml-2 ">
                {{ $slot }}
            </span>
        </div>
        @endif
    </button>
</div>