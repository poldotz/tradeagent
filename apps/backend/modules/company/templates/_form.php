<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('company/'.($form->getObject()->isNew() ? 'create' : 'update').(!$form->getObject()->isNew() ? '?id='.$form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
<?php if (!$form->getObject()->isNew()): ?>
<input type="hidden" name="sf_method" value="put" />
<?php endif; ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields(false) ?>
          &nbsp;<a href="<?php echo url_for('company/index') ?>">Back to list</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Delete', 'company/delete?id='.$form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
          <?php endif; ?>
          <input type="submit" value="Save" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['name']->renderLabel() ?></th>
        <td>
          <?php echo $form['name']->renderError() ?>
          <?php echo $form['name'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['slogan']->renderLabel() ?></th>
        <td>
          <?php echo $form['slogan']->renderError() ?>
          <?php echo $form['slogan'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['description']->renderLabel() ?></th>
        <td>
          <?php echo $form['description']->renderError() ?>
          <?php echo $form['description'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['vat']->renderLabel() ?></th>
        <td>
          <?php echo $form['vat']->renderError() ?>
          <?php echo $form['vat'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fc']->renderLabel() ?></th>
        <td>
          <?php echo $form['fc']->renderError() ?>
          <?php echo $form['fc'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['iban']->renderLabel() ?></th>
        <td>
          <?php echo $form['iban']->renderError() ?>
          <?php echo $form['iban'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['address_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['address_id']->renderError() ?>
          <?php echo $form['address_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['is_customer']->renderLabel() ?></th>
        <td>
          <?php echo $form['is_customer']->renderError() ?>
          <?php echo $form['is_customer'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['gallery_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['gallery_id']->renderError() ?>
          <?php echo $form['gallery_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['created_at']->renderLabel() ?></th>
        <td>
          <?php echo $form['created_at']->renderError() ?>
          <?php echo $form['created_at'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['updated_at']->renderLabel() ?></th>
        <td>
          <?php echo $form['updated_at']->renderError() ?>
          <?php echo $form['updated_at'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['slug']->renderLabel() ?></th>
        <td>
          <?php echo $form['slug']->renderError() ?>
          <?php echo $form['slug'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['tags_list']->renderLabel() ?></th>
        <td>
          <?php echo $form['tags_list']->renderError() ?>
          <?php echo $form['tags_list'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
