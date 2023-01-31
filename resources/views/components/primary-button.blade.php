<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex duration-150']) }}>
    {{ $slot }}
</button>

{{-- <button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-primary w-24 mr-1 mb-2']) }}>Primary</button> --}}
