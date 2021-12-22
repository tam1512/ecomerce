<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
include('./lib/session.php');
include_once('./controllers/categoryController.php');
include_once('./controllers/productController.php');
include_once('./controllers/genreController.php');
include_once('./controllers/orderController.php');
include_once('./controllers/userController.php');
include_once('./controllers/commentController.php');
include_once('./controllers/reckonController.php');
Session::checkSession();
if (isset($_GET['tab']) && $_GET['tab'] == 'logout') {
    Session::destroy();
}

$categoryController = new categoryController();
$categories = $categoryController->index();

$genreController = new genreController();
$genres = $genreController->index();

$productController = new productController();

$commentController = new commentController();
$comments = $commentController->index();
$comments_approved = $commentController->approved();

$orderController = new orderController();
$orders = $orderController->index();
$approved = $orderController->approved();

$userController = new userController();
$users = $userController->index();
$users_locked = $userController->locked();

$reckonController = new reckonController();
$reckon = $reckonController->index();


if (isset($_POST['create_cate_name'])) {
    $createCategory = $categoryController->store($_POST['create_cate_name']);
}

if (isset($_POST['update_cate_name']) && isset($_POST['update_cate_id'])) {
    $updateCategory = $categoryController->update($_POST['update_cate_name'], $_POST['update_cate_id']);
}


if (isset($_POST['create_size_name']) && isset($_POST['create_cate_id'])) {
    $createSizeCategory = $categoryController->storeSize($_POST['create_size_name'], $_POST['create_cate_id']);
}

if (isset($_POST['create_genre_name']) && isset($_POST['create_cate_id'])) {
    $createGenre = $genreController->store($_POST['create_genre_name'], $_POST['create_cate_id']);
}

if (isset($_POST['update_genre_name']) && isset($_POST['update_genre_id']) && isset($_POST['update_cate_id'])) {
    $updateGenre = $genreController->update($_POST['update_genre_name'], $_POST['update_genre_id'], $_POST['update_cate_id']);
}

//ajax delete
if (isset($_POST['cd_id'])) {
    $deleteCategory = $categoryController->destroy($_POST['cd_id']);
    echo $deleteCategory;
    exit();
}

if (isset($_POST['gd_id'])) {
    $deleteGenre = $genreController->destroy($_POST['gd_id']);
    echo $deleteGenre;
    exit();
}

if (isset($_POST['od_id'])) {
    $deleteOrder = $orderController->destroy($_POST['od_id']);
    echo $deleteOrder;
    exit();
}

if (isset($_POST['commentd_id'])) {
    $deleteComment = $commentController->destroy($_POST['commentd_id']);
    echo $deleteComment;
    exit();
}

//ajax allow order
if (isset($_POST['allow_id'])) {
    $allowOrder = $orderController->allow($_POST['allow_id']);
    exit();
}

//ajax allow comment
if (isset($_POST['comment_allow_id'])) {
    $allowComment = $commentController->allow($_POST['comment_allow_id']);
    echo $allowComment;
    exit();
}


//ajax lock and unlock user
if (isset($_POST['lock_id'])) {
    $lockUser = $userController->lockUser($_POST['lock_id']);
    echo $lockUser;
    exit();
}

if (isset($_POST['unlock_id'])) {
    $unlockUser = $userController->unlockUser($_POST['unlock_id']);
    echo $unlockUser;
    exit();
}

// if (isset($_POST['month'])) {
//     $reckon = $reckonController->show($_POST['month']);
//     echo $reckon;
//     exit();
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Location" content="index.php">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title> Admin | E-Commerce - Group 12 </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <link href="assets/css/loader.css" rel="stylesheet" type="text/css" />
    <script src="assets/js/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="public/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="public/assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="public/plugins/animate/animate.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <link href="public/assets/css/components/custom-modal.css" rel="stylesheet" type="text/css" />

    <!-- BEGIN PAGE LEVEL STYLES -->
    <!-- <link rel="stylesheet" type="text/css" href="public/plugins/table/datatable/datatables.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="public/plugins/table/datatable/custom_dt_miscellaneous.css"> -->
    <!-- <link rel="stylesheet" type="text/css" href="public/assets/css/forms/theme-checkbox-radio.css"> -->
    <link rel="stylesheet" type="text/css" href="public/plugins/table/datatable/dt-global_style.css">
    <!-- END PAGE LEVEL STYLES -->
    <!-- BEGIN PAGE LEVEL CUSTOM STYLES -->
    <link rel="stylesheet" type="text/css" href="public/plugins/table/datatable/custom_dt_html5.css">
    <!-- END PAGE LEVEL CUSTOM STYLES -->
</head>
<style>
    .table-controls {
        list-style: none;
        padding-left: 0;
        margin-bottom: 0;
    }

    .table-controls>li {
        display: inline;
    }

    .table-controls>li>a svg {
        width: 28px;
    }

    .order-click {
        text-decoration: underline;
        padding-top: 2px;
        padding-bottom: 2px;
    }

    .order-click:hover {
        color: blue;
        text-decoration: underline;
    }
</style>

<body>
    <!-- BEGIN LOADER -->
    <?php include('./layouts/loader.php') ?>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <?php include('./layouts/navbar.php') ?>
    <!--  END NAVBAR  -->

    <!--  BEGIN NAVBAR  -->
    <?php include('./layouts/subnav.php') ?>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <?php include('./layouts/sidebar.php') ?>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <?php
            if (isset($_GET['tab'])) {
                $tab = $_GET['tab'];
                switch ($tab) {
                    case 'categories':
                        include('./tab/category/index.php');
                        break;
                    case 'create_category':
                        include('./tab/category/create.php');
                        break;
                    case 'edit_category':
                        include('./tab/category/edit.php');
                        break;
                    case 'create_size_category':
                        include('./tab/category/create_size.php');
                        break;
                    case 'edit_size_category':
                        include('./tab/category/edit_size.php');
                        break;
                    case 'genres':
                        include('./tab/genre/index.php');
                        break;
                    case 'create_genre':
                        include('./tab/genre/create.php');
                        break;
                    case 'edit_genre':
                        include('./tab/genre/edit.php');
                        break;
                    case 'products':
                        include('./tab/product/index.php');
                        break;
                    case 'comments':
                        include('./tab/comment/index.php');
                        break;
                    case 'comments_on_site':
                        include('./tab/comment/onsite.php');
                        break;
                    case 'orders':
                        include('./tab/order/index.php');
                        break;
                    case 'approved':
                        include('./tab/order/approved.php');
                        break;
                    case 'approved':
                        include('./tab/order/approved.php');
                        break;
                    case 'reckon':
                        include('./tab/reckon/index.php');
                        break;
                    case 'users':
                        include('./tab/user/index.php');
                        break;
                    case 'users_locked':
                        include('./tab/user/locked.php');
                        break;
                    case 'create_product':
                        include('./tab/product/create.php');
                        break;
                    case 'edit_product':
                        include('./tab/product/edit.php');
                        break;
                    default:
                        include('home.php');
                }
            } else {
                include('home.php');
            }
            ?>
            <?php include('./layouts/footer.php') ?>
        </div>
        <!--  END CONTENT AREA  -->
    </div>
    <!-- END MAIN CONTAINER -->



    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="public/assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="public/bootstrap/js/popper.min.js"></script>
    <script src="public/bootstrap/js/bootstrap.min.js"></script>
    <script src="public/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="public/assets/js/app.js"></script>

    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="public/assets/js/custom.js"></script>
    <script src="public/plugins/highlight/highlight.pack.js"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="public/plugins/table/datatable/datatables.js"></script>
    <script src="public/plugins/table/datatable/custom_miscellaneous.js"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <script src="public/plugins/table/datatable/button-ext/dataTables.buttons.min.js"></script>
    <script src="public/plugins/table/datatable/button-ext/jszip.min.js"></script>
    <script src="public/plugins/table/datatable/button-ext/buttons.html5.min.js"></script>
    <script src="public/plugins/table/datatable/button-ext/buttons.print.min.js"></script>
    <script>
        $('#html5-extension').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-sm-12 col-md-6 d-flex justify-content-md-start justify-content-center'B><'col-sm-12 col-md-6 d-flex justify-content-md-end justify-content-center mt-md-0 mt-3'f>>>" +
                "<'table-responsive'tr>" +
                "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            buttons: {
                buttons: [{
                        extend: 'copy',
                        className: 'btn btn-sm'
                    },
                    {
                        extend: 'csv',
                        className: 'btn btn-sm'
                    },
                    {
                        extend: 'excel',
                        className: 'btn btn-sm'
                    },
                    {
                        extend: 'print',
                        className: 'btn btn-sm'
                    }
                ]
            },
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [5, 10, 20, 50],
            "pageLength": 5
        });

        $('#zero-config').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
                "<'table-responsive'tr>" +
                "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": {
                    "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>',
                    "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>'
                },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
                "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [5, 10, 20, 50],
            "pageLength": 5
        });
    </script>
    <script src="public/assets/js/adminAjax.js"></script>
    <script>
    </script>
</body>

</html>