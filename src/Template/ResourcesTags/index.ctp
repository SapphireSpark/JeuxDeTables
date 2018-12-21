<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ResourcesTag[]|\Cake\Collection\CollectionInterface $resourcesTags
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Resources Tag'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Resources'), ['controller' => 'Resources', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Resource'), ['controller' => 'Resources', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="resourcesTags index large-9 medium-8 columns content">
    <h3><?= __('Resources Tags') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('resource_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tag_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($resourcesTags as $resourcesTag): ?>
            <tr>
                <td><?= $resourcesTag->has('resource') ? $this->Html->link($resourcesTag->resource->name, ['controller' => 'Resources', 'action' => 'view', $resourcesTag->resource->id]) : '' ?></td>
                <td><?= $resourcesTag->has('tag') ? $this->Html->link($resourcesTag->tag->title, ['controller' => 'Tags', 'action' => 'view', $resourcesTag->tag->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $resourcesTag->resource_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $resourcesTag->resource_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $resourcesTag->resource_id], ['confirm' => __('Are you sure you want to delete # {0}?', $resourcesTag->resource_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
