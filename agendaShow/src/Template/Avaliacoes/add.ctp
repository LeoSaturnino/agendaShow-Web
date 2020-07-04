<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Avaliaco $avaliaco
 */
?>
<?= $this->element('Estabelecimentos/side-bar') ?>
</nav>
<div class="avaliacoes form large-9 medium-8 columns content">
    <?= $this->Form->create($avaliaco) ?>
    <fieldset>
        <legend><?= __('Add Avaliaco') ?></legend>
        <?php
            echo $this->Form->control('clientes_id', ['options' => $clientes]);
            echo $this->Form->control('estabelecimentos_id', ['options' => $estabelecimentos]);
            echo $this->Form->control('categoria');
            echo $this->Form->control('nota');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
