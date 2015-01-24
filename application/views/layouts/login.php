<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="PhucLoc Cargo System">
    <meta name="author" content="ChiLT">

    <title><?php echo $site_name ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('asset/css/bootstrap.css');?>" rel="stylesheet" media="screen">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url('asset/css/plugins/metisMenu/metisMenu.min.css');?>" rel="stylesheet">

    <!-- Timeline CSS -->
    <!--link href="<?php echo base_url('asset/css/plugins/timeline.css');?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('asset/css/sb-admin-2.css');?>" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <!--link href="<?php echo base_url('asset/css/plugins/morris.css');?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('asset/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="<?php echo base_url('asset/js/html5shiv.js');?>"></script>
        <script src="<?php echo base_url('asset/js/respond.min.js');?>"></script>
    <![endif]-->

</head>
<?php flush();?>
<body>



    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">

                            <form action="<?php echo site_url("authenticate/login");?>" method="POST" name="frmLogin" id="idFrmLogin">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="username" type="username" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        Username and Password are same!
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
    <!-- jQuery -->
    <script src="<?php echo base_url('asset/js/jquery.js');?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('asset/js/bootstrap.min.js');?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('asset/js/plugins/metisMenu/metisMenu.min.js');?>"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('asset/js/sb-admin-2.js');?>"></script>
	<script type="text/javascript"></script>

</html>