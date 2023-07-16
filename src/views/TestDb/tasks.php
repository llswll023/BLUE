<?php require_once APPROOT . '/src/views/include/header.php'; ?>
    <h1>Test Database</h1>
    <h2>This page tests the connection to a database, using a typical "to-do list app" to perform CRUD operations</h2>
    <hr>
    <h3>[CREATE] Add new task</h3>
    <form>
     <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Add new task</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">Write Description</div>
     </div>
     <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <h3>[READ] Get all tasks:</h3>

    <ul>
        <?php foreach($data as $task): ?>
            <li> 
                <?php if ($task->completed): ?> 
                     <strike> <?= $task->description; ?> </strike> &emsp;
                <?php else : ?>
                    <?= $task->description; ?> &emsp;
                    <form action="<?= URLROOT; ?>/test/<?= $task->id; ?>/mark-done" method="post">
                        <input type="submit" class="btn btn-primary" value="Mark as done">
                    </form>
                <?php endif; ?>
                
                <form action="<?= URLROOT; ?>/test/<?= $task->id; ?>/delete" method="post">
                    <input type="submit" class="btn btn-primary" value="Delete">
                </form>                
            </li>
        <?php endforeach; ?>
    </ul>
<?php require_once APPROOT . '/src/views/include/footer.php'; ?>