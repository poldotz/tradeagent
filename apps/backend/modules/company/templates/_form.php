<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<?php $steps = array(array('module'=>'company','action'=>'personalInfo','params'=>array()), array('module'=>'address', 'action'=>'geolocatorSearch','params'=>array('object'=>$form->getObject()))); ?>

    <!-- Widget -->
 <div <div class="wizard">
        <div class="widget widget-tabs widget-tabs-double">

            <!-- Widget heading -->
            <div class="widget-head">
            <?php include_partial('wizardTabs',array('steps'=> $steps)) ?>
            </div>
    <!-- // Widget heading END -->
        </div>

        <div class="widget-body">
          <div class="tab-content">
            <?php $i = 1; ?>
            <?php foreach($steps as $step): ?>
                    <?php ($i == 1) ? $active = "active" : $active = "" ?>
                        <div class="tab-pane <?php echo $active ?>" id="tab-<?php echo $i?>">
                            <?php include_component($step['module'],$step['action'],$step['params']) ?>
                        </div>
                  <?php $i++; ?>
            <?php endforeach; ?>

       </div>
    </div>

&nbsp;<a href="<?php echo url_for('company/index') ?>"><?php echo __('Back to list') ?></a>
