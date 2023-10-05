<!DOCTYPE html>
<html>
<head>
    <title>Vehicle List</title>
</head>
<body>
    <h1>Vehicle List</h1>
    <ul>
        <?php foreach ($vehicles as $vehicle): ?>
            <li><?php echo $vehicle['name']; ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
