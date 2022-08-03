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
                @role('Admin|Operator')
                <a href="../../demo1/dist/.html" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">+ Pertanyaan LTA</a>
                @endrole
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
                    <form action="" action="{{ url('lta-proses') }}" method="POST">
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
                                    <label for="" class="control-label mb-3">{{ $first->pertanyaan }}</label>
                                    <select name="pertanyaan_1" id="pertanyaan_1" class="form-control">
                                        <option value=""> == Pilih == </option>
                                        <option value="1"> Ya </option>
                                        <option value="2"> Tidak </option>
                                    </select>
                                    {{-- <textarea name="pertanyaan" class="form-control" cols="30" rows="10"></textarea> --}}
                                </div>
                            </div>
                            <div id="list-2">

                            </div>
                            <div id="list-3">

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
                                            <th>Nama Komponen</th>
                                            <th>Evident</th>
                                            <th>Safety</th>
                                            <th>Outage</th>
                                            <th>Kategori</th>
                                            @role("Admin")
                                            <th>Aksi</th>
                                            @endrole
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        @foreach ($data as $item=>$key)
                                        <tr>
                                            <td>{{ $key->komponen->nama_komponen }}</td>
                                            <td>
                                                @switch($key->evident)
                                                    @case(1)
                                                        Ya
                                                        @break
                                                    @case(2)
                                                        Tidak
                                                        @break
                                                    @default
                                                        
                                                @endswitch
                                            </td>
                                            <td>
                                                @switch($key->safety)
                                                    @case(1)
                                                        Ya
                                                        @break
                                                    @case(2)
                                                        Tidak
                                                        @break
                                                    @default
                                                        
                                                @endswitch
                                            </td>
                                            <td>
                                                @switch($key->outage)
                                                    @case(1)
                                                        Ya
                                                        @break
                                                    @case(2)
                                                        Tidak
                                                        @break
                                                    @default
                                                        
                                                @endswitch
                                            </td>
                                            <td>{{ $key->category }}</td>
                                            @role("Admin")
                                            <td>
                                                <div class="d-flex justify-content-center text-white">
                                                    <button class="btn btn-danger text-white m-2">
                                                        <a href="#" class="text-white">Hapus</a>
                                                    </button>
                                                </div>
                                            </td>
                                            @endrole
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Nama Komponen</th>
                                            <th>Evident</th>
                                            <th>Safety</th>
                                            <th>Outage</th>
                                            <th>Kategori</th>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('#pertanyaan_1').on('change', function() {
            $('#hidden').html('');
                $('#list-2').html('');
                $('#list-3').html('');
            var id1 = this.value;
            if (id1 == 1) {

                $('#hidden').html('');
                $('#list-3').html('');

                

                $.ajax({
                    url: '{{ url("api/lta") }}',
                    type: 'post',
                    dataType: 'json',
                    headers: {
                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                    },
                    data: {
                        'pertanyaan_id': 2,
                    },
                    success: (data)=>{
                        // console.log(data.data.pertanyaan)
                        $('#list-2').append(`
                        <div class="col-md-12 mt-2">
                                <div class="form-group">
                                    <label for="" class="control-label mb-3">`+data.data.pertanyaan+`xx</label>
                                    <select name="pertanyaan_2" id="pertanyaan_2" class="form-control">
                                        <option value=""> == Pilih == </option>
                                        <option value="1"> Ya </option>
                                        <option value="2"> Tidak </option>
                                    </select>
                                    {{-- <textarea name="pertanyaan" class="form-control" cols="30" rows="10"></textarea> --}}
                                </div>
                            </div>
                        `)

                        $('#pertanyaan_2').on('change', function(){
                            // console.log('ok'+this.value)
                            if (this.value == 2) {
                                $('#hidden').html('');
                                $('#list-3').html('');

                                $.ajax({
                                    url: '{{ url("api/lta") }}',
                                    type: 'post',
                                    dataType: 'json',
                                    headers: {
                                        'X-CSRF-TOKEN': "{{ csrf_token() }}"
                                    },
                                    data: {
                                        'pertanyaan_id': 3,
                                    },
                                    success: (data)=>{
                                        // console.log(data);
                                        $('#list-3').append(`
                                        <div class="col-md-12 mt-2">
                                                <div class="form-group">
                                                    <label for="" class="control-label mb-3">`+data.data.pertanyaan+`</label>
                                                    <select name="pertanyaan_3" id="pertanyaan_3" class="form-control">
                                                        <option value=""> == Pilih == </option>
                                                        <option value="1"> Ya </option>
                                                        <option value="2"> Tidak </option>
                                                    </select>
                                                    {{-- <textarea name="pertanyaan" class="form-control" cols="30" rows="10"></textarea> --}}
                                                </div>
                                            </div>
                                        `)
                                        $('#pertanyaan_3').on('change', function(){
                                            // console.log(this.value);
                                            if (this.value == 1) {
                                                $('#hidden').html('');
                                                
                                                $('#hidden').append(`
                                                <input type="hidden" value="B" name="value_kategori">
                                                `)
                                            }else{
                                                $('#hidden').html('');
                                                $('#hidden').append(`
                                                    <input type="hidden" value="C" name="value_kategori">
                                                `)

                                            }
                                        })
                                    }
                                })
                                // console.log('tidak')
                            }else{
                                $('#hidden').html('');
                                $('#list-3').html('');
                                $('#hidden').append(`
                                    <input type="hidden" value="A" name="value_kategori">
                                `)
                            }
                        })

                    }

                })

            }else{
                $('#hidden').html('');
                $('#list-2').html('');
                $('#list-3').html('');

                $('#hidden').append(`
                    <input type="hidden" value="D" name="value_kategori">
                `)
                
                $('#list-2').append(`
                <div class="col-md-12 mt-2">
                        <div class="form-group">
                            <label for="" class="control-label mb-3">Hidden Failure</label>
                            <select name="pertanyaan_2" id="pertanyaan_2" class="form-control">
                                <option value=""> == Pilih == </option>
                                <option value="1"> Ya </option>
                                <option value="2"> Tidak </option>
                            </select>
                            {{-- <textarea name="pertanyaan" class="form-control" cols="30" rows="10"></textarea> --}}
                        </div>
                    </div>
                `)

                $('#pertanyaan_2').on('change', function(){
                    if (this.value == 1) {
                        $('#hidden').html('');
                        $('#list-3').html('');

                        $('#list-3').append(`
                            <div class="col-md-12 mt-2">
                                    <div class="form-group">
                                        <label for="" class="control-label mb-3">Apakah Mode kegagalan dapat menyebabkan masalah keselamatan ?</label>
                                        <select name="pertanyaan_2" id="pertanyaan_2" class="form-control">
                                            <option value=""> == Pilih == </option>
                                            <option value="1"> Ya </option>
                                        </select>
                                        {{-- <textarea name="pertanyaan" class="form-control" cols="30" rows="10"></textarea> --}}
                                    </div>
                                </div>
                            `)
                        $('#hidden').append(`
                            <input type="hidden" value="D/A" name="value_kategori">
                        `)
                    }else{
                        $('#list-3').html('');
                        $.ajax({
                            url: '{{ url("api/lta") }}',
                            type: 'post',
                            dataType: 'json',
                            headers: {
                                'X-CSRF-TOKEN': "{{ csrf_token() }}"
                            },
                            data: {
                                'pertanyaan_id': 5,
                            },
                            success: (data)=>{
                                // console.log(data);
                                $('#list-3').append(`
                                    <div class="col-md-12 mt-2">
                                            <div class="form-group">
                                                <label for="" class="control-label mb-3">`+data.data.pertanyaan+`</label>
                                                <select name="pertanyaan_3" id="pertanyaan_3" class="form-control">
                                                    <option value=""> == Pilih == </option>
                                                    <option value="1"> Ya </option>
                                                    <option value="2"> Tidak </option>
                                                </select>
                                                {{-- <textarea name="pertanyaan" class="form-control" cols="30" rows="10"></textarea> --}}
                                            </div>
                                        </div>
                                    `)

                                    $('#pertanyaan_3').on('change', function(){
                                        if (this.value == 1) {
                                            $('#hidden').html('');
                                            
                                            $('#hidden').append(`
                                            <input type="hidden" value="D/B" name="value_kategori">
                                            `)
                                        }else{
                                            $('#hidden').html('');
                                            $('#hidden').append(`
                                                <input type="hidden" value="D/C" name="value_kategori">
                                            `)
                                        }
                                    })

                            }
                        })

                    }
                })


                
            }
        });
    </script>
@endsection
