<?php
/**
 * Created by JetBrains PhpStorm.
 * User: lpodda
 * Date: 9/13/13
 * Time: 5:04 PM
 * To change this template use File | Settings | File Templates.
 */
?>
<ul>
 <?php $i = 1; ?>
    <?php foreach($steps as $step): ?>
        <?php ($i == 1) ? $active = 'class="active"' : $active = 'class="disabled"' ?>
            <?php echo '<li '.$active.' ><a href="#tab-'.$i.'" class="glyphicons user" data-toggle="tab"><i></i><span class="strong">'.$step['module'].'</span><span>details</span></a></li>'; ?>
            <?php $i++; ?>
    <?php endforeach; ?>
</ul>