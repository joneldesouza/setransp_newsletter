<?php

$articles = $node->field_reference_articles['und'];

?>

<?php kpr($node); ?>
<body style="margin:0;">
  <h1><?php print $node->title; ?></h1>

  <?php foreach ($articles as $item) : ?>
    <a href="/node/<?php print($item['entity']->nid); ?>">
      <?php print($item['entity']->title); ?>
    </a>
    <?php print $item['entity']->body['und'][0]['value']; ?>
  <?php endforeach; ?>

</body>
