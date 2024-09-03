<?php
include 'db.php';

if (isset($_POST['task'])) {
    $task = $_POST['task'];

    $sql = "INSERT INTO tasks (task) VALUES ('$task')";
    if ($conn->query($sql) === TRUE) {
        header('Location: index.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
