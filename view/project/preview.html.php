<?php include 'view/project/header.html.php' ?>
<?php use Goteo\Library\Text; ?>
PROYECTO / Previsualización<br />
GUÍA: <?php echo $guideText;  ?><br />
<?php include 'view/project/errors.html.php' ?>
<?php if ($finish == true) : ?>
<a href="/project/close">[LISTO PARA REVISIÓN]</a>
<?php endif; ?>
<hr />
<pre><?php echo print_r($project, 1) ?></pre>
<?php include 'view/project/footer.html.php' ?>