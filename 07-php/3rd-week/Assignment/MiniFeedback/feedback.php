<?php include 'inc/header.php'; ?>

<?php
$sql = 'SELECT * FROM feedbacks';
$result = mysqli_query($conn, $sql);
$feedbacks = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>


<h2>Feedback List</h2>

<?php if (empty($feedbacks)) : ?>
  <p class="lead mt-3">There is no feedback</p>
<?php endif; ?>

<?php foreach ($feedbacks as $feedback) : ?>
  <div class="card my-3 w-75">
    <div class="card-body text-center">
      <?php echo $feedback['body']; ?>
      <div class="text-secondary mt-2">By <?php echo $feedback['name']; ?> on <?php echo date_format(
                  date_create($feedback['date']),
                  'g:ia \o\n l jS F Y'
                ); ?>
      </div>
      <div class="mt-2">
        <a href="./edit.php?id=<?=$feedback['id']?>" class="btn btn-warning">Edit</a>
        <a href="actions/delete.php?id=<?=$feedback['id']?>" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>
<?php endforeach; ?>
<?php include 'inc/footer.php'; ?>