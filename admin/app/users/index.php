<?php 
    require __DIR__ . "../../../includes/Initialize.php";
?>
<?php
    include_layout_template('admin_header.php');
?>
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Users </h2>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="indexer.php" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Users </li>
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
    <h5 class="card-header">Users</h5>
    <div class="card-body">
        <a href="#" class="btn btn-success"> <i class="fas fa-plus-circle"></i> Add New</a>
        <a href="#" class="btn btn-danger"> <i class="fas fa-trash"></i> Bulk Delete</a>
    </div>
</div>
<div class="card">
    <h5 class="card-header">Users</h5>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table">
                <thead class="bg-light">
                    <tr class="border-0">
                        <th class="border-0">#</th>
                        <th class="border-0">Profile Picture</th>
                        <th class="border-0">Full Name</th>
                        <th class="border-0">username</th>
                        <th class="border-0">Phone Number</th>
                        <th class="border-0">Email Address</th>
                        <th class="border-0">Position</th>
                        <th class="border-0">Congregation</th>
                        <th class="border-0">Registration Date/Time</th>
                        <th class="border-0">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <div class="m-r-10"><img src="../../assets/images/product-pic.jpg" alt="user" class="rounded" width="45"></div>
                        </td>
                        <td>John Snow</td>
                        <td>jsnow_noble</td>
                        <td>+234 419 419</td>
                        <td>john.snow@gmail.com</td>
                        <th>Youth Leader</th>
                        <th>Ikorodu</th>
                        <td>27-08-2018 01:22:12</td>
                        <td>
                            <button class="btn btn-outline-success btn-sm"> <i class="fas fa-eye"> VIEW</i> </button>
                            <button class="btn btn-outline-secondary btn-sm"> <i class="fas fa-pencil-alt"> EDIT</i> </button>
                            <button class="btn btn-outline-danger btn-sm"> <i class="fas fa-trash"> DELETE</i> </button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            <div class="m-r-10"><img src="../../assets/images/product-pic.jpg" alt="user" class="rounded" width="45"></div>
                        </td>
                        <td>Arya Stark</td>
                        <td>astark_noble</td>
                        <td>+234 419 419</td>
                        <td>arya.stark@gmail.com</td>
                        <th>Children Teacher</th>
                        <th>Ajah</th>
                        <td>27-08-2018 01:22:12</td>
                        <td>
                            <button class="btn btn-outline-success btn-sm"> <i class="fas fa-eye"> VIEW</i> </button>
                            <button class="btn btn-outline-secondary btn-sm"> <i class="fas fa-pencil-alt"> EDIT</i> </button>
                            <button class="btn btn-outline-danger btn-sm"> <i class="fas fa-trash"> DELETE</i> </button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>
                            <div class="m-r-10"><img src="../../assets/images/product-pic.jpg" alt="user" class="rounded" width="45"></div>
                        </td>
                        <td>Tyrion Lannister</td>
                        <td>tlannister_sly</td>
                        <td>+234 419 419</td>
                        <td>tyrion.lannister@gmail.com</td>
                        <th>Elder</th>
                        <th>Lekki</th>
                        <td>27-08-2018 01:22:12</td>
                        <td>
                            <button class="btn btn-outline-success btn-sm"> <i class="fas fa-eye"> VIEW</i> </button>
                            <button class="btn btn-outline-secondary btn-sm"> <i class="fas fa-pencil-alt"> EDIT</i> </button>
                            <button class="btn btn-outline-danger btn-sm"> <i class="fas fa-trash"> DELETE</i> </button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>
                            <div class="m-r-10"><img src="../../assets/images/product-pic.jpg" alt="user" class="rounded" width="45"></div>
                        </td>
                        <td>Waverly Earp</td>
                        <td>wearp_cute</td>
                        <td>+234 419 419</td>
                        <td>wave.earp@gmail.com</td>
                        <th>Welfare Leader</th>
                        <th>Lekki</th>
                        <td>27-08-2018 01:22:12</td>
                        <td>
                            <button class="btn btn-outline-success btn-sm"> <i class="fas fa-eye"> VIEW</i> </button>
                            <button class="btn btn-outline-secondary btn-sm"> <i class="fas fa-pencil-alt"> EDIT</i> </button>
                            <button class="btn btn-outline-danger btn-sm"> <i class="fas fa-trash"> DELETE</i> </button>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="12">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active"><a class="page-link " href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>




<?php
    include_layout_template('admin_footer.php');
?>
