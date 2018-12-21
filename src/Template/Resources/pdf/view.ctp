<div class="articles view large-9 medium-8 columns content">
    <h3><?= h($category->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($category->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($category->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($category->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Body') ?></h4>
        <?= $this->Text->autoParagraph(h($category->body)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Resource Types') ?></h4>
        <?php if (!empty($category->resourceTypes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('resource_id') ?></th>
                <th scope="col"><?= __('description') ?></th>
                <th scope="col"><?= __('Created') ?></th>
            </tr>
            <?php foreach ($category->resourceTypes as $resourceTypes): ?>
            <tr>
                <td><?= h($resourceTypes->resource_id) ?></td>
                <td><?= h($resourceTypes->description) ?></td>
                <td><?= h($resourceTypes->created) ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
