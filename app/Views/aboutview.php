<?= $this -> extend("layouts/base");?>

<?= $this -> section("content");?>
<div class="container">
  <h3><?= $page_heading; ?></h3>
  <p>In this example, the navigation bar is hidden on small screens and replaced by a button in the top right corner (try to re-size this window).
  <p>Only when the button is clicked, the navigation bar will be displayed.</p>
</div>

<section>
    <?= $this -> include("partials/feature"); ?>
</section>

<?= $this -> endSection();?>


