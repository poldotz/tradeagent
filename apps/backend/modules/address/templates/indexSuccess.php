<?php include_component('address','geolocatorSearch'); ?>

<h1>Addresss List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Route</th>
      <th>City</th>
      <th>Province</th>
      <th>Region</th>
      <th>Country</th>
      <th>Postal code</th>
      <th>Latitude</th>
      <th>Longitude</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($addresss as $address): ?>
    <tr>
      <td><a href="<?php echo url_for('address/edit?id='.$address->getId()) ?>"><?php echo $address->getId() ?></a></td>
      <td><?php echo $address->getRoute() ?></td>
      <td><?php echo $address->getCity() ?></td>
      <td><?php echo $address->getProvince() ?></td>
      <td><?php echo $address->getRegion() ?></td>
      <td><?php echo $address->getCountry() ?></td>
      <td><?php echo $address->getPostalCode() ?></td>
      <td><?php echo $address->getLatitude() ?></td>
      <td><?php echo $address->getLongitude() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('address/new') ?>">New</a>
