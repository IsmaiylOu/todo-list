<!DOCTYPE html>
<html>
<head>
    <title>Simple To-Do List</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h1>To-Do List</h1>
        <form action="tasks.php" method="POST">
            <input type="text" name="task" class="task_input" required>
            <button type="submit" name="add" id="add_btn" class="add_btn">Add Task</button>
        </form>

        <div>
            <ul class="tasks_list">
                <!-- PHP code to display tasks from tasks.php -->
                <?php include 'tasks.php'; ?>
            </ul>
        </div>
    </div>
</body>
</html>
