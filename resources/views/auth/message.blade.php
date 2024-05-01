@if(session('success'))
<div class="custom-alert-msg alert alert-success">
    {{ session('success') }}
</div>
@endif
@if(session('error'))
<div class="custom-alert-msg alert alert-danger">
    {{ session('error') }}
</div>
@endif

{{-- as --}}