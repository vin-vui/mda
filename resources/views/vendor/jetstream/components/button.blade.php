<button {{ $attributes->merge(['type' => 'submit', 'class' => 'text-lg font-semibold text-purple-900 bg-yellow-500 btn hover:bg-yellow-600']) }}>
    {{ $slot }}
</button>
