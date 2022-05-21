<script>var hostUrl = "{{ asset('') }}assets/";</script>
<!--begin::Global Javascript Bundle(used by all pages)-->
<script src="{{ asset('') }}assets/plugins/global/plugins.bundle.js"></script>
<script src="{{ asset('') }}assets/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Page Vendors Javascript(used by this page)-->
<script src="{{ asset('') }}assets/plugins/custom/datatables/datatables.bundle.js"></script>
<!--end::Page Vendors Javascript-->
<!--begin::Page Custom Javascript(used by this page)-->
<script src="{{ asset('') }}assets/js/widgets.bundle.js"></script>
<script src="{{ asset('') }}assets/js/custom/widgets.js"></script>
<script src="{{ asset('') }}assets/js/custom/apps/chat/chat.js"></script>
<script src="{{ asset('') }}assets/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="{{ asset('') }}assets/js/custom/utilities/modals/create-app.js"></script>
<script src="{{ asset('') }}assets/js/custom/utilities/modals/offer-a-deal/type.js"></script>
<script src="{{ asset('') }}assets/js/custom/utilities/modals/offer-a-deal/details.js"></script>
<script src="{{ asset('') }}assets/js/custom/utilities/modals/offer-a-deal/finance.js"></script>
<script src="{{ asset('') }}assets/js/custom/utilities/modals/offer-a-deal/complete.js"></script>
<script src="{{ asset('') }}assets/js/custom/utilities/modals/offer-a-deal/main.js"></script>
<script src="{{ asset('') }}assets/js/custom/utilities/modals/users-search.js"></script>

<script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
@if (\Session::has('success'))
    <script>
        swal("Success!", "{!! \Session::get('success') !!}", "success");
    </script>
@elseif(\Session::has('error'))
    <script>
        swal("Error !", "{!! \Session::get('error') !!}", "error");
    </script>
@endif
@if ($errors->any())
    <script>
        swal("Error !", "{!! \Session::get('error') !!}", "error");
    </script>
@endif