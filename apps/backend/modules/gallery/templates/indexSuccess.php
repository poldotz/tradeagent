<h1>Gallerys List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Title</th>
      <th>Description</th>
      <th>Created at</th>
      <th>Updated at</th>
      <th>Slug</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($gallerys as $gallery): ?>
    <tr>
      <td><a href="<?php echo url_for('gallery/edit?id='.$gallery->getId()) ?>"><?php echo $gallery->getId() ?></a></td>
      <td><?php echo $gallery->getTitle() ?></td>
      <td><?php echo $gallery->getDescription() ?></td>
      <td><?php echo $gallery->getCreatedAt() ?></td>
      <td><?php echo $gallery->getUpdatedAt() ?></td>
      <td><?php echo $gallery->getSlug() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('gallery/new') ?>">New</a>
