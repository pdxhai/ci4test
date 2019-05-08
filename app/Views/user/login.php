
<br>
<div class="container">
  <h2>Log in</h2>
  <?= form_open('/login') ?>
  <div class="form-group">
    <input type="text" name="username" value="<?= set_value('username') ?>" class="form-control" placeholder="Username">
  </div>
  <div class="form-group">
    <input type="password" name="password" value="<?= set_value('password') ?>" class="form-control" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Log in</button> &nbsp;
  <a href="/forgot-password">Forgot password?</a>
  <?= '</form>' ?>
</div>
