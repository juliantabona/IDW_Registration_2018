@if(Session::has('alert'))
    <div class="row bg-white">
        <div class="col-6 offset-3">
            <div class="alert alert-{{ Session::get('alert')[1] }} p-4 mt-4" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true" class="d-block mt-1 text-small">×</span>
                </button>
                {!! Session::get('alert')[0] !!}
            </div>
        </div>
    </div>
@endif