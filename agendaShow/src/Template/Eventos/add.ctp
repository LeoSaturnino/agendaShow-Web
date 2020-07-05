<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Evento $evento
 */
?>
<?= $this->element('Estabelecimentos/side-bar') ?>
<div class="eventos form large-10 medium-9 columns content">
    <?= $this->Form->create($evento) ?>
    <fieldset>
        <legend><?= __('Add Evento') ?></legend>
        <?php
        
            echo $this->Form->control('estabelecimentos_id', ['type'=>'text', 'readonly' => 'readonly', 'value' => $estabelecimento->id]);
            echo $this->Form->control('nome');
            echo $this->Form->control('descricao');
            echo $this->Form->control('banner');
            echo $this->Form->control('cronograma');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'), ['class'=>"button" ]) ?>
    <?= $this->Form->end() ?>
</div>
