<?php
require_once(__DIR__  . '/../../dbconnect.php');
require_once(__DIR__  . '/../app/config.php');

$pdo = getPdoInstance();

$stmt = $pdo->query("SELECT * FROM inquiry");
$inquirys = $stmt->fetchAll();

$stmt = $pdo->query("SELECT * FROM inquiry_agency");
$inquiry_agencys = $stmt->fetchAll();

$stmt = $pdo->query("SELECT * FROM agency_information");
$agency_informations = $stmt->fetchAll();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    student_delete($pdo);
}

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/student-info.css">
    <title>学生情報</title>
</head>

<body>
    <header class="text-center p-2">
        Craft
    </header>
    <main>
        <div class="row">
            <div class="main-left col-2 p-0">
                <a href="boozer-agency.php" class="text-decoration-none text-white">
                    <div class="text-center mt-5 p-2">
                        エージェンシー情報
                    </div>
                </a>
                <a href="boozer-student-info.php" class="text-decoration-none text-white">
                    <div class="text-center mt-3 p-2 left-bg-color ">
                        学生情報
                    </div>
                </a>
                <a href="boozer-claim-info.php" class="text-decoration-none text-white">
                    <div class="text-center mt-3 p-2">
                        請求情報管理
                    </div>
                </a>
            </div>
            <div class="main-right col-10">
                <div class="table">
                    <table class="table table-striped w-100 mt-5">
                        <thead class="text-center">
                            <tr>
                                <th scope="col">名前</th>
                                <th scope="col">大学</th>
                                <th scope="col">メールアドレス</th>
                                <th scope="col">電話番号</th>
                                <th scope="col">申し込み日時</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <?php foreach ($inquirys as $inquiry) : ?>
                                <?
                                $stmt = $pdo->query("SELECT * FROM inquiry_agency WHERE cryptography = '$inquiry->cryptography'");
                                $inquiry_agencys = $stmt->fetchAll();
                                ?>
                                <tr>
                                    <th scope="row"><?= $inquiry->name; ?></th>
                                    <td><?= $inquiry->university; ?></td>
                                    <td><?= $inquiry->email; ?></td>
                                    <td><?= $inquiry->phone; ?></td>
                                    <td><?= $inquiry->created_at; ?></td>
                                    <form method='POST' action="boozer-student-delete-complete.php">
                                        <td>
                                            <input type="text" value="<?= $inquiry->cryptography ?>" name="cryptography" class="d-none">
                                            <button type="submit" class="btn btn-primary btn-sm" onclick="delete_check()">削除</button>
                                        </td>
                                    </form>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>

</html>