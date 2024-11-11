
<?php
	include_once('taskManager.php');
    
// Handle form submissions for adding tasks
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add_task'])) {
        $category = $_POST['category'];
        $task = $_POST['task'];
        addTask($category, $task); // Add the task to the session
    }

    // Handle the Clear All button functionality
    if (isset($_POST['clear_all'])) {
        clearAllTasks();
    }
}

// Handle task deletion
if (isset($_GET['delete_task']) && isset($_GET['category'])) {
    $taskIndex = $_GET['delete_task'];
    $category = $_GET['category'];
    deleteTask($category, $taskIndex); // Delete the task
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List Manager</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="text-center mb-4">Task List Manager</h1>

    <!-- Form for Adding Tasks -->
    <form action="index.php" method="POST" class="mb-4">
        <div class="input-group">
            <select name="category" class="form-control" required>
                <option value="" disabled selected>Select Category</option>
                <option value="Breakfast">Breakfast</option>
                <option value="Lunch">Lunch</option>
                <option value="Dinner">Dinner</option>
            </select>
            <input type="text" name="task" class="form-control" placeholder="Enter task" required>
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit" name="add_task">Add Task</button>
            </div>
        </div>
    </form>

    <!-- Task Lists -->
    <h3>Breakfast Tasks</h3>
    <ul class="list-group mb-3">
        <?php foreach (getTasks('Breakfast') as $index => $task): ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo htmlspecialchars($task); ?>
                <a href="index.php?delete_task=<?php echo $index; ?>&category=Breakfast" class="btn btn-danger btn-sm">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>

    <h3>Lunch Tasks</h3>
    <ul class="list-group mb-3">
        <?php foreach (getTasks('Lunch') as $index => $task): ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo htmlspecialchars($task); ?>
                <a href="index.php?delete_task=<?php echo $index; ?>&category=Lunch" class="btn btn-danger btn-sm">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>

    <h3>Dinner Tasks</h3>
    <ul class="list-group mb-3">
        <?php foreach (getTasks('Dinner') as $index => $task): ?>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo htmlspecialchars($task); ?>
                <a href="index.php?delete_task=<?php echo $index; ?>&category=Dinner" class="btn btn-danger btn-sm">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>

    <!-- Clear All Tasks Button -->
    <form action="index.php" method="POST" class="mt-3">
        <button type="submit" name="clear_all" class="btn btn-danger btn-block">Clear All Tasks</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
