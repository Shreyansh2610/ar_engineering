<!-- Start breadcrumbs section -->
@isset($breadcrumbs)
    <section class="breadcrumbs">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrapper">
                        <div class="breadcrumb-cnt">
                            <span class="fs-1 text-white">{{ $breadcrumbsPage }}</span>
                            {{-- <h1>"Get To Know About Softconic"</h1> --}}
                            <div class="breadcrumb-list">
                                @php
                                    $breadcrumbsCount = count($breadcrumbs);
                                    $lastBreadcrumbsId = $breadcrumbsCount-1;
                                @endphp
                                @foreach ($breadcrumbs as $key => $breadcrumb)
                                    <a href="{{ $breadcrumb['link']??'#' }}" class="fs-3 {{ !isset($breadcrumb['link']) ? 'text-white' : '' }}">{{ $breadcrumb['name'] }}</a>
                                    @if($key!=$lastBreadcrumbsId)
                                        <img src="assets/img/inner-pages/breadcrumb-arrow.svg" alt="fs-3">
                                    @endif

                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endisset
