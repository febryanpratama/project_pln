@extends('layouts.app')

@section('toolbar')
    <div class="toolbar" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack">
            <!--begin::Page title-->
            <div data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', 'lg': '#kt_toolbar_container'}" class="page-title d-flex align-items-center flex-wrap me-3 mb-5 mb-lg-0">
                <!--begin::Title-->
                <h1 class="d-flex align-items-center text-dark fw-bolder fs-3 my-1">{{ $title }}
                <!--begin::Separator-->
                <span class="h-20px border-gray-200 border-start ms-3 mx-2"></span>
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            @role('Admin')
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <!--begin::Filter menu-->
                <a href="../../demo1/dist/.html" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">+ Tindakan</a>
            </div>
            @endrole
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>

    {{-- MODAL--}}
    <div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-500px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    {{-- {{ dd(Auth::user()->roles) }} --}}
                    <h2>Tambah Pertanyaan LTA</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->
                <!--begin::Modal body-->
                <div class="modal-body">
                    <!--begin::Stepper-->
                    <form action="" action="{{ url('pemilihan-tindakan') }}" method="POST">
                        <div id="hidden">
                            {{--  --}}
                        </div>
                    @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="control-label mb-3">Nama Komponen</label>
                                    <select name="komponen_id" class="form-control" required>
                                        <option value=""> == Pilih == </option>
                                        @foreach ($komponen as $item=>$key)
                                            <option value="{{ $key->id }}">{{ $key->nama_komponen }}</option>
                                        @endforeach
                                    </select>
                                    {{-- <textarea name="pertanyaan" class="form-control" cols="30" rows="10"></textarea> --}}
                                </div>
                            </div>
                            <div class="col-md-12 mt-3">
                                <div class="form-group">
                                    <label for="" class="control-label mb-3">Apakah hubungan kerusakan dengan umur reliabilitas diketahui?</label>
                                    <select name="pertanyaan_1" id="pertanyaan_1" class="form-control">
                                        <option value=""> == Pilih == </option>
                                        <option value="1"> Ya </option>
                                        <option value="2"> Tidak </option>
                                    </select>
                                </div>
                            </div>
                            <div id="list-2" class="mt-3">

                            </div>
                            <div id="list-3" class="mt-3">

                            </div>
                            <div id="list-4" class="mt-3">

                            </div>
                            <div id="list-5" class="mt-3">

                            </div>
                            <div id="list-6" class="mt-3">

                            </div>
                            <div id="list-7" class="mt-3">

                            </div>
                            <div id="list-8" class="mt-3">

                            </div>
                        </div>
                        <div class="text-center pt-15">
                            <button type="reset" data-bs-dismiss="modal" class="btn btn-light me-3">Discard</button>
                            <button type="submit" id="kt_modal_create_app" class="btn btn-primary">
                                <span class="indicator-label">Submit</span>
                                <span class="indicator-progress">Please wait...
                                <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                    </form>
                    <!--end::Stepper-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    {{-- END MODALL --}}
@endsection

@section('content')
    <div id="kt_content_container" class="container-xxl">
        <!--begin::Row-->
        <div class="row gy-5 g-xl-10">
            <!--begin::Col-->
            <div class="col-xl-12">
                <!--begin::Table Widget 5-->
                <div class="card card-flush h-xl-100">
                    <!--begin::Card header-->
                    <div class="card-header pt-7">
                        <!--begin::Title-->
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bolder text-dark">{{ $title }}</span>
                            {{-- <span class="text-gray-400 mt-1 fw-bold fs-6">Total 2,356 Items in the Stock</span> --}}
                        </h3>
                        {{-- <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a> --}}
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body">
                        <!--begin::Table-->
                        <div id="kt_table_widget_5_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="table-responsive">
                                <table id="kt_datatable_example_1" class="table table-row-bordered gy-5">
                                    <thead class="text-center align-middle">
                                        <tr class="fw-bold fs-6 text-muted">
                                            <th rowspan="2">Nama Komponen</th>
                                            <th rowspan="2">Failure Mode</th>
                                            <th rowspan="1" colspan="7">Selection Guide</th>
                                            <th rowspan="2">Selection Task</th>
                                        </tr>
                                        <tr class="fw-bold fs-6 text-muted">
                                            <th>1</th>
                                            <th>2</th>
                                            <th>3</th>
                                            <th>4</th>
                                            <th>5</th>
                                            <th>6</th>
                                            <th>7</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        @foreach ($data as $item=>$key)
                                        <tr>
                                            <td>{{ $key->komponen->nama_komponen }}</td>
                                            <td>{{ $key->komponen->fungsi->kegagalan_fungsi }}</td>
                                            <td>
                                                @switch($key->pertanyaan_1)
                                                    @case(1)
                                                        Ya
                                                        @break
                                                    @case(2)
                                                        Tidak
                                                        @break
                                                    @default
                                                        -
                                                @endswitch
                                            </td>
                                            <td>
                                                @switch($key->pertanyaan_2)
                                                    @case(1)
                                                        Ya
                                                        @break
                                                    @case(2)
                                                        Tidak
                                                        @break
                                                    @default
                                                        -
                                                @endswitch
                                            </td>
                                            <td>
                                                @switch($key->pertanyaan_3)
                                                    @case(1)
                                                        Ya
                                                        @break
                                                    @case(2)
                                                        Tidak
                                                        @break
                                                    @default
                                                        -
                                                @endswitch
                                            </td>
                                            <td>
                                                @switch($key->pertanyaan_4)
                                                    @case(1)
                                                        Ya
                                                        @break
                                                    @case(2)
                                                        Tidak
                                                        @break
                                                    @default
                                                        -
                                                @endswitch
                                            </td>
                                            <td>
                                                @switch($key->pertanyaan_5)
                                                    @case(1)
                                                        Ya
                                                        @break
                                                    @case(2)
                                                        Tidak
                                                        @break
                                                    @default
                                                        -
                                                @endswitch
                                            </td>
                                            <td>
                                                @switch($key->pertanyaan_6)
                                                    @case(1)
                                                        Ya
                                                        @break
                                                    @case(2)
                                                        Tidak
                                                        @break
                                                    @default
                                                        -
                                                @endswitch
                                            </td>
                                            <td>
                                                @switch($key->pertanyaan_7)
                                                    @case(1)
                                                        Ya
                                                        @break
                                                    @case(2)
                                                        Tidak
                                                        @break
                                                    @default
                                                        -
                                                @endswitch
                                            </td>
                                            <td>{{ $key->category }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                    </tfoot>
                                </table>
                            </div>
                            {{-- <div class="row">
                                <div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"></div>
                                <div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"></div>
                            </div> --}}
                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Table Widget 5-->
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
@endsection

@section('script')
<script>
    $("#kt_datatable_example_1").DataTable();
    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('#pertanyaan_1').on('change', function() {
            $('#hidden').html('');
                $('#list-2').html('');
                $('#list-3').html('');
                $('#list-4').html('');
                $('#list-5').html('');
                $('#list-6').html('');
                $('#list-7').html('');
                $('#list-8').html('');
            var id1 = this.value;
            if (id1 == 1) {
                $('#list-3').html('');
                $('#list-4').html('');
                $('#list-5').html('');
                $('#list-6').html('');
                $('#list-7').html('');
                $('#list-8').html('');
                $('#list-2').append(`
                    <div class="form-group">
                        <label for="" class="control-label mb-3">Apakah Tindakan T.D bisa digunakan</label>
                        <select name="pertanyaan_2" id="pertanyaan_2" class="form-control">
                            <option value=""> == Pilih == </option>
                            <option value="1"> Ya </option>
                            <option value="2"> Tidak </option>
                        </select>
                    </div>
                `)
                    $('#pertanyaan_2').on('change', function() {
                        var id2 = this.value
                        $('#list-3').html('');
                        $('#list-4').html('');
                        $('#list-5').html('');
                        $('#list-6').html('');
                        $('#list-7').html('');
                        $('#list-8').html('');
                        if (id2 == 1) {
                            $('#list-3').append(`
                                <div class="form-group">
                                    <label for="" class="control-label mb-3">Tentukan Tindakan TD</label>
                                    <select name="pertanyaan_3" id="pertanyaan_3" class="form-control">
                                        <option value=""> == Pilih == </option>
                                        <option value="1"> Ya </option>
                                    </select>
                                </div>
                            `)

                            $('#pertanyaan_3').on('change', function() {
                                // langusng ke nomor 6
                                // $('#list-3').html('');
                                $('#list-4').html('');
                                $('#list-5').html('');
                                $('#list-6').html('');
                                $('#list-7').html('');
                                $('#list-8').html('');
                                $('#list-6').append(`
                                    <div class="form-group">
                                        <label for="" class="control-label mb-3">Apakah Tindakan Yang Dipilih Efektif</label>
                                        <select name="pertanyaan_6" id="pertanyaan_6" class="form-control">
                                            <option value=""> == Pilih == </option>
                                            <option value="1"> Ya </option>
                                            <option value="2"> Tidak </option>
                                        </select>
                                    </div>
                                `)
                                $('#pertanyaan_6').on('change', function() {
                            $('#list-7').html('');
                            $('#list-8').html('');
                            var id6 = this.value
                            if (id6 == 1) {
                                $('#list-7').append(`
                                <div class="form-group">
                                    <label for="" class="control-label mb-3">Tentukan Tindakan</label>
                                    <select name="category" id="pertanyaan_7" class="form-control">
                                        <option value=""> == Pilih == </option>
                                        <option value="C.D"> Condition Directed </option>
                                        <option value="T.D"> Time Directerd </option>
                                        <option value="F.F"> Finding Failure </option>
                                    </select>
                                </div>
                            `)
                            }else{
                                $('#list-7').append(`
                                <div class="form-group">
                                    <label for="" class="control-label mb-3">Dapatkah Memodifikasi menghilangkan mode kerusakan</label>
                                    <select name="pertanyaan_7" id="pertanyaan_7" class="form-control">
                                        <option value=""> == Pilih == </option>
                                        <option value="1"> Ya </option>
                                        <option value="2"> Tidak </option>
                                    </select>
                                </div>
                            `)

                            $('#list-8').append(`
                                <div class="form-group">
                                    <label for="" class="control-label mb-3">Tentukan Tindakan</label>
                                    <select name="category" id="pertanyaan_7" class="form-control">
                                        <option value=""> == Pilih == </option>
                                        <option value="C.D"> Condition Directed </option>
                                        <option value="T.D"> Time Directerd </option>
                                        <option value="F.F"> Finding Failure </option>
                                    </select>
                                </div>
                            `)
                            }
                        })
                            })

                        }else{
                            $('#list-3').append(`
                                <div class="form-group">
                                    <label for="" class="control-label mb-3">Apakah Tindakan CD dapat digunakan</label>
                                    <select name="pertanyaan_3" id="pertanyaan_3" class="form-control">
                                        <option value=""> == Pilih == </option>
                                        <option value="1"> Ya </option>
                                        <option value="2"> Tidak </option>
                                    </select>
                                </div>
                            `)

                            $('#pertanyaan_3').on('change', function() {
                                $('#list-4').html('');
                                $('#list-5').html('');
                                $('#list-6').html('');
                                $('#list-7').html('');
                                $('#list-8').html('');
                                var id3 = this.value
                                if (id3 == 1) {
                                    $('#list-4').append(`
                                        <div class="form-group">
                                            <label for="" class="control-label mb-3">Tentukan Tindakan CD</label>
                                            <select name="pertanyaan_4" id="pertanyaan_4" class="form-control">
                                                <option value=""> == Pilih == </option>
                                                <option value="1"> Ya </option>
                                            </select>
                                        </div>
                                    `) 
                                    $('#pertanyaan_4').on('change', function() {
                                // langusng ke nomor 6
                                    // ('#list-5').html('');
                                    // $('#list-6').html('');
                                    // $('#list-7').html('');
                                    // $('#list-8').html('');
                                        $('#list-6').append(`
                                            <div class="form-group">
                                                <label for="" class="control-label mb-3">Apakah Tindakan Yang Dipilih Efektif</label>
                                                <select name="pertanyaan_6" id="pertanyaan_6" class="form-control">
                                                    <option value=""> == Pilih == </option>
                                                    <option value="1"> Ya </option>
                                                    <option value="2"> Tidak </option>
                                                </select>
                                            </div>
                                        `)
                                        $('#pertanyaan_6').on('change', function() {
                                            $('#list-7').html('');
                                            $('#list-8').html('');
                                            var id6 = this.value
                                            if (id6 == 1) {
                                                $('#list-7').append(`
                                                <div class="form-group">
                                                    <label for="" class="control-label mb-3">Tentukan Tindakan</label>
                                                    <select name="category" id="pertanyaan_7" class="form-control">
                                                        <option value=""> == Pilih == </option>
                                                        <option value="C.D"> Condition Directed </option>
                                                        <option value="T.D"> Time Directerd </option>
                                                        <option value="F.F"> Finding Failure </option>
                                                    </select>
                                                </div>
                                            `)
                            }else{
                                $('#list-7').append(`
                                <div class="form-group">
                                    <label for="" class="control-label mb-3">Dapatkah Memodifikasi menghilangkan mode kerusakan</label>
                                    <select name="pertanyaan_7" id="pertanyaan_7" class="form-control">
                                        <option value=""> == Pilih == </option>
                                        <option value="1"> Ya </option>
                                        <option value="2"> Tidak </option>
                                    </select>
                                </div>
                            `)
                            $('#list-8').append(`
                                <div class="form-group">
                                    <label for="" class="control-label mb-3">Tentukan Tindakan</label>
                                    <select name="category" id="pertanyaan_7" class="form-control">
                                        <option value=""> == Pilih == </option>
                                        <option value="C.D"> Condition Directed </option>
                                        <option value="T.D"> Time Directerd </option>
                                        <option value="F.F"> Finding Failure </option>
                                    </select>
                                </div>
                            `)
                            }
                        })
                                    })
                                }else{
                                    $('#list-4').append(`
                                        <div class="form-group">
                                            <label for="" class="control-label mb-3">Apakah Termasuk mode kerusakan D</label>
                                            <select name="pertanyaan_4" id="pertanyaan_4" class="form-control">
                                                <option value=""> == Pilih == </option>
                                                <option value="1"> Ya </option>
                                                <option value="2"> Tidak </option>
                                            </select>
                                        </div>
                                    `) 

                                $('#pertanyaan_4').on('change', function() {
                                    $('#list-5').html('');
                                    $('#list-6').html('');
                                    $('#list-7').html('');
                                    $('#list-8').html('');
                                    id4 = this.value
                                    if (id4 == 1) {
                                        $('#list-5').append(`
                                        <div class="form-group">
                                            <label for="" class="control-label mb-3">Apakah Tindakan FF yang dapat digunakan</label>
                                            <select name="pertanyaan_5" id="pertanyaan_5" class="form-control">
                                                <option value=""> == Pilih == </option>
                                                <option value="1"> Ya </option>
                                                <option value="2"> Tidak </option>
                                            </select>
                                        </div>
                                    `)
                                    $('#pertanyaan_5').on('change', function() {
                                        $('#list-6').html('');
                                        $('#list-7').html('');
                                        $('#list-8').html('');
                                        id5 = this.value

                                        if (id5 == 1) {
                                            $('#list-6').append(`
                                                <div class="form-group">
                                                    <label for="" class="control-label mb-3">Apakah Tindakan Yang Dipilih Efektif</label>
                                                    <select name="pertanyaan_6" id="pertanyaan_6" class="form-control">
                                                        <option value=""> == Pilih == </option>
                                                        <option value="1"> Ya </option>
                                                        <option value="2"> Tidak </option>
                                                    </select>
                                                </div>
                                            `)

                                            $('#pertanyaan_6').on('change', function() {
                                                $('#list-7').html('');
                                                $('#list-8').html('');
                                                var id6 = this.value
                                                if (id6 == 1) {
                                                    $('#list-7').append(`
                                                    <div class="form-group">
                                                        <label for="" class="control-label mb-3">Tentukan Tindakan</label>
                                                        <select name="category" id="pertanyaan_7" class="form-control">
                                                            <option value=""> == Pilih == </option>
                                                            <option value="C.D"> Condition Directed </option>
                                                            <option value="T.D"> Time Directerd </option>
                                                            <option value="F.F"> Finding Failure </option>
                                                        </select>
                                                    </div>
                                                `)
                                                }else{
                                                    $('#list-7').append(`
                                                    <div class="form-group">
                                                        <label for="" class="control-label mb-3">Dapatkah Memodifikasi menghilangkan mode kerusakan</label>
                                                        <select name="pertanyaan_7" id="pertanyaan_7" class="form-control">
                                                            <option value=""> == Pilih == </option>
                                                            <option value="1"> Ya </option>
                                                            <option value="2"> Tidak </option>
                                                        </select>
                                                    </div>
                                                `)

                                                $('#list-8').append(`
                                                    <div class="form-group">
                                                        <label for="" class="control-label mb-3">Tentukan Tindakan</label>
                                                        <select name="category" id="pertanyaan_7" class="form-control">
                                                            <option value=""> == Pilih == </option>
                                                            <option value="C.D"> Condition Directed </option>
                                                            <option value="T.D"> Time Directerd </option>
                                                            <option value="F.F"> Finding Failure </option>
                                                        </select>
                                                    </div>
                                                `)
                                        }
                                    })
                                            // TENTUKAN TINDAKAN
                                        }else{
                                            $('#list-6').append(`
                                                <div class="form-group">
                                                    <label for="" class="control-label mb-3">Apakah Tindakan Yang Dipilih Efektif</label>
                                                    <select name="pertanyaan_6" id="pertanyaan_6" class="form-control">
                                                        <option value=""> == Pilih == </option>
                                                        <option value="1"> Ya </option>
                                                        <option value="2"> Tidak </option>
                                                    </select>
                                                </div>
                                            `)
                                            $('#pertanyaan_6').on('change', function() {
                                                    $('#list-7').html('');
                                                    $('#list-8').html('');
                                                    var id6 = this.value
                                                    if (id6 == 1) {
                                                        $('#list-7').append(`
                                                        <div class="form-group">
                                                            <label for="" class="control-label mb-3">Tentukan Tindakan</label>
                                                            <select name="category" id="pertanyaan_7" class="form-control">
                                                                <option value=""> == Pilih == </option>
                                                                <option value="C.D"> Condition Directed </option>
                                                                <option value="T.D"> Time Directerd </option>
                                                                <option value="F.F"> Finding Failure </option>
                                                            </select>
                                                        </div>
                                                    `)
                                                    }else{
                                                        $('#list-7').append(`
                                                        <div class="form-group">
                                                            <label for="" class="control-label mb-3">Dapatkah Memodifikasi menghilangkan mode kerusakan</label>
                                                            <select name="pertanyaan_7" id="pertanyaan_7" class="form-control">
                                                                <option value=""> == Pilih == </option>
                                                                <option value="1"> Ya </option>
                                                                <option value="2"> Tidak </option>
                                                            </select>
                                                        </div>
                                                    `)
                                                    $('#list-8').append(`
                                                    <div class="form-group">
                                                        <label for="" class="control-label mb-3">Tentukan Tindakan</label>
                                                        <select name="category" id="pertanyaan_7" class="form-control">
                                                            <option value=""> == Pilih == </option>
                                                            <option value="C.D"> Condition Directed </option>
                                                            <option value="T.D"> Time Directerd </option>
                                                            <option value="F.F"> Finding Failure </option>
                                                        </select>
                                                    </div>
                                                `)
                                            }
                                        })
                                        }
                                    })

                                    }else{
                                        // ke pertanyaan 6
                                        $('#list-6').append(`
                                            <div class="form-group">
                                                <label for="" class="control-label mb-3">Apakah Tindakan Yang Dipilih Efektif</label>
                                                <select name="pertanyaan_6" id="pertanyaan_6" class="form-control">
                                                    <option value=""> == Pilih == </option>
                                                    <option value="1"> Ya </option>
                                                    <option value="2"> Tidak </option>
                                                </select>
                                            </div>
                                        `)

                                        $('#pertanyaan_6').on('change', function() {
                                                $('#list-7').html('');
                                                $('#list-8').html('');
                                                var id6 = this.value
                                                if (id6 == 1) {
                                                    $('#list-7').append(`
                                                    <div class="form-group">
                                                        <label for="" class="control-label mb-3">Tentukan Tindakan</label>
                                                        <select name="category" id="pertanyaan_7" class="form-control">
                                                            <option value=""> == Pilih == </option>
                                                            <option value="C.D"> Condition Directed </option>
                                                            <option value="T.D"> Time Directerd </option>
                                                            <option value="F.F"> Finding Failure </option>
                                                        </select>
                                                    </div>
                                                `)
                                                }else{
                                                    $('#list-7').append(`
                                                    <div class="form-group">
                                                        <label for="" class="control-label mb-3">Dapatkah Memodifikasi menghilangkan mode kerusakan</label>
                                                        <select name="pertanyaan_7" id="pertanyaan_7" class="form-control">
                                                            <option value=""> == Pilih == </option>
                                                            <option value="1"> Ya </option>
                                                            <option value="2"> Tidak </option>
                                                        </select>
                                                    </div>
                                                `)

                                                $('#list-8').append(`
                                                    <div class="form-group">
                                                        <label for="" class="control-label mb-3">Tentukan Tindakan</label>
                                                        <select name="category" id="pertanyaan_7" class="form-control">
                                                            <option value=""> == Pilih == </option>
                                                            <option value="C.D"> Condition Directed </option>
                                                            <option value="T.D"> Time Directerd </option>
                                                            <option value="F.F"> Finding Failure </option>
                                                        </select>
                                                    </div>
                                                `)
                                        }
                                    })
                                    }
                                })
                                    // else pertanyaan 4
                                }
                            })
                            // else pertanyaan 2
                        }
                    })

            }else{
                $('#list-4').append(`
                    <div class="form-group">
                        <label for="" class="control-label mb-3">Apakah Termasuk mode kerusakan D</label>
                        <select name="pertanyaan_4" id="pertanyaan_4" class="form-control">
                            <option value=""> == Pilih == </option>
                            <option value="1"> Ya </option>
                            <option value="2"> Tidak </option>
                        </select>
                    </div>
                `)
                $('#pertanyaan_4').on('change', function() {
                        $('#list-5').html('');
                        $('#list-6').html('');
                        $('#list-7').html('');
                        $('#list-8').html('');
                        id4 = this.value
                        if (id4 == 1) {
                            $('#list-5').append(`
                            <div class="form-group">
                                <label for="" class="control-label mb-3">Apakah Tindakan FF yang dapat digunakan</label>
                                <select name="pertanyaan_5" id="pertanyaan_5" class="form-control">
                                    <option value=""> == Pilih == </option>
                                    <option value="1"> Ya </option>
                                    <option value="2"> Tidak </option>
                                </select>
                            </div>
                        `)
                        $('#pertanyaan_5').on('change', function() {
                            $('#list-6').html('');
                            $('#list-7').html('');
                            $('#list-8').html('');
                            id5 = this.value

                            if (id5 == 1) {
                                $('#list-6').append(`
                                    <div class="form-group">
                                        <label for="" class="control-label mb-3">Apakah Tindakan Yang Dipilih Efektif</label>
                                        <select name="pertanyaan_6" id="pertanyaan_6" class="form-control">
                                            <option value=""> == Pilih == </option>
                                            <option value="1"> Ya </option>
                                            <option value="2"> Tidak </option>
                                        </select>
                                    </div>
                                `)
                                $('#pertanyaan_6').on('change', function() {
                                    $('#list-7').html('');
                                    $('#list-8').html('');
                                    var id6 = this.value
                                    if (id6 == 1) {
                                        $('#list-7').append(`
                                        <div class="form-group">
                                            <label for="" class="control-label mb-3">Tentukan Tindakan</label>
                                            <select name="category" id="pertanyaan_7" class="form-control">
                                                <option value=""> == Pilih == </option>
                                                <option value="C.D"> Condition Directed </option>
                                                <option value="T.D"> Time Directerd </option>
                                                <option value="F.F"> Finding Failure </option>
                                            </select>
                                        </div>
                                    `)
                                    }else{
                                        $('#list-7').append(`
                                        <div class="form-group">
                                            <label for="" class="control-label mb-3">Dapatkah Memodifikasi menghilangkan mode kerusakan</label>
                                            <select name="pertanyaan_7" id="pertanyaan_7" class="form-control">
                                                <option value=""> == Pilih == </option>
                                                <option value="1"> Ya </option>
                                                <option value="2"> Tidak </option>
                                            </select>
                                        </div>
                                    `)
                            }
                        })
                            }else{
                                $('#list-6').append(`
                                    <div class="form-group">
                                        <label for="" class="control-label mb-3">Apakah Tindakan Yang Dipilih Efektif</label>
                                        <select name="pertanyaan_6" id="pertanyaan_6" class="form-control">
                                            <option value=""> == Pilih == </option>
                                            <option value="1"> Ya </option>
                                            <option value="2"> Tidak </option>
                                        </select>
                                    </div>
                                `)
                                $('#pertanyaan_6').on('change', function() {
                            $('#list-7').html('');
                            $('#list-8').html('');
                            var id6 = this.value
                            if (id6 == 1) {
                                $('#list-7').append(`
                                <div class="form-group">
                                    <label for="" class="control-label mb-3">Tentukan Tindakan</label>
                                    <select name="category" id="pertanyaan_7" class="form-control">
                                        <option value=""> == Pilih == </option>
                                        <option value="C.D"> Condition Directed </option>
                                        <option value="T.D"> Time Directerd </option>
                                        <option value="F.F"> Finding Failure </option>
                                    </select>
                                </div>
                            `)
                            }else{
                                $('#list-7').append(`
                                        <div class="form-group">
                                            <label for="" class="control-label mb-3">Dapatkah Memodifikasi menghilangkan mode kerusakan</label>
                                            <select name="pertanyaan_7" id="pertanyaan_7" class="form-control">
                                                <option value=""> == Pilih == </option>
                                                <option value="1"> Ya </option>
                                                <option value="2"> Tidak </option>
                                            </select>
                                        </div>
                                    `)
                                $('#list-8').append(`
                                        <div class="form-group">
                                            <label for="" class="control-label mb-3">Tentukan Tindakan</label>
                                            <select name="category" id="pertanyaan_7" class="form-control">
                                                <option value=""> == Pilih == </option>
                                                <option value="C.D"> Condition Directed </option>
                                                <option value="T.D"> Time Directerd </option>
                                                <option value="F.F"> Finding Failure </option>
                                            </select>
                                        </div>
                                    `)

                                    
                                    }
                                })
                            }
                        })

                        }else{
                            // ke pertanyaan 6
                            $('#list-6').append(`
                                <div class="form-group">
                                    <label for="" class="control-label mb-3">Apakah Tindakan Yang Dipilih Efektif</label>
                                    <select name="pertanyaan_6" id="pertanyaan_6" class="form-control">
                                        <option value=""> == Pilih == </option>
                                        <option value="1"> Ya </option>
                                        <option value="2"> Tidak </option>
                                    </select>
                                </div>
                            `)
                        $('#pertanyaan_6').on('change', function() {
                            $('#list-7').html('');
                            $('#list-8').html('');
                            var id6 = this.value
                            if (id6 == 1) {
                                $('#list-7').append(`
                                <div class="form-group">
                                    <label for="" class="control-label mb-3">Tentukan Tindakan</label>
                                    <select name="category" id="pertanyaan_7" class="form-control">
                                        <option value=""> == Pilih == </option>
                                        <option value="C.D"> Condition Directed </option>
                                        <option value="T.D"> Time Directerd </option>
                                        <option value="F.F"> Finding Failure </option>
                                    </select>
                                </div>
                            `)
                            }else{
                                $('#list-7').append(`
                                <div class="form-group">
                                    <label for="" class="control-label mb-3">Dapatkah Memodifikasi menghilangkan mode kerusakan</label>
                                    <select name="pertanyaan_7" id="pertanyaan_7" class="form-control">
                                        <option value=""> == Pilih == </option>
                                        <option value="1"> Ya </option>
                                        <option value="2"> Tidak </option>
                                    </select>
                                </div>

                            `)
                                $('#list-8').append(`
                                <div class="form-group">
                                    <label for="" class="control-label mb-3">Tentukan Tindakan</label>
                                    <select name="category" id="pertanyaan_7" class="form-control">
                                        <option value=""> == Pilih == </option>
                                        <option value="C.D"> Condition Directed </option>
                                        <option value="T.D"> Time Directerd </option>
                                        <option value="F.F"> Finding Failure </option>
                                    </select>
                                </div>

                            `)
                            }
                        })
                        }
                    })
            }
            // console.log(id1);
        });
    </script>
@endsection
