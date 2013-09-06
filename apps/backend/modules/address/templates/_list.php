<?php
/**
 * Created by JetBrains PhpStorm.
 * User: lpodda
 * Date: 9/6/13
 * Time: 1:30 PM
 * To change this template use File | Settings | File Templates.
 */
?>
<?php if(isset($results) && is_object($results)): ?>
<div class="row-fluid center">
    <div class="widget">
        <div class="widget-head">
            <h4 class="heading"><?php echo __('Search Result') ?> : </h4>
        </div>

        <div class="widget-body">
        <?php foreach($results as $result): ?>
            <div class="row-fluid">
                <div class="span12"><?php echo link_to($result,'address/new') ?> </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</div>

<?php endif; ?>
