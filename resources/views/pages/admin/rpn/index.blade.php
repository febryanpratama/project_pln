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
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <!--begin::Filter menu-->
                <a href="../../demo1/dist/.html" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">+ Kriteria</a>
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Container-->
    </div>

    {{-- MODAL--}}
    <div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-900px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2>Tambah Occurence</h2>
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
                    <form action="" action="{{ url('rpn') }}" method="POST">
                    @csrf
                        <div class="row">
                            <div class="col-md-6 mt-5">
                                <div class="form-group">
                                    <label for="" class="control-label"><h5>Nama Barang</h5></label>
                                    <select name="barang_id" class="form-control @error('severity_id')
                                        is-invalid
                                    @enderror" required>
                                        <option value="">== Pilih ==</option>
                                        @foreach ($barang as $item => $bg)
                                            <option value="{{ $bg->id }}">{{ $bg->nama_barang }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('severity_id')
                                    <div class="text-muted text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mt-5">
                                <div class="form-group">
                                    <label for="" class="control-label"><h5>Tingkat Severity</h5></label>
                                    <select name="severity_id" class="form-control @error('severity_id')
                                        is-invalid
                                    @enderror" required>
                                        <option value="">== Pilih ==</option>
                                        @foreach ($severity as $item => $sv)
                                            <option value="{{ $sv->id }}">{{ $sv->nama_kriteria }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('severity_id')
                                    <div class="text-muted text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mt-5">
                                <div class="form-group">
                                    <label for="" class="control-label"><h5>Tingkat Occurence</h5></label>
                                    <select name="occurence_id" class="form-control @error('occurence_id')
                                        is-invalid
                                    @enderror" required>
                                        <option value="">== Pilih ==</option>
                                        @foreach ($occurence as $item => $oc)
                                            <option value="{{ $oc->id }}">{{ $oc->nama_occurence }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('occurence_id')
                                    <div class="text-muted text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mt-5">
                                <div class="form-group">
                                    <label for="" class="control-label"><h5>Tingkat Detection</h5></label>
                                    <select name="detection_id" class="form-control @error('detection_id')
                                        is-invalid
                                    @enderror" required>
                                        <option value="">== Pilih ==</option>
                                        @foreach ($detection as $item => $dt)
                                            <option value="{{ $dt->id }}">{{ $dt->nama_detection }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('detection_id')
                                    <div class="text-muted text-danger">{{ $message }}</div>
                                @enderror
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
                                    <thead class="text-center">
                                        <tr class="fw-bold fs-6 text-muted">
                                            <th>No</th>
                                            <th>Nama Barang</th>
                                            <th>Nama Severity</th>
                                            <th>Nama Occurence</th>
                                            <th>Nama Detection</th>
                                            <th>RPN</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        @foreach ($data as $item=>$key)
                                        <tr>
                                            <td>{{ $item+1 }}</td>
                                            <td>{{ $key->barang->nama_barang }}</td>
                                            <td>{{ $key->severity->nama_kriteria }} - {{ $key->severity->rating_kriteria }}</td>
                                            <td>{{ $key->occurence->nama_occurence }} - {{ $key->occurence->rating_occurence }}</td>
                                            <td>{{ $key->detection->nama_detection }} - {{ $key->detection->rating_detection }}</td>
                                            <td>{{ \App\Helpers\Helper::TotalRpn($key->severity->id, $key->occurence->id, $key->detection->id) }}</td>
                                            <td>
                                                <div class="d-flex justify-content-center text-white">
                                                    <button class="btn btn-warning text-white m-2">
                                                        <a href="#" class="text-white">Edit</a>
                                                    </button>
                                                    <button class="btn btn-danger text-white m-2">
                                                        <a href="#" class="text-white">Hapus</a>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot class="text-center">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Barang</th>
                                            <th>Nama Severity</th>
                                            <th>Nama Occurence</th>
                                            <th>Nama Detection</th>
                                            <th>RPN</th>
                                            <th>Aksi</th>
                                        </tr>
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
@endsection
