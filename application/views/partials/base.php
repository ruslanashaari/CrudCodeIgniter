<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
	<style type="text/css">
	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	</style>
</head>
<body>
	<h1><?php echo $this->title; ?></h1>

	<div class="container">
		<div id="body" style="padding-top: 10px;">
			<?php echo $content; ?>
		</div>

		<?php $this->load->view('partials/footer');?>
		<?php $this->load->view('partials/script.php');?>

	</div>
</body>
</html>
