<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Evento $evento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Evento'), ['action' => 'edit', $evento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Evento'), ['action' => 'delete', $evento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evento->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Eventos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evento'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Estabelecimentos'), ['controller' => 'Estabelecimentos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estabelecimento'), ['controller' => 'Estabelecimentos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="eventos view large-9 medium-8 columns content">
    <h3><?= h($evento->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Estabelecimento') ?></th>
            <td><?= $evento->has('estabelecimento') ? $this->Html->link($evento->estabelecimento->id, ['controller' => 'Estabelecimentos', 'action' => 'view', $evento->estabelecimento->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($evento->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao') ?></th>
            <td><?= h($evento->descricao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Banner') ?></th>
            <td><?= h($evento->banner) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cronograma') ?></th>
            <td><?= h($evento->cronograma) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($evento->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($evento->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($evento->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($evento->modified) ?></td>
        </tr>
    </table>
</div>
