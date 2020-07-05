<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estabelecimento $estabelecimento
 */
?>
<?= $this->element('Estabelecimentos/side-bar') ?>
<div class="estabelecimentos form large-9 medium-8 columns content">
    <?= $this->Form->create($estabelecimento) ?>
    <fieldset>
        <legend><?= __('Edit Estabelecimento') ?></legend>
        <?php
            echo $this->Form->control('users_id', ['options' => [$user->id], 'default' => $user->id]);
            echo $this->Form->control('nome');
            echo $this->Form->control('categoria');
            echo $this->Form->control('proprietario');
            echo $this->Form->control('telefone');
            echo $this->Form->control('celular');
            echo $this->Form->control('logradouro');
            echo $this->Form->control('cep');
            echo $this->Form->control('numero');
            echo $this->Form->control('cidade');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
