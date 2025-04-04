<div class="tasks">

    <div class="taskAlign">
        <p class="taskName"><?php echo $task['title']; ?></p>
        <a onclick="toggleEdit()" class="editTask"><i class="fa-solid fa-pen-to-square"></i></a>
    </div>
                            
    <p class="departmentName"><?php echo $task['department']; ?></p>
    
    <?php
    $currentDeadline = new DateTime($task['deadline']);
    
    $interval = $currentDate->diff($currentDeadline)->days;
    
    $closetoDeadline = $interval <= 2 && $currentDate <= $currentDeadline;

    $markDeadline = $closetoDeadline ? 'markRed' : '';
    ?>
    
    <div class="deadlineAlign">
        <p class="deadlineName">Deadline: 
            <?php echo "<p class='task $markDeadline'>"; 
            echo ($task['deadline']); ?></p>
        <?php echo "</p>"; ?>
    </div>
    
</div>