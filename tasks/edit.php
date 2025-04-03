<div class="tasks hide">

    <div class="taskAlign">
        <h1 class="editTitle">Bewerken</h1>
        <a onclick="toggleEdit()" class="editTask"><i class="fa-solid fa-x"></i></a>
    </div>

    <form>
        <div class="formGroup">
            <label for="title">Taak</label>
            <input type="text" name="title" class="edit">
        </div>

        <div class="formGroup">
            <label for="department">Afdeling</label>
            <input type="text" name="department" class="edit">
        </div>

        <div class="formGroup">
            <label for="status">Status</label>
            <div class="statusChoice">
                <div>
                    <input type="radio" name="status" value="To do">
                    <label for="todo">To do</label>
                </div>
                <div>
                    <input type="radio" name="status" value="Doing">
                    <label for="doing">Doing</label>
                </div>
                <div>
                    <input type="radio" name="status" value="Done">
                    <label for="done">Done</label>
                </div>
            </div>
        </div>

        <div class="formGroup">
            <label for="deadline">Deadline</label>   
            <input type="date" name="deadline" class="edit" id="deadline">
        </div>

        
        <div class="editFormButtons">
            <button type="submit" class="closeEditButton" onclick="toggleEdit()">Bewerken</button>
            <button type="submit" class="closeEditButton" onclick="toggleEdit()">Verwijderen</button>
        </div>
    </form>
    
</div>