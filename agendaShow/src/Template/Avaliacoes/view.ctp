<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Avaliaco $avaliaco
 */
?>
<?= $this->element('Estabelecimentos/side-bar') ?>
</nav>
<div class="avaliacoes view large-10 medium-9 columns content">
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
