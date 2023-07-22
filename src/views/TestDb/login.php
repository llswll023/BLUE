<?php require_once APPROOT . '/src/views/include/header.php'; ?>
<h1 class="p-3 mb-2 bg-info-subtle text-emphasis-inf text-center fw-bold">로그인페이지</h1>
<h2 class="fst-italic text-center">This page tests the connection to a database, using a typical "to-do list app" to
    perform CRUD operations</h2>
<hr>
<h3 class="fw-bold">로그인하기</h3>
<form action="<?= URLROOT; ?>/test/<?= $user->nickname;
$user->pw; ?>/login" method="post">
    <div class="mb-3">
        <label for="InputNickname" class="form-label">로그인 하시오</label>
        <input type="text" class="form-control" name="nickname" id="nickname" aria-describedby="taskHelp">
        <div id="emailHelp" class="form-text">Write Your Nickname</div>
        <input type="text" class="form-control" name="pw" id="pw" aria-describedby="taskHelp">
        <div id="emailHelp" class="form-text">Write Your pswd</div>

    </div>
    <input type="submit" class="btn btn-primary" value="Add user">
</form>
<br><br><br><br>

<?php require_once APPROOT . '/src/views/include/footer.php'; ?>