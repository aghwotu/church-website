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
                        <li class="breadcrumb-item"><a href="index.php" class="breadcrumb-link">Sermons</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Add Sermon</li>
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
        <i class="fa fa-fw fa-book fa-lg"></i> <span > Add Sermon </span></h5>
</div>
<div class="card">
    <h5 class="card-header">New Sermon</h5>
    <form method="POST" action="" enctype="multipart/form-data">
        <div class="form-group card-body">
            <h5 class="card-title">Title</h5>
                <input type="text" name="sermon-title" class="form-control" placeholder="Sermon Title" required >
        </div>
        <div class="form-group card-body border-top">
            <h5 class="card-title">Theme</h5>
                <input type="text" name="sermon-theme" class="form-control" placeholder="Sermon Theme" required>
        </div>
        <div class="form-group card-body border-top">
            <h5 class="card-title">Taught By</h5>
                <input type="text" name="sermon-taken-by-fname" class="form-control" placeholder="First Name" required>
                <input type="text" name="sermon-taken-by-lname" class="form-control mt-3" placeholder="Last Name" required>
        </div>
        <div class="card-body form-group border-top">
            <h5 class="card-title">Taught on Date and Time</h5>
            <small class="text-muted">Click the calendar icon</small>
            <div class="form-group">
                <div class="input-group date" id="datetimepicker7" data-target-input="nearest">
                    <input name="sermon-date-time" type="text" required class="form-control datetimepicker-input" data-target="#datetimepicker7" placeholder="Sermon Date and Time" />
                    <div class="input-group-append" data-target="#datetimepicker7" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar-alt"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body form-group border-top email-compose-fields">
            <h5 class="card-title">Sermon Category</h5>
            <small class="text-muted">Delete whichever category does not apply and add yours</small>
            <div class="row pt-0">
                <div class="col-md-12">
                    <select name="sermon-category-tags" class="js-example-basic-multiple" multiple="multiple">
                        <option value="hope" selected="selected">Hope</option>
                        <option value="preyer" selected="selected">Prayer</option>
                        <option value="faith" selected="selected">Faith</option>
                        <option value="love" selected="selected">Love</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="card-body form-group">
            <h5 class="card-title">Select Sermon Congregation</h5>
            <select name="sermon-congregation" required class="selectpicker"  data-live-search="true" data-width="100%">
                <option selected disabled>Select sermon congregation</option>
                <option>Ugbomro</option>
                <option>Okrikphere</option>
                <option>PTI</option>
                <option>Grail</option>
                <option>Osubi</option>
            </select>
        </div>
        <div class="card-body form-group border-top">
            <h5 class="card-title">Sermon Event</h5>
            <small class="text-muted">On which event was this sermon taught?</small>
            <select name="sermon-event" required class="selectpicker"  data-live-search="true" data-width="100%" id="sermon-event">
                <option selected disabled>Select sermon event</option>
                <option value="church service">Church Service</option>
                <option value="women leadership summmit">Women Leadership Summit</option>
                <option value="youth leadership summit">Youth Leadership Summit</option>
                <option value="bible study">Bible Study</option>
                <!-- <option value="other">Other</option> -->
            </select>
            <!-- check the onchange value and give it a display -->
            
            <!-- <input type="text" name="sermon-event" class="form-control mt-4" placeholder="Sermon Event" required autofocus=""> -->
            <small >Enter the event where the sermon was delivered</small>
        </div>
        <div class="card-body form-group border-top">
            <h5 class="card-title">Upload Audio Sermon</h5>
            
            <div id="sermon-audio-message">This is the sermon audio message</div>
            <input type="file" name="" accept="audio/mpeg" id="sermonAudio" class="form-control mb-3">
            <audio id="sermonAudioTag" controls></audio>
            
            
        </div>
        <div class="card-body form-group border-top">
            <h5 class="card-title">Upload PDF Sermon</h5>
            <div id="sermon-pdf-message">This is the sermon PDF message</div>
            <input type="file" class="form-control mb-3" id="sermonPdfInput" required="" name="semon-pdf-input" accept="application/pdf">
            
        </div>
        <div class="card-body form-group border-top">
            <h5 class="card-title">Upload Sermon Banner</h5>
            <div>
                <div id="sermon-banner-message"></div>
                <!-- <small id="sermon-banner-message" class="txt-red">This is the message</small> -->
                <input type="file" class="form-control" id="sermon-img-input" required="" accept="image/*" name="sermon-img-input">
                <small style="display: block;"> Upload *jpg* *jpeg* *png* files ONLY and images not more than 2MB in size</small>
                <!-- <img src="../../assets/images/card-img.jpg" class="img-fluid mt-3" id="event-img-preview"> -->
                <img class="img-fluid mt-3" id="sermon-img-preview">
            </div>
        </div>
        <div class="card-body form-group ">
            <button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
        </div>
    </form>
</div>

<!-- Custom Script for this page -->
<script src="../../assets/libs/sermons/js/add.js"></script>

<?php
    include_layout_template('admin_footer.php');
?>
