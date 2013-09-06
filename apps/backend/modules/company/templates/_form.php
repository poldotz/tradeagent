<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form class="form-horizontal" style="margin-bottom: 0;" action="<?php echo url_for('company/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
    <!-- Widget -->
 <div class="widget">
        <!-- Widget heading -->
      <div class="widget-head">
         <h4 class="heading">Test</h4>
        </div>
    <!-- // Widget heading END -->

    <div class="widget-body">
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
     </div>
   </div>
 </form>
&nbsp;<a href="<?php echo url_for('company/index') ?>"><?php echo __('Back to list') ?></a>
