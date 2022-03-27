@props(['error'])

@if ($error)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-green-600']) }}>
        <div class="alert alert-danger" role="alert">
            {{ $error }}
        </div>
    </div>
@endif
