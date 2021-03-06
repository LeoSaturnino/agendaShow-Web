<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<?= $this->element('Estabelecimentos/side-bar') ?>
<div class="users form large-10 medium-9 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->control('tipo');
            echo $this->Form->control('username');
            echo $this->Form->control('email');
            echo $this->Form->control('password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'), ['class'=>"button" ]) ?>
    <?= $this->Form->end() ?>
</div>
