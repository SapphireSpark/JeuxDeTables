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
    <li><?=
    $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $category->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]
    )
    ?>
    </li>
    <li><?= $this->Html->link(__('List Resource Type'), ['action' => 'index']) ?></li>
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
    <li><?= $this->Html->link(__('List Resource Type'), ['action' => 'index']) ?></li>
</ul>
<?php
$this->end();
?>
<?= $this->Form->create($category); ?>
<fieldset>
    <legend><?= __('Edit {0}', ['Resource Type']) ?></legend>
    <?php
        echo $this->Form->control('resource_id', ['options' => $resources]);
        echo $this->Form->control('description');
    ?>
</fieldset>
<?= $this->Form->button(__("Save")); ?>
<?= $this->Form->end() ?>
