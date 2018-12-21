<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ResourcesFile $resourcesFile
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Resources File'), ['action' => 'edit', $resourcesFile->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Resources File'), ['action' => 'delete', $resourcesFile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $resourcesFile->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Resources Files'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Resources File'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Resources'), ['controller' => 'Resources', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Resource'), ['controller' => 'Resources', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New File'), ['controller' => 'Files', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="resourcesFiles view large-9 medium-8 columns content">
    <h3><?= h($resourcesFile->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Resource') ?></th>
            <td><?= $resourcesFile->has('resource') ? $this->Html->link($resourcesFile->resource->name, ['controller' => 'Resources', 'action' => 'view', $resourcesFile->resource->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('File') ?></th>
            <td><?= $resourcesFile->has('file') ? $this->Html->link($resourcesFile->file->name, ['controller' => 'Files', 'action' => 'view', $resourcesFile->file->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($resourcesFile->id) ?></td>
        </tr>
    </table>
</div>
