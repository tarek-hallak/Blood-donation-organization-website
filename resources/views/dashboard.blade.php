<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <!--begin::API keys-->
                <div class="card w-full">
                    <!--begin::Header-->
                    <div class="card-header card-header-stretch">
                        <!--begin::Title-->
                        <div class="card-title">
                            <h4>API Keys</h4>
                        </div>
                        {{--add button--}}
                        <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                            <button type="button"  data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                <span class="svg-icon svg-icon-2">
                                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAABzenr0AAAACXBIWXMAAAsTAAALEwEAmpwYAAAB70lEQVR4nO2XSUokURCGP3A4gMMByk2jYCsoDnsVddv2PRQal+rShVgOKzddXkIFKfoErbZ6BnWtQoukWhLwFwSSw8vKSlf+8CDJ+CNe5It4EZHwhdbQCwwDi8CCnu1dqRgANoALoJGwzoF1cduGfmAfeHYb3QNXwBFwrOd7JzfunnQLYRq4k9EI+A3MAF0x3G5gFqiJazq3wFSrm/8EnmToFPiWQ3cQqEvXbCzl3Xwc+C8DB0BnXgNAB7DpnAg+iX537FsUx7YLR1+Iwr47dvuKNKwCvzI4HS4cO1mbDyiDo8CYvwIvgTkRyXYljbghTy3bQ9C8diGoibuWRvon0kwJDsy5YhWLXldkukpwwOrEI/AG9MQRRmXMSi0lOGC4FP97nHBewpMY2YqSrRG4XqTzESeSz5ftQAQs53VgREJLxLJCcC2+te/EJHxQwnx6EqIr0lBXa7cDzRD/TSOti1QrwYHDkEJUcaXYymcWIq0sDCmJM0uxYVee1gOa0UrCdfOwVv5HNqsEtuNbKVgrLYqqbN3kGVzHShhIJvMaWHIjWT0wJ3zMm8duNn7QIiZdOCLdjrmEOtEt2aGrmnbsExREnyYZP5Y/qKoda13rnR/Lq+3+WanoDp+l9IAzcTKvWlH0qJ4vuF+zxPL6BVLwDrSVyFMKzOXFAAAAAElFTkSuQmCC">
                                </span>
                            </button>
                        </div>

                    </div>
                    <!--begin::Body-->
                    <div class="card-body p-0">
                        <!--begin::Table wrapper-->
                        <div class="table-responsive">
                            <!--begin::Table-->
                            <table class="table table-flush align-middle table-row-bordered table-row-solid gy-4 gs-9" id="kt_api_keys_table">
                                <!--begin::Thead-->
                                <thead class="border-gray-200 fs-5 fw-bold bg-lighten">
                                <tr>

                                    <th class="w-250px min-w-230px ps-9">Blood Type</th>
                                    <th class="w-175px min-w-170px px-2">Status</th>

                                    <th class="w-175px min-w-170px px-2">location</th>
                                    <th class="min-w-125px min-w-175px">Information</th>
                                    <th class="w-100px"></th>
                                </tr>
                                </thead>
                                <!--end::Thead-->
                                <!--begin::Tbody-->
                                <tbody class="fs-5 fw-bold text-gray-600">
                                @foreach($data as $item)
                                <tr>
                                    <td class="ps-9 ">{{$item->blood_type}}</td>
                                    <td >
                                        <span class="badge badge-light-success fs-6 fw-bold">{{$item->status}}</span>
                                    </td>
                                    <td data-bs-target="license" class="ps-0">{{$item->location}}</td>
                                    <td class="ps-0">
                                        {{$item->information}}
                                    </td>
                                    <td><x-primary-button>show</x-primary-button></td>

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
