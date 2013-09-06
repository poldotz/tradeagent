<?php
/**
 * Created by JetBrains PhpStorm.
 * User: lpodda
 * Date: 9/6/13
 * Time: 1:30 PM
 * To change this template use File | Settings | File Templates.
 */
?>
<?php if(isset($form) && is_object($form)): ?>
<div class="row-fluid center">
    <div class="widget">
        <div class="widget-head">
            <h4 class="heading"><?php echo __('Search error') ?> : </h4>
        </div>

        <div class="widget-body">
        <?php foreach($form->getErrorSchema()->getErrors() as $error): ?>
            <div class="row-fluid">
                <div class="span12"><p class="text-error"> <?php echo $error->getMessage() ?></p></div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</div>

<?php endif; ?>
