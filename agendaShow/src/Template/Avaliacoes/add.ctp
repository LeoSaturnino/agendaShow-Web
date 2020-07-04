<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Avaliaco $avaliaco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Avaliacoes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Estabelecimentos'), ['controller' => 'Estabelecimentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estabelecimento'), ['controller' => 'Estabelecimentos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="avaliacoes form large-9 medium-8 columns content">
    <?= $this->Form->create($avaliaco) ?>
    <fieldset>
        <legend><?= __('Add Avaliaco') ?></legend>
        <?php
            echo $this->Form->control('clientes_id', ['options' => $clientes]);
            echo $this->Form->control('estabelecimentos_id', ['options' => $estabelecimentos]);
            echo $this->Form->control('categoria');
            echo $this->Form->control('nota');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
