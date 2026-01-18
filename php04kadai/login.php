<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ログイン</title>
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style>
        .form-row {
            display: flex;
            align-items: center;
            margin-bottom: 16px;
        }

        .form-row label {
            width: 80px;
            margin-bottom: 0;
            font-size: 16px;
        }

        .form-row input[type="text"],
        .form-row input[type="password"] {
            flex: 1;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
            box-sizing: border-box;
        }
    </style>
</head>

<body>

    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <span class="page-title">ログイン</span>
                </div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <form method="POST" action="login_act.php">
        <div class="jumbotron">
            <fieldset>
                <legend>ログイン</legend>

                <div class="form-row">
                    <label for="lid">ID：</label>
                    <input type="text" id="lid" name="lid" required>
                </div>

                <div class="form-row">
                    <label for="lpw">PW：</label>
                    <input type="password" id="lpw" name="lpw" required>
                </div>

                <input type="submit" value="ログイン">
            </fieldset>
        </div>
    </form>
    <!-- Main[End] -->

</body>

</html>
