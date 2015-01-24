<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Cargo System">
    <meta name="author" content="ChiLT">

    <title><?php echo $site_name ?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('asset/css/bootstrap.css');?>" rel="stylesheet">

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

    <div id="wrapper">
		<?php echo $this->template->block('navigation', 'default/_nav'); ?>
		
		<div id="page-wrapper">
			<?php echo $this->template->message(); ?>

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"><?php echo $pageTitle;?></h1>
            		<div class="row">
            		    <div class="col-lg-12">
            		        <div class="panel panel-default">

            				<?php echo $this->template->yield_content(); ?>


            	            </div>
            	            <!-- /.panel -->
            	        </div>
            	        <!-- /.col-lg-12 -->
            	    </div>
            	    <!-- /.row -->

                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->


</body>
    <!-- jQuery -->
    <script src="<?php echo base_url('asset/js/jquery.js');?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('asset/js/bootstrap.min.js');?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('asset/js/plugins/metisMenu/metisMenu.min.js');?>"></script>

<?php /*
    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url('asset/js/plugins/morris/raphael.min.js');?>"></script>
    <script src="<?php echo base_url('asset/js/plugins/morris/morris.min.js');?>"></script>
    <script src="<?php echo base_url('asset/js/plugins/morris/morris-data.js');?>"></script>
*/?>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('asset/js/sb-admin-2.js');?>"></script>
    <script type="text/javascript" src="//igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
	<script type="text/javascript"></script>

</html>