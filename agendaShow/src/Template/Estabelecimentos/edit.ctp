<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estabelecimento $estabelecimento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $estabelecimento->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $estabelecimento->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Estabelecimentos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="estabelecimentos form large-9 medium-8 columns content">
    <?= $this->Form->create($estabelecimento) ?>
    <fieldset>
        <legend><?= __('Edit Estabelecimento') ?></legend>
        <?php
            echo $this->Form->control('users_id', ['options' => $users]);
            echo $this->Form->control('nome');
            echo $this->Form->control('categoria');
            echo $this->Form->control('proprietario');
            echo $this->Form->control('telefone');
            echo $this->Form->control('celular');
            echo $this->Form->control('logradouro');
            echo $this->Form->control('cep');
            echo $this->Form->control('numero');
            echo $this->Form->control('cidade');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
