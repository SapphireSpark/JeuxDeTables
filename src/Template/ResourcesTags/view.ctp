<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ResourcesTag $resourcesTag
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Resources Tag'), ['action' => 'edit', $resourcesTag->resource_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Resources Tag'), ['action' => 'delete', $resourcesTag->resource_id], ['confirm' => __('Are you sure you want to delete # {0}?', $resourcesTag->resource_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Resources Tags'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Resources Tag'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Resources'), ['controller' => 'Resources', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Resource'), ['controller' => 'Resources', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="resourcesTags view large-9 medium-8 columns content">
    <h3><?= h($resourcesTag->resource_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Resource') ?></th>
            <td><?= $resourcesTag->has('resource') ? $this->Html->link($resourcesTag->resource->name, ['controller' => 'Resources', 'action' => 'view', $resourcesTag->resource->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tag') ?></th>
            <td><?= $resourcesTag->has('tag') ? $this->Html->link($resourcesTag->tag->title, ['controller' => 'Tags', 'action' => 'view', $resourcesTag->tag->id]) : '' ?></td>
        </tr>
    </table>
</div>
