<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Avaliaco[]|\Cake\Collection\CollectionInterface $avaliacoes
 */
?>
<?= $this->element('Estabelecimentos/side-bar') ?>
<div class="avaliacoes index large-10 medium-9 columns content">
    <h3><?= __('Avaliacoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('clientes_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('estabelecimentos_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categoria') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nota') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($avaliacoes as $avaliaco): ?>
            <tr>
                <td><?= $this->Number->format($avaliaco->id) ?></td>
                <td><?= $avaliaco->has('cliente') ? $this->Html->link($avaliaco->cliente->id, ['controller' => 'Clientes', 'action' => 'view', $avaliaco->cliente->id]) : '' ?></td>
                <td><?= $avaliaco->has('estabelecimento') ? $this->Html->link($avaliaco->estabelecimento->id, ['controller' => 'Estabelecimentos', 'action' => 'view', $avaliaco->estabelecimento->id]) : '' ?></td>
                <td><?= $this->Number->format($avaliaco->categoria) ?></td>
                <td><?= $this->Number->format($avaliaco->nota) ?></td>
                <td><?= $this->Number->format($avaliaco->status) ?></td>
                <td><?= h($avaliaco->created) ?></td>
                <td><?= h($avaliaco->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $avaliaco->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $avaliaco->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $avaliaco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $avaliaco->id)]) ?>
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
