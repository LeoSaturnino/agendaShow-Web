<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="large-2 medium-3 columns" ></div>
<div class="users form large-10 medium-9 columns content">
<?= $this->Flash->render('auth') ?>

    <?= $this->Form->create('Login') ?>
    <fieldset>
        <legend><?= __('Login') ?></legend>
        <?php
            echo $this->Form->control('username');
            echo $this->Form->control('password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Login'), ['class'=>"button" ]) ?>
    <?= $this->Form->end() ?>
    <a href="/users/add" class="button">Cadastre-se</a>
</div>
