<?php
require_once "../backend/conn.php";
$id = $_SESSION['user_id'];

$query = "SELECT * FROM taken WHERE created_by = :id";

$statement = $conn->prepare($query);

$statement->execute([
    ":id" => $id,
]);

$edit = $statement->fetch(PDO::FETCH_ASSOC);
?>

<?php
if (isset($editTask))
{ ?>
    <div class="tasks hide">

        <div class="taskAlign">
            <h1 class="editTitle">Bewerken</h1>
            <a onclick="toggleEdit()" class="editTask"><i class="fa-solid fa-x"></i></a>
        </div>

        <form action="../app/Http/Controllers/tasksController.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $editTask["id"]?>"/>
            <input type="hidden" name="action" value="update">

            <div class="formGroup">
                <label for="title">Taak</label>
                <input type="text" name="title" class="edit" value="<?php echo $editTask["title"]?>">
            </div>

            <div class="formGroup">
                <label for="department">Afdeling</label>
                <input type="text" name="department" class="edit" value="<?php echo $editTask["department"]?>">
            </div>

            <div class="formGroup">
                <label for="status">Status</label>
                <div class="statusChoice">
                    <div>
                        <input type="radio" name="status" value="To do" <?= $editTask['status'] === 'To do' ? 'checked' : '' ?>>
                        <label for="todo">To do</label>
                    </div>
                    <div>
                        <input type="radio" name="status" value="Doing" <?= $editTask['status'] === 'Doing' ? 'checked' : '' ?>>
                        <label for="doing">Doing</label>
                    </div>
                    <div>
                        <input type="radio" name="status" value="Done" <?= $editTask['status'] === 'Done' ? 'checked' : '' ?>>
                        <label for="done">Done</label>
                    </div>
                </div>
            </div>

            <div class="formGroup">
                <label for="deadline">Deadline</label>   
                <input type="date" name="deadline" class="edit" id="deadline" value="<?php echo $editTask["deadline"]?>">
            </div>
            
            <div class="editFormButtons">
                <button type="submit" class="closeEditButton" name="action" value="update" onclick="toggleEdit()">Bewerken</button>
                <button type="submit" class="closeEditButton" name="action" value="delete" onclick="toggleEdit()">Verwijderen</button>
            </div>
        </form>
    </div>
<?php } ?>