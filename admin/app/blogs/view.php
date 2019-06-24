<?php 
    require __DIR__ . "../../../includes/Initialize.php";

?>
<?php
    include_layout_template('admin_header.php');
?>
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Blogs </h2>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../index.php" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="index.php" class="breadcrumb-link">Blogs</a></li>
                        <li class="breadcrumb-item active" aria-current="page">View Blog</li>
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
        <i class="fab fa-fw fa-blogger fa-lg"></i> 
        <span > View Blog </span>
    </h5>
    <div class="card-body">
        <a href="edit.php" class="btn btn-success"> <i class="fas fa-pencil-alt"></i> Edit </a>
        <a href="index.php" class="btn btn-secondary"> <i class="fas fa-list-alt"></i> Return to List </a>
    </div>
</div>
<div class="card">
    <h5 class="card-header">View Blog</h5>
        <div class="card-body">
            <h5 class="card-title">Title</h5>
            <p>The Great Awakening</p>
        </div>
        <div class="card-body border-top">
            <h5 class="card-title">Author Fullname</h5>
            <p>John Doe</p>
        </div>
        <div class="card-body border-top">
            <h5 class="card-title">Banner</h5>
            <img src="../../assets/images/card-img.jpg" class="img-fluid mt-3" id="event-img-preview">
        </div>
        <div class="card-body border-top">
            <h5 class="card-title">Created at Date and Time</h5>
            <p>06/27/2019 6:54 PM</p>
        </div>
        <div class="card-body border-top">
            <h5 class="card-title">Updated at Date and Time</h5>
            <p>06/27/2019 6:54 PM</p>
        </div>
        <div class="card-body  border-top">
            <h5 class="card-title">Congregation</h5>
            <p>Grail</p>
        </div>
        <div class="card-body border-top">
            <h5 class="card-title">Blog Tags</h5>
            <span class="badge badge-success">Faith</span>
            <span class="badge badge-success">Prayer</span>
            <span class="badge badge-success">Hope</span>
            <span class="badge badge-success">Love</span>
        </div>
        <div class="card-body border-top">
            <h5 class="card-title">Blog Post</h5>
            <p>This is the post for the blog</p>
        </div>
</div>



<?php
    include_layout_template('admin_footer.php');
?>
