<?php
extract($_POST);
if(isset($calculate)) {
    $result=(($base/100+1)*(10*$inscription_count/100+1)*(5*$skill_level/100+1)-1)*100;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <h1>Gunfire Reborn CritX calculator</h1>
    <p>This calculator will return your total CritX chance, based on your weapon and its inscriptions, your scrolls and your assigned skills.</p>
    <form method="POST">
        <fieldset>
            <legend>CritX modifiers</legend>
            <label for="base">Base weapon CritX</label>
            <input type="number" name="base" id="input_base" value="<?php echo $base;?>" step="10" min="0" max="100"><br><br>
            <label for="inscription_count">Amount of CritX inscriptions</label>
            <input type="number" name="inscription_count" id="input_inscription_count" value="<?php echo $inscription_count;?>" min="0" max="4"><br><br>
            <label for="skill_level">Criticals skill level</label>
            <input type="number" name="skill_level" id="input_skill_level" value="<?php echo $skill_level;?>" min="0" max="5"><br><br>
            <input type="submit" value="Calculate" name="calculate"><br><br>
            <label for="result">Calculated CritX</label>
            <input type="number" name="result" readonly="readonly" disabled="disabled" id="skill_level" value="<?php echo $result;?>" min="0" max="250">
            <label for="result">%</label>
            <p><?php if($result > 100) { echo "You will crit every shot and deal the above percent of normal non-elemental damage."; } ?></p>
        </fieldset>
    </form>
</body>
</html>