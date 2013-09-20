<h1><?php echo __('Address') ?></h1>

<table class="dynamicTable table table-striped table-bordered table-condensed">
    <thead>
    <tr>
        <th><?php echo __('Route')?></th>
        <th><?php echo __('City') ?></th>
        <th><?php echo __('Province') ?></th>
        <th><?php echo __('Region') ?></th>
        <th><?php echo __('Country')?></th>
        <th><?php echo __('PostalCode') ?></th>
        <th><?php echo __('Latitude') ?></th>
        <th><?php echo __('Longitude') ?></th>
        <th><?php echo __('Actions') ?></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($addresss as $address): ?>
        <tr>

            <td><?php echo $address->getRoute() ?></td>
            <td><?php echo $address->getCity() ?></td>
            <td><?php echo $address->getProvince() ?></td>
            <td><?php echo $address->getRegion() ?></td>
            <td><?php echo $address->getCountry() ?></td>
            <td><?php echo $address->getPostalCode() ?></td>
            <td><?php echo $address->getLatitude() ?></td>
            <td><?php echo $address->getLongitude() ?></td>
            <td><a href="<?php echo url_for('address/edit?id='.$address->getId()) ?>"> <?php echo _('Edit') ?></a></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<a href="<?php echo url_for('address/new') ?>"><?php echo __('New') ?></a>