<html>

<!-- head -->
<head>
<title><?php echo $this->title; ?></title>
</head>

<!-- end head -->

<body>

<section>
<?php foreach ($this->sadrzaj as $row) { ?>
	<div>
	<h1><?php echo $row['naslov']; ?></h1>
	<h2><?php echo $row['autor']; ?><h2>
	<h2><?php echo $row['tema']; ?></h2>
	<p><?php echo $row['tekst']; ?></p>
	</div>		
<?php } ?>
</section>

</body>

</html>
