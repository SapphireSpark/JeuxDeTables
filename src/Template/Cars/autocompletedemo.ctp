<?php
$urlToCarsAutocompletedemoJson = $this->Url->build([
    "controller" => "Cars",
    "action" => "findCars",
    "_ext" => "json"
        ]);
echo $this->Html->scriptBlock('var urlToAutocompleteAction = "' . $urlToCarsAutocompletedemoJson . '";', ['block' => true]);
echo $this->Html->script('Cars/autocompletedemo', ['block' => 'scriptBottom']);
?>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Car'), ['action' => 'add']) ?></li>
    </ul>
</nav>

<?= $this->Form->create('Cars') ?>
<fieldset>
    <legend><?= __('Search Car') ?></legend>
    <?php
        echo $this->Form->control('name', ['id' => 'autocomplete']);
    ?>
</fieldset>
<?= $this->Form->end() ?>