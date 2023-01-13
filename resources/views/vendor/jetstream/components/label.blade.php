@props(['value'])

<label {{ $attributes->merge(['class' => 'ml-0.5 text-purple-900 font-medium text-sm']) }}>
    {{ $value ?? $slot }}
</label>
