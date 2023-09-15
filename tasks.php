<?php
// Initialize tasks array
$tasks = [];

// Handle task addition
if (isset($_POST['add'])) {
    $task = $_POST['task'];
    if (!empty($task)) {
        array_push($tasks, $task);
        file_put_contents('tasks.txt', implode(PHP_EOL, $tasks));
    }
}

// Handle task deletion
if (isset($_GET['delete'])) {
    $taskIndex = $_GET['delete'];
    if (isset($tasks[$taskIndex])) {
        unset($tasks[$taskIndex]);
        file_put_contents('tasks.txt', implode(PHP_EOL, $tasks));
    }
}

// Read tasks from a text file
if (file_exists('tasks.txt')) {
    $tasks = file('tasks.txt', FILE_IGNORE_NEW_LINES);
}

// Display tasks
foreach ($tasks as $index => $task) {
    echo '<li class="task">' . htmlspecialchars($task) . ' <a href="tasks.php?delete=' . $index . '" class="delete">Delete</a></li>';
}
?>
