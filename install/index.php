<?php
    require '../component/header.php';

    $var = '<?php 
        define("server", "likithsai");
        define("username", "root");
        define("password", "");
        define("database", "likithsai");
    ?>';

    // file_put_contents('../config/config.php', $var);

    //  check if config file exist or not
    if(!file_exists('../config/config.php')) {
        echo '
            <div class="container my-4 card shadow-sm border-0 rounded-0">
                <div class="card-body">
                    <form>
                        <div class="alert alert-warning" role="alert">
                            <p class="fw-bold m-0">
                                <i class="bi bi-server me-1"></i>
                                <span>DATABASE SETUP</span>
                            </p>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Database Server</label>
                            <input type="text" class="form-control" id="inp_dbserver" name="inp_dbserver" aria-describedby="DB Server">
                            <div id="emailHelp" class="form-text">We\'ll never share your email with anyone else.</div>
                        </div>
                        <div class="d-md-flex">
                            <div class="mb-3 w-100 me-2">
                                <label for="exampleInputEmail1" class="form-label">Database Username</label>
                                <input type="text" class="form-control" id="inp_dbuser" name="inp_dbuser" aria-describedby="Database Username">
                                <div id="emailHelp" class="form-text">Your database username</div>
                            </div>
                            <div class="mb-3 w-100">
                                <label for="exampleInputEmail1" class="form-label">Database Password</label>
                                <input type="password" class="form-control" id="inp_dbpassword" name="inp_dbpassword" aria-describedby="Database Password">
                                <div id="emailHelp" class="form-text">Your database password</div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Database Name</label>
                            <input type="text" class="form-control" id="inp_dbname" name="inp_dbname" aria-describedby="Database Name">
                            <div id="emailHelp" class="form-text">The name of the database you want to use.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Table Prefix</label>
                            <input type="text" class="form-control" id="inp_tblprefix" name="inp_tblprefix" aria-describedby="table prefix" value="tbl-">
                            <div id="emailHelp" class="form-text">If you want to run multiple installation in a single database, change this.</div>
                        </div>
                        <div class="alert alert-warning mt-5" role="alert">
                            <p class="fw-bold m-0">
                                <i class="bi bi-person-circle me-1"></i>
                                <span>ADMIN USER SETUP</span>
                            </p>
                        </div>
                        <div class="mb-3 w-100">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" class="form-control" id="inp_adminuser" name="inp_adminuser" aria-describedby="Admin username">
                            <div id="emailHelp" class="form-text">Username can have only alphanumeric characters, spaces, underscore, hyphens, period and the @ symbol.</div>
                        </div>
                        <div class="d-md-flex">
                            <div class="mb-3 w-100 me-2">
                                <label for="exampleInputEmail1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="inp_dbserver" name="inp_dbserver" aria-describedby="Admin password">
                                <div id="emailHelp" class="form-text">Your database password</div>
                            </div>
                            <div class="mb-3 w-100">
                                <label for="exampleInputEmail1" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="inp_confirm_pwd" name="inp_confirm_pwd" aria-describedby="confirm password">
                                <div id="emailHelp" class="form-text">Please confirm password</div>
                            </div>
                        </div>
                        <div class="mb-3 w-100">
                            <label for="exampleInputEmail1" class="form-label">Email ID</label>
                            <input type="email" class="form-control" id="inp_email" name="inp_email" aria-describedby="Admin Email">
                            <div id="emailHelp" class="form-text">Your Email id. Note that password reset link will be sent in this link.</div>
                        </div>
                        <div class="mt-5 d-md-flex align-items-center justify-content-between">
                            <button type="reset" class="btn btn-danger">
                                <i class="bi bi-x-lg me-1"></i>
                                <span>RESET</span>
                            </button>
                            <button type="submit" class="btn btn-success">
                                <i class="bi bi-shield-shaded me-1"></i>
                                <span>INSTALL</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        ';
    } else {
        header('location: ../index.php');
    }

    include '../component/footer.php';
?>