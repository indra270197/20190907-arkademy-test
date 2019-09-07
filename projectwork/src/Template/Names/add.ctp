<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Name $name
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Names'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="names form large-9 medium-8 columns content">
    <?= $this->Form->create($name) ?>
    <fieldset>
        <legend><?= __('Add Name') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('id_work');
            echo $this->Form->control('id_salary');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
