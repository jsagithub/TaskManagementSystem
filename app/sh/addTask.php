<?php
namespace App;
require '../../vendor/autoload.php';

$taskName = readline("Enter task name: ");
$taskDescription = readline("Enter task description: ");

$task = new Task();
$task->task_name = $taskName;
$task->description = $taskDescription;
$taskModel = new TaskModel();
$taskId = $taskModel->addTask($task);
echo "Task added with ID: $taskId";