<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>CRM | Organizations Lead | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="./assets/css/dashlite.css?ver=3.1.1">
    <link id="skin-default" rel="stylesheet" href="./assets/css/theme.css?ver=3.1.1">
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
                                            <h3 class="nk-block-title page-title">Organizations Lead Lists</h3>
                                            <div class="nk-block-des text-soft">
                                                <p>You have total 2,595 Lead.</p>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li><a href="#" class="btn btn-white btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Export</span></a></li>
                                                        <li class="nk-block-tools-opt">
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-primary" data-bs-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                                                <div class="dropdown-menu dropdown-menu-end">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a data-bs-toggle="modal" href="#addLead"><span>Add Orgranigation</span></a></li>
                                                                        <li><a href="#"><span>Import Lead</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div><!-- .toggle-wrap -->
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="card card-bordered card-stretch">
                                        <div class="card-inner-group">
                                            <div class="card-inner position-relative card-tools-toggle">
                                                <div class="card-title-group">
                                                    <div class="card-tools">
                                                        <div class="form-inline flex-nowrap gx-3">
                                                            <div class="form-wrap w-150px">
                                                                <select class="form-select js-select2 js-select2-sm" data-search="off" data-placeholder="Bulk Action">
                                                                    <option value="">Bulk Action</option>
                                                                    <option value="email">Send Email</option>
                                                                    <option value="group">Change Group</option>
                                                                    <option value="suspend">Suspend lead</option>
                                                                    <option value="delete">Delete Lead</option>
                                                                </select>
                                                            </div>
                                                            <div class="btn-wrap">
                                                                <span class="d-none d-md-block"><button class="btn btn-dim btn-outline-light disabled">Apply</button></span>
                                                                <span class="d-md-none"><button class="btn btn-dim btn-outline-light btn-icon disabled"><em class="icon ni ni-arrow-right"></em></button></span>
                                                            </div>
                                                        </div><!-- .form-inline -->
                                                    </div><!-- .card-tools -->
                                                    <div class="card-tools me-n1">
                                                        <ul class="btn-toolbar gx-1">
                                                            <li>
                                                                <a href="#" class="btn btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a>
                                                            </li><!-- li -->
                                                            <li class="btn-toolbar-sep"></li><!-- li -->
                                                            <li>
                                                                <div class="toggle-wrap">
                                                                    <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-menu-right"></em></a>
                                                                    <div class="toggle-content" data-content="cardTools">
                                                                        <ul class="btn-toolbar gx-1">
                                                                            <li class="toggle-close">
                                                                                <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-arrow-left"></em></a>
                                                                            </li><!-- li -->
                                                                            <li>
                                                                                <div class="dropdown">
                                                                                    <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                                                                                        <div class="dot dot-primary"></div>
                                                                                        <em class="icon ni ni-filter-alt"></em>
                                                                                    </a>
                                                                                    <div class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                                                                        <div class="dropdown-head">
                                                                                            <span class="sub-title dropdown-title">Filter Users</span>
                                                                                            <div class="dropdown">
                                                                                                <a href="#" class="btn btn-sm btn-icon">
                                                                                                    <em class="icon ni ni-more-h"></em>
                                                                                                </a>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="dropdown-body dropdown-body-rg">
                                                                                            <div class="row gx-6 gy-3">
                                                                                                <div class="col-6">
                                                                                                    <div class="form-group">
                                                                                                        <label class="overline-title overline-title-alt">Group</label>
                                                                                                        <select class="form-select js-select2 js-select2-sm">
                                                                                                            <option value="any">Any Group</option>
                                                                                                            <option value="hot">Hot</option>
                                                                                                            <option value="warm">Warm</option>
                                                                                                            <option value="cold">Cold</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-6">
                                                                                                    <div class="form-group">
                                                                                                        <label class="overline-title overline-title-alt">Status</label>
                                                                                                        <select class="form-select js-select2 js-select2-sm">
                                                                                                            <option value="any">Any Status</option>
                                                                                                            <option value="active">Active</option>
                                                                                                            <option value="pending">Pending</option>
                                                                                                            <option value="suspend">Suspend</option>
                                                                                                            <option value="deleted">Deleted</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-12">
                                                                                                    <div class="form-group">
                                                                                                        <button type="button" class="btn btn-secondary">Filter</button>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="dropdown-foot between">
                                                                                            <a class="clickable" href="#">Reset Filter</a>
                                                                                            <a href="#">Save Filter</a>
                                                                                        </div>
                                                                                    </div><!-- .filter-wg -->
                                                                                </div><!-- .dropdown -->
                                                                            </li><!-- li -->
                                                                            <li>
                                                                                <div class="dropdown">
                                                                                    <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                                                                                        <em class="icon ni ni-setting"></em>
                                                                                    </a>
                                                                                    <div class="dropdown-menu dropdown-menu-xs dropdown-menu-end">
                                                                                        <ul class="link-check">
                                                                                            <li><span>Show</span></li>
                                                                                            <li class="active"><a href="#">10</a></li>
                                                                                            <li><a href="#">20</a></li>
                                                                                            <li><a href="#">50</a></li>
                                                                                        </ul>
                                                                                        <ul class="link-check">
                                                                                            <li><span>Order</span></li>
                                                                                            <li class="active"><a href="#">DESC</a></li>
                                                                                            <li><a href="#">ASC</a></li>
                                                                                        </ul>
                                                                                    </div>
                                                                                </div><!-- .dropdown -->
                                                                            </li><!-- li -->
                                                                        </ul><!-- .btn-toolbar -->
                                                                    </div><!-- .toggle-content -->
                                                                </div><!-- .toggle-wrap -->
                                                            </li><!-- li -->
                                                        </ul><!-- .btn-toolbar -->
                                                    </div><!-- .card-tools -->
                                                </div><!-- .card-title-group -->
                                                <div class="card-search search-wrap" data-search="search">
                                                    <div class="card-body">
                                                        <div class="search-content">
                                                            <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                                            <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by user or email">
                                                            <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                                        </div>
                                                    </div>
                                                </div><!-- .card-search -->
                                            </div><!-- .card-inner -->
                                            <div class="card-inner p-0">
                                                <div class="nk-tb-list nk-tb-ulist is-compact">
                                                    <div class="nk-tb-item nk-tb-head">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid">
                                                                <label class="custom-control-label" for="uid"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col"><span class="sub-text">Name</span></div>
                                                        <div class="nk-tb-col tb-col-md"><span class="sub-text">Group</span></div>
                                                        <div class="nk-tb-col tb-col-sm"><span class="sub-text">Contact</span></div>
                                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Address</span></div>
                                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Open Deal</span></div>
                                                        <div class="nk-tb-col tb-col-lg"><span class="sub-text">Close Deal</span></div>
                                                        <div class="nk-tb-col"><span class="sub-text">Status</span></div>
                                                        <div class="nk-tb-col nk-tb-col-tools text-end">
                                                            <div class="dropdown">
                                                                <a href="#" class="btn btn-xs btn-outline-light btn-icon dropdown-toggle" data-bs-toggle="dropdown" data-offset="0,5"><em class="icon ni ni-plus"></em></a>
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
                                                    <!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid1">
                                                                <label class="custom-control-label" for="uid1"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar sm bg-success-dim">
                                                                    <img src="./images/crm/brand/b.png" alt="image">
                                                                </div>
                                                                <div class="user-name">
                                                                    <span class="tb-lead">HBO MAX</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="badge bg-outline-success">Customer</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <span class="tb-lead">HR</span>
                                                            <span class="sub-text">info@softnio.com</span>
                                                            <span class="sub-text">+811 847-4958</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>New York, United States</span>
                                                            <span class="sub-text">Main branch</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-dim ni ni-check-circle"></em> <span>2</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-success ni ni-check-circle"></em> <span>3</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-status text-success">Active</span>
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
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                <li><a data-bs-toggle="modal" href="#editOrgLead"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a data-bs-toggle="modal" href="#deleteLead"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    
                                                    <!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid2">
                                                                <label class="custom-control-label" for="uid2"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar sm bg-light">
                                                                    <div class="user-avatar sm bg-success-dim">
                                                                        <span>WT</span>
                                                                    </div>
                                                                </div>
                                                                <div class="user-name">
                                                                    <span class="tb-lead">WB Time</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="badge bg-outline-gray">Cold Lead</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <span class="tb-lead">Manager</span>
                                                            <span class="sub-text">patrick@example.com</span>
                                                            <span class="sub-text">+942 238-4474</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>United States</span>
                                                            <span class="sub-text">Branch-1</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-dim ni ni-check-circle"></em> <span>1</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-success ni ni-check-circle"></em> <span>0</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-status text-warning">Pending</span>
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
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                <li><a data-bs-toggle="modal" href="#editOrgLead"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a data-bs-toggle="modal" href="#deleteLead"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid3">
                                                                <label class="custom-control-label" for="uid3"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar sm bg-lighter">
                                                                    <span>DC</span>
                                                                </div>
                                                                <div class="user-name">
                                                                    <span class="tb-lead">Detective Comics</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="badge bg-outline-danger">Hot Lead</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <span class="tb-lead">Junior Executive</span>
                                                            <span class="sub-text">howard@example.com</span>
                                                            <span class="sub-text">+447 595-6725</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>England</span>
                                                            <span class="sub-text">Branch-2</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-dim ni ni-check-circle"></em> <span>1</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-success ni ni-check-circle"></em> <span>1</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-status text-success">Active</span>
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
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                <li><a data-bs-toggle="modal" href="#editOrgLead"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a data-bs-toggle="modal" href="#deleteLead"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid4">
                                                                <label class="custom-control-label" for="uid4"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar sm bg-lighter">
                                                                    <img src="./images/crm/brand/b.png" alt="image">
                                                                </div>
                                                                <div class="user-name">
                                                                    <span class="tb-lead">Apple</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="badge bg-outline-success">Customer</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <span class="tb-lead">Senior Executive</span>
                                                            <span class="sub-text">howard@example.com</span>
                                                            <span class="sub-text">+408 595-6725</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>United States</span>
                                                            <span class="sub-text">Main branch</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-dim ni ni-check-circle"></em> <span>1</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-success ni ni-check-circle"></em> <span>1</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-status text-success">Active</span>
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
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                <li><a data-bs-toggle="modal" href="#editOrgLead"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a data-bs-toggle="modal" href="#deleteLead"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid5">
                                                                <label class="custom-control-label" for="uid5"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar sm bg-lighter">
                                                                    <span>A</span>
                                                                </div>
                                                                <div class="user-name">
                                                                    <span class="tb-lead">Amazon</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="badge bg-outline-primary">Warm Lead</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <span class="tb-lead">HR</span>
                                                            <span class="sub-text">brian@example.com</span>
                                                            <span class="sub-text">+811 521-6695</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>Bangladesh</span>
                                                            <span class="sub-text">Branch-1</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-dim ni ni-check-circle"></em> <span>1</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-success ni ni-check-circle"></em> <span>1</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-status text-success">Active</span>
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
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                <li><a data-bs-toggle="modal" href="#editOrgLead"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a data-bs-toggle="modal" href="#deleteLead"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid6">
                                                                <label class="custom-control-label" for="uid6"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar sm bg-light">
                                                                    <img src="./images/crm/brand/a.png" alt="image">
                                                                </div>
                                                                <div class="user-name">
                                                                    <span class="tb-lead">Google</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="badge bg-outline-gray">Cold Lead</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <span class="tb-lead">Junior Executive</span>
                                                            <span class="sub-text">howard@example.com</span>
                                                            <span class="sub-text">+447 595-6725</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>England</span>
                                                            <span class="sub-text">Branch-1</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-dim ni ni-check-circle"></em> <span>0</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-dim ni ni-check-circle"></em> <span>0</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-status text-danger">Canceld</span>
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
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                <li><a data-bs-toggle="modal" href="#editOrgLead"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a data-bs-toggle="modal" href="#deleteLead"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid7">
                                                                <label class="custom-control-label" for="uid7"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar sm bg-lighter">
                                                                    <span>MC</span>
                                                                </div>
                                                                <div class="user-name">
                                                                    <span class="tb-lead">Marvel Comics</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="badge bg-outline-primary">Warm Lead</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <span class="tb-lead">Manager</span>
                                                            <span class="sub-text">patrick@example.com</span>
                                                            <span class="sub-text">+942 238-4474</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>United States</span>
                                                            <span class="sub-text">Main branch</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-dim ni ni-check-circle"></em> <span>1</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-success ni ni-check-circle"></em> <span>0</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-status text-warning">Pending</span>
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
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                <li><a data-bs-toggle="modal" href="#editOrgLead"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a data-bs-toggle="modal" href="#deleteLead"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid8">
                                                                <label class="custom-control-label" for="uid8"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar sm bg-light">
                                                                    <span>F</span>
                                                                </div>
                                                                <div class="user-name">
                                                                    <span class="tb-lead">FOX</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="badge bg-outline-success">Customer</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <span class="tb-lead">HR</span>
                                                            <span class="sub-text">fox@example.com</span>
                                                            <span class="sub-text">+811 132-6695</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>New York, United States</span>
                                                            <span class="sub-text">Branch-2</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-dim ni ni-check-circle"></em> <span>0</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-success ni ni-check-circle"></em> <span>3</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-status text-success">Active</span>
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
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                <li><a data-bs-toggle="modal" href="#editOrgLead"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a data-bs-toggle="modal" href="#deleteLead"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid9">
                                                                <label class="custom-control-label" for="uid9"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar sm bg-lighter">
                                                                    <img src="./images/crm/brand/b.png" alt="image">
                                                                </div>
                                                                <div class="user-name">
                                                                    <span class="tb-lead">New York Times</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="badge bg-outline-danger">Hot Lead</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <span class="tb-lead">Manager</span>
                                                            <span class="sub-text">nyt@example.com</span>
                                                            <span class="sub-text">+811 963-6695</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>United States</span>
                                                            <span class="sub-text">Branch-3</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-dim ni ni-check-circle"></em> <span>1</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-success ni ni-check-circle"></em> <span>4</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-status text-success">Active</span>
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
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                <li><a data-bs-toggle="modal" href="#editOrgLead"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a data-bs-toggle="modal" href="#deleteLead"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid10">
                                                                <label class="custom-control-label" for="uid10"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar sm bg-lighter">
                                                                    <img src="./images/crm/brand/a.png" alt="image">
                                                                </div>
                                                                <div class="user-name">
                                                                    <span class="tb-lead">Times</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="badge bg-outline-success">Customer</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <span class="tb-lead">Senior Executive</span>
                                                            <span class="sub-text">xyz@example.com</span>
                                                            <span class="sub-text">+811 156-9875</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>Canada</span>
                                                            <span class="sub-text">Main branch</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-dim ni ni-check-circle"></em> <span>1</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-success ni ni-check-circle"></em> <span>2</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-status text-success">Active</span>
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
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                <li><a data-bs-toggle="modal" href="#editOrgLead"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a data-bs-toggle="modal" href="#deleteLead"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                    <div class="nk-tb-item">
                                                        <div class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                <input type="checkbox" class="custom-control-input" id="uid11">
                                                                <label class="custom-control-label" for="uid11"></label>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <div class="user-card">
                                                                <div class="user-avatar sm bg-success-dim">
                                                                    <span>D</span>
                                                                </div>
                                                                <div class="user-name">
                                                                    <span class="tb-lead">Disney</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-md">
                                                            <span class="badge bg-outline-gray">Cold Lead</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-sm">
                                                            <span class="tb-lead">Senior Executive</span>
                                                            <span class="sub-text">Disney@example.com</span>
                                                            <span class="sub-text">+811 156-9875</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <span>Canada</span>
                                                            <span class="sub-text">Branch-3</span>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-dim ni ni-check-circle"></em> <span>2</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col tb-col-lg">
                                                            <ul class="list-status">
                                                                <li><em class="icon text-success ni ni-check-circle"></em> <span>1</span></li>
                                                            </ul>
                                                        </div>
                                                        <div class="nk-tb-col">
                                                            <span class="tb-status text-warning">Pending</span>
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
                                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                <li><a data-bs-toggle="modal" href="#editOrgLead"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a data-bs-toggle="modal" href="#deleteLead"><em class="icon ni ni-delete"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .nk-tb-item -->
                                                </div><!-- .nk-tb-list -->
                                            </div><!-- .card-inner -->
                                            <div class="card-inner">
                                                <ul class="pagination justify-content-center justify-content-md-start">
                                                    <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                                                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                </ul><!-- .pagination -->
                                            </div><!-- .card-inner -->
                                        </div><!-- .card-inner-group -->
                                    </div><!-- .card -->
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->

                <!-- footer @s -->
                <div class="nk-footer">
                    <div class="container-fluid">
                        <div class="nk-footer-wrap">
                            <div class="nk-footer-copyright"> &copy; 2022 DashLite. Template by <a href="https://softnio.com" target="_blank">Softnio</a>
                            </div>
                            <div class="nk-footer-links">
                                <ul class="nav nav-sm">
                                    <li class="nav-item dropup">
                                        <a href="#" class="dropdown-toggle dropdown-indicator has-indicator nav-link" data-bs-toggle="dropdown" data-offset="0,10"><span>English</span></a>
                                        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                            <ul class="language-list">
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <span class="language-name">English</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <span class="language-name">Español</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <span class="language-name">Français</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="language-item">
                                                        <span class="language-name">Türkçe</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a data-bs-toggle="modal" href="#region" class="nav-link"><em class="icon ni ni-globe"></em><span class="ms-1">Select Region</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->

    <!-- select region modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="region">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title mb-4">Select Your Country</h5>
                    <div class="nk-country-region">
                        <ul class="country-list text-center gy-2">
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/arg.png" alt="" class="country-flag">
                                    <span class="country-name">Argentina</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/aus.png" alt="" class="country-flag">
                                    <span class="country-name">Australia</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/bangladesh.png" alt="" class="country-flag">
                                    <span class="country-name">Bangladesh</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/canada.png" alt="" class="country-flag">
                                    <span class="country-name">Canada <small>(English)</small></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">Centrafricaine</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/china.png" alt="" class="country-flag">
                                    <span class="country-name">China</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/french.png" alt="" class="country-flag">
                                    <span class="country-name">France</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/germany.png" alt="" class="country-flag">
                                    <span class="country-name">Germany</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/iran.png" alt="" class="country-flag">
                                    <span class="country-name">Iran</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/italy.png" alt="" class="country-flag">
                                    <span class="country-name">Italy</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/mexico.png" alt="" class="country-flag">
                                    <span class="country-name">México</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/philipine.png" alt="" class="country-flag">
                                    <span class="country-name">Philippines</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/portugal.png" alt="" class="country-flag">
                                    <span class="country-name">Portugal</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/s-africa.png" alt="" class="country-flag">
                                    <span class="country-name">South Africa</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/spanish.png" alt="" class="country-flag">
                                    <span class="country-name">Spain</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/switzerland.png" alt="" class="country-flag">
                                    <span class="country-name">Switzerland</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/uk.png" alt="" class="country-flag">
                                    <span class="country-name">United Kingdom</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="country-item">
                                    <img src="./images/flags/english.png" alt="" class="country-flag">
                                    <span class="country-name">United State</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div>
    <!-- .modal -->

    <!-- @@ Lead Add Modal @e -->
    <div class="modal fade" role="dialog" id="addLead">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <form class="modal-content" id="main_form">
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
                                                <option value="lead_people">People</option>
                                                <option value="lead_organization">Organization</option>
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
                                                <option value="customer">Customer</option>
                                                <option value="cold_lead">Cold lead</option>
                                                <option value="hot_lead">Hot Lead</option>
                                                <option value="warm_lead">Warm Lead</option>
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
                                                <option value="active">Active</option>
                                                <option value="pending">Pending</option>
                                                <option value="cenceled">Cenceled</option>
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

    <!-- @@ Lead Edit Modal @e -->
    <div class="modal fade" role="dialog" id="editLead" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Edit Lead</h5>
                    <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#editInfomation">Lead Detail's</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#editAddress">Contact Detail's</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="editInfomation">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="edit-name">Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="edit-name" placeholder="Name" value="Abu Bin Ishtiyak">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Type</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select js-select2">
                                                <option value="default_option">People</option>
                                                <option value="cold_lead">Organization</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Group</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select js-select2">
                                                <option value="default_option">Customer</option>
                                                <option value="cold_lead">Cold lead</option>
                                                <option value="hot_lead">Hot Lead</option>
                                                <option value="warm_lead">Warm Lead</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="edit-open-deal">Open Deal</label>
                                        <input type="text" class="form-control" id="edit-open-deal" placeholder="Open Deal" value="2">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="edit-close-deal">Close Deal</label>
                                        <input type="text" class="form-control" id="edit-close-deal" placeholder="Close Deal" value="3">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Status</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select js-select2">
                                                <option value="default_option">Active</option>
                                                <option value="pending">Pending</option>
                                                <option value="cenceled">Cenceled</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <a href="#" data-bs-dismiss="modal" class="btn btn-primary">Update lead</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .tab-pane -->
                        <div class="tab-pane" id="editAddress">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="edit-email">Email Address</label>
                                        <input type="email" class="form-control" id="edit-email" placeholder="Email Address" value="info@softnio.com">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="edit-phone-no">Phone Number</label>
                                        <input type="text" class="form-control" id="edit-phone-no" placeholder="Phone Number" value="+811 847-4958">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="edit-lead-address">Address</label>
                                        <input type="text" class="form-control" id="lead-address" placeholder="Address" value="Mirpur, Dhaka, Bangladesh.">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <a href="#" data-bs-dismiss="modal" class="btn btn-primary">Update Lead</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .tab-pane -->
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- .modal -->

    <!-- @@ organization lead Edit Modal @e -->
    <div class="modal fade" role="dialog" id="editOrgLead">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-bs-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">
                    <h5 class="title">Edit organization lead info</h5>
                    <ul class="nk-nav nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#editOrgInfo">Lead Detail's</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#editOrgAddress">Contact Detail's</a>
                        </li>
                    </ul><!-- .nav-tabs -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="editOrgInfo">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="edit-name">Name</label>
                                        <div class="form-control-wrap">
                                            <input type="text" class="form-control" id="edit-name" placeholder="Name" value="Softnio">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Group</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select js-select2">
                                                <option value="default_option">Customer</option>
                                                <option value="cold_lead">Cold lead</option>
                                                <option value="hot_lead">Hot Lead</option>
                                                <option value="warm_lead">Warm Lead</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="edit-open-deal">Open Deal</label>
                                        <input type="text" class="form-control" id="edit-open-deal" placeholder="Open Deal" value="2">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="edit-close-deal">Close Deal</label>
                                        <input type="text" class="form-control" id="edit-close-deal" placeholder="Close Deal" value="3">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="edit-close-deal">Branch</label>
                                        <input type="text" class="form-control" id="edit-close-deal" placeholder="Close Deal" value="Main Branch">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label">Status</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select js-select2">
                                                <option value="default_option">Active</option>
                                                <option value="pending">Pending</option>
                                                <option value="cenceled">Cenceled</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <a href="#" data-bs-dismiss="modal" class="btn btn-primary">Update Organigation</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .tab-pane -->
                        <div class="tab-pane" id="editOrgAddress">
                            <div class="row gy-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="status">Designation</label>
                                        <div class="form-control-wrap">
                                            <select class="form-select js-select2" id="status">
                                                <option value="default_option">HR</option>
                                                <option value="pending">Admin</option>
                                                <option value="cenceled">Manager</option>
                                                <option value="cenceled">Junior Executive</option>
                                                <option value="cenceled">Senior Executive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="edit-email">Email Address</label>
                                        <input type="email" class="form-control" id="edit-email" placeholder="Email Address" value="info@softnio.com">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="edit-phone-no">Phone Number</label>
                                        <input type="text" class="form-control" id="edit-phone-no" placeholder="Phone Number" value="+811 847-4958">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="edit-lead-address">Address</label>
                                        <input type="text" class="form-control" id="lead-address" placeholder="Address" value="Mirpur, Dhaka, Bangladesh.">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                            <a href="#" data-bs-dismiss="modal" class="btn btn-primary">Add Lead</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .tab-pane -->
                    </div><!-- .tab-content -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div>
    <!-- .modal -->

    <!-- @@ organization lead Delete Modal @e -->
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
    <script src="./assets/js/bundle.js?ver=3.1.1"></script>
    <script src="./assets/js/scripts.js?ver=3.1.1"></script>

    
    <script>
        $(function() {
            $("#sucMsg").fadeOut();
            $(".alert").fadeOut();
            
            $("#main_form").on('submit', function(e) {
                e.preventDefault();

                $("#saveBtn").text('Adding');
                $('#saveBtn').prop('disabled', true)

                $.ajax({
                    url: "{{ url('add-lead') }}",
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
                            
                            $("#main_form")[0].reset();
                        }else{
                            $("#sucMsg").fadeOut();
                        }
                    }
                });
            });
        });
    </script>
</body>

</html>