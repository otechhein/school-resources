<?php

require_once("../settings/Settings.php");

$settings = new Settings($db->conn);
?>

<div class="container mt-5">
  <h1>Manage Settings</h1>
  <p>You can change the settings of your website here</p>

  <form action="" method="POST">
    <h2>Meta Contents</h2>
    <table class="table">
      <tr>
        <td>Title</td>
        <td><input type="text" class="form-control" required name="title" placeholder="Please enter a title" value="<?php echo security($settings->title); ?>" /></td>
      </tr>
      <tr>
        <td>Description</td>
        <td><textarea class="form-control" required name="description" placeholder="Please enter a description"><?php echo security($settings->description); ?></textarea></td>
      </tr>
      <tr>
        <td>Keywords</td>
        <td><input type="text" class="form-control" required name="keywords" placeholder="Please enter keywords" value="<?php echo security($settings->keywords); ?>" /></td>
      </tr>
    </table>

    <h2>Sections</h2>
    <table class="table">
      <tr>
        <td>Header</td>
        <td><input type="text" class="form-control" required name="header" placeholder="Please enter text of the header" value="<?php echo security($settings->header); ?>" /></td>
      </tr>
      <tr>
        <td>Footer</td>
        <td><input type="text" class="form-control" required name="footer" placeholder="Please enter text of the footer" value="<?php echo security($settings->footer); ?>" /></td>
      </tr>
    </table>

    <h2>E-mail</h2>
    <table class="table">
      <tr>
        <td>E-mail Server</td>
        <td><input type="text" class="form-control" name="emailServer" placeholder="Please enter an email server" value="<?php echo security($settings->emailServer); ?>" /></td>
      </tr>
      <tr>
        <td>E-mail Address</td>
        <td><input type="email" class="form-control" name="email" placeholder="Please enter e-mail address" value="<?php echo security($settings->email); ?>" /></td>
      </tr>
      <tr>
        <td>E-mail Password</td>
        <td><input type="password" class="form-control" name="password" placeholder="Please enter your e-mail password" value="<?php echo security($settings->password); ?>" /></td>
      </tr>
      <tr>
        <td><button type="submit" class="btn btn-primary" name="change">Save Changes</button></td>
      </tr>
    </table>
  </form>
</div>