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
                        <li class="breadcrumb-item active" aria-current="page">Add Blog</li>
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
        <i class="fab fa-fw fa-blogger fa-lg"></i> <span > Add Blog </span></h5>
</div>
<div class="card">
    <h5 class="card-header">New Blog</h5>
    <form method="POST" action="" enctype="multipart/form-data">
        <div class="form-group card-body">
            <h5 class="card-title">Blog Title</h5>
                <input type="text" name="blog-title" class="form-control" placeholder="Event Title" required>
        </div>
        <div class="form-group card-body border-top">
            <h5 class="card-title">Blog Author</h5>
            <input type="text" name="blog-author-fname" class="form-control" placeholder="First Name" required="">
            <input type="text" name="blog-author-lname" class="form-control mt-3" placeholder="Last Name" required="">
        </div>
        <div class="card-body form-group border-top">
            <h5 class="card-title">Upload Blog Banner</h5>
            <div>
                <div id="blog-banner-message"></div>
                <input type="file" name="blog-banner" class="form-control" id="blog-img-input" required="" accept="image/*">
                <!-- <img src="../../assets/images/card-img.jpg" class="img-fluid mt-3" id="event-img-preview"> -->
                <img class="img-fluid mt-3" id="blog-img-preview" >
            </div>
        </div>
        <div class="card-body form-group border-top">
            <h5 class="card-title">Blog Date and Time</h5>
            <div class="form-group">
                <div class="input-group date" id="datetimepicker7" data-target-input="nearest">
                    <input type="text" name="blog-date-time" required class="form-control datetimepicker-input" data-target="#datetimepicker7" />
                    <div class="input-group-append" data-target="#datetimepicker7" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar-alt"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body form-group border-top">
            <h5 class="card-title">Select Blog Congregation</h5>
            <select name="blog-congregation" required class="selectpicker"  data-live-search="true" data-width="100%">
                <option selected disabled>Select blog congregation</option>
                <option>Ugbomro</option>
                <option>Okrikphere</option>
                <option>PTI</option>
                <option>Grail</option>
                <option>Osubi</option>
            </select>
        </div>
        <div class="card-body form-group border-top email-compose-fields">
            <h5 class="card-title">Enter Blog Tags</h5>
            <small class="text-muted">Delete whichever tag does not apply and add yours</small>
            <div class="row pt-0">
                <div class="col-md-12">
                    <select name="blog-tags" class="js-example-basic-multiple" multiple="multiple">
                        <option value="hope" selected="selected">Hope</option>
                        <option value="preyer" selected="selected">Prayer</option>
                        <option value="faith" selected="selected">Faith</option>
                        <option value="love" selected="selected">Love</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="card-body form-group">
            <h5 class="card-title">Compose Blog</h5>
            <div class="email-editor">
                <div class="col-md-12 p-0">
                    <div class="form-group">
                        <label class="control-label sr-only" for="summernote">Descriptions </label>
                        <textarea name="blog-text" class="form-control" id="summernote" rows="6" placeholder="Write Descriptions"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body form-group ">
            <button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
        </div>
    </form>
</div>



<!-- Custom Script for this page -->
<script src="../../assets/libs/blogs/js/add.js"></script>


<?php
    include_layout_template('admin_footer.php');
?>

