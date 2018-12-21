<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ResourceType $resourceType
 */
?>

<?php
$this->extend('/Layout/TwitterBootstrap/dashboard');

$this->start('tb_actions');
?>
    <li><?= $this->Html->link(__('List Resource Types'), ['action' => 'index']) ?></li>
<?php
$this->end();

$this->start('tb_sidebar');
?>
<ul class="nav nav-sidebar">
    <li><?= $this->Html->link(__('List Resource Types'), ['action' => 'index']) ?></li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($category); ?>
<fieldset>
    <legend><?= __('Add {0}', ['Resource Type']) ?></legend>
    <?php
        echo $this->Form->control('resource_id', ['options' => $resources]);
        echo $this->Form->control('description');
    ?>
</fieldset>
<?= $this->Form->button(__("Add")); ?>
<?= $this->Form->end() ?>
