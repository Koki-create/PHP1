<?php
    //トランプ画像
    $cards = array ('Jk.png', '01.png', '02.png', '03.png', '04.png', '05.png', '06.png', '07.png', '08.png', '09.png', '10.png', '11.png', '12.png', '13.png');

    //ランダムな数値
    $num = mt_rand(0, 13);
    $leftCard = $num;
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	<body>
	<div style="text-align:center">
	<form action="highAndLowS07.php" method="post">
<?php
    echo 'High & Lowゲーム<br>';
    print '<hr>';
    echo 'ランダム数値:';
    echo $leftCard;
    echo '<br>';
    echo '<img src = "../cards/',$cards[$leftCard],'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
    echo '<img src = "../cards/bg.png">';
    echo '<br>';
    echo '<br>';
?>
		&nbsp;&nbsp;&nbsp;
		<input type="radio" name="select" value="High">High
    	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    	<input type="radio" name="select" value="Low">Low
    	<br>
    	<br>
    	<input type="submit" name="kettei" value="決定">
    	<input type="hidden" name="leftCard" value="<?php echo $leftCard ?>">
    </form>
	</div>
	</body>
</html>
