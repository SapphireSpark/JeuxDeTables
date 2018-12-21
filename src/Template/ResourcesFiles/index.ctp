<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ResourcesFile[]|\Cake\Collection\CollectionInterface $resourcesFiles
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Resources File'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Resources'), ['controller' => 'Resources', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Resource'), ['controller' => 'Resources', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New File'), ['controller' => 'Files', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="resourcesFiles index large-9 medium-8 columns content">
    <h3><?= __('Resources Files') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('resource_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('file_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($resourcesFiles as $resourcesFile): ?>
            <tr>
                <td><?= $this->Number->format($resourcesFile->id) ?></td>
                <td><?= $resourcesFile->has('resource') ? $this->Html->link($resourcesFile->resource->name, ['controller' => 'Resources', 'action' => 'view', $resourcesFile->resource->id]) : '' ?></td>
                <td><?= $resourcesFile->has('file') ? $this->Html->link($resourcesFile->file->name, ['controller' => 'Files', 'action' => 'view', $resourcesFile->file->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $resourcesFile->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $resourcesFile->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $resourcesFile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $resourcesFile->id)]) ?>
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
