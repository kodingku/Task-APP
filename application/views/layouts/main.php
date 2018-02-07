
<!DOCTYPE html>
<html>
<head>
<title>Task APP</title>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="../custom.css">

	<!-- <link rel="stylesheet" type="text/css" href="<?php //echo base_url();?>assets/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<script type="text/javascript" src="<?php //echo base_url();?>assets/js/bootstrap.min.js"></script> -->
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo base_url(); ?>">TASK APP</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a></li>
        <?php if ($this->session->userdata('logged_in')): ?>
         <li><a href="<?php echo base_url();?>projects/index">Projects</a></li>

       <?php endif;?>
        <li><a href="<?php echo base_url();?>users/register">Register</a></li>
        
      </ul>
     
      <ul class="nav navbar-nav navbar-right">

        <?php if ($this->session->userdata('logged_in')): ?>


        <li><a href="<?php echo base_url(); ?>users/logout">Logout</a></li>

      <?php endif; ?>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


<div class="container">
	<div class="row">
		<div class="col-md-3">
			<?php $this->load->view('users/login_view') ?>
		</div>

		<div class="col-md-9">
			<?php $this->load->view($main_view);?>
		</div>
	</div>

</div>
<!-- jQuery library -->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $('#myTable').DataTable();
    $('#myTableTask').DataTable();
  });

</script>

</body>
</html>
