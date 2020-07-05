<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estabelecimento[]|\Cake\Collection\CollectionInterface $estabelecimentos
 */
?>
<?= $this->element('Estabelecimentos/side-bar') ?>
<div class="estabelecimentos index large-9 medium-8 columns content">
    <h3><?= __('Estabelecimentos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= h('created') ?></th>
                <th scope="col"><?= h('nome') ?></th>
                <th scope="col"><?= h('categoria') ?></th>
                <th scope="col"><?= h('proprietario') ?></th>
                <th scope="col"><?= h('cidade') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
                <!-- <th scope="col"><!= $this->Paginator->sort('telefone') ?></th> -->
                <!-- <th scope="col"><!= $this->Paginator->sort('celular') ?></th> -->
                <!-- <th scope="col"><!= $this->Paginator->sort('logradouro') ?></th> -->
                <!-- <th scope="col"><!= $this->Paginator->sort('cep') ?></th> -->
                <!-- <th scope="col"><!= $this->Paginator->sort('numero') ?></th> -->
                <!-- <th scope="col"><!= $this->Paginator->sort('status') ?></th> -->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($estabelecimentos as $estabelecimento): ?>
            <tr>
                <td><?= h($estabelecimento->created) ?></td>
                <td><?= h($estabelecimento->nome) ?></td>
                <!-- 1 => 'Restaurante', 2 => 'Casa de Show', 3 => 'Bar', 4 => 'Buteco' -->
                <td><?= $estabelecimento->has('categoria') ? (($estabelecimento->categoria == 1) ? 'Restaurante' : (($estabelecimento->categoria == 2) ? 'Casa de Show' : ($estabelecimento->categoria == 3)? 'Bar':'Buteco')) : 'Not'; ?></td>
                <td><?= h($estabelecimento->proprietario) ?></td>
                <td><?= h($estabelecimento->cidade) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $estabelecimento->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $estabelecimento->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $estabelecimento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estabelecimento->id)]) ?>
                </td>
                <!-- <td><!= h($estabelecimento->numero) ?></td>
                <td><!= $this->Number->format($estabelecimento->id) ?></td>
                <td><!= $estabelecimento->has('user') ? $this->Html->link($estabelecimento->user->id, ['controller' => 'Users', 'action' => 'view', $estabelecimento->user->id]) : '' ?></td>
                <td><!= h($estabelecimento->telefone) ?></td>
                <td><!= h($estabelecimento->celular) ?></td>
                <td><!= h($estabelecimento->logradouro) ?></td>
                <td><!= h($estabelecimento->cep) ?></td>
                <td><!= $this->Number->format($estabelecimento->status) ?></td>
                <td><!= h($estabelecimento->modified) ?></td> -->
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
