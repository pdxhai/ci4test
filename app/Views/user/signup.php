
<br>
<div class="container">
  <h2>Sign up</h2>
  <?= form_open('/signup') ?>
  <div class="form-group">
    <input type="text" name="username" value="<?= set_value('username') ?>" class="form-control" placeholder="Username">
  </div>
  <div class="form-group">
    <input type="text" name="email" value="<?= set_value('email') ?>" class="form-control" placeholder="Email address">
  </div>
  <div class="form-group">
    <input type="password" name="password" value="<?= set_value('password') ?>" class="form-control" placeholder="Create a password">
  </div>
  <button type="submit" class="btn btn-primary">Sign up</button>
  <?= '</form>' ?>
</div>
