<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 mt-2 custom-button rounded']) }}>
    {{ $slot }}
</button>
