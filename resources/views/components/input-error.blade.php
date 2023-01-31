@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'alert alert-danger alert-dismissible show flex items-center mb-2 mt-2']) }}>
        @foreach ((array) $messages as $message)
            <i data-lucide="alert-circle" class="w-6 h-6 mr-2"></i>
            <li>{{ $message }}</li>
            <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close">
                <i data-lucide="x" class="w-4 h-4"></i>
            </button>
        @endforeach
    </ul>
@endif

