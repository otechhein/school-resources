<?php

require_once("../classes/About.php");

$about = new About($db->conn);

$getAbout = $about->getAbout()->fetch(PDO::FETCH_OBJ);
$getEducation = $about->getEducations();
$getCertificate = $about->getCertificates();

?>

<div class="container mt-5">
  <form action="?page=4" method="POST">
    <div class="form-group">
      <label for="headline">Headline</label>
      <input type="text" class="form-control" required name="headline" placeholder="Enter the headline" value="<?php echo $getAbout->Headline; ?>" />
    </div>
    
    <div class="form-group">
      <label for="content">Content</label>
      <textarea class="form-control" name="content" placeholder="Enter the content"><?php echo $getAbout->Content; ?></textarea>
    </div>

    <button type="submit" class="btn btn-primary" name="changeAbout">Save Changes</button>
    <input type="reset" class="btn btn-secondary" />
  </form>
</div>

<div class="container mt-5">
  <h1>Add a new Education</h1>
  <form action="?page=4" method="POST" class="form-inline">
    <div class="form-group mr-2">
      <input type="text" class="form-control" name="education" required placeholder="Enter an education" />
    </div>
    
    <div class="form-group mr-2">
      <input type="number" class="form-control" name="graduationDate" required />
    </div>

    <button name="addEducation" type="submit" class="btn btn-success">Add a new one</button>
  </form>
</div>

<div class="container mt-5">
  <?php
  if ($getEducation->rowCount()) {
    while ($education = $getEducation->fetch(PDO::FETCH_OBJ)) { ?>
      <h2>Manage Educations</h2>
      <form action="?page=4" method="POST" class="form-inline">
        <div class="form-group mr-2">
          <input type="text" class="form-control" required name="education" placeholder="Enter the education" value="<?php echo $education->Education; ?>" />
        </div>
        
        <div class="form-group mr-2">
          <input type="text" class="form-control" required name="graduationDate" placeholder="Enter the graduation date" value="<?php echo $education->GraduationDate; ?>" />
        </div>

        <input type="hidden" name="id" value="<?php echo $education->Id; ?>" />
        <button type="submit" class="btn btn-primary" name="changeEducation">Edit</button>
        <button type="submit" class="btn btn-danger" name="deleteEducation">Delete</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
      </form>
  <?php }
  } else echo "<div role='alert' class='container'>There is no any education info</div>";
  ?>
</div>

<div class="container mt-5">
  <h1>Add a new Certificate</h1>
  <form action="?page=4" method="POST" class="form-inline">
    <div class="form-group mr-2">
      <input type="text" class="form-control" name="certificate" required placeholder="Enter a certificate" />
    </div>
    
    <div class="form-group mr-2">
      <input type="number" class="form-control" name="issuedDate" required />
    </div>

    <button name="addCertificate" type="submit" class="btn btn-success">Add a new one</button>
  </form>
</div>

<div class="container mt-5">
  <h2>Manage Certificates</h2>
  <?php
  if ($getCertificate->rowCount()) {
    while ($certificate = $getCertificate->fetch(PDO::FETCH_OBJ)) { ?>
      <form action="?page=4" method="POST" class="form-inline">
        <div class="form-group mr-2">
          <input type="text" class="form-control" required name="certificate" placeholder="Enter the certificate" value="<?php echo $certificate->Certificate; ?>" />
        </div>
        
        <div class="form-group mr-2">
          <input type="text" class="form-control" required name="issuedDate" placeholder="Enter the issued date" value="<?php echo $certificate->IssuedDate; ?>" />
        </div>

        <input type="hidden" name="id" value="<?php echo $certificate->Id; ?>" />
        <button type="submit" class="btn btn-primary" name="changeCertificate">Edit</button>
        <button type="submit" class="btn btn-danger" name="deleteCertificate">Delete</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
      </form>
  <?php }
  } else echo "<div role='alert' class='container'>There is no any certificate info</div>";
  ?>
</div>