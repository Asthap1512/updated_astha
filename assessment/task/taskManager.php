<?php
// Start session
session_start();

// Initialize the tasks array in session if it does not exist
if (!isset($_SESSION['tasks'])) {
    $_SESSION['tasks'] = [];
}

/**
 * Add a task to the list under a specific category.
 * 
 * @param string $category The task category (e.g., Breakfast, Lunch, etc.).
 * @param string $task The task description.
 */
function addTask($category, $task) {
    if (!empty(trim($task))) {
        $_SESSION['tasks'][$category][] = $task;
    }
}

/**
 * Get all tasks under a specific category.
 * 
 * @param string $category The task category.
 * @return array
 */
function getTasks($category) {
    return isset($_SESSION['tasks'][$category]) ? $_SESSION['tasks'][$category] : [];
}

/**
 * Delete a task from a specific category.
 * 
 * @param string $category The task category.
 * @param int $taskIndex The index of the task to be deleted.
 */
function deleteTask($category, $taskIndex) {
    if (isset($_SESSION['tasks'][$category][$taskIndex])) {
        unset($_SESSION['tasks'][$category][$taskIndex]);
        $_SESSION['tasks'][$category] = array_values($_SESSION['tasks'][$category]); // Reindex array
    }
}

/**
 * Clear all tasks from all categories.
 */
function clearAllTasks() {
    $_SESSION['tasks'] = [];
}

?>

