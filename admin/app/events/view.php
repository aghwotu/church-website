<?php 
    require __DIR__ . "../../../includes/Initialize.php";

?>
<?php
    include_layout_template('admin_header.php');
?>
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Events </h2>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../index.php" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="index.php" class="breadcrumb-link">Events</a></li>
                        <li class="breadcrumb-item active" aria-current="page">View Event</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- end pageheader -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">


<!-- place page content below -->


<div class="card">
    <h5 class="card-header ">
        <i class="fas fa-fw fa-calendar-alt fa-lg"></i> 
        <span > View Event </span>
    </h5>
    <div class="card-body">
        <a href="edit.php" class="btn btn-success"> <i class="fas fa-pencil-alt"></i> Edit </a>
        <a href="index.php" class="btn btn-secondary"> <i class="fas fa-list-alt"></i> Return to List </a>
    </div>
</div>
<div class="card">
    <h5 class="card-header">View Event</h5>
        <div class="card-body">
            <h5 class="card-title">Title</h5>
            <p>The Great Awakening</p>
        </div>
        <div class="card-body border-top">
            <h5 class="card-title">Date and Time</h5>
            <p>06/27/2019 6:54 PM</p>
        </div>
        <div class="card-body  border-top">
            <h5 class="card-title">Congregation</h5>
            <p>Grail</p>
        </div>
        <div class="card-body  border-top">
            <h5 class="card-title">Banner</h5>
            <div >
                <img src="../../assets/images/card-img.jpg" class="img-fluid mt-3">
            </div>
        </div>
</div>



<?php
    include_layout_template('admin_footer.php');
?>
