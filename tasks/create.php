<div class="formPopUp" id="createTask">
    <form action="app/Http/Controllers/tasksController.php" method="POST" class="createForm">      
        <div class="createBox">
            <div class="inputTypes">   
                <div class="form-group">
                    <label for="title">Taak</label>
                    <input type="text" name="title" class="create" required>
                </div>

                <div class="form-group">
                    <label for="department">Afdeling</label>   
                    <input type="text" name="department" class="create" required>
                </div>

                <div class="form-group">
                    <label for="deadline">Deadline</label>   
                    <input type="date" name="deadline" class="create" id="deadline">
                </div>

                <div class="form-group">
                    <button type="submit" class="closeButton" onclick="closeForm()">Taak aanmaken</button>
                </div>

            </div>

        </div>
    </form>
</div>