<?php $directory = base_url('public/admin/assets/'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>SB_Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo $directory ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo $directory ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user" action="<?php echo base_url('Login_Act'); ?>" method="post">
                                        <div class="form-group">
                                            <label for="a">Username</label>
                                            <input type="text" name="username" class="form-control form-control-user"
                                                id="a" aria-describedby="emailHelp"
                                                placeholder="Enter Email">
                                        </div>
                                        <div class="form-group">
                                            <label for="b">Password</label>
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="b" placeholder="Password">
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>

                                        <?php if($this->session->flashdata("flash_err")){ ?>
                                            <h1 class="h1-err-message h6 text-center rounded p-3 mt-4">
                                                <?php echo $this->session->flashdata('flash_err'); ?>
                                            </h1>
                                        <?php } ?>
                                        <?php if($this->session->flashdata("flass_out_succ")){ ?>
                                            <h1 class="h1-err-message h6 text-center rounded p-3 mt-4">
                                                <?php echo $this->session->flashdata('flash_out_succ'); ?>
                                            </h1>
                                        <?php } ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo $directory ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo $directory ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo $directory ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo $directory ?>js/sb-admin-2.min.js"></script>

</body>

</html>