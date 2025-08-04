@push('styles')
<!-- Datatable -->
<link href="{{ asset('assets/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">
@endpush

@push('scripts')
<script src="{{ asset('assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins-init/datatables.init.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
@endpush


<x-layouts.app>
    <div class="content-body">
        <div class="container-fluid">

            <div class="row page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Users</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">List user</a></li>
                </ol>
            </div>
            <!-- row -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">List user</h4>
                        <div class="nav-item d-flex align-items-center">
                            <div class="input-group search-area">
                                <input type="text" class="form-control" placeholder="Search">
                                <span class="input-group-text"><a href="javascript:void(0)"><i class="flaticon-381-search-2"></i></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th style="width:50px;">
                                            <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                                                <input type="checkbox" class="form-check-input" id="checkAll" required="">
                                                <label class="form-check-label" for="checkAll"></label>
                                            </div>
                                        </th>
                                        <th><strong>ROLL NO.</strong></th>
                                        <th><strong>NAME</strong></th>
                                        <th><strong>Email</strong></th>
                                        <th><strong>Date</strong></th>
                                        <th><strong>Status</strong></th>
                                        <th><strong></strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
                                                <label class="form-check-label" for="customCheckBox2"></label>
                                            </div>
                                        </td>
                                        <td><strong>542</strong></td>
                                        <td>
                                            <div class="d-flex align-items-center"><img src="images/avatar/1.jpg" class="rounded-lg me-2" width="24" alt=""> <span class="w-space-no">Dr. Jackson</span></div>
                                        </td>
                                        <td>example@example.com </td>
                                        <td>01 August 2020</td>
                                        <td>
                                            <div class="d-flex align-items-center"><i class="fa fa-circle text-success me-1"></i> Successful</div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('users.edit', 1) }}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox3" required="">
                                                <label class="form-check-label" for="customCheckBox3"></label>
                                            </div>
                                        </td>
                                        <td><strong>542</strong></td>
                                        <td>
                                            <div class="d-flex align-items-center"><img src="images/avatar/2.jpg" class="rounded-lg me-2" width="24" alt=""> <span class="w-space-no">Dr. Jackson</span></div>
                                        </td>
                                        <td>example@example.com </td>
                                        <td>01 August 2020</td>
                                        <td>
                                            <div class="d-flex align-items-center"><i class="fa fa-circle text-danger me-1"></i> Canceled</div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('users.edit', 1) }}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check custom-checkbox checkbox-success check-lg me-3">
                                                <input type="checkbox" class="form-check-input" id="customCheckBox4" required="">
                                                <label class="form-check-label" for="customCheckBox4"></label>
                                            </div>
                                        </td>
                                        <td><strong>542</strong></td>
                                        <td>
                                            <div class="d-flex align-items-center"><img src="images/avatar/3.jpg" class="rounded-lg me-2" width="24" alt=""> <span class="w-space-no">Dr. Jackson</span></div>
                                        </td>
                                        <td>example@example.com </td>
                                        <td>01 August 2020</td>
                                        <td>
                                            <div class="d-flex align-items-center"><i class="fa fa-circle text-warning me-1"></i> Pending</div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('users.edit', 1) }}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
                                                <a href="#" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <nav>
                            <ul class="pagination pagination-sm pagination-gutter justify-content-center mt-4 mb-0">
                                <li class="page-item page-indicator">
                                    <a class="page-link" href="javascript:void(0)">
                                        <i class="la la-angle-left"></i></a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
                                <li class="page-item page-indicator">
                                    <a class="page-link" href="javascript:void(0)">
                                        <i class="la la-angle-right"></i></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
