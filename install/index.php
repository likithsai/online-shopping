<?php
    require '../component/header.php';
    include '../class/MySQLiDB.class.php';

    $var = '<?php 
        define("server", "likithsai");
        define("username", "root");
        define("password", "");
        define("database", "likithsai");
    ?>';

    // file_put_contents('../config/config.php', $var);

    $err = '';
    if(isset($_POST['frm_submit'])) {
        $DBServer = $_POST['inp_dbserver'];
        $DBUsername = $_POST['inp_dbuser'];
        $DBPassword = $_POST['inp_dbpassword'];
        $DBName = $_POST['inp_dbname'];
        $AdminUser = $_POST['inp_adminuser'];
        $AdminPass = $_POST['inp_adminpass'];
        $AdminConfirmPass = $_POST['inp_confirm_pwd'];
        $AdminEmail = $_POST['inp_email'];

        try {
            $mysqli = new SimpleMySQLi($DBServer, $DBUsername, $DBPassword, $DBName, "utf8mb4", "assoc");
        } catch(Exception $e) {
            $err = $e->getMessage();
            // error_log($e->getMessage());
        }

        var_dump($_POST);
    }

    //  check if config file exist or not
    if(!file_exists('../config/config.php')) {
        if(strlen($err) > 0) {
            echo '<div class="container alert alert-danger my-4 shadow-sm rounded-0" role="alert"><b class="me-2">ERROR:</b><span>' . $err . '</span></div>';
        }

        echo '
            <div class="container my-4 card shadow-sm border-0 rounded-0">
                <div class="card-body">
                    <form method="POST">
                        <div class="alert alert-warning" role="alert">
                            <p class="fw-bold m-0">
                                <i class="bi bi-server me-1"></i>
                                <span>DATABASE SETUP</span>
                            </p>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Database Server</label>
                            <input type="text" class="form-control" name="inp_dbserver" value="' . $_POST['inp_dbserver'] . '" aria-describedby="DB Server">
                            <div class="form-text">We\'ll never share your email with anyone else.</div>
                        </div>
                        <div class="d-md-flex">
                            <div class="mb-3 w-100 me-2">
                                <label for="exampleInputEmail1" class="form-label">Database Username</label>
                                <input type="text" class="form-control" name="inp_dbuser" value="' . $_POST['inp_dbuser'] . '" aria-describedby="Database Username">
                                <div class="form-text">Your database username</div>
                            </div>
                            <div class="mb-3 w-100">
                                <label for="exampleInputEmail1" class="form-label">Database Password</label>
                                <input type="password" class="form-control" name="inp_dbpassword" aria-describedby="Database Password">
                                <div class="form-text">Your database password</div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Database Name</label>
                            <input type="text" class="form-control" name="inp_dbname" value="' . $_POST['inp_dbname'] . '" aria-describedby="Database Name">
                            <div class="form-text">The name of the database you want to use.</div>
                        </div>
                        <div class="alert alert-warning mt-5" role="alert">
                            <p class="fw-bold m-0">
                                <i class="bi bi-person-circle me-1"></i>
                                <span>ADMIN USER SETUP</span>
                            </p>
                        </div>
                        <div class="mb-3 w-100">
                            <label for="exampleInputEmail1" class="form-label">Username</label>
                            <input type="text" class="form-control" name="inp_adminuser" value="' . $_POST['inp_adminuser'] . '" aria-describedby="Admin username">
                            <div class="form-text">Username can have only alphanumeric characters, spaces, underscore, hyphens, period and the @ symbol.</div>
                        </div>
                        <div class="d-md-flex">
                            <div class="mb-3 w-100 me-2">
                                <label for="exampleInputEmail1" class="form-label">Password</label>
                                <input type="password" class="form-control" name="inp_adminpass" aria-describedby="Admin password">
                                <div class="form-text">Your database password</div>
                            </div>
                            <div class="mb-3 w-100">
                                <label for="exampleInputEmail1" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" name="inp_confirm_pwd" aria-describedby="confirm password">
                                <div class="form-text">Please confirm password</div>
                            </div>
                        </div>
                        <div class="mb-3 w-100">
                            <label for="exampleInputEmail1" class="form-label">Email ID</label>
                            <input type="email" class="form-control" name="inp_email" value="' . $_POST['inp_email'] . '" aria-describedby="Admin Email">
                            <div class="form-text">Your Email id. Note that password reset link will be sent in this link.</div>
                        </div>
                        <div class="mt-5 d-md-flex align-items-center justify-content-between">
                            <button type="reset" class="btn btn-danger">
                                <i class="bi bi-x-lg me-1"></i>
                                <span>RESET</span>
                            </button>
                            <button type="submit" name="frm_submit" class="btn btn-success">
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