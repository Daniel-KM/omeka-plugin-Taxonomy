<?php echo head(array('title' => __('%s taxonomy terms', $taxonomy->name))); ?>
<?php echo flash(); ?>

<a href="/admin/taxonomy/taxonomy-term/add/taxonomy_id/<?php echo $taxonomy->id; ?>"><?php echo __('Add a new term'); ?></a>

<?php if (count($terms)): ?>
  <table>
    <thead>
      <tr>
        <th><?php echo __('Code'); ?></th>
        <th><?php echo __('Value'); ?></th>
        <th><?php echo __('Actions'); ?></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($terms as $term): ?>
        <tr>
          <td><?php echo $term['code']; ?></td>
          <td><?php echo $term['value']; ?></td>
          <td>
            <a href="/admin/taxonomy/taxonomy-term/edit/taxonomy_term_id/<?php echo $term['id']; ?>">Edit</a>
            |
            <a href="/admin/taxonomy/taxonomy-term/delete/taxonomy_term_id/<?php echo $term['id']; ?>">Delete</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
<?php endif; ?>

<?php echo foot(); ?>
