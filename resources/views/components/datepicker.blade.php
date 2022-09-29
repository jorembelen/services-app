
@props(['id', 'error'])

<div wire:ignore>
    <input {{ $attributes }} type="text" class="form-control flatpickr flatpickr-input active @error($error) is-invalid @enderror" id="{{ $id }}"  placeholder="select date" data-target="#{{ $id }}"
    onchange="this.dispatchEvent(new InputEvent('input'))" />
</div>

@push('styles')
<link href="{{ asset('assets/plugins/flatpickr/custom-flatpickr.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/plugins/flatpickr/flatpickr.css') }}" rel="stylesheet" type="text/css">
@endpush


@push('js')
<script src="{{ asset('assets/plugins/flatpickr/flatpickr.js') }}"></script>
<script>
    var f1 = flatpickr(document.getElementById('{{ $id }}'), {
        enableTime: false,
        dateFormat: "Y-m-d",
        minDate: new Date().fp_incr(0) // 14 days from now
    });
</script>
@endpush
