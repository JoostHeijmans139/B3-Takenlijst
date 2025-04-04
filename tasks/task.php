<div class="tasks">
    <div class="taskAlign">
        <p class="taskName"><?php echo $task['title']; ?></p>
        <a onclick="toggleEdit()" class="editTask"><i class="fa-solid fa-pen-to-square"></i></a>
    </div>
                            
    <p class="departmentName"><?php echo $task['department']; ?></p>
    <p class="deadlineName">Deadline: <?php echo $task['deadline']; ?></p>
</div>