<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Example Factory</title>
  </head>
  <body>
    <a href="#".<?= $download_url ?>></a>
    <form name="form1" method="post" action="edit.php">
        <table border="0">
          <?php foreach ($columns as $column) {
            <tr>
                <td><?= $expedient->$column->label() ?></td>
                <td><input type="text" name="name" value="<?= $expedient->$column->value() ?>"></td>
            </tr>
          } ?>
        </table>
    </form>
</body>
</html>
