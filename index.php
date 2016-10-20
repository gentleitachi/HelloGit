<!-->はい</!-->
<!DOCTYPE html>
<html lang=ja>
<head>
    <meta charset="UTF-8">
    <title>竣工登録DB</title>
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>
    <form action="get_K_info.php" method="POST" accept-charset="utf-8">
        <table align="center">
            <thead>
                <tr>
                    <td colspan="3" align="center">
                        <h2>竣工登録DB</h2>
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>検索条件を入力して、検索ボタンを押してください。</td>
                </tr>
                <tr>
                    <td>回線依頼番号</td>
                    <td><input type="text" name="n_knum" placeholder="k000000000"></td>
                </tr>
                <tr>
                    <td>工事種別</td>
                    <td>
                        <select name="n_construct">
                            <option value="1">通常開通</option>
                            <option value="2">後分岐工法X工事</option>
                            <option value="3">後分岐工法Y工事</option>
                            <option value="4">後分岐工法Z工事</option>
                            <option value="5">再利用開通</option>
                            <option value="6">宅内全残置コンセント再利用</option>
                            <option value="7">通常流用</option>
                            <option value="8">流用継ぎ足し</option>
                            <option value="9">レベルロー再利用開通</option>
                            <option value="10">UQ開通</option>
                            <option value="11">ミニギガ棟開通</option>
                            <option value="12">ミニギガID開通</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" value="検索"></td>
                    <td><input type="reset" value="クリア" colspan="2"></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>