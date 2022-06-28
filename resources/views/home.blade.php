@extends('layouts.app')

@section('content')
<div id="kt_content_container" class="container-xxl">
  <!--begin::Row-->
  <div class="row g-5 g-xl-8">
    <div class="col-xl-4">
      <!--begin: Statistics Widget 6-->
      <div class="card bg-light-success card-xl-stretch mb-xl-8">
        <!--begin::Body-->
        <div class="card-body my-3">
          <a href="#" class="card-title fw-bolder text-success fs-5 mb-3 d-block">Total Komponen</a>
          <div class="py-1">
            <span class="text-dark fs-1 fw-bolder me-2">{{ $komponen }}</span>
            <span class="fw-bold text-muted fs-7">komponen</span>
          </div>
          <div class="progress h-7px bg-success bg-opacity-50 mt-7">
            <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <!--end:: Body-->
      </div>
      <!--end: Statistics Widget 6-->
    </div>
    <div class="col-xl-4">
      <!--begin: Statistics Widget 6-->
      <div class="card bg-light-warning card-xl-stretch mb-xl-8">
        <!--begin::Body-->
        <div class="card-body my-3">
          <a href="#" class="card-title fw-bolder text-warning fs-5 mb-3 d-block">Total RCM</a>
          <div class="py-1">
            <span class="text-dark fs-1 fw-bolder me-2">{{ $rcm }}</span>
            <span class="fw-bold text-muted fs-7">rcm</span>
          </div>
          <div class="progress h-7px bg-warning bg-opacity-50 mt-7">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 15%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <!--end:: Body-->
      </div>
      <!--end: Statistics Widget 6-->
    </div>
    <div class="col-xl-4">
      <!--begin: Statistics Widget 6-->
      <div class="card bg-light-primary card-xl-stretch mb-5 mb-xl-8">
        <!--begin::Body-->
        <div class="card-body my-3">
          <a href="#" class="card-title fw-bolder text-primary fs-5 mb-3 d-block">Total Sistem</a>
          <div class="py-1">
            <span class="text-dark fs-1 fw-bolder me-2">{{ $sistem }}</span>
            <span class="fw-bold text-muted fs-7">sistem</span>
          </div>
          <div class="progress h-7px bg-primary bg-opacity-50 mt-7">
            <div class="progress-bar bg-primary" role="progressbar" style="width: 76%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
        <!--end:: Body-->
      </div>
      <!--end: Statistics Widget 6-->
    </div>
  </div>
  <!--end::Row-->
  <!--begin::Row-->
  <div class="row g-5 g-xl-8">
    <!--begin::Col-->
    <div class="col-xl-6">
        <!--begin::Tables Widget 3-->
        <div class="card card-xl-stretch mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">RCM Data Latest</span>
                    <span class="text-muted mt-1 fw-bold fs-7">Over 100 pending files</span>
                </h3>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-3">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table align-middle gs-0 gy-3">
                        <!--begin::Table head-->
                        <thead>
                            <tr>
                                <th class="p-0 w-50px"></th>
                                <th class="p-0 min-w-150px"></th>
                                <th class="p-0 min-w-140px"></th>
                                <th class="p-0 min-w-120px"></th>
                                <th class="p-0 min-w-40px"></th>
                            </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                            @foreach ($data as $item)
                            <tr>
                                <td>
                                    <div class="symbol symbol-50px me-2">
                                        <span class="symbol-label bg-light-info">
                                            <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                                            <span class="svg-icon svg-icon-2x svg-icon-info">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        opacity="0.3"
                                                        d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                                                        fill="black"
                                                    ></path>
                                                    <path
                                                        d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                                                        fill="black"
                                                    ></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $item->komponen->nama_komponen }}</a>
                                </td>
                                {{-- <td class="text-end text-muted fw-bold">korektif = {{ $item->waktu_korektif }}</td> --}}
                                {{-- <td class="text-end text-muted fw-bold">preventif ={{ $item->waktu_preventif }}</td> --}}
                                <td class="text-end text-muted fw-bold">TF = {{ substr($item->tf,0,6) }}</td>
                                <td class="text-end text-muted fw-bold">TP = {{ substr($item->tp,0,6) }}</td>
                                <td class="text-end text-muted fw-bold">Waktu Rcm = {{ App\Helpers\Helper::getHariRcm($item->id) }} Hari</td>
                                <td class="text-end text-muted fw-bold">
                                    <a href="{{ url('rcm/'.$item->id) }}" class="badge badge-primary">
                                        detail
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Table container-->
            </div>
            <!--begin::Body-->
        </div>
        <!--end::Tables Widget 3-->
    </div>
    <!--end::Col-->
    <!--begin::Col-->
    <div class="col-xl-6">
        <!--begin::Tables Widget 4-->
        <div class="card card-xl-stretch mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bolder fs-3 mb-1">User Latest</span>
                    <span class="text-muted mt-1 fw-bold fs-7">More than new members</span>
                </h3>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body py-3">
                <div class="tab-content">
                    <!--begin::Tap pane-->
                    <div class="tab-pane fade show active" id="kt_table_widget_4_tab_1">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table align-middle gs-0 gy-3">
                                <!--begin::Table head-->
                                <thead>
                                    <tr>
                                        <th class="p-0 w-50px"></th>
                                        <th class="p-0 min-w-150px"></th>
                                        <th class="p-0 min-w-140px"></th>
                                        <th class="p-0 min-w-120px"></th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    @foreach ($users as $item=>$key)
                                    <tr>
                                        <td>
                                            <div class="symbol symbol-50px">
                                                <img src="uploads/{{ $key->avatar }}" alt="" />
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">{{ $key->name }}</a>
                                            <span class="text-muted fw-bold d-block fs-7">
                                                @foreach($key->getRoleNames() as $v=>$it)
                                                    @if ($it == 'Pimpinan')
                                                        Supervisor
                                                    @else
                                                    {{ $it }}
                                                    @endif
                                                @endforeach
                                            </span>
                                        </td>
                                        <td>
                                            <span class="text-muted fw-bold d-block fs-7">{{ $key->email }}</span>
                                        </td>
                                        <td class="text-end">
                                            <span class="text-muted fw-bold d-block fs-7">{{ $key->created_at }}</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <!--end::Table body-->
                            </table>
                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end::Tap pane-->
                    <!--begin::Tap pane-->
                    <div class="tab-pane fade" id="kt_table_widget_4_tab_2">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table align-middle gs-0 gy-3">
                                <!--begin::Table head-->
                                <thead>
                                    <tr>
                                        <th class="p-0 w-50px"></th>
                                        <th class="p-0 min-w-150px"></th>
                                        <th class="p-0 min-w-140px"></th>
                                        <th class="p-0 min-w-120px"></th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="symbol symbol-50px">
                                                <img src="{{ asset('') }}assets/media/svg/avatars/043-boy-18.svg" alt="" />
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Kevin Leonard</a>
                                            <span class="text-muted fw-bold d-block fs-7">Art Director</span>
                                        </td>
                                        <td>
                                            <span class="text-muted fw-bold d-block fs-7">Rating</span>
                                            <div class="rating">
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                <i class="bi bi-twitter fs-4"></i>
                                            </a>
                                            <a href="#" class="btn btn-icon btn-light-facebook btn-sm">
                                                <i class="bi bi-facebook fs-4"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="symbol symbol-50px">
                                                <img src="{{ asset('') }}assets/media/svg/avatars/014-girl-7.svg" alt="" />
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Natali Trump</a>
                                            <span class="text-muted fw-bold d-block fs-7">UI/UX Designer</span>
                                        </td>
                                        <td>
                                            <span class="text-muted fw-bold d-block fs-7">Rating</span>
                                            <div class="rating">
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                <i class="bi bi-twitter fs-4"></i>
                                            </a>
                                            <a href="#" class="btn btn-icon btn-light-facebook btn-sm">
                                                <i class="bi bi-facebook fs-4"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="symbol symbol-50px">
                                                <img src="{{ asset('') }}assets/media/svg/avatars/018-girl-9.svg" alt="" />
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Jessie Clarcson</a>
                                            <span class="text-muted fw-bold d-block fs-7">HTML, CSS Coding</span>
                                        </td>
                                        <td>
                                            <span class="text-muted fw-bold d-block fs-7">Rating</span>
                                            <div class="rating">
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                <i class="bi bi-twitter fs-4"></i>
                                            </a>
                                            <a href="#" class="btn btn-icon btn-light-facebook btn-sm">
                                                <i class="bi bi-facebook fs-4"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="symbol symbol-50px">
                                                <img src="{{ asset('') }}assets/media/svg/avatars/001-boy.svg" alt="" />
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Brad Simmons</a>
                                            <span class="text-muted fw-bold d-block fs-7">Movie Creator</span>
                                        </td>
                                        <td>
                                            <span class="text-muted fw-bold d-block fs-7">Rating</span>
                                            <div class="rating">
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                <i class="bi bi-twitter fs-4"></i>
                                            </a>
                                            <a href="#" class="btn btn-icon btn-light-facebook btn-sm">
                                                <i class="bi bi-facebook fs-4"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                                <!--end::Table body-->
                            </table>
                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end::Tap pane-->
                    <!--begin::Tap pane-->
                    <div class="tab-pane fade" id="kt_table_widget_4_tab_3">
                        <!--begin::Table container-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table align-middle gs-0 gy-3">
                                <!--begin::Table head-->
                                <thead>
                                    <tr>
                                        <th class="p-0 w-50px"></th>
                                        <th class="p-0 min-w-150px"></th>
                                        <th class="p-0 min-w-140px"></th>
                                        <th class="p-0 min-w-120px"></th>
                                    </tr>
                                </thead>
                                <!--end::Table head-->
                                <!--begin::Table body-->
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="symbol symbol-50px">
                                                <img src="{{ asset('') }}assets/media/svg/avatars/018-girl-9.svg" alt="" />
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Jessie Clarcson</a>
                                            <span class="text-muted fw-bold d-block fs-7">HTML, CSS Coding</span>
                                        </td>
                                        <td>
                                            <span class="text-muted fw-bold d-block fs-7">Rating</span>
                                            <div class="rating">
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                <i class="bi bi-twitter fs-4"></i>
                                            </a>
                                            <a href="#" class="btn btn-icon btn-light-facebook btn-sm">
                                                <i class="bi bi-facebook fs-4"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="symbol symbol-50px">
                                                <img src="{{ asset('') }}assets/media/svg/avatars/047-girl-25.svg" alt="" />
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Lebron Wayde</a>
                                            <span class="text-muted fw-bold d-block fs-7">ReactJS Developer</span>
                                        </td>
                                        <td>
                                            <span class="text-muted fw-bold d-block fs-7">Rating</span>
                                            <div class="rating">
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                <i class="bi bi-twitter fs-4"></i>
                                            </a>
                                            <a href="#" class="btn btn-icon btn-light-facebook btn-sm">
                                                <i class="bi bi-facebook fs-4"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="symbol symbol-50px">
                                                <img src="{{ asset('') }}assets/media/svg/avatars/014-girl-7.svg" alt="" />
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Natali Trump</a>
                                            <span class="text-muted fw-bold d-block fs-7">UI/UX Designer</span>
                                        </td>
                                        <td>
                                            <span class="text-muted fw-bold d-block fs-7">Rating</span>
                                            <div class="rating">
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                                <div class="rating-label me-2 checked">
                                                    <i class="bi bi-star-fill fs-5"></i>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-end">
                                            <a href="#" class="btn btn-icon btn-light-twitter btn-sm me-3">
                                                <i class="bi bi-twitter fs-4"></i>
                                            </a>
                                            <a href="#" class="btn btn-icon btn-light-facebook btn-sm">
                                                <i class="bi bi-facebook fs-4"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                                <!--end::Table body-->
                            </table>
                        </div>
                        <!--end::Table-->
                    </div>
                    <!--end::Tap pane-->
                </div>
            </div>
            <!--end::Body-->
        </div>
        <!--end::Tables Widget 4-->
    </div>
    <!--end::Col-->
  </div>
  <!--end::Row-->

</div>
@endsection
