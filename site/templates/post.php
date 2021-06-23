<?= css("assets/css/post.css")?>

<h1 class="<?= $long_title ? 'small-text' : null ?>">
  <?= $page->title() ?>
</h1>

<p><?= $page->text() ?></p>
<p><?= $page->post_type() ?></p>


