!DOCTYPE html>
<html>
<head>
    <title>Raffle v1</title>

    <?php
    require_once('raffle_v1-logic.php');
    ?>
    
</head>    
<body>
    Refresh to play again <br><br>
    
    The winning number is <?=$winning_number?>!<br><br>
        
    <? foreach($contestants as $key => $value): ?>
        <?=$key?> is a <?=$value?><br>
    <? endforeach; ?>
</body>
</html>