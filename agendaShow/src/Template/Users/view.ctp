<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<style>
    .apes{
        position: absolute;
        right: 3%;
    }
</style>
<!-- <!= $this->Html->css('bootstrap.min') ?> -->
<?= $this->element('Estabelecimentos/side-bar') ?>
<div class="users view large-10 medium-9 columns content">
    <h3><?= h($user->username) ?> #<?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo') ?></th>
            <td><?= $this->Number->format($user->tipo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>

    </table>
    <hr>
    <div style="display: inline-flex; width: 100%;">
        <h3>Estabelecimentos</h3>
        <?= $this->Html->link('<button>ADICIONAR</button>', ['controller' => 'Estabelecimentos', 'action' => 'add', $user->id], ['escape' => false, 'target' => 'blank', 'class' => 'apes']) ?>
    </div>
    <table>
        <thead>
            <tr>
                <td><?= __('Estabelecimento') ?></td>
                <td><?= __('Telefone') ?></td>
                <td><?= __('Cidade') ?></td>
                <td><?= __('UF') ?></td>
                <td><?= __('Gerencia') ?></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($institutes as $institute){
            ?>
               <tr>
                   <td><?= $this->Html->link($institute->nome, ['controller' => 'Estabelecimentos', 'action' => 'view', $institute->id])?></td>
                   <td><?= h($institute->telefone)?></td>
                   <td><?= h($institute->cidade)?></td>
                   <td><?= h($institute->uf)?></td>
                   <td><?= h('Actions')?></td>
               </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
