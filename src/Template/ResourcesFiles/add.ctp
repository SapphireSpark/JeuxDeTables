<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ResourcesFile $resourcesFile
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Resources Files'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Resources'), ['controller' => 'Resources', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Resource'), ['controller' => 'Resources', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New File'), ['controller' => 'Files', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="resourcesFiles form large-9 medium-8 columns content">
    <?= $this->Form->create($resourcesFile) ?>
    <fieldset>
        <legend><?= __('Add Resources File') ?></legend>
        <?php
            echo $this->Form->control('resource_id', ['options' => $resources]);
            echo $this->Form->control('file_id', ['options' => $files]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
