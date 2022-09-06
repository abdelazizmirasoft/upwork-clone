<div x-data="{ open: false }" @flash-message.window="open = true; setTimeout(() => open = false ,7000);">
    @if ($type)
        <div x-show="open" x-cloak class="border px-2 py-2 mb-2 rounded {{ $colors[$type] }}" >
            {{ $message }}
        </div>
    @endif
</div>
