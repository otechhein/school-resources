<?php

/*
Build a simple task management system using PHP. The application should allow users to: 
1. Add a Task: Users should be able to add a new task with a title, description, and due date. 
2. View Tasks: Display a list of tasks with details such as title, description, due date, and status.
3. Update Task Status: Users should be able to mark tasks as complete or incomplete. 
4. Delete Task: Allow users to delete a task.
5. Persistence: Save tasks to a file or database so that they persist between sessions.
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-4">
        <h2 class="mb-4">Task Management System</h2>

        <?php
        session_start();

        if (!isset($_SESSION['tasks'])) {
            $_SESSION['tasks'] = [];
        }

        // unset($_SESSION['tasks']);


        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['due_date'])) {
                $newTask = [
                    'title' => $_POST['title'],
                    'description' => $_POST['description'],
                    'due_date' => $_POST['due_date'],
                ];

                $_SESSION['tasks'][] = $newTask;
            }
        }
        ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="mb-4">
            <div class="mb-3">
                <label for="title" class="form-label">Task Title:</label>
                <input type="text" name="title" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Task Description:</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label for="due_date" class="form-label">Due Date:</label>
                <input type="date" name="due_date" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Task</button>
            <button class="btn btn-outline-danger"><a href="./delete.php" class="link-danger ">Clear All</a></button>
        </form>

        <!-- Task List -->
        <h3 class="mb-4">Task List</h3>
        <ul class="list-group mb-5">
            <?php
            if (!empty($_SESSION['tasks'])) :
                foreach ($_SESSION['tasks'] as $task) :
            ?>
                    <li class="list-group-item">
                        <strong>Title:</strong> <?php echo $task['title']; ?><br>
                        <strong>Description:</strong> <?php echo $task['description']; ?><br>
                        <strong>Due Date:</strong> <?php echo $task['due_date']; ?><br>
                    </li>
            <?php
                endforeach;
            endif;
            ?>
        </ul>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>

</body>

</html>