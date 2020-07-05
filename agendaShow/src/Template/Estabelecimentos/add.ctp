<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estabelecimento $estabelecimento
 */

use Psy\Command\DumpCommand;

?>
<div class="estabelecimentos form large-9 medium-8 columns content">
    <?= $this->Form->create($estabelecimento) ?>
    <fieldset>
        <legend><?= __('Adicionar estabelecimento') ?></legend>
        <?php
            echo $this->Form->control('users_id', ['options' => $users, 'default' => $user->id]);
            echo $this->Form->control('nome', ['required' => true, 'label' => ['text' => 'Nome do estabelecimento']]);
            echo $this->Form->control('categoria', ['options' => ['default' => 'Selecione..', 1 => 'Restaurante', 2 => 'Casa de Show', 3 => 'Bar', 4 => 'Buteco']]);
            echo $this->Form->control('proprietario', ['required' => true]);
            echo $this->Form->control('telefone', ['label' => ['text' => 'Telefone do estabelecimento']]);
            echo $this->Form->control('celular', ['required' => true, 'label' => ['text' => 'Celular do estabelecimento']]);
            echo $this->Form->control('logradouro', ['required' => true]);
            echo $this->Form->control('cep', ['required' => true]);
            echo $this->Form->control('numero', ['required' => true]);
            echo $this->Form->control('cidade', ['required' => true]);
            // echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
