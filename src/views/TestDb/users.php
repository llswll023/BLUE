<?php require_once APPROOT . '/src/views/include/header.php'; ?>
<h1 class="p-3 mb-2 bg-info-subtle text-emphasis-inf text-center fw-bold">회원가입</h1>
<h2 class="fst-italic text-center">This page tests the connection to a database, using a typical "to-do list app" to
    perform CRUD operations</h2>
<hr>
<h3 class="fw-bold">[CREATE] 회원가입하기</h3>
<form action="<?= URLROOT; ?>/test/add-user" method="post">
    <div class="mb-3">
        <label for="InputUser" class="form-label">회원가입을 위해 다음을 작성하시오</label>
        <input type="text" class="form-control" name="new_nickname" id="exampleInputTask" aria-describedby="taskHelp">
        <div id="emailHelp" class="form-text">Write Your Nickname</div>
        <input type="text" class="form-control" name="new_pw" id="exampleInputTask" aria-describedby="taskHelp">
        <div id="emailHelp" class="form-text">Write Your pswd</div>
        <input type="text" class="form-control" name="new_name" id="exampleInputTask" aria-describedby="taskHelp">
        <div id="emailHelp" class="form-text">Write Your Real Name</div>
        <input type="text" class="form-control" name="new_phone" id="exampleInputTask" aria-describedby="taskHelp">
        <div id="emailHelp" class="form-text">Write Your Phone Number</div>
        <input type="text" class="form-control" name="new_email" id="exampleInputTask" aria-describedby="taskHelp">
        <div id="emailHelp" class="form-text">Write Email</div>
    </div>
    <input type="submit" class="btn btn-primary" value="Add user">
</form>
<br><br><br><br>

<?php require_once APPROOT . '/src/views/include/footer.php'; ?>