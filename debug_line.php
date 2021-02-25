<div class="debug_line">
    <?php
    $time_log = 't: '.round(microtime(true) - $start, 4).'s.';
    //echo $time_log;
        echo "<script>";
        echo "console.log('$time_log')";
        echo "</script>";
    ?>
</div>

