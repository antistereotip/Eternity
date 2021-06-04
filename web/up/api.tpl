<?php include 'inc/header.php'; ?>
<?php include 'inc/meni.php'; ?>

<section>
<?php foreach ($this->sadrzaj as $row) { ?>
	<div>
	<h1><?php echo $row['naslov']; ?></h1>
	<h2>Autor: <?php echo $row['autor']; ?><h2>
	<h2>Tema: <?php echo $row['tema']; ?></h2>
	<p><?php echo $row['tekst']; ?></p>
	</div>	
<?php } ?>
</section>

<aside>
<?php foreach ($this->strana as $row) { ?>
        <div>
        <h1><?php echo $row['naslov']; ?></h1>
        <h2><?php echo $row['autor']; ?><h2>
        <p><a href="<?php echo $row['link']; ?>"><?php echo $row['link']; ?></a></p>
        </div>
<?php } ?>
</aside>

<?php include 'inc/footer.php'; ?>
