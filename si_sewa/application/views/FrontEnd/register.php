<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PAKTI | Daftar</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">



    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <?php $this->load->view('Frontend/template/head'); ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>

<body>
    <section id="aa-signin">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-signin-area">
                        <div class="aa-signin-form">
                            <div class="aa-signin-form-title">
                                <a class="aa-property-home" href="index.html">Property Home</a>
                                <h4>Create your account and Stay with us</h4>
                            </div>
                            <form class="contactform" method="POST" action="<?php echo base_url('auth/register'); ?>">
                                <div class="aa-single-field">
                                    <label for="name">Name <span class="required">*</span></label>
                                    <input type="text" required="required" aria-required="true" value="" name="nama">
                                </div>
                                <div class="aa-single-field">
                                    <label for="email">Username <span class="required">*</span></label>
                                    <input type="text" required="required" aria-required="true" value="" name="username">
                                </div>
                                <div class="aa-single-field">
                                    <label for="password">Password <span class="required">*</span></label>
                                    <input type="password" name="password">
                                </div>
                                <div class="aa-single-field">
                                    <label for="confirm-password">Confirm Password <span class="required">*</span></label>
                                    <input type="password" name="password2">
                                </div>
                                <div class="aa-single-submit">
                                    <input type="submit" value="Create Account" name="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- jQuery library -->


    <?php $this->load->view('Frontend/template/js'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>

</html>