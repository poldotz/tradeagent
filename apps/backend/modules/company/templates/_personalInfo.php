<?php
/**
 * Created by JetBrains PhpStorm.
 * User: lpodda
 * Date: 9/13/13
 * Time: 5:09 PM
 * To change this template use File | Settings | File Templates.
 */
?>

<form class="form-horizontal" style="margin-bottom: 0;" action="<?php echo url_for('company/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
    <input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
<?php echo $form->renderGlobalErrors() ?>
<!-- Row -->
<div class="row-fluid">

    <!-- Column -->
    <div class="span6">

        <!-- Group -->
        <div class="control-group">
            <?php echo $form['name']->renderLabel('',array("class"=>'control-label')) ?>
            <div class="controls"><?php echo $form['name']->render(array('class'=>'span12')) ?></div>
        </div>
        <!-- // Group END -->

        <!-- Group -->
        <div class="control-group">
            <?php echo $form['vat']->renderLabel('',array("class"=>'control-label')) ?>
            <div class="controls"><?php echo $form['vat']->render(array('class'=>'span12')) ?></div>
        </div>
        <!-- // Group END -->

        <!-- Group -->
        <div class="control-group">
            <?php echo $form['address_id']->renderLabel('',array("class"=>'control-label')) ?>
            <div class="controls"><?php echo $form['address_id']->render(array('class'=>'span12')) ?></div>
        </div>
        <!-- // Group END -->

    </div>
    <div class="span6">

        <!-- Group -->
        <div class="control-group">
            <?php echo $form['iban']->renderLabel('',array("class"=>'control-label')) ?>
            <div class="controls"><?php echo $form['iban']->render(array('class'=>'span12')) ?></div>
        </div>
        <!-- // Group END -->

        <!-- Group -->
        <div class="control-group">
            <?php echo $form['slogan']->renderLabel('',array("class"=>'control-label')) ?>
            <div class="controls"><?php echo $form['slogan']->render(array('class'=>'span12')) ?></div>
        </div>
        <!-- // Group END -->

        <!-- Group -->
        <div class="control-group">
            <?php echo $form['description']->renderLabel('',array("class"=>'control-label')) ?>
            <div class="controls"><?php echo $form['description']->render(array('class'=>'span12')) ?></div>
        </div>
        <!-- // Group END -->

    </div>
</div>
<hr class="separator" />
<!-- Form actions -->
<div class="form-actions">
    <button type="submit" class="btn btn-icon btn-primary glyphicons circle_ok"><i></i>Save</button>
    <button type="button" class="btn btn-icon btn-default glyphicons circle_remove"><i></i>Cancel</button>
</div>
</form>