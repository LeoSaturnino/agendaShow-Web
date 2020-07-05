<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Evento $evento
 */
?>
<?= $this->element('Estabelecimentos/side-bar') ?>
<div class="eventos form large-9 medium-8 columns content">
    <?= $this->Form->create($evento) ?>
    <fieldset>
        <legend><?= __('Add Evento') ?></legend>
        <?php
            echo $this->Form->control('estabelecimentos_id', ['default' => $estabelecimento]);
            echo $this->Form->control('nome');
            echo $this->Form->control('descricao');
            echo $this->Form->control('banner');
            echo $this->Form->control('cronograma');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
