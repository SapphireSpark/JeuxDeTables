<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Resource $resource
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $category->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Resources'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Resource Types'), ['controller' => 'ResourceTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Resource Type'), ['controller' => 'ResourceTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Files'), ['controller' => 'Files', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New File'), ['controller' => 'Files', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tags'), ['controller' => 'Tags', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tag'), ['controller' => 'Tags', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="resources form large-9 medium-8 columns content" ng-app="linkedlists" ng-controller="categoriesController">
    <h3> Debug </h3>
    Original Category id: {{selectedCategoryId}}<br/>
    Original Subcategory id: {{selectedSubcategoryId}}<br/>
    Selected category: <span ng-bind="category.id"></span> <span ng-bind="category.name"></span><br/>
    Selected subcategory : <span ng-bind="category.subcategory.id"></span> <span ng-bind="category.subcategory.name"></span>
    <!-- pre ng-show='categories'>{{ categories | json }}</pre -->
    <?= $this->Form->create($resource) ?>
    <fieldset>
        <legend><?= __('Edit Resource') ?></legend>
        <div>
            Categories: 
            <select name="Category_id"
                    id="category-id" 
                    class="browser-default"
                    ng-init="category = { id: selectedCategoryId}"
                    ng-model="category" 
                    ng-options="item.name for item in categories track by item.id"
                    >
            </select>
        </div>
        <div>
            Subcategories: 
            <select name="subcategory_id"
                    id="subcategory-id" 
                    class="browser-default"
                    ng-model="category.subcategory"
                    ng-options="item.name for item in category.subcategories track by item.id"
                    >
            </select>
        </div>

        <?php
        echo $this->Form->control('title');
        echo $this->Form->control('body');
        echo $this->Form->control('files._ids', ['options' => $files]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
