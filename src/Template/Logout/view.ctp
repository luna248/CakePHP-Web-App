<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Logout $logout
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Logout'), ['action' => 'edit', $logout->logout_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Logout'), ['action' => 'delete', $logout->logout_id], ['confirm' => __('Are you sure you want to delete # {0}?', $logout->logout_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Logout'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Logout'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Members'), ['controller' => 'Members', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Member'), ['controller' => 'Members', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="logout view large-9 medium-8 columns content">
    <h3><?= h($logout->logout_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Member') ?></th>
            <td><?= $logout->has('member') ? $this->Html->link($logout->member->member_id, ['controller' => 'Members', 'action' => 'view', $logout->member->member_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Logout Id') ?></th>
            <td><?= $this->Number->format($logout->logout_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Logout Time') ?></th>
            <td><?= h($logout->logout_time) ?></td>
        </tr>
    </table>
</div>
