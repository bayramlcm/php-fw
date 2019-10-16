# php-fw
## Örnek Controller
```php
<?php
class Home extends Controller {
  function index() {
    echo "Merhaba Dünya!";
    // NOTE: Model Yükleme
    $this->loadModel('Users');
    // NOTE: View Yükleme ve Değişkenleri gönderme
    $data = [
      'users' => $this->Users->getAll(),
    ];
    $this->loadView('home', $data);
  }
}
?>
```
## Örnek Model
```php
<?php
class Users {
  function getAll() {
    return [
      'Bayram',
      'Hidayet'
    ];
  }
}
?>
```
## Örnek View
```php
<table>
  <tr>
    <td>İsim</td>
  </tr>
  <?php foreach($users as $user): ?>
    <tr>
      <td><?=$user?></td>
    </tr>
  <?php endforeach; ?>
</table>
```
