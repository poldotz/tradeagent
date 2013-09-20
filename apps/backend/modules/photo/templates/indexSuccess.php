<h1>Photoss List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Title</th>
      <th>Picpath</th>
      <th>Gallery</th>
      <th>Is default</th>
      <th>Created at</th>
      <th>Updated at</th>
      <th>Slug</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($photoss as $photos): ?>
    <tr>
      <td><a href="<?php echo url_for('photo/edit?id='.$photos->getId()) ?>"><?php echo $photos->getId() ?></a></td>
      <td><?php echo $photos->getTitle() ?></td>
      <td><?php echo $photos->getPicpath() ?></td>
      <td><?php echo $photos->getGalleryId() ?></td>
      <td><?php echo $photos->getIsDefault() ?></td>
      <td><?php echo $photos->getCreatedAt() ?></td>
      <td><?php echo $photos->getUpdatedAt() ?></td>
      <td><?php echo $photos->getSlug() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('photo/new') ?>">New</a>
