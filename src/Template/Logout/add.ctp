<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Logout $logout
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Logout'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Members'), ['controller' => 'Members', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Member'), ['controller' => 'Members', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="logout form large-9 medium-8 columns content">
    <?= $this->Form->create($logout) ?>
    <fieldset>
        <legend><?= __('Add Logout') ?></legend>
        <?php
            echo $this->Form->control('member_id', ['options' => $members]);
            echo $this->Form->control('logout_time');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
