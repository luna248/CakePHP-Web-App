<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Login[]|\Cake\Collection\CollectionInterface $login
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Login'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="login index large-9 medium-8 columns content">
    <h3><?= __('Login') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('loginID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('member_ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('login_time') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($login as $login): ?>
            <tr>
                <td><?= $this->Number->format($login->loginID) ?></td>
                <td><?= $this->Number->format($login->member_ID) ?></td>
                <td><?= h($login->login_time) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $login->loginID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $login->loginID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $login->loginID], ['confirm' => __('Are you sure you want to delete # {0}?', $login->loginID)]) ?>
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
