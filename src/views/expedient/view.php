<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Example Factory</title>
  </head>
  <body>
    <a href="#".<?= $expedient->download_pdf ?>></a>
    <?php renderPartial($expedient->form_view, $expedient) ?>
</body>
</html>
