<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Name[]|\Cake\Collection\CollectionInterface $names
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Name'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="names index large-9 medium-8 columns content">
    <h3><?= __('Names') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_work') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_salary') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($names as $name): ?>
            <tr>
                <td><?= $this->Number->format($name->id) ?></td>
                <td><?= h($name->name) ?></td>
                <td><?= $this->Number->format($name->id_work) ?></td>
                <td><?= $this->Number->format($name->id_salary) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $name->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $name->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $name->id], ['confirm' => __('Are you sure you want to delete # {0}?', $name->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
