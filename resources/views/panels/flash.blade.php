@if (Session::get('success'))

toastr.success('', '{{ Session::get('success') }}');

@endif

@if (Session::get('error'))
toastr.error('','{{ Session::get('error')}}');

@endif

@if (Session::get('warning'))
toastr.warning('','{{Session::get('warning')}}');
@endif

@if (Session::get('info'))
toastr.info('', '{{Session::get('info')}}');
@endif