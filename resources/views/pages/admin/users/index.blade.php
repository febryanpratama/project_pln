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
                @role('Admin')
                <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">+ User</a>
                @endrole
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
                    <h2>Tambah User</h2>
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
                    <form action="{{ url('users') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="row">
                            <div class="col-md-6 mt-2">
                                <div class="form-group">
                                    <label for="" class="control-label"><h5>Nama User</h5></label>
                                    <input type="text" name="name" class="form-control @error('name')
                                        is-invalid
                                    @enderror" value="{{ old('name') }}"  placeholder="Masukkan Nama User" required>
                                </div>
                                @error('name')
                                    <div class="text-muted text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mt-2">
                                <div class="form-group">
                                    <label for="" class="control-label"><h5>Email</h5></label>
                                    <input type="email" name="email" class="form-control @error('email')
                                        is-invalid
                                    @enderror" value="{{ old('email') }}" placeholder="Masukkan Email" required>
                                </div>
                                @error('email')
                                    <div class="text-muted text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mt-2">
                                <div class="form-group">
                                    <label for="" class="control-label"><h5>Password</h5></label>
                                    <input type="password" name="password" class="form-control @error('password')
                                        is-invalid
                                    @enderror" value="{{ old('password') }}" placeholder="Masukkan Password" required>
                                </div>
                                @error('password')
                                    <div class="text-muted text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mt-2">
                                <div class="form-group">
                                    <label for="" class="control-label"><h5>Re-Password</h5></label>
                                    <input type="password" name="password_confirmation" class="form-control @error('password_confirmation')
                                        is-invalid
                                    @enderror" value="{{ old('password_confirmation') }}" placeholder="Masukkan Password" required>
                                </div>
                                @error('password_confirmation')
                                    <div class="text-muted text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mt-2">
                                <div class="form-group">
                                    <label for="" class="control-label"><h5>Avatar</h5></label>
                                    <input type="file" name="avatar" class="form-control @error('avatar')
                                        is-invalid
                                    @enderror" value="{{ old('avatar') }}" placeholder="Masukkan avatar" required>
                                </div>
                                @error('avatar')
                                    <div class="text-muted text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6 mt-2">
                                <div class="form-group">
                                    <label for="" class="control-label"><h5>Role</h5></label>
                                    <select name="role" class="form-control @error('role')
                                        is-invalid
                                    @enderror" value="{{ old('role') }}" required>
                                        <option value="">Pilih Role</option>
                                        <option value="Admin">Admin</option>
                                        <option value="Operator">Operator</option>
                                        <option value="Pimpinan">Supervisor</option>
                                    </select>
                                </div>
                                @error('role')
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
                                            <th>Nama User</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        @foreach ($data as $item=>$key)
                                        <tr>
                                            <td>{{ $key->name }}</td>
                                            <td>{{ $key->email }}</td>
                                            <td>
                                                @foreach($key->getRoleNames() as $v=>$it)
                                                    @if ($it == 'Pimpinan')
                                                        Supervisor
                                                    @else
                                                    {{ $it }}
                                                    @endif
                                                @endforeach
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center text-white">
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
                                                        <h2>Hapus User</h2>
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
                                                        <form action="{{ url('users/destroy') }}" method="POST">
                                                        @csrf
                                                        <input type="hidden" name="user_id" value="{{ $key->id }}">
                                                            <div class="row">
                                                                <p>Apakah Anda yakin ingin menghapus data User {{ $key->name }}</p>
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
                                            <div class="modal-dialog modal-dialog-centered mw-900px">
                                                <!--begin::Modal content-->
                                                <div class="modal-content">
                                                    <!--begin::Modal header-->
                                                    <div class="modal-header">
                                                        <!--begin::Modal title-->
                                                        <h2>Edit User</h2>
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
                                                        <form action="{{ url('users/update') }}" method="POST" enctype="multipart/form-data">
                                                        @csrf
                                                        <input type="hidden" name="user_id" value="{{ $key->id }}">
                                                            <div class="row">
                                                                <div class="col-md-6 mt-2">
                                                                    <div class="form-group">
                                                                        <label for="" class="control-label"><h5>Nama User</h5></label>
                                                                        <input type="text" name="name" value="{{ $key->name }}" class="form-control @error('name')
                                                                            is-invalid
                                                                        @enderror" value="{{ old('name') }}"  placeholder="Masukkan Nama User">
                                                                    </div>
                                                                    @error('name')
                                                                        <div class="text-muted text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-md-6 mt-2">
                                                                    <div class="form-group">
                                                                        <label for="" class="control-label"><h5>Email</h5></label>
                                                                        <input type="email" name="email" value="{{ $key->email }}" class="form-control @error('email')
                                                                            is-invalid
                                                                        @enderror" value="{{ old('email') }}" placeholder="Masukkan Email">
                                                                    </div>
                                                                    @error('email')
                                                                        <div class="text-muted text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-md-6 mt-2">
                                                                    <div class="form-group">
                                                                        <label for="" class="control-label"><h5>Password</h5></label>
                                                                        <input type="password" name="password" value="" class="form-control @error('password')
                                                                            is-invalid
                                                                        @enderror" value="{{ old('password') }}" placeholder="Masukkan Password">
                                                                    </div>
                                                                    @error('password')
                                                                        <div class="text-muted text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-md-6 mt-2">
                                                                    <div class="form-group">
                                                                        <label for="" class="control-label"><h5>Re-Password</h5></label>
                                                                        <input type="password" name="password_confirmation" value="" class="form-control @error('password_confirmation')
                                                                            is-invalid
                                                                        @enderror" value="{{ old('password_confirmation') }}" placeholder="Masukkan Password">
                                                                    </div>
                                                                    @error('password_confirmation')
                                                                        <div class="text-muted text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-md-6 mt-2">
                                                                    <div class="form-group">
                                                                        <label for="" class="control-label"><h5>Avatar</h5></label>
                                                                        <input type="file" name="avatar" class="form-control @error('avatar')
                                                                            is-invalid
                                                                        @enderror" value="{{ old('avatar') }}" placeholder="Masukkan avatar">
                                                                    </div>
                                                                    @error('avatar')
                                                                        <div class="text-muted text-danger">{{ $message }}</div>
                                                                    @enderror
                                                                </div>
                                                                <div class="col-md-6 mt-2">
                                                                    <div class="form-group">
                                                                        <label for="" class="control-label"><h5>Role</h5></label>
                                                                        <select name="role" value="{{ $key->role }}" class="form-control @error('role')
                                                                            is-invalid
                                                                        @enderror" value="{{ old('role') }}">
                                                                            <option value="">Pilih Role</option>
                                                                            <option value="Admin">Admin</option>
                                                                            <option value="Operator">Operator</option>
                                                                            <option value="Pimpinan">Supervisor</option>
                                                                        </select>
                                                                    </div>
                                                                    @error('role')
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
                                    <tfoot>
                                        <tr>
                                            <th>Nama Occurence</th>
                                            <th>Rating Occurence</th>
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
        order: [[2, 'desc']],

        });
    </script>
@endsection
