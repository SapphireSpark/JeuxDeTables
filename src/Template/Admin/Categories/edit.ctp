<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>
<?php
$this->extend('/Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $category->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Categories'), ['action' => 'index']) ?></li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $category->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Categories'), ['action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('List Resources'), ['controller' => 'Resources', 'action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('New Resources'), ['controller' => 'Resources', 'action' => 'add']) ?></li>
    <li><?= $this->Html->link(__('List Subcategories'), ['controller' => 'Subcategories', 'action' => 'index']) ?></li>
    <li><?= $this->Html->link(__('New Subcategory'), ['controller' => 'Subcategories', 'action' => 'add']) ?></li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($category); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Category']) ?></legend>
    <?php
        echo $this->Form->control('name');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
