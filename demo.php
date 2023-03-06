<!DOCTYPE html>
<html>
<head>
    <!-- Bootstrap v5.3 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
    <!-- jQuery Core 3.6.3 -->
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    
    <!-- step-form -->
    <script src="step-form.js" defer></script>
</head>
<body class="text-center">
    <?php for ($i=1; $i <= 7; $i++) : ?>
        <div class="container" form-step="step<?=$i?>" <?=hide($i)?>>
            <h1>step <?=$i?></h1>
            <button class="btn btn-primary <?=hideBack($i)?>" type="button" target-form-step="step<?=$i-1?>">back</button>
            <button class="btn btn-success <?=hideNext($i)?>" type="button" target-form-step="step<?=$i+1?>">next</button>
            <br>
            <br>
            <button class="btn btn-primary <?=hideBack2($i)?>" type="button" target-form-step="step<?=$i-2?>">go back 2 steps</button>
            <button class="btn btn-success <?=hideNext2($i)?>" type="button" target-form-step="step<?=$i+2?>">go forward 2 steps</button>
        </div>
    <?php endfor; ?>
</body>
</html>

<?php
    function hide($i){ if($i !== 1) echo 'style="display: none;"'; }
    function hideBack($i){ if($i === 1) echo 'invisible'; }
    function hideNext($i){ if($i === 7) echo 'invisible"'; }
    function hideBack2($i){ if($i < 3) echo 'invisible'; }
    function hideNext2($i){ if($i > 5) echo 'invisible"'; }
?>