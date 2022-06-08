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
                <a href="../../demo1/dist/.html" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">+ Sistem</a>
            </div>
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
                    <h2>Tambah Sistem</h2>
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
                    <form action="{{ url('swbs') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="control-label"><h5>Nama Sistem</h5></label>
                                    <input type="text" name="nama_sistem" class="form-control @error('nama_sistem')
                                        is-invalid
                                    @enderror" value="{{ old('nama_sistem') }}"  placeholder="Masukkan Nama Sistem" required>
                                </div>
                                @error('nama_sistem')
                                    <div class="text-muted text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12 mt-2">
                                <div class="form-group">
                                    <label for="" class="control-label"><h5>Foto Barang</h5></label>
                                    <input type="file" name="foto_sistem" class="form-control @error('foto_sistem')
                                        is-invalid
                                    @enderror" value="{{ old('foto_sistem') }}" placeholder="Masukkan Rating Kriteria. Range 1 - 10" required>
                                </div>
                                @error('foto_sistem')
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
                                            <th>Nama Sistem</th>
                                            <th>Foto Sistem</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        @foreach ($data as $item=>$key)
                                        <tr>
                                            <td>{{ $key->nama_sistem }}</td>
                                            <td>
                                                <a href="{{ asset('') }}uploads/{{ $key->foto_sistem }}" class="badge badge-primary" target="_blank">Lihat Foto</a>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center text-white">
                                                    <button class="btn btn-info text-white m-2">
                                                        <a href="{{ url('swbs/'. $key->id) }}" class="text-white">Detail</a>
                                                    </button>
                                                    <button class="btn btn-warning text-white m-2">
                                                        <a href="#" class="text-white" data-bs-toggle="modal" data-bs-target="#edit{{ $item+1 }}">Edit</a>
                                                    </button>
                                                    <button class="btn btn-danger text-white m-2">
                                                        <a href="#" class="text-white" data-bs-toggle="modal" data-bs-target="#hapus{{ $item+1 }}">Hapus</a>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="hapus{{ $item+1 }}" tabindex="-1" aria-hidden="true">
                                            <!--begin::Modal dialog-->
                                            <div class="modal-dialog modal-dialog-centered mw-500px">
                                                <!--begin::Modal content-->
                                                <div class="modal-content">
                                                    <!--begin::Modal header-->
                                                    <div class="modal-header">
                                                        <!--begin::Modal title-->
                                                        <h2>Hapus Sistem</h2>
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
                                                        <form action="{{ route('swbs.destroy') }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="swbs_id" value="{{ $key->id }}">
                                                            <div class="row">
                                                                <p>Apakah Anda Yakin Ingin Menghapus data Swbs {{ $key->nama_sistem }}</p>
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
                                        <div class="modal fade" id="edit{{ $item+1 }}" tabindex="-1" aria-hidden="true">
                                            <!--begin::Modal dialog-->
                                            <div class="modal-dialog modal-dialog-centered mw-500px">
                                                <!--begin::Modal content-->
                                                <div class="modal-content">
                                                    <!--begin::Modal header-->
                                                    <div class="modal-header">
                                                        <!--begin::Modal title-->
                                                        <h2>Edit Sistem</h2>
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
                                                        <form action="{{ route('swbs.update') }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="swbs_id" value="{{ $key->id }}">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="" class="control-label"><h5>Nama Sistem</h5></label>
                                                                        <input type="text" name="nama_sistem" class="form-control @error('nama_sistem')
                                                                            is-invalid
                                                                        @enderror" value="{{ old('nama_sistem') }}"  placeholder="Masukkan Nama Sistem" required>
                                                                    </div>
                                                                    @error('nama_sistem')
                                                                        <div class="text-muted text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-md-12 mt-2">
                                                                    <div class="form-group">
                                                                        <label for="" class="control-label"><h5>Foto Barang</h5></label>
                                                                        <input type="file" name="foto_sistem" class="form-control @error('foto_sistem')
                                                                            is-invalid
                                                                        @enderror" value="{{ old('foto_sistem') }}" placeholder="Masukkan Rating Kriteria. Range 1 - 10">
                                                                    </div>
                                                                    @error('foto_sistem')
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
                                        @endforeach
                                    </tbody>
                                    <tfoot class="text-center">
                                        <tr>
                                            <th>Nama Sistem</th>
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
        $("#kt_datatable_example_1").DataTable({
        order: [[2, 'asc']],
    });
    </script>
@endsection
