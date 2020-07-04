<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Estabelecimentos'), ['controller' => 'Estabelecimentos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Estabelecimento'), ['controller' => 'Estabelecimentos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Eventos'), ['controller' => 'Eventos','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evento'), ['controller' => 'Eventos','action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['controller' => 'Clientes','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cliente'), ['controller' => 'Clientes','action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Avaliacoes'), ['controller' => 'Avaliacoes','action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Avaliacao'), ['controller' => 'Avaliacoes','action' => 'add']) ?></li>
    </ul>
</nav>