<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset id="ini">
        <label for="ini">DATA</label>
        <form method="GET" action="proses2.php?nama">
            <table>
                <tr>
                    <td>Nama :</td>
                    <td><input type="text" name='nama'></td>
                </tr>
                <tr>
                    <td>Email :</td>
                    <td><input type="text" name='email'></td>
                </tr>
            </table>
            <input type="submit" value='proses' name='submit'>
        </form>
    </fieldset>
</body>
</html>