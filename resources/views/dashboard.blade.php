<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-14">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <!--begin::API keys-->
                <div class="card w-full">
                    <!--begin::Header-->
                    <div class="card-header card-header-stretch">
                        <!--begin::Title-->
                        <div class="card-title">
                            <h4>API Keys</h4>
                        </div>
                            <!--begin::Search-->
                            @include('dashboardcomponents.search')
                            <!--end::Search-->
                        {{--add button--}}
                        @include('dashboardcomponents.add-button')


                    </div>
                    <!--begin::Body-->
                    <div class="card-body p-0">
                        <!--begin::Table wrapper-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table table-fixed table-flush align-middle table-row-bordered table-row-solid gy-4 gs-9 d-flex flex-column scroll-y "
                                   data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}"
                                   data-kt-scroll-max-height="600px" data-kt-scroll-dependencies="#kt_modal_add_user_header"
                                   data-kt-scroll-wrappers="#kt_modal_add_user_scroll"  id="kt_api_keys_table">
                                <!--begin::Thead-->
                                <thead class="border-gray-200 fs-5 fw-bold bg-lighten">
                                <tr>

                                    <th class="w-225 ps-9 p-lg-4" >Blood Type</th>
                                    <th class="w-175px text-center" style="padding-left: -40px">Status</th>
                                    <th class="w-200px  ps-9">location</th>
                                    <th class="w-175px p-lx-8 text-center ">Information</th>
                                    <th class="w-225px ps-9 text-center">Date</th>
                                    <th class="w-25px">Action</th>
                                </tr>
                                </thead>
                                <!--end::Thead-->
                                <!--begin::Tbody-->
                                <tbody class="fs-5 fw-bold text-gray-600 ">
                                @foreach($data as $item)
                                <tr>
                                    <td >{{$item->blood_type}}</td>
                                    <td style="padding-right: 42px">
                                        <span class="badge badge-light-success fs-6 fw-bold" >{{$item->status}}</span>
                                    </td>
                                    <td style="height: 8px; width: 220px;">{{$item->location}}</td>
                                    <td style="height: 8px; width:220px;">
                                        {{$item->information}}
                                    </td>
                                    <td >{{$item->created_at->diffForHumans()}}</td>
                                    <td style="padding-left: 48px"><x-primary-button>show</x-primary-button></td>

                                </tr>
                                @endforeach

                                <!--end::Tbody-->
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Table wrapper-->
                                </div>
                                <!--end::Body-->
                            </table>
                            <!--end::Table-->
                        </div>
                        <!--end::Table wrapper-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::API keys-->

                @include('dashboardcomponents.form')
            </div>
            </div>
        </div>
    </div>
    <!--end::Main-->
    <script>var hostUrl = "assets/";</script>
    <!--begin::Javascript-->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Vendors Javascript(used by this page)-->
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <!--end::Page Vendors Javascript-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="assets/js/custom/apps/user-management/users/list/table.js"></script>
    <script src="assets/js/custom/apps/user-management/users/list/export-users.js"></script>
    <script src="assets/js/custom/apps/user-management/users/list/add.js"></script>
    <script src="assets/js/custom/widgets.js"></script>
    <script src="assets/js/custom/apps/chat/chat.js"></script>
    <script src="assets/js/custom/modals/create-app.js"></script>
    <script src="assets/js/custom/modals/upgrade-plan.js"></script>
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
</x-app-layout>
