<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin pannel</title>
  <!-- link css -->
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <link rel="stylesheet" href="../../public/assets/admin/css/header.css">
  <link rel="stylesheet" href="../../public/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../public/assets/bootstrap/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../public/assets/admin/css/sidebar.css">
  <link rel="stylesheet" href="../../public/assets/bootstrap/css/boxicons.min.css">
</head>
<body >


<?php
include_once("../inc/nav.php");
?>
<!-- navbar start -->
<!-- <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"> -->
<!-- Topbar Search -->
<!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
  <div class="input-group">
    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for...">
    <div class="input-group-append">
      <button class="btn btn-primary" type="button">
        <i class="fa fa-search fa-sm"></i>
      </button>
    </div>
  </div>
</form>

<ul class="navbar-nav ml-auto">

  <li class="nav-item dropdown no-arrow d-sm-none">
    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fa fa-search fa-fw"></i>
    </a>
 
    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
      <form class="form-inline mr-auto w-100 navbar-search">
        <div class="input-group">
          <input type="text" class="form-control bg-light border-0 small" placeholder="Search for...">
          <div class="input-group-append">
            <button class="btn btn-primary" type="button">
              <i class="fa fa-search fa-sm"></i>
            </button>
          </div>
        </div>
      </form>
    </div>
  </li>

  <li class="nav-item dropdown no-arrow mx-1">
    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fa fa-bell fa-fw"></i>
    
      <span class="badge badge-danger badge-counter">3+</span>
    </a>

    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in">
      <h6 class="dropdown-header">
        Alerts Center
      </h6>
      <a class="dropdown-item d-flex align-items-center" href="#">
        <div class="mr-3">
          <div class="icon-circle">
            <i class="fa fa-file"></i>
          </div>
        </div>
        <div>
          <div class="small text-gray-500">March 12, 2020</div>
          <span class="font-weight-bold">related snippets sent</span>
        </div>
      </a>
      <a class="dropdown-item d-flex align-items-center" href="#">
        <div class="mr-3">
          <div class="icon-circle">
            <i class="fa fa-user"></i>
          </div>
        </div>
        <div>
          <div class="small text-gray-500">Feb 7, 2020</div>
          you updated your profile!
        </div>
      </a>
      <a class="dropdown-item d-flex align-items-center" href="#">
        <div class="mr-3">
          <div class="icon-circle">
            <i class="fa fa-download"></i>
          </div>
        </div>
        <div>
          <div class="small text-gray-500">Jan 2, 2020</div>
            You just downloaded 3 snippets
        </div>
      </a>
      <a class="dropdown-item text-center small text-gray-500" href="#">Show All</a>
    </div>
  </li>

  <li class="nav-item dropdown no-arrow mx-1">
    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fa fa-envelope fa-fw"></i>

      <span class="badge badge-danger badge-counter">4</span>
    </a>

    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
      <h6 class="dropdown-header">
        Messages
      </h6>
      <a class="dropdown-item d-flex align-items-center" href="#">
        <div class="dropdown-list-image mr-3">
          <img class="rounded-circle" src="/public/assets/admin/img/message.png" alt="">
          <div class="status-indicator bg-success"></div>
        </div>
        <div class="font-weight-bold">
          <div class="text-truncate">Thanks for your answer!</div>
          <div class="small text-gray-500">Andy flower &middot; 8m</div>
        </div>
      </a>
      <a class="dropdown-item d-flex align-items-center" href="#">
        <div class="dropdown-list-image mr-3">
          <img class="rounded-circle" src="/public/assets/admin/img/message.png" alt="">
          <div class="status-indicator"></div>
        </div>
        <div>
          <div class="text-truncate">Can you answer bbb?</div>
          <div class="small text-gray-500">John wrong &middot; 4h</div>
        </div>
      </a>
      <a class="dropdown-item d-flex align-items-center" href="#">
        <div class="dropdown-list-image mr-3">
          <img class="rounded-circle" src="/public/assets/admin/img/message.png" alt="">
          <div class="status-indicator bg-warning"></div>
        </div>
        <div>
          <div class="text-truncate">Your work is awesome</div>
          <div class="small text-gray-500"> Stanley &middot; 12h</div>
        </div>
      </a>
      <a class="dropdown-item d-flex align-items-center" href="#">
        <div class="dropdown-list-image mr-3">
          <img class="rounded-circle" src="/public/assets/admin/img/message.png" alt="">
          <div class="status-indicator bg-success"></div>
        </div>
        <div>
          <div class="text-truncate">Thanks for your support</div>
          <div class="small text-gray-500">grand misi &middot; 2w</div>
        </div>
      </a>
      <a class="dropdown-item text-center small text-gray-500" href="#">Read all Messages</a>
    </div>
  </li>

  <div class="topbar-divider d-none d-sm-block"></div>

  <li class="nav-item dropdown no-arrow">
    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <span class="mr-2 d-none d-lg-inline text-gray-600 small">Nazebul Rudh_ro</span>
      <img class="img-profile rounded-circle" src="../../public/assets/admin/img/logo.jpg">
    </a>

    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
      <a class="dropdown-item" href="#">
        <i class="fa fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
        Profile
      </a>
      <a class="dropdown-item" href="#">
        <i class="fa fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
        Settings
      </a>
      <a class="dropdown-item" href="#">
        <i class="fa fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
        Activity Log
      </a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
        <i class="fa fa-sign-out fa-sm fa-fw mr-2 text-gray-400"></i>
        Logout
      </a>
    </div>
  </li>

</ul>

</nav> -->
<!-- navbar end -->
<?php
include("../inc/slidebar.php");
?>
<section class="px-5" style="padding:0 200px;">

<div class="px-5">
    <div class="pt-3">
        <a href="add.php" class="btn btn-success">Add Product</a>
    </div>
<table id="example" class="table table-striped mt-4" style="width:100%">
        <thead>
            <tr>
                <th>SL</th>
                <th>Book Name</th>
                <th>Athor Name</th>
                <th>Product Quantity</th>
                <th>Price</th>
                <th class="text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>Good person</td>
                <td>Mohiuddin khan alongir</td>
                <td>20</td> 
                <td>100</td>
                <td class="d-flex justify-content-center">
                    <form action="update.php" method="post" class="mx-2">
                        <input type="submit" value="Update" class="btn btn-warning">
                    </form>
                    <form action="" method="post" class="mx-2">
                        <input type="submit" value="Deleted" class="btn btn-danger">
                    </form>
                </td>
            </tr>
            
        </tbody>
        <tfoot>
            <tr>
                <th>SL</th>
                <th>Book Name</th>
                <th>Athor Name</th>
                <th>Product Quantity</th>               
                <th>Price</th>
                <th class="text-center">Action</th>
            </tr>
        </tfoot>
    </table>
</div>



</section>









<footer id="sticky-footer" class="py-4 text-dark-50 fixed-bottom " style="background-color: #f2f4fb;">
    <div class="container text-center">
      <small>Copyright &copy; Your Website</small>
    </div>
  </footer>

<!-- js -->

 <script src="../../public/assets/admin/js/sidebar.js"></script>
  <script src="../../public/assets/bootstrap/js/jquery.min.js"></script>
  <script src="../../public/assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>