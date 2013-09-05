<h1><?php echo __('Company') ?></h1>

<table class="dynamicTable table table-striped table-bordered table-condensed">
  <thead>
    <tr>
      <th><?php echo __('Name')?></th>
      <th><?php echo __('Vat') ?></th>
      <th><?php echo __('Address') ?></th>
      <th><?php echo __('Created at') ?></th>
      <th><?php echo __('Actions') ?></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($companys as $company): ?>
    <tr>
      <!--<td><a href="<?php echo url_for('company/edit?id='.$company->getId()) ?>"><?php echo $company->getId() ?></a></td>-->
      <td><?php echo $company->getName() ?></td>
      <td><?php echo $company->getVat() ?></td>
      <td><?php echo $company->getAddressId() ?></td>
      <td><?php echo $company->getCreatedAt() ?></td>
      <td><?php echo url_for('company/edit?id='.$company->getId()) ?>"><?php echo _('Edit') ?></a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('company/new') ?>"><?php echo __('New') ?></a>