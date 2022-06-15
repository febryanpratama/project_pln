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
            <span class="text-dark fs-1 fw-bolder me-2">50%</span>
            <span class="fw-bold text-muted fs-7">Avarage</span>
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
            <span class="text-dark fs-1 fw-bolder me-2">15%</span>
            <span class="fw-bold text-muted fs-7">48k Goal</span>
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
            <span class="text-dark fs-1 fw-bolder me-2">76%</span>
            <span class="fw-bold text-muted fs-7">400k Impressions</span>
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
                <div class="card-toolbar">
                    <!--begin::Menu-->
                    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000"></rect>
                                    <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                                    <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                                    <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3"></rect>
                                </g>
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </button>
                    <!--begin::Menu 3-->
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3" data-kt-menu="true">
                        <!--begin::Heading-->
                        <div class="menu-item px-3">
                            <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Payments</div>
                        </div>
                        <!--end::Heading-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">Create Invoice</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link flex-stack px-3">
                                Create Payment
                                <i
                                    class="fas fa-exclamation-circle ms-2 fs-7"
                                    data-bs-toggle="tooltip"
                                    title=""
                                    data-bs-original-title="Specify a target name for future usage and reference"
                                    aria-label="Specify a target name for future usage and reference"
                                ></i>
                            </a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-3">Generate Bill</a>
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                            <a href="#" class="menu-link px-3">
                                <span class="menu-title">Subscription</span>
                                <span class="menu-arrow"></span>
                            </a>
                            <!--begin::Menu sub-->
                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Plans</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Billing</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Statements</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu separator-->
                                <div class="separator my-2"></div>
                                <!--end::Menu separator-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <div class="menu-content px-3">
                                        <!--begin::Switch-->
                                        <label class="form-check form-switch form-check-custom form-check-solid">
                                            <!--begin::Input-->
                                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
                                            <!--end::Input-->
                                            <!--end::Label-->
                                            <span class="form-check-label text-muted fs-6">Recuring</span>
                                            <!--end::Label-->
                                        </label>
                                        <!--end::Switch-->
                                    </div>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu sub-->
                        </div>
                        <!--end::Menu item-->
                        <!--begin::Menu item-->
                        <div class="menu-item px-3 my-1">
                            <a href="#" class="menu-link px-3">Settings</a>
                        </div>
                        <!--end::Menu item-->
                    </div>
                    <!--end::Menu 3-->
                    <!--end::Menu-->
                </div>
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
                            <tr>
                                <td>
                                    <div class="symbol symbol-50px me-2">
                                        <span class="symbol-label bg-light-success">
                                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                                            <span class="svg-icon svg-icon-2x svg-icon-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="black"></path>
                                                    <path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="black"></path>
                                                    <path
                                                        opacity="0.3"
                                                        d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z"
                                                        fill="black"
                                                    ></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Top Authors</a>
                                </td>
                                <td class="text-end text-muted fw-bold">ReactJs, HTML</td>
                                <td class="text-end text-muted fw-bold">4600 Users</td>
                                <td class="text-end text-dark fw-bolder fs-6 pe-0">5.4MB</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="symbol symbol-50px me-2">
                                        <span class="symbol-label bg-light-danger">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                            <span class="svg-icon svg-icon-2x svg-icon-danger">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <rect x="2" y="2" width="9" height="9" rx="2" fill="black"></rect>
                                                    <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black"></rect>
                                                    <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black"></rect>
                                                    <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black"></rect>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Popular Authors</a>
                                </td>
                                <td class="text-end text-muted fw-bold">Python, MySQL</td>
                                <td class="text-end text-muted fw-bold">7200 Users</td>
                                <td class="text-end text-dark fw-bolder fs-6 pe-0">2.8MB</td>
                            </tr>
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
                                    <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">New Users</a>
                                </td>
                                <td class="text-end text-muted fw-bold">Laravel, Metronic</td>
                                <td class="text-end text-muted fw-bold">890 Users</td>
                                <td class="text-end text-dark fw-bolder fs-6 pe-0">1.5MB</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="symbol symbol-50px me-2">
                                        <span class="symbol-label bg-light-warning">
                                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                            <span class="svg-icon svg-icon-2x svg-icon-warning">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        opacity="0.3"
                                                        d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                        fill="black"
                                                    ></path>
                                                    <path
                                                        d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                        fill="black"
                                                    ></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active Customers</a>
                                </td>
                                <td class="text-end text-muted fw-bold">AngularJS, C#</td>
                                <td class="text-end text-muted fw-bold">4600 Users</td>
                                <td class="text-end text-dark fw-bolder fs-6 pe-0">5.4MB</td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="symbol symbol-50px me-2">
                                        <span class="symbol-label bg-light-primary">
                                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs042.svg-->
                                            <span class="svg-icon svg-icon-2x svg-icon-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z"
                                                        fill="black"
                                                    ></path>
                                                    <path
                                                        opacity="0.3"
                                                        d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z"
                                                        fill="black"
                                                    ></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="text-dark fw-bolder text-hover-primary mb-1 fs-6">Active Customers</a>
                                </td>
                                <td class="text-end text-muted fw-bold">ReactJS, Ruby</td>
                                <td class="text-end text-muted fw-bold">354 Users</td>
                                <td class="text-end text-dark fw-bolder fs-6 pe-0">500KB</td>
                            </tr>
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
                    <span class="text-muted mt-1 fw-bold fs-7">More than 400 new members</span>
                </h3>
                <div class="card-toolbar">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary active fw-bolder px-4 me-1" data-bs-toggle="tab" href="#kt_table_widget_4_tab_1">Month</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bolder px-4 me-1" data-bs-toggle="tab" href="#kt_table_widget_4_tab_2">Week</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light-primary fw-bolder px-4" data-bs-toggle="tab" href="#kt_table_widget_4_tab_3">Day</a>
                        </li>
                    </ul>
                </div>
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
                                    <tr>
                                        <td>
                                            <div class="symbol symbol-50px">
                                                <img src="{{ asset('') }}assets/media/avatars/300-14.jpg" alt="" />
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
                                    <tr>
                                        <td>
                                            <div class="symbol symbol-50px">
                                                <img src="{{ asset('') }}assets/media/avatars/300-5.jpg" alt="" />
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
                                                <img src="{{ asset('') }}assets/media/avatars/300-20.jpg" alt="" />
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
                                                <img src="{{ asset('') }}assets/media/avatars/300-23.jpg" alt="" />
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
                                                <img src="{{ asset('') }}assets/media/avatars/300-10.jpg" alt="" />
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
