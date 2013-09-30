<h1><?php echo __('Galleries') ?></h1>

<table class="dynamicTable table table-striped table-bordered table-condensed">
    <thead>
    <tr>
        <th><?php echo __('Title')?></th>
        <th><?php echo __('Description') ?></th>
        <th><?php echo __('Created at') ?></th>
        <th><?php echo __('Actions') ?></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($gallerys as $gallery): ?>
        <tr>
            <td><?php echo $gallery->getTitle() ?></td>
            <td><?php echo $gallery->getDescription() ?></td>
            <td><?php echo $gallery->getCreatedAt() ?></td>
            <td>
                <a href="<?php echo url_for('gallery/edit?id='.$gallery->getId()) ?>"><?php echo _('Edit') ?></a>
                <a href="<?php echo url_for('photo/photoGallery?gallery_id='.$gallery->getId()) ?>"><?php echo _('Photos') ?></a>
            </td>

        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

  <a href="<?php echo url_for('gallery/new') ?>">New</a>
