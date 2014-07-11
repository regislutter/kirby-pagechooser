<?php $pages = $GLOBALS['pages']; ?>

<select name="<?php echo $name ?>">
  <?php foreach($pages as $p): ?>
  <option<?php if($p->uid() == $value) echo ' selected="selected"' ?> value="<?php echo $p->uid() ?>"><?php echo html($p->title()) ?></option>
  <?php endforeach ?>
</select>