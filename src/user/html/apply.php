<?php

echo 'わーーーひらけたーー';

require_once(__DIR__  . '/../app/config.php');

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/normalize.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/apply.css">
    <title>申し込みページ</title>
</head>

<body>
    <header>
        <div class="headerTitle text-center fs-2">
            Craft
        </div>
        <div class="navigations mt-4">
            <ul class="d-flex justify-content-center mb-0">
                <a href="" class="navigation me-5">
                    <li>就活サイト</li>
                </a>
                <a href="" class="navigation me-5">
                    <li>就活支援サービス</li>
                </a>
                <a href="" class="navigation me-5">
                    <li>自己分析診断ツール</li>
                </a>
                <a href="" class="navigation me-5">
                    <li>ES添削サービス</li>
                </a>
                <a href="" class="navigation me-5">
                    <li>就活エージェント</li>
                </a>
                <a href="" class="navigation me-5">
                    <li>就職の教科書とは</li>
                </a>
                <a href="" class="navigation me-5">
                    <li>お問い合わせ</li>
                </a>
            </ul>
        </div>
    </header>
    <main class="w-75">
        <div class="text-center p-5 ms-5 me-5 compare">
            <div class="mt-3 mb-5 ms-5 me-5 title ">
                比較リスト
            </div>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">エージェンシー</th>
                            <th scope="col">得意業界</th>
                            <th scope="col">ES添削</th>
                            <th scope="col">面接対策</th>
                            <th scope="col">即日連絡</th>
                            <th scope="col">担当者変更</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        申し込む
                                    </label>
                                </div>
                            </td>
                            <th scope=" row">
                                <a href="./company.html">
                                    <img src="../img/posseLogo.png" alt="">
                                </a>
                            </th>
                            <td>コンサル</td>
                            <td>◯</td>
                            <td>✕</td>
                            <td>◯</td>
                            <td>✕</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        申し込む
                                    </label>
                                </div>
                            </td>
                            <th scope=" row">
                                <a href="./company.html">
                                    <img src="../img/posseLogo.png" alt="">
                                </a>
                            </th>
                            <td>商社</td>
                            <td>✕</td>
                            <td>◯</td>
                            <td>✕</td>
                            <td>◯</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        申し込む
                                    </label>
                                </div>
                            </td>
                            <th scope="row">
                                <a href="./company.html">
                                    <img src="../img/posseLogo.png" alt="">
                                </a>
                            </th>
                            <td>サービス</td>
                            <td>◯</td>
                            <td>✕</td>
                            <td>✕</td>
                            <td>◯</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        申し込む
                                    </label>
                                </div>
                            </td>
                            <th scope=" row">
                                <a href="./company.html">
                                    <img src="../img/posseLogo.png" alt="">
                                </a>
                            </th>
                            <td>インフラ</td>
                            <td>✕</td>
                            <td>✕</td>
                            <td>◯</td>
                            <td>◯</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        申し込む
                                    </label>
                                </div>
                            </td>
                            <th scope="row">
                                <a href="./company.html">
                                    <img src="../img/posseLogo.png" alt="">
                                </a>
                            </th>
                            <td>IT</td>
                            <td>◯</td>
                            <td>✕</td>
                            <td>✕</td>
                            <td>◯</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="text-center">
            <a href="./toppage.php">
                <button type="button" class="btn btn-success mt-5">トップページに戻る</button>
            </a>
        </div>
        <div>
            <form class="text-center p-5 ms-5 me-5 compare" action="check.php" method="post" id="inquiry">
                <div class=" mb-3 ms-5 me-5 text-center title">
                    申し込みフォーム
                </div>
                <div>
                    <div class="form-group w-50 mt-3">
                        <label>お名前</label>
                        <input class="form-control" id="name" name="name" placeholder="お名前をご入力ください">
                    </div>
                    <div class="form-group w-50 mt-3">
                        <label>生年月日</label>
                        <input class="form-control" id="birthday" name="birthday" placeholder="お名前をご入力ください">
                    </div>
                    <div class="form-group w-50 mt-3">
                        <label>大学名</label>
                        <input class="form-control" id="university" name="university" placeholder="大学名をご入力ください">
                    </div>
                    <div class="form-group w-50 mt-3">
                        <label>電話番号</label>
                        <input class="form-control" id="phone-number" name="phone" placeholder="電話番号をご入力ください">
                    </div>
                    <div class="form-group w-50 mt-3">
                        <label>住所</label>
                        <input class="form-control" id="address" placeholder="住所をご入力ください" name="address">
                    </div>
                    <div class="form-group w-50 mt-3">
                        <label for="exampleInputEmail1">メールアドレス</label>
                        <!-- <input type="text" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="メールアドレスをご入力ください"> -->
                        <input type="text" name="email" size="30" id="email" class="text2" placeholder="例）xxx@example.com">
                    </div>
                    <!-- <div>
                        <div class="form-check mt-3 w-50">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="email">
                            <label class="form-check-label" for="flexCheckDefault">
                                弊社のプライバシーポリシーに同意いたしますか？
                            </label>
                            <a href="" class="privacy-policy">
                                <div>株式会社boozer プライバシーポリシー</div>
                            </a>
                        </div>
                    </div> -->
                </div>
                <div class="submit">
                    <input type="submit" value="確認画面へ">
                </div>
                <!-- <a href="../html/thanks.html">
                    <button type="button" class="btn btn-success mt-5">上記で申し込む</button>
                </a> -->
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../js/apply.js"></script>
</body>

</html>