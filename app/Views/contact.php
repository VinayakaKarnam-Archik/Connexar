<!DOCTYPE html>
<html lang="en">
<head>
	<title>Codeigniter 4 Send Email Example Tutorial - XpertPhp</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
	<?php if (session('msg')) : ?> 
		<div class="alert alert-info alert-dismissible"> 
			<?= session('msg') ?> <button type="button" class="close" data-dismiss="alert"><span>×</span></button> 
		</div> 
	<?php endif ?>
		<form method="post" action="<?php echo base_url('contact/sendMail') ?>">
			<div class="form-group">
			<label>Your Email</label>
			<input type="text" name="email" class="form-control">
			</div>

			<div class="form-group">
			<label>Your Subject</label>
			<input type="text" name="subject" class="form-control">
			</div>

			<div class="form-group">
			<label>Message</label>
			<textarea rows="6" type="text" name="message" class="form-control"></textarea>
			</div>
			<button type="submit" class="btn btn-primary btn-block">Send</button>
		</form>
	</div>
</body>
</html>