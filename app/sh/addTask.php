<?php
namespace App;
require '../../vendor/autoload.php';

$taskName = readline("Enter task name: ");
echo ("Suggestion task description:\n");

$context = stream_context_create(array(
    'http' => array(
        'timeout' => 36000      // Timeout in seconds
    )
));

$response = file_get_contents('http://127.0.0.1:8000/task_description/'.$taskName, false, $context);
echo $response;
$taskDescription = readline("Enter task description: ");

$task = new Task();
$task->task_name = $taskName;
$task->description = $taskDescription;
$taskModel = new TaskModel();
$taskId = $taskModel->addTask($task);
echo "Task added with ID: $taskId";