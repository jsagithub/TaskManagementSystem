<?php

namespace App;

class TaskModel
{
    /**
     * @var type|\PDO
     */
    private $pdo;

    public function __construct()
    {
        $this->pdo = (new SQLiteConnection())->connect();
        if ($this->pdo != null)
            echo 'Connected to the SQLite database successfully!';
        else
            echo 'Whoops, could not connect to the SQLite database!';

    }

    public function addTask(Task $task)
    {
        $sql = "INSERT INTO tasks (task_name, description) VALUES (:task_name, :description)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':task_name', $task->task_name);
        $stmt->bindParam(':description', $task->description);

        if ($stmt->execute()) {
            return $this->pdo->lastInsertId();
        }

        return null;
    }
    public function getTasks()
    {
        $sql = "SELECT * FROM tasks";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $tasks = [];
        while ($row = $stmt->fetch(\PDO::FETCH_ASSOC)) {
            $task = new Task();
            $task->id = $row['id'];
            $task->task_name = $row['task_name'];
            $task->description = $row['description'];
            $task->completed = $row['completed'];
            $task->created_at = $row['created_at'];
            $task->finished_at = $row['finished_at'];
            $tasks[] = $task;
        }
        return $tasks;
    }
}