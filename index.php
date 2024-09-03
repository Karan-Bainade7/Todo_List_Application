<?php
include 'db.php';

// Fetch tasks from database
$sql = "SELECT * FROM tasks ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <h1>To-Do List</h1>
        <form action="add_task.php" method="post">
            <input type="text" name="task" placeholder="Enter a new task..." required>
            <button type="submit">Add Task</button>
        </form>

        <ul>
            <?php while($row = $result->fetch_assoc()): ?>
                <li>
                    <?php echo $row['task']; ?>
                    <a href="delete_task.php?id=<?php echo $row['id']; ?>">Delete</a>
                </li>
            <?php endwhile; ?>
        </ul>
    </div>
    <script src="js/script.js"></script>
</body>
</html>

