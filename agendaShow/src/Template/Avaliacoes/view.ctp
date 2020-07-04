<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Avaliaco $avaliaco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Avaliaco'), ['action' => 'edit', $avaliaco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Avaliaco'), ['action' => 'delete', $avaliaco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $avaliaco->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Avaliacoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Avaliaco'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Estabelecimentos'), ['controller' => 'Estabelecimentos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estabelecimento'), ['controller' => 'Estabelecimentos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="avaliacoes view large-9 medium-8 columns content">
    <h3><?= h($avaliaco->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cliente') ?></th>
            <td><?= $avaliaco->has('cliente') ? $this->Html->link($avaliaco->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $avaliaco->cliente->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Estabelecimento') ?></th>
            <td><?= $avaliaco->has('estabelecimento') ? $this->Html->link($avaliaco->estabelecimento->id, ['controller' => 'Estabelecimentos', 'action' => 'view', $avaliaco->estabelecimento->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($avaliaco->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categoria') ?></th>
            <td><?= $this->Number->format($avaliaco->categoria) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nota') ?></th>
            <td><?= $this->Number->format($avaliaco->nota) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($avaliaco->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($avaliaco->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($avaliaco->modified) ?></td>
        </tr>
    </table>
</div>
