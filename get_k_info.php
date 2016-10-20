<!-->今度はプッシュですかそうですか ss</!-->
<!-->ほほう</!-->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>検索結果</title>
</head>
<body>
    <?php
        header( "Content-Type: text/html; Charset=utf-8" );
        header( "pragma: no-cache" );
        header( "Expires: Wed, 31 May 2000 14:59:58 GMT" );
        header( "Cache-control: no-cache" );

        $server   = 'localhost:8080';
        $dbname   = 'lightbox';
        $user     = 'root';
        $password = 'password';

        // 接続
        $connect = @mysql_connect( $server, $user, $password );
        if ( !$connect ) {
            print "接続エラーです";
            exit();
        }

        // DB選択
        mysql_select_db( $dbname, $connect );

        // クエリ
        $result = mysql_query("select * from 社員マスタ", $connect);
        if ( !$result ) {
            die('Invalid query: ' . mysql_error());
        }

        // 列数
        $field_count = mysql_num_fields( $result );
        $count = 0;
        print "<table>\n";
        while ($row = mysql_fetch_array($result)) {
            print "<tr>\n";
            print "\t<td>" . ($count + 1) . "</td>\n";
            for( $i = 0; $i < $field_count; $i++ ) {
                print "\t<td>{$row[$i]}</td>\n";
            }
            print "</TR>\n";
            $count++;
        }
        print "</table>";

        // メモリを開放ですが、通常は必要ありません
        mysql_free_result($result);

        // 接続解除
        mysql_close($connect);
    ?>
</body>
</html>