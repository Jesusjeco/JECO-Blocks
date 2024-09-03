<?php
$data = get_field('data');
$blockID = $block['id'];
//This classes are coming from the advance options in every block
$advanceClasses = isset($block['className']) ? $block['className'] : '';
?>

<div class="hello-world <?= esc_attr($advanceClasses); ?>" id="<?= esc_attr($blockID); ?>">
  <h1>Render block</h1>
  <p>This is the render block</p>
  <p><?= esc_html($data['text'] ?? ""); ?></p>
</div>
