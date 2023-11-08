<div class="row mx-auto mt-3">
    @if (Session::has('success'))
        <div class="col-12">
            <div class="alert alert-success alert-dismissible fade show small" style="position:absolute; top:60px; right:10px;" role="alert">
                {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif

    @if (Session::has('error'))
        <div class="col-12">
            <div class="alert alert-error alert-dismissible fade show small" style="position:absolute; top:60px; right:10px;" role="alert">
                {{ Session::get('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif
</div>
