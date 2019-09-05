
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hien thi cac loai hinh</title>
</head>
<body>
<form method="post">
    <input type="text" name="inputWidth" placeholder="Input Width">
    <input type="text" name="inputHeight" placeholder="Input Height">
    <input type="submit" value="Draw Rectangle">
</form>

<form method="post">
    <input type="text" name="inputTriangleBottomLeft" placeholder="Draw Triangle Bottom Left">
    <input type="submit" value="Draw Triangle">
</form>

<form method="post">
    <input type="text" name="inputTriangleLeftTop" placeholder="Draw Triangle Left Top">
    <input type="submit" value="Draw Triangle">
</form>

<form method="post">
    <input type="text" name="inputIsoscelesTriangle" placeholder="Draw IsoscelesTriangle">
    <input type="submit" value="Draw Triangle">
</form>
<?php
$width = $_POST['inputWidth'];
$height = $_POST['inputHeight'];
function drawRectangle($width, $height)
{
    for ($i = 0; $i < $height; $i++) {
        echo '*';
        for ($j = 1; $j < $width; $j++) {
            echo '*';
        }
        echo "<br>";
    }
}
drawRectangle($width, $height);
$heightTriangleBottomLeft = $_POST['inputTriangleBottomLeft'];
$heightTriangleLeftTop = $_POST['inputTriangleLeftTop'];
$heightIsoscelesTriangle = $_POST['inputIsoscelesTriangle'];
function drawTriangleBottomLeft($num)
{
    for ($i = 0; $i < $num; $i++) {
        echo $i;
        for ($j = $i; $j > 0; $j--) {
            echo $j - 1;
        }
        echo '<br>';
    }
}
function drawTriangleLeftTop($num)
{
    for ($i = $num; $i > 0; $i--) {
        echo $i;
        for ($j = $i - 1; $j > 0; $j--) {
            echo $j;
        }
        echo "<br>";
    }
}
function drawIsoscelesTriangle($num)
{
    for ($i = 0; $i < $num; $i++) {
        for ($j = $num; $j > $i; $j--) {
            echo '&nbsp' . '&nbsp';
        }
        for ($j = 0; $j < $i + 1; $j++) {
            echo $j;
        }
        for ($j = $i; $j > 0; $j--) {
            echo $j - 1;
        }
        echo '<br>';
    }
}
drawTriangleBottomLeft($heightTriangleBottomLeft);
drawTriangleLeftTop($heightTriangleLeftTop);
drawIsoscelesTriangle($heightIsoscelesTriangle);
?>
</body>
</html>