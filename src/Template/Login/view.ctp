<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Login $login
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Login'), ['action' => 'edit', $login->loginID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Login'), ['action' => 'delete', $login->loginID], ['confirm' => __('Are you sure you want to delete # {0}?', $login->loginID)]) ?> </li>
        <li><?= $this->Html->link(__('List Login'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Login'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="login view large-9 medium-8 columns content">
    <h3><?= h($login->loginID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('LoginID') ?></th>
            <td><?= $this->Number->format($login->loginID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Member ID') ?></th>
            <td><?= $this->Number->format($login->member_ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Login Time') ?></th>
            <td><?= h($login->login_time) ?></td>
        </tr>
    </table>
</div>
