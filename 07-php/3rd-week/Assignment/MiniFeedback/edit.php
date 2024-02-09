<?php include 'inc/header.php'; ?>

<?php
    if (isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM feedbacks WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('i', $id);
       if($stmt->execute()){
         $results = $stmt->get_result();
         $feeback = $results->fetch_all(MYSQLI_ASSOC);
       }

//        echo '<pre>';
//        var_dump($feeback);
//        echo '</pre>';
// die;
       if(!empty($feeback)){
         $id = $feeback[0]['id'];
         $name = $feeback[0]['name'];
         $email = $feeback[0]['email'];
         $body = $feeback[0]['body'];
       }
    }else{
        echo "NG";
    }
?>

<h2>Edit Form</h2>

<form method="POST" action="actions/update.php" class="mt-4 w-75">
    <input type="hidden" name="id" value="<?= $id ?>">
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control <?php echo !$nameErr ?:
                                                    'is-invalid'; ?>" id="name" name="name" placeholder="Enter your name" value="<?= $name ?>">
        <div id="validationServerFeedback" class="invalid-feedback">
            Please provide a valid name.
        </div>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control <?php echo !$emailErr ?:
                                                    'is-invalid'; ?>" id="email" name="email" placeholder="Enter your email" value="<?= $email ?>">
    </div>
    <div class="mb-3">
        <label for="body" class="form-label">Feedback</label>
        <textarea class="form-control <?php echo !$bodyErr ?:
                                            'is-invalid'; ?>" id="body" name="body" placeholder="Enter your feedback"><?= $body ?></textarea>
    </div>
    <div class="mb-3">
        <input type="submit" name="submit" value="Update" class="btn btn-dark w-100">
    </div>
</form>

<?php include 'inc/footer.php'; ?>