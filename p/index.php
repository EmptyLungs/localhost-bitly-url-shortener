<?php
/**
 * Created by PhpStorm.
 * User: rint
 * Date: 14.08.2016
 * Time: 22:50
 */

?>

<!DOCTYPE html>
<html>
<head>
    <script src="jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="http://scriptjava.net/source/scriptjava/scriptjava.js"></script>

    <script>
        $(function () {
            $('form').on('submit', function (e) {
                e.preventDefault();
                $.ajax({
                    type: 'post',
                    url: 'script.php',
                    data: $('form').serialize(),
                    success: function(data) {
                        $("#result").html(data);

                    }
                });
            });
        });

    </script>

    <title>link shortener</title>
</head>
<body>

    <div id="container">
        <form method="post">
            <select name = 'action' required>
                <option value = "localhost">localhost</option>
                <option value = "bit">bit.ly</option>
            </select>
            <div>
                <label>Enter your URL</label>
                <input name="longurl">
            </div>
            <input type="submit" onclick="myFunction()" value="Get short URL">
        </form>
        <label>short URL:</label>
        <p style="font-size: medium;" id="result">&nbsp;</p>
    </div>
</body>
</html>

