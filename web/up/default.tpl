<?php include 'inc/header.php'; ?>
<?php include 'inc/meni.php'; ?>

<section>
<?php foreach ($this->sadrzaj as $row) { ?>
	<div>
	<h1><?php echo $row['naslov']; ?></h1>
	<h2><?php echo $row['autor']; ?><h2>
	<h2><?php echo $row['tema']; ?></h2>
	<p><?php echo $row['tekst']; ?></p>
	</div><hr />		
<?php } ?>
</section>

<?php include 'inc/footer.php'; ?>

