<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-max ps-6 pe-6 h-12 relative bg-amber-300 rounded ']) }}>
    {{ $slot }}
</button>
