
@push('styles')

<style>
    .user-image {
        border: 3px solid #adb5bd;
        padding: 3px;
    }
    .user-image:hover {
        background-color: blue;
        cursor: pointer;
    }
</style>

@endpush

@push('alpine-plugins')
<!-- Alpine Plugins -->
<script defer src="https://unpkg.com/@alpinejs/persist@3.x.x/dist/cdn.min.js"></script>
@endpush
