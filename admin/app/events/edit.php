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
                        <li class="breadcrumb-item active" aria-current="page">Edit Event </li>
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
        <i class="fas fa-fw fa-calendar-plus fa-lg"></i> <span> Edit Event </span></h5>
</div>
<div class="card">
    <h5 class="card-header">Edit Event</h5>
    <form method="POST" action="" enctype="multipart/form-data">
        <div class="form-group card-body">
            <h5 class="card-title">Event Title</h5>
                <input type="text" name="event-title" class="form-control" placeholder="Event Title" autofocus="true" required>
        </div>
        <div class="card-body form-group border-top">
            <h5 class="card-title">Event Date and Time</h5>
                <div class="form-group">
                    <div class="input-group date" id="datetimepicker7" data-target-input="nearest">
                        <input type="text" required class="form-control datetimepicker-input" data-target="#datetimepicker7" />
                        <div class="input-group-append" data-target="#datetimepicker7" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar-alt"></i></div>
                        </div>
                    </div>
                </div>
        </div>
        <div class="card-body form-group border-top">
            <h5 class="card-title">Select Event Congregation</h5>
            <select required class="selectpicker"  data-live-search="true" data-width="100%">
                <option selected disabled>Select event congregation</option>
                <option>Ugbomro</option>
                <option>Okrikphere</option>
                <option>PTI</option>
                <option>Grail</option>
                <option>Osubi</option>
            </select>
        </div>
        <div class="card-body form-group border-top">
            <h5 class="card-title">Upload Event Banner</h5>
            <div >
                <input type="file" class="form-control" id="event-img-input" required="">
                <!-- <img src="../../assets/images/card-img.jpg" class="img-fluid mt-3" id="event-img-preview"> -->
                <img class="img-fluid mt-3" id="event-img-preview">
            </div>
        </div>
        <div class="card-body form-group ">
            <button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
        </div>
    </form>
</div>



<script type="text/javascript">
    let imgInput = document.getElementById('event-img-input');
    let imgTagPreview = document.getElementById('event-img-preview');

    imgInput.addEventListener('change', function() {
        imagePreview(this);
    })

    // function to allow the admin to preview the event banner
    function imagePreview(input) {
        if (input.files && input.files[0]) {
            let fileReader = new FileReader();
            fileReader.onload = function (e) {
                console.log(e);
                imgTagPreview.setAttribute('src' , e.target.result);
            }
            fileReader.readAsDataURL(input.files[0]);
        }
    }
</script>


<?php
    include_layout_template('admin_footer.php');
?>
