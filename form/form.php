<?php
require_once('connection/conn.php');
$feedback = "lol";
$style1 = "SHADOW POW POTCH";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>
        <script src="main.js"></script>

</head>

<body>
    <form method="POST" action="feedback.php" class="feedbackknap">
        <td class="text-center">
            <div class="container">
                <div class="form-group">
                    <textarea class="form-control" rows="10" cols="50" placeholder="Skriv problemet her..."
                        name="orderrejectcomment" value="<?php echo $style1;?>"></textarea>
                </div>
            </div>
        </td>
        <td class="text-center">
            <button type="submit" name="style_1_line" value="<?php echo $style1;?>" class="btn btn-dark">Indsend
                feedback</button>
        </td>
    </form>

</body>

</html>