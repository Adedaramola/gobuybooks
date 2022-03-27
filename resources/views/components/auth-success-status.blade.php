@props(['success'])

@if ($success)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-green-600']) }}>
        <div class="alert alert-success" role="alert">
            {{ $success }}
        </div>
    </div>
@endif
