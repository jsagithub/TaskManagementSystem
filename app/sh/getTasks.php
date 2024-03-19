<?php
namespace App;
require '../../vendor/autoload.php';

$taskModel = new TaskModel();
$tasks = $taskModel->getTasks();
echo "Tasks:\n";
foreach ($tasks as $task) {
    echo "ID: $task->id, Task Name: $task->task_name, Description: $task->description\n";
}