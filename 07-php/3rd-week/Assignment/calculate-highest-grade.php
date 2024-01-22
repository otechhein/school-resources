<?php
/*
 Prompts the user to enter a number of students. Dynamically generates a form with fields for each student's name, age, and grade. Upon submission, processes the form data and displays a summary table: Calculate the average age of the students. Determine the highest grade and the names of students who achieved it. Display the current date and time.
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <!-- Include Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">

            <?php
            $num_students = 0; // Initialize $num_students to avoid undefined variable warning

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Process the form data
                $num_students = $_POST["num_students"];

                // Initialize variables for average age and highest grade
                $total_age = 0;
                $highest_grade = 0;
                $highest_grade_names = [];

                // Loop through each student
                for ($i = 1; $i <= $num_students; $i++) {
                    // Check if the keys exist in the $_POST array
                    $name = isset($_POST["name"][$i]) ? $_POST["name"][$i] : "";
                    $age = isset($_POST["age"][$i]) ? (int)$_POST["age"][$i] : 0; // Cast to integer
                    $grade = isset($_POST["grade"][$i]) ? (int)$_POST["grade"][$i] : 0; // Cast to integer

                    // Update total age for calculating average
                    $total_age += $age;

                    // Check for highest grade
                    if ($grade > $highest_grade) {
                        $highest_grade = $grade;
                        $highest_grade_names = [$name];
                    } elseif ($grade == $highest_grade) {
                        // If multiple students have the same highest grade
                        $highest_grade_names[] = $name;
                    }

                    // Display student information
                    echo "<p class='mb-2'>Student $i: Name - $name, Age - $age, Grade - $grade</p>";
                }

                // Calculate average age
                $average_age = $num_students > 0 ? $total_age / $num_students : 0;

                // Display summary table
                echo "<h2 class='mt-4'>Summary</h2>";
                echo "<p>Average Age: $average_age</p>";
                echo "<p>Highest Grade: $highest_grade</p>";
                echo "<p>Names of students with the highest grade: " . implode(", ", $highest_grade_names) . "</p>";
                echo "<p>Current Date and Time: " . date("Y-m-d H:i:s") . "</p>";
            }
            ?>

            <!-- Display form to enter the number of students -->
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="mt-4">

                <div class="mb-3">
                    <label for="num_students" class="form-label">Enter the number of students:</label>
                    <input type="number" name="num_students" class="form-control" required min="1" value="<?php echo $num_students; ?>">
                </div>

                <?php
                // Dynamically generate form fields for each student
                for ($i = 1; $i <= $num_students; $i++) {
                    ?>
                    <div class="mb-3">
                        <label for="name[<?php echo $i; ?>]" class="form-label">Student <?php echo $i; ?> Name:</label>
                        <input type="text" name="name[<?php echo $i; ?>]" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="age[<?php echo $i; ?>]" class="form-label">Student <?php echo $i; ?> Age:</label>
                        <input type="number" name="age[<?php echo $i; ?>]" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="grade[<?php echo $i; ?>]" class="form-label">Student <?php echo $i; ?> Grade:</label>
                        <input type="number" name="grade[<?php echo $i; ?>]" class="form-control" required>
                    </div>

                    <?php
                }
                ?>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

        </div>
    </div>
</div>

<!-- Include Bootstrap 5 JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"></script>

</body>
</html>
