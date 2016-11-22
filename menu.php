<?php
 $curpage = basename($_SERVER['PHP_SELF']);
?>

<ul class="nav nav-pills">
	<li><a href="index.php" <?php if ($curpage == 'index.php') { echo 'class="active"'; } ?>>Hjem</a></li>
	<li><a href="news.php" <?php if ($curpage == 'news.php') { echo 'class="active"'; } ?>>Nyheder</a></li>
	<li><a href="elder.php" <?php if ($curpage == 'elder.php') { echo 'class="active"'; } ?>>Ældre</a></li>
	<li><a href="profile.php" <?php if ($curpage == 'profile.php') { echo 'class="active"'; } ?>>Profil</a></li>
	<li><a href="contact.php" <?php if ($curpage == 'contact.php') { echo 'class="active"'; } ?>>Kontakt</a></li>
	<li class="icon"><a href="javascript:void(0);" onclick="myFunction()">&#9776;</a></li>
</ul>