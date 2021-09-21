@if(Session::has('success'))
	<div class="alert fade show g-bg-green-opacity-0_1 g-color-green rounded-0" role="alert">
        <button type="button" class="close u-alert-close--light g-ml-10 g-mt-1" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <div class="media">
            <div class="d-flex g-mr-10">
                <span class="u-icon-v3 u-icon-size--sm g-bg-green g-color-white g-rounded-50x">
                    <i class="fa fa-check"></i>
                </span>
            </div>
            <div class="media-body">
                <p class="m-0"><strong>{{Session::get('success')}}</strong></p>
                <span class="g-font-size-12 g-color-gray">CORRECTO</span>
            </div>
      </div>
    </div>
@endif
@if(Session::has('warning'))
	<div class="alert fade show g-bg-orange-opacity-0_1 g-color-orange rounded-0" role="alert">
        <button type="button" class="close u-alert-close--light g-ml-10 g-mt-1" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <div class="media">
            <div class="d-flex g-mr-10">
                <span class="u-icon-v3 u-icon-size--sm g-bg-orange g-color-white g-rounded-50x">
                    <i class="fa fa-warning"></i>
                </span>
            </div>
        <div class="media-body">
            <p class="m-0"><strong>{{Session::get('warning')}}</strong></p>
                <span class="g-font-size-12 g-color-gray">ADVERTENCIA</span>
            </div>
        </div>
    </div>
@endif
@if(Session::has('error'))
	<div class="alert fade show g-bg-red-opacity-0_1 g-color-lightred rounded-0" role="alert">
        <button type="button" class="close u-alert-close--light g-ml-10 g-mt-1" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <div class="media">
            <div class="d-flex g-mr-10">
                <span class="u-icon-v3 u-icon-size--sm g-bg-red g-color-white g-rounded-50x">
                    <i class="fa fa-exclamation"></i>
                </span>
            </div>
            <div class="media-body">
                <p class="m-0"><strong>{{Session::get('error')}}</strong></p>
                <span class="g-font-size-12 g-color-gray">ERROR</span>
            </div>
        </div>
    </div>
@endif
@if(Session::has('info'))
	<div class="alert fade show g-bg-blue-opacity-0_1 g-color-blue rounded-0" role="alert">
        <button type="button" class="close u-alert-close--light g-ml-10 g-mt-1" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <div class="media">
            <div class="d-flex g-mr-10">
                <span class="u-icon-v3 u-icon-size--sm g-bg-blue g-color-white g-rounded-50x">
                    <i class="fa fa-bell"></i>
                </span>
            </div>
            <div class="media-body">
                <p class="m-0"><strong>{{Session::get('info')}}</strong></p>
                <span class="g-font-size-12 g-color-gray">ATENCION</span>
            </div>
        </div>
    </div>
@endif
