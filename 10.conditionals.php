<html>
    <body>
        <?php $score = 16 ?>
        <?php if($score >= 18): ?>
            <strong style="color: green;">A</strong>
        <?php elseif($score >= 16): ?>
            <strong>B</strong>
        <?php elseif($score >= 14): ?>
            <strong>C</strong>
        <?php elseif($score >= 12): ?>
            <strong>D</strong>
        <?php elseif($score >= 10): ?>
            <strong>E</strong>
        <?php else: ?>
            <strong style="color: red">F</strong>
        <?php endif ?>
    </body>
</html>
