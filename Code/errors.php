<?php  if (count($errors) > 0) : ?>
  <div class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>
<html>
	<head>
	      <link rel="stylesheet" type="text/css" href="errorStyles.css">
	</head>
</html>
