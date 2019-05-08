
<br>
<div class="container">
  <h2>Forgot your password?</h2>
  <?= form_open('/forgot-password') ?>
  <div class="form-group">
    <input type="text" name="email" value="<?= set_value('email') ?>" class="form-control" placeholder="Email address">
  </div>
  <button type="submit" class="btn btn-primary">Get new password</button>
  <?= '</form>' ?>
</div>
