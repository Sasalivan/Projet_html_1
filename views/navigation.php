
<div class="navigation_test_1">
    <?php
    echo "<ul>";
    foreach($menu as $key => $value)
    {
        if(is_array($value))
        {
            echo "<li>" . $key . "</li>";

            echo "<ul>";
            foreach($value as $subKey => $subValue)
            {
                echo "<li><a href='".$subValue."'>" . $subKey . "</a></li>";
            }
            echo "</ul>";
        }
        else
            echo "<li><a href='".$value."'>" . $key . "</a></li>";
        
    }
    echo "</ul>";
    ?>
</div>
