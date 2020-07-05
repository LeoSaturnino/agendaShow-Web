<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Estabelecimento'), ['controller' => 'Estabelecimentos', 'action' => 'view', $estabelecimento->id]) ?></li>
        <li><?= $this->Html->link(__('Eventos'), ['controller' => 'Eventos', 'action' => 'index', $estabelecimento->id]) ?></li>
        <li><?= $this->Html->link(__('Novo Eventos'), ['controller' => 'Eventos', 'action' => 'add', $estabelecimento->id]) ?></li>
        <li><?= $this->Html->link(__('Avaliações'), ['controller' => 'Avaliacoes', 'action' => 'index', $estabelecimento->id]) ?></li>
    </ul>
</nav>