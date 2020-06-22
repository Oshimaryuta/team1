<html>
<head>
<title>神経衰弱プレイ画面</title>
<h1>神経衰弱</h1>
</head>
<body>
<?php
echo "<table bgcolor='green' border='1' bordercolor='green' cellspacing='2' cellpadding='1'>";
echo "<tr><td><img src='back.png'></td><td><img src='back.png'></td><td><img src='back.png'></td>
<td><img src='back.png'></td><td><img src='back.png'></td><td><img src='back.png'></td>
<td><img src='back.png'></td><td><img src='back.png'></td><td><img src='back.png'></td>
<td><img src='back.png'></td><td><img src='back.png'></td><td><img src='back.png'></td><td><img src='back.png'></td></tr>";
echo "<tr><td><img src='back.png'></td><td><img src='back.png'></td><td><img src='back.png'></td>
<td><img src='back.png'></td><td><img src='back.png'></td><td><img src='back.png'></td>
<td><img src='back.png'></td><td><img src='back.png'></td><td><img src='back.png'></td>
<td><img src='back.png'></td><td><img src='back.png'></td><td><img src='back.png'></td><td><img src='back.png'></td></tr>";
echo "<tr><td><img src='back.png'></td><td><img src='back.png'></td><td><img src='back.png'></td>
<td><img src='back.png'></td><td><img src='back.png'></td><td><img src='back.png'></td>
<td><img src='back.png'></td><td><img src='back.png'></td><td><img src='back.png'></td>
<td><img src='back.png'></td><td><img src='back.png'></td><td><img src='back.png'></td><td><img src='back.png'></td></tr>";
echo "<tr><td><img src='back.png'></td><td><img src='back.png'></td><td><img src='back.png'></td>
<td><img src='back.png'></td><td><img src='back.png'></td><td><img src='back.png'></td>
<td><img src='back.png'></td><td><img src='back.png'></td><td><img src='back.png'></td>
<td><img src='back.png'></td><td><img src='back.png'></td><td><img src='back.png'></td><td><img src='back.png'></td></tr>";
echo "</table>";
$A_point = '0';
$B_point = '0';
?>

<form action="end.php" method="post">
        <input type="hidden" name="A_game_point", value="<?=$A_point?>">
        <input type="hidden" name="B_game_point", value="<?=$B_point?>">
        <button type="submit" name="action" value="end">終了</button>
</form>
<h3 align="center">自分の点数:<?=$A_point?></h3>

</body>
</html>