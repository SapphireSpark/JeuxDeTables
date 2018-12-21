<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ResourcesTag $resourcesTag
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $resourcesTag->resource_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $resourcesTag->resource_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Resources Tags'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Resources'), ['controller' => 'Resources', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Resource'), ['controller' => 'Resources', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="resourcesTags form large-9 medium-8 columns content">
    <?= $this->Form->create($resourcesTag) ?>
    <fieldset>
        <legend><?= __('Edit Resources Tag') ?></legend>
        <?php
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
