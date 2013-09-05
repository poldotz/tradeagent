<h1><?php echo __('Company') ?></h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Slogan</th>
      <th>Description</th>
      <th>Vat</th>
      <th>Fc</th>
      <th>Iban</th>
      <th>Address</th>
      <th>Is customer</th>
      <th>Gallery</th>
      <th>Created at</th>
      <th>Updated at</th>
      <th>Slug</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($companys as $company): ?>
    <tr>
      <td><a href="<?php echo url_for('company/edit?id='.$company->getId()) ?>"><?php echo $company->getId() ?></a></td>
      <td><?php echo $company->getName() ?></td>
      <td><?php echo $company->getSlogan() ?></td>
      <td><?php echo $company->getDescription() ?></td>
      <td><?php echo $company->getVat() ?></td>
      <td><?php echo $company->getFc() ?></td>
      <td><?php echo $company->getIban() ?></td>
      <td><?php echo $company->getAddressId() ?></td>
      <td><?php echo $company->getIsCustomer() ?></td>
      <td><?php echo $company->getGalleryId() ?></td>
      <td><?php echo $company->getCreatedAt() ?></td>
      <td><?php echo $company->getUpdatedAt() ?></td>
      <td><?php echo $company->getSlug() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('company/new') ?>">New</a>
