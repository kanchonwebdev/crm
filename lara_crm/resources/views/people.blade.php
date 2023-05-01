<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>CRM | People Lead | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('assets/css/dashlite.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/theme.css') }}">
</head>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('inc/sidebar')
            <!-- sidebar @e -->
            
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('inc/header')
                <!-- main header @e -->

                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Lead Lists</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>You have total 2,595 Lead.</p>
                                            </div>
                                        </div>
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu">
                                                    <em class="icon ni ni-menu-alt-r"></em>
                                                </a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li>
                                                            <a href="#" class="btn btn-white btn-outline-light">
                                                                <em class="icon ni ni-download-cloud"></em>
                                                                <span>Export</span>
                                                            </a>
                                                        </li>
                                                        <li class="nk-block-tools-opt">
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-primary" data-bs-toggle="dropdown">
                                                                    <em class="icon ni ni-plus"></em>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a data-bs-toggle="modal" href="#addLead"><span>Add Lead</span></a></li>
                                                                        <li><a href="#"><span>Import Lead</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="nk-block">
                                    <div class="card card-bordered card-stretch">
                                        <div class="card-inner-group pt-3">
                                            <div class="card-inner p-0">
                                                <div class="nk-tb-list nk-tb-ulist">
                                                    <div class="nk-tb-item nk-tb-head">
                                                        <div class="nk-tb-col"><span class="sub-text">Name</span></div>
                                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Group</span></div>
                                                        <div class="nk-tb-col tb-col-sm"><span class="sub-text">Email</span></div>
                                                        <div class="nk-tb-col tb-col-xxl"><span class="sub-text">Phone</span></div>
                                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Address</span></div>
                                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Open Deal</span></div>
                                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Close Deal</span></div>
                                                        <div class="nk-tb-col"><span class="sub-text">Status</span></div>
                                                        <div class="nk-tb-col nk-tb-col-tools text-end">
                                                            <div class="dropdown">
                                                                <a href="#" class="btn btn-xs btn-outline-light btn-icon dropdown-toggle" data-bs-toggle="dropdown" data-offset="0,5">
                                                                    <em class="icon ni ni-plus"></em>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end">
                                                                    <ul class="link-tidy sm no-bdr">
                                                                        <li>
                                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" checked="" id="ph">
                                                                                <label class="custom-control-label" for="ph">Phone</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="vri">
                                                                                <label class="custom-control-label" for="vri">Verified</label>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="custom-control custom-control-sm custom-checkbox">
                                                                                <input type="checkbox" class="custom-control-input" id="st">
                                                                                <label class="custom-control-label" for="st">Status</label>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>

                                                    @foreach($data as $result)
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col">
                                                                <div class="user-card">
                                                                    <div class="user-name">
                                                                        <span class="tb-lead">{{ $result["name"] }}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-md">
                                                                <span class="badge bg-outline-success">{{ $result["group"] }}</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <span>{{ $result["email"] }}</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-xxl">
                                                                <span>{{ $result["number"] }}</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-lg">
                                                                <span>{{ $result["address"] }}</span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-lg">
                                                                <ul class="list-status">
                                                                    <li>
                                                                        <em class="icon text-dim ni ni-check-circle"></em> 
                                                                        <span>{{ $result["open_deal"] }}</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-lg">
                                                                <ul class="list-status">
                                                                    <li>
                                                                        <em class="icon text-success ni ni-check-circle"></em> 
                                                                        <span>{{ $result["close_deal"] }}</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="tb-status text-success">{{ $result["status"] }}</span>
                                                            </div>
                                                            <div class="nk-tb-col nk-tb-col-tools">
                                                                <ul class="nk-tb-actions gx-2">
                                                                    <li class="nk-tb-action-hidden">
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-bs-toggle="tooltip" data-bs-placement="top" title="Send Email">
                                                                            <em class="icon ni ni-mail-fill"></em>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <div class="drodown">
                                                                            <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle" data-bs-toggle="dropdown">
                                                                                <em class="icon ni ni-more-h"></em>
                                                                            </a>
                                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                                <ul class="link-list-opt no-bdr">
                                                                                    <li id="view_lead">
                                                                                        <a href="#" data-id="{{ $result['lead_id'] }}">
                                                                                            <em class="icon ni ni-eye"></em>
                                                                                            <span>View Details</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li id="edit_lead">
                                                                                        <a data-bs-toggle="modal" href="#editLead" data-id="{{ $result['lead_id'] }}">
                                                                                            <em class="icon ni ni-edit"></em>
                                                                                            <span>Edit</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li id="delete_lead">
                                                                                        <a data-bs-toggle="modal" href="#deleteLead" data-id="{{ $result['lead_id'] }}">
                                                                                            <em class="icon ni ni-delete"></em>
                                                                                            <span>Delete</span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                                <!-- .nk-tb-list -->
                                            </div>
                                            <div class="card-inner">
                                                {{ $data->links('pagination::bootstrap-5') }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->

                <!-- footer @s -->
                @include('inc/footer')
                <!-- footer @e -->
            </div>
        </div>
    </div>
    <!-- app-root @e -->

    <!-- Add Lead -->
    <div class="modal fade" role="dialog" id="addLead">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <form class="modal-content" id="addForm">
                @csrf
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Add Lead</h5>
                    <br>
                    <div class="alert alert-success" id="sucMsg"></div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="infomation">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="lead-name">Name</label>
                                        <div class="alert alert-danger" id="nameErr"></div>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" name="name" id="lead-name" placeholder="e.g. Abu Bin Ishtiyak">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Type</label>
                                        <div class="alert alert-danger" id="typeErr"></div>
                                        <div class="form-control-wrap">
                                            <select class="form-select js-select2" name="type" id="type" data-placeholder="Select one">
                                                <option value="">Select one</option>
                                                <option value="People">People</option>
                                                <option value="Organization">Organization</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Group</label>
                                        <div class="alert alert-danger" id="groupErr"></div>
                                        <div class="form-control-wrap">
                                            <select class="form-select js-select2" name="group" id="group" data-placeholder="Select one">
                                                <option value="">Select one</option>
                                                <option value="Customer">Customer</option>
                                                <option value="Cold Lead">Cold Lead</option>
                                                <option value="Hot Lead">Hot Lead</option>
                                                <option value="Warm Lead">Warm Lead</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="open-deal">Open Deal</label>
                                        <div class="alert alert-danger" id="openErr"></div>
                                        <input type="text" class="form-control" name="open_deal" id="open-deal" placeholder="e.g. 5">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="close-deal">Close Deal</label>
                                        <div class="alert alert-danger" id="closeErr"></div>
                                        <input type="text" class="form-control" name="close_deal" id="close-deal" placeholder="e.g. 3">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Status</label>
                                        <div class="alert alert-danger" id="statusErr"></div>
                                        <div class="form-control-wrap">
                                            <select class="form-select js-select2" name="status" id="status" data-placeholder="Select one">
                                                <option value="">Select One</option>
                                                <option value="Active">Active</option>
                                                <option value="Pending">Pending</option>
                                                <option value="Cenceled">Cenceled</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="email">Email Address</label>
                                        <div class="alert alert-danger" id="emailErr"></div>
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Phone Number</label>
                                        <div class="alert alert-danger" id="numErr"></div>
                                        <input type="text" class="form-control" name="phone_no" id="phone-no" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="lead-address">Address</label>
                                        <div class="alert alert-danger" id="addErr"></div>
                                        <input type="text" class="form-control" name="lead_address" id="lead-address" placeholder="Address">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <button type="submit" class="btn btn-primary" id="saveBtn">Add Lead</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- .modal -->

    <!-- Update Lead -->
    <div class="modal fade" role="dialog" id="editLead" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <form class="modal-content" id="updateForm">
                @csrf
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Update Lead</h5>
                    <br>
                    <div class="alert alert-success" id="sucMsg"></div>
                    <div class="tab-content">
                        <div class="tab-pane active" id="infomation">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="lead-name">Name</label>
                                        <div class="alert alert-danger" id="nameErr"></div>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" name="name" id="upName" placeholder="e.g. Abu Bin Ishtiyak">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Type</label>
                                        <div class="alert alert-danger" id="typeErr"></div>
                                        <div class="form-control-wrap">
                                            <select class="form-select js-select2" name="type" id="upType" data-placeholder="Select one">
                                                <option value="">Select one</option>
                                                <option value="People">People</option>
                                                <option value="Organization">Organization</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Group</label>
                                        <div class="alert alert-danger" id="groupErr"></div>
                                        <div class="form-control-wrap">
                                            <select class="form-select js-select2" name="group" id="upGroup" data-placeholder="Select one">
                                                <option value="">Select one</option>
                                                <option value="Customer">Customer</option>
                                                <option value="Cold Lead">Cold Lead</option>
                                                <option value="Hot Lead">Hot Lead</option>
                                                <option value="Warm Lead">Warm Lead</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="open-deal">Open Deal</label>
                                        <div class="alert alert-danger" id="openErr"></div>
                                        <input type="text" class="form-control" name="open_deal" id="upOpen" placeholder="e.g. 5">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="close-deal">Close Deal</label>
                                        <div class="alert alert-danger" id="closeErr"></div>
                                        <input type="text" class="form-control" name="close_deal" id="upClose" placeholder="e.g. 3">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Status</label>
                                        <div class="alert alert-danger" id="statusErr"></div>
                                        <div class="form-control-wrap">
                                            <select class="form-select js-select2" name="status" id="upStatus" data-placeholder="Select one">
                                                <option value="">Select One</option>
                                                <option value="Active">Active</option>
                                                <option value="Pending">Pending</option>
                                                <option value="Cenceled">Cenceled</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="email">Email Address</label>
                                        <div class="alert alert-danger" id="emailErr"></div>
                                        <input type="email" class="form-control" name="email" id="upEmail" placeholder="Email Address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone-no">Phone Number</label>
                                        <div class="alert alert-danger" id="numErr"></div>
                                        <input type="text" class="form-control" name="phone_no" id="upPhone" placeholder="Phone Number">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="lead-address">Address</label>
                                        <div class="alert alert-danger" id="addErr"></div>
                                        <input type="text" class="form-control" name="lead_address" id="upAddress" placeholder="Address">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <button type="submit" class="btn btn-primary" id="upBtn">Add Lead</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- .modal -->

    <!-- Lead Delete -->
    <div class="modal fade" id="deleteLead">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross"></em></a>
                <div class="modal-body modal-body-sm text-center">
                    <div class="nk-modal py-4">
                        <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-cross bg-danger"></em>
                        <h4 class="nk-modal-title">Are You Sure ?</h4>
                        <div class="nk-modal-text mt-n2">
                            <p class="text-soft">This Lead data will be delete permanently.</p>
                        </div>
                        <ul class="d-flex justify-content-center gx-4 mt-4">
                            <li>
                                <button data-bs-dismiss="modal" id="deleteOrg" class="btn btn-success">Yes, Delete it</button>
                            </li>
                            <li>
                                <button data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#editEventPopup" class="btn btn-danger btn-dim">Cancel</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .modal -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="{{ asset('assets/js/bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>

    <script>
        $(function() {
            $("#sucMsg").fadeOut();
            $(".alert").fadeOut();

            /* show single lead lead */
            $("#edit_lead a").on('click', function(e) {
                let id = $(this).attr('data-id');
                
                $.ajax({
                    url: "{{ url('people-lead-update') }}"+'/'+id,
                    method: 'get',
                    data: {id: id},
                    processData: false,
                    dataType: 'json',
                    contentType: false,
                    success: function(data) {
                        $("#upName").val(data.data[0].name);
                        $("#upType").val(data.data[0].type);
                        $("#upGroup").val(data.data[0].group);
                        $("#upOpen").val(data.data[0].open_deal);
                        $("#upClose").val(data.data[0].close_deal);
                        $("#upStatus").val(data.data[0].status);
                        $("#upEmail").val(data.data[0].email);
                        $("#upPhone").val(data.data[0].number);
                        $("#upAddress").val(data.data[0].address);
                        $("#leadID").val(data.data[0].id);
                    }
                });
            });
            
            /* add new lead */
            $("#addForm").on('submit', function(e) {
                e.preventDefault();

                $("#saveBtn").text('Adding');
                $('#saveBtn').prop('disabled', true)

                $.ajax({
                    url: "{{ url('people-lead-add') }}",
                    method: 'post',
                    data: new FormData(this),
                    processData: false,
                    dataType: 'json',
                    contentType: false,
                    success: function(data) {
                        $("#saveBtn").text('Add Lead');
                        $('#saveBtn').prop('disabled', false)

                        if (data.status == 0) {  
                            if (data.error.hasOwnProperty("name")){
                                $("#nameErr").text(data.error.name).fadeIn();
                            }else{
                                $("#nameErr").text(data.error.name).fadeOut();
                            }

                            if (data.error.hasOwnProperty("email")){
                                $("#emailErr").text(data.error.email).fadeIn();
                            }else{
                                $("#emailErr").text(data.error.email).fadeOut();
                            }

                            if (data.error.hasOwnProperty("group")){
                                $("#groupErr").text(data.error.group).fadeIn();
                            }else{
                                $("#groupErr").text(data.error.group).fadeOut();
                            }

                            if (data.error.hasOwnProperty("close_deal")){
                                $("#closeErr").text(data.error.close_deal).fadeIn();
                            }else{
                                $("#closeErr").text(data.error.close_deal).fadeOut();
                            }

                            if (data.error.hasOwnProperty("lead_address")){
                                $("#addErr").text(data.error.lead_address).fadeIn();
                            }else{
                                $("#addErr").text(data.error.lead_address).fadeOut();
                            }
                            
                            if (data.error.hasOwnProperty("open_deal")){
                                $("#openErr").text(data.error.open_deal).fadeIn();
                            }else{
                                $("#openErr").text(data.error.open_deal).fadeOut();
                            } 

                            if (data.error.hasOwnProperty("phone_no")){
                                $("#numErr").text(data.error.phone_no).fadeIn();
                            }else{
                                $("#numErr").text(data.error.phone_no).fadeOut();
                            }

                            if (data.error.hasOwnProperty("status")){
                                $("#statusErr").text(data.error.status).fadeIn();
                            }else{
                                $("#statusErr").text(data.error.status).fadeOut();
                            }

                            if (data.error.hasOwnProperty("type")){
                                $("#typeErr").text(data.error.type).fadeIn();
                            }else{
                                $("#typeErr").text(data.error.type).fadeOut();
                            }
                        }else{
                            $(".alert").fadeOut();
                        }

                        if (data.status == 1) {
                            $("#sucMsg").text(data.success).fadeIn();
                            $("#addForm")[0].reset();
                        }else{
                            $("#sucMsg").fadeOut();
                        }
                    }
                });
            });

            /* update new lead */
            $("#updateForm").on('submit', function(e) {
                e.preventDefault();

                $("#upBtn").text('Updating');
                $('#upBtn').prop('disabled', true)

                $.ajax({
                    url: "{{ url('people-lead-update') }}",
                    method: 'post',
                    data: new FormData(this),
                    processData: false,
                    dataType: 'json',
                    contentType: false,
                    success: function(data) {
                        $("#upBtn").text('Update Lead');
                        $('#upBtn').prop('disabled', false)

                        if (data.status == 0) {  
                            if (data.error.hasOwnProperty("name")){
                                $("#up-nameErr").text(data.error.name).fadeIn();
                            }else{
                                $("#up-nameErr").text(data.error.name).fadeOut();
                            }

                            if (data.error.hasOwnProperty("email")){
                                $("#up-emailErr").text(data.error.email).fadeIn();
                            }else{
                                $("#up-emailErr").text(data.error.email).fadeOut();
                            }

                            if (data.error.hasOwnProperty("group")){
                                $("#up-groupErr").text(data.error.group).fadeIn();
                            }else{
                                $("#up-groupErr").text(data.error.group).fadeOut();
                            }

                            if (data.error.hasOwnProperty("close_deal")){
                                $("#up-closeErr").text(data.error.close_deal).fadeIn();
                            }else{
                                $("#up-closeErr").text(data.error.close_deal).fadeOut();
                            }

                            if (data.error.hasOwnProperty("lead_address")){
                                $("#up-addErr").text(data.error.lead_address).fadeIn();
                            }else{
                                $("#up-addErr").text(data.error.lead_address).fadeOut();
                            }
                            
                            if (data.error.hasOwnProperty("open_deal")){
                                $("#up-openErr").text(data.error.open_deal).fadeIn();
                            }else{
                                $("#up-openErr").text(data.error.open_deal).fadeOut();
                            } 

                            if (data.error.hasOwnProperty("phone_no")){
                                $("#up-numErr").text(data.error.phone_no).fadeIn();
                            }else{
                                $("#up-numErr").text(data.error.phone_no).fadeOut();
                            }

                            if (data.error.hasOwnProperty("status")){
                                $("#up-statusErr").text(data.error.status).fadeIn();
                            }else{
                                $("#up-statusErr").text(data.error.status).fadeOut();
                            }

                            if (data.error.hasOwnProperty("type")){
                                $("#up-typeErr").text(data.error.type).fadeIn();
                            }else{
                                $("#up-typeErr").text(data.error.type).fadeOut();
                            }
                        }else{
                            $(".alert").fadeOut();
                        }

                        if (data.status == 1) {
                            $("#up-sucMsg").text(data.success).fadeIn();
                        }else{
                            $("#up-sucMsg").fadeOut();
                        }
                    }
                });
            });
        });
    </script>

</body>

</html>