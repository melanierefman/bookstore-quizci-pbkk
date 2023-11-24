<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Register Bookstore</title>
    <link href="<?= base_url('css/styles.css') ?>" rel="stylesheet" />
    <!-- Include the Google Fonts stylesheet -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:400,700&display=swap" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        .custom-bg {
            background-color: var(--bs-gray-500);
        }
    </style>
</head>

<body class="custom-bg">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row d-flex align-items-center justify-content-center" style="min-height: 100vh">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">
                                        Create Account
                                    </h3>
                                </div>
                                <div class="card-body">
                                    <form action="<?= base_url('./login') ?>" method="post">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="name" type="text" placeholder="Your Name" />
                                            <label for="name">Name</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="phone" type="text" placeholder="Your Phone" />
                                            <label for="phone">Phone</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="email" type="email" placeholder="name@example.com" />
                                            <label for="email">Email address</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="password" type="password" placeholder="Password" />
                                            <label for="password">Password</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="confirm_password" type="password" placeholder="Confirm Password" />
                                            <label for="confirm_password">Confirm Password</label>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid">
                                                <a type="submit" class="btn btn-primary btn-block" href="<?= base_url('./login') ?>">Create Account</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small">
                                        <a>Already have an account ?</a>
                                        <a href="<?= base_url('./login') ?>">Login</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="<?= base_url('js/scripts.js') ?>"></script>
</body>

</html>