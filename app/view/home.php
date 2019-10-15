<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?=$title?></title>
  </head>
  <body>
    <?=$username?>
    <table>
      <tr>
        <td>Kullanıcı Adı</td>
        <td>Yaş</td>
      </tr>
      <?php foreach($users as $user): ?>
        <tr>
          <td><?=$user['name']?></td>
          <td><?=$user['ago']?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </body>
</html>
