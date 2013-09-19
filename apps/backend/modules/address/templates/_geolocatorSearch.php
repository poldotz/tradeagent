<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<?php use_javascript('geosearch','last') ?>

<form onsubmit="return false" id="geolocatorSearchForm" class="form-horizontal" style="margin-bottom: 0;" action="<?php echo url_for('geolocator_search')?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
    <?php echo $form->renderHiddenFields(); ?>
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
                <div class="span9">

                    <!-- Group -->
                    <div class="control-group">
                        <?php echo $form['route']->renderLabel('',array("class"=>'control-label')) ?>
                        <div class="controls"><?php echo $form['route']->render(array('class'=>'span12')) ?></div>
                    </div>
                </div>
                <div class="span3">
                    <!-- Form actions -->
                    <div class="form-actions">
                        <button id="submitGeoSearch" type="submit" class="btn btn-icon btn-primary glyphicons circle_ok"><i></i><?php echo __('search') ?></button>
                        <button type="reset" class="btn btn-icon btn-default glyphicons circle_remove"><i></i>Cancel</button>
                        <img id="loader" width="30px;" height="30px;" src="images/loading.gif" style="vertical-align: middle; display: none" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<div id='results'></div>
