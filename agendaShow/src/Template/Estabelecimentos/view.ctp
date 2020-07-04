<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estabelecimento $estabelecimento
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Estabelecimento'), ['action' => 'edit', $estabelecimento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Estabelecimento'), ['action' => 'delete', $estabelecimento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estabelecimento->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Estabelecimentos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Estabelecimento'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="estabelecimentos view large-9 medium-8 columns content">
    <h3><?= h($estabelecimento->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $estabelecimento->has('user') ? $this->Html->link($estabelecimento->user->id, ['controller' => 'Users', 'action' => 'view', $estabelecimento->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($estabelecimento->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Proprietario') ?></th>
            <td><?= h($estabelecimento->proprietario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <td><?= h($estabelecimento->telefone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Celular') ?></th>
            <td><?= h($estabelecimento->celular) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Logradouro') ?></th>
            <td><?= h($estabelecimento->logradouro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cep') ?></th>
            <td><?= h($estabelecimento->cep) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero') ?></th>
            <td><?= h($estabelecimento->numero) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cidade') ?></th>
            <td><?= h($estabelecimento->cidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($estabelecimento->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categoria') ?></th>
            <td><?= $this->Number->format($estabelecimento->categoria) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($estabelecimento->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($estabelecimento->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($estabelecimento->modified) ?></td>
        </tr>
    </table>
</div>