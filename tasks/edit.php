<div class="tasks hide">

    <div class="taskAlign">
        <h1 class="editTitle">Bewerken</h1>
        <a onclick="toggleEdit()" class="editTask"><i class="fa-solid fa-x"></i></a>
    </div>

    <form action="../app/Http/Controllers/tasksController.php" method="POST">
        <div class="formGroup">
            <label for="title">Taak</label>
            <input type="text" name="title" class="edit" value="<?php echo $task['title']; ?>">
        </div>

        <div class="formGroup">
            <label for="department">Afdeling</label>
            <input type="text" name="department" class="edit" value="<?php echo $task['department'];?>">
        </div>

        <div class="formGroup">
            <label for="status">Status</label>
            <div class="statusChoice">
                <div>
                    <input type="radio" name="status" value="to do" <?php if($task['status'] == "to do") echo "checked";?>>
                    <label for="todo">To do</label>
                </div>
                <div>
                    <input type="radio" name="status" value="doing" <?php if($task['status'] == "doing") echo "checked";?>>
                    <label for="doing">Doing</label>
                </div>
                <div>
                    <input type="radio" name="status" value="done" <?php if($task['status'] == "done") echo "checked";?>>
                    <label for="done">Done</label>
                </div>
            </div>
        </div>

        <div class="formGroup">
            <label for="deadline">Deadline</label>   
            <input type="date" name="deadline" class="edit" id="deadline" value="<?php echo $task['deadline'];?>">
        </div>
        <input type="hidden" name="id" value="<?php echo $task['id'];?>">
        
        <div class="editFormButtons">
            <button type="submit" class="closeEditButton" name="action" value="update" onclick="toggleEdit()">Bewerken</button>
            <button type="submit" class="closeEditButton" name="action" value="delete" onclick="toggleEdit()">Verwijderen</button>
        </div>
    </form>  
</div>