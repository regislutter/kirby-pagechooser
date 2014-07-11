<?php snippet('header') ?>
<?php snippet('menu') ?>
<?php snippet('submenu') ?>

<section class="content">

  <article>
    <h1><?php echo html($page->title()) ?></h1>
    <?php echo kirbytext($page->text()) ?>
    <a href="<?php foreach($pages->findByUID($page->link()) as $p){ echo $p->url(); break; } ?>" title="<?= html($page->textlink()) ?>"><?= html($page->textlink()) ?></a>
  </article>

</section>

<?php snippet('footer') ?>