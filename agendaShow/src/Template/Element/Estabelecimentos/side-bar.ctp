<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Estabelecimento'), ['controller' => 'Estabelecimentos', 'action' => 'view', $estabelecimento->id]) ?></li>
        <li><?= $this->Html->link(__('Eventos'), ['controller' => 'Eventos', 'action' => 'list', $estabelecimento->id]) ?></li>
        <li><?= $this->Html->link(__('Avaliações'), ['controller' => 'Avaliacoes', 'action' => 'list', $estabelecimento->id]) ?></li>
    </ul>
</nav>