@extends('layouts.app')

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
                            <span class="card-label fw-bolder text-dark">Detail Interval Waktu Komponen</span>
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
                                            <th>Nama Komponen</th>
                                            <th>Waktu Korektif</th>
                                            <th>Waktu Preventif</th>
                                            <th>ft</th>
                                            <th>Ft</th>
                                            <th>rt</th>
                                            <th>ht</th>
                                            <th>dt</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center">
                                        @foreach ($data as $item=>$key)
                                        <tr>
                                            <td>{{ $key->interval_waktu->komponen->nama_komponen }}</td>
                                            <td>{{ $key->interval_waktu->waktu_korektif }}</td>
                                            <td>{{ $key->interval_waktu->waktu_preventif }}</td>
                                            <td>{{ $key->fkecilt }}</td>
                                            <td>{{ $key->fbesart }}</td>
                                            <td>{{ $key->rt }}</td>
                                            <td>{{ $key->ht }}</td>
                                            <td>{{ $key->dt }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    <tfoot class="text-center">
                                        <tr>
                                            <th>Nama Komponen</th>
                                            <th>Waktu Korektif</th>
                                            <th>Waktu Preventif</th>
                                            <th>ft</th>
                                            <th>Ft</th>
                                            <th>rt</th>
                                            <th>ht</th>
                                            <th>dt</th>
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
