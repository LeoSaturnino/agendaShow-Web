<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Evento[]|\Cake\Collection\CollectionInterface $eventos
 */
?>
<?=$this->element('Estabelecimentos/side-bar')?>
<div class="eventos index large-9 medium-8 columns content">
    <h3><?=__('Eventos')?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?=$this->Paginator->sort('id')?></th>
                <th scope="col"><?=$this->Paginator->sort('estabelecimentos_id')?></th>
                <th scope="col"><?=$this->Paginator->sort('nome')?></th>
                <th scope="col"><?=$this->Paginator->sort('descricao')?></th>
                <th scope="col"><?=$this->Paginator->sort('banner')?></th>
                <th scope="col"><?=$this->Paginator->sort('cronograma')?></th>
                <th scope="col"><?=$this->Paginator->sort('status')?></th>
                <th scope="col"><?=$this->Paginator->sort('created')?></th>
                <th scope="col"><?=$this->Paginator->sort('modified')?></th>
                <th scope="col" class="actions"><?=__('Actions')?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($eventos as $evento): ?>
            <tr>
                <td><?=$this->Number->format($evento->id)?></td>
                <td><?=$evento->has('estabelecimento') ? $this->Html->link($evento->estabelecimento->id, ['controller' => 'Estabelecimentos', 'action' => 'view', $evento->estabelecimento->id]) : ''?></td>
                <td><?=h($evento->nome)?></td>
                <td><?=h($evento->descricao)?></td>
                <td><?=h($evento->banner)?></td>
                <td><?=h($evento->cronograma)?></td>
                <td><?=$this->Number->format($evento->status)?></td>
                <td><?=h($evento->created)?></td>
                <td><?=h($evento->modified)?></td>
                <td class="actions">
                    <?=$this->Html->link(__('View'), ['action' => 'view', $evento->id])?>
                    <?=$this->Html->link(__('Edit'), ['action' => 'edit', $evento->id])?>
                    <?=$this->Form->postLink(__('Delete'), ['action' => 'delete', $evento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evento->id)])?>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?=$this->Paginator->first('<< ' . __('first'))?>
            <?=$this->Paginator->prev('< ' . __('previous'))?>
            <?=$this->Paginator->numbers()?>
            <?=$this->Paginator->next(__('next') . ' >')?>
            <?=$this->Paginator->last(__('last') . ' >>')?>
        </ul>
        <p><?=$this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')])?></p>
    </div>
</div>
