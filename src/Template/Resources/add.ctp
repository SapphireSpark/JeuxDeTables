<?php
$urlToLinkedListFilter = $this->Url->build([
    "controller" => "Subcategories",
    "action" => "getByCategory",
    "_ext" => "json"
        ]);
echo $this->Html->scriptBlock('var urlToLinkedListFilter = "' . $urlToLinkedListFilter . '";', ['block' => true]);
echo $this->Html->script('Resources/add', ['block' => 'scriptBottom']);
?>
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Resource $resource
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Resources'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Resource Types'), ['controller' => 'ResourceTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Resource Type'), ['controller' => 'ResourceTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New File'), ['controller' => 'Files', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Subcategories'), ['controller' => 'Subcategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Subcategory'), ['controller' => 'Subcategories', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="resources form large-9 medium-8 columns content" ng-app="linkedlists" ng-controller="categoriesController">
    <!-- h3> Debug </h3>
    You have selected category: <span ng-bind="subcategories.id"></span> <span ng-bind="subcategories.name"></span><br/>
    and subcategory : <span ng-bind="subcategory.id"></span> <span ng-bind="subcategory.name"></span>
    <pre ng-show='categories'>{{ categories | json }}</pre -->

    <?php
    echo $this->Form->create($resource);
    ?>

    <fieldset>
        <legend><?= __('Add Resource') ?></legend>
        <div>
            Categories: 
            <select name="Category_id"
                    id="category-id" 
                    class="browser-default"
                    ng-model="category" 
                    ng-options="category.name for category in categories track by category.id"
                    >
                <option value=''>Select</option>
            </select>
        </div>
        <div>
            Subcategories: 
            <select name="subcategory_id"
                    id="subcategory-id" 
                    class="browser-default"
                    ng-disabled="!category" 
                    ng-model="subcategory"
                    ng-options="subcategory.name for subcategory in category.subcategories track by subcategory.id"
                    >
                <option value=''>Select</option>
            </select>
        </div>
        <?php
        echo $this->Form->control('title');
        echo $this->Form->control('body', ['rows' => '3']);
        echo $this->Form->control('files._ids', ['options' => $files, 'class' => 'browser-default']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Save Resource')) ?>
    <?= $this->Form->end() ?>
</div>
