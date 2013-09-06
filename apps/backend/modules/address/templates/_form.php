<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form class="form-" style="margin-bottom: 0;" action="<?php echo url_for('address/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
    <?php if (!$form->getObject()->isNew()): ?>
        <input type="hidden" name="sf_method" value="put" />
    <?php endif; ?>
    <!-- Widget -->
    <div class="widget">
        <!-- Widget heading -->
        <div class="widget-head">
            <h4 class="heading"><?php echo __('Geolocator Search')?></h4>
        </div>
        <!-- // Widget heading END -->

        <div class="widget-body">
            <?php echo $form->renderGlobalErrors() ?>
            <!-- Row -->
            <div class="row-fluid">

                <!-- Column -->
                <div class="span3">

                    <!-- Group -->
                    <div class="control-group">
                        <?php echo $form['route']->renderLabel('',array("class"=>'control-label')) ?>
                        <div class="controls"><?php echo $form['route']->render(array('class'=>'span12')) ?></div>
                    </div>
                </div>
                <div class="span3">
                    <!-- // Group END -->

                    <!-- Group -->
                    <div class="control-group">
                        <?php echo $form['city']->renderLabel('',array("class"=>'control-label')) ?>
                        <div class="controls"><?php echo $form['city']->render(array('class'=>'span12')) ?></div>
                    </div>
                    <!-- // Group END -->
                </div>
                <div class="span3">
                    <!-- Group -->
                    <div class="control-group">
                        <?php echo $form['country']->renderLabel('',array("class"=>'control-label')) ?>
                        <div class="controls"><?php echo $form['country']->render(array('class'=>'span12')) ?></div>
                    </div>
                    <!-- // Group END -->

                </div>
               <div class="span3">
                <!-- Form actions -->
                  <div class="form-actions">
                    <button type="submit" class="btn btn-icon btn-primary glyphicons circle_ok"><i></i><?php echo __('search') ?></button>
                   <button type="reset" class="btn btn-icon btn-default glyphicons circle_remove"><i></i>Cancel</button>
                 </div>
             </div>
        </div>
    </div>
</form>
&nbsp;<a href="<?php echo url_for('address/index') ?>"><?php echo __('Back to list') ?></a>