@push('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
@endpush


@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    window.addEventListener('alert', event => {
        toastr[
        event.detail.type
        ]
        (event.detail.message,
        event.detail.title ?? ''),
        toastr.options = {
            "positionClass": "toast-bottom-right",
            "closeButton": true,
            "progressBar": true,
        }
    });
</script>

@endpush
