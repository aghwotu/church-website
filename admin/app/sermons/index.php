<?php 
    require __DIR__ . "../../../includes/Initialize.php";
?>
<?php
    include_layout_template('admin_header.php');
?>
<div class="row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="page-header">
            <h2 class="pageheader-title">Sermons </h2>
            <div class="page-breadcrumb">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../index.php" class="breadcrumb-link">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Sermons </li>
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


<div class="card" id="images">
    <h5 class="card-header">
        <i class="fa fa-fw fa-book fa-lg"></i>
        <span> Sermons </span>
    </h5>
    <div class="card-body">
        <a href="add.php" class="btn btn-success"> <i class="fas fa-plus-circle"></i> Add New</a>
        <a href="#" class="btn btn-danger"> <i class="fas fa-trash"></i> Bulk Delete</a>
    </div>
</div>
<div class="card">
    <h5 class="card-header">Recent Sermons</h5>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table">
                <thead class="bg-light">
                    <tr class="border-0">
                        <th class="border-0">#</th>
                        <th class="border-0">Image</th>
                        <th class="border-0">Theme</th>
                        <th class="border-0">Title</th>
                        <th class="border-0">Taught By</th>
                        <th class="border-0">Category</th>
                        <th class="border-0">PDF</th>
                        <th class="border-0">Audio</th>
                        <th class="border-0">Event</th>
                        <th class="border-0">Date/Time</th>
                        <th class="border-0">Congregation</th>
                        <th class="border-0">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <div class="m-r-10"><img src="../../assets/images/product-pic.jpg" alt="user" class="rounded" width="45"></div>
                        </td>
                        <td>Faith </td>
                        <td>A life worth living, a new purpose</td>
                        <td>Brother John Doe</td>
                        <td>Faith, Power</td>
                        <td >
                            <p><i class="far fa-file-pdf fa-2x text-primary"></i></p>
                        </td>
                        <td>
                            <p><i class="far fa-file-audio fa-2x text-primary"></i></p>
                        </td>
                        <td>The Great Evangelism</td>
                        <td>24-08-2018 14:12:77</td>
                        <td>Agbarho</td>
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
                        <td>Faith </td>
                        <td>A life worth living, a new purpose</td>
                        <td>Brother John Doe</td>
                        <td>God, Prayer</td>
                        <td >
                            <p><i class="far fa-file-pdf fa-2x text-primary"></i></p>
                        </td>
                        <td>
                            <p><i class="far fa-file-audio fa-2x text-primary"></i></p>
                        </td>
                        <td>The Great Evangelism</td>
                        <td>24-08-2018 14:12:77</td>
                        <th>Grail</th>
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
                        <td>Faith </td>
                        <td>A life worth living, a new purpose</td>
                        <td>Brother John Doe</td>
                        <td>God, Faith</td>
                        <td >
                            <p><i class="far fa-file-pdf fa-2x text-primary"></i></p>
                        </td>
                        <td>
                            <p><i class="far fa-file-audio fa-2x text-primary"></i></p>
                        </td>
                        <td>The Great Evangelism</td>
                        <td>24-08-2018 14:12:77</td>
                        <td>Okriphere</td>
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
                        <td>Faith </td>
                        <td>A life worth living, a new purpose</td>
                        <td>Brother John Doe</td>
                        <td>Faith, Power</td>
                        <td >
                            <p><i class="far fa-file-pdf fa-2x text-primary"></i></p>
                        </td>
                        <td>
                            <p><i class="far fa-file-audio fa-2x text-primary"></i></p>
                        </td>
                        <td>The Great Evangelism</td>
                        <td>24-08-2018 14:12:77</td>
                        <td>Ugbomro</td>
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
            <div>
                
            </div>

        </div>
    </div>
</div>




<?php
    include_layout_template('admin_footer.php');
?>
