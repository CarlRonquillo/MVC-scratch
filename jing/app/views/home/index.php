<?php include('header.php'); ?>

<?php foreach ($data['users'] as $user) { ?>
		<p><?php echo $user['id']; ?></p>
		<p><?php echo $user['Username']; ?></p>
		<p><?php echo $user['Password']; ?></p>
<?php } ?>

<?php include('footer.php'); ?>