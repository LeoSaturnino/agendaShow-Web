<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Estabelecimento $estabelecimento
 */
?>
<?= $this->element('Estabelecimentos/side-bar') ?>
<div class="estabelecimentos view large-10 medium-9 columns content">
    <h3><?= h($estabelecimento->nome)?> #<?= h($estabelecimento->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $estabelecimento->has('user') ? $this->Html->link($estabelecimento->user->username, ['controller' => 'Users', 'action' => 'view', $estabelecimento->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($estabelecimento->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Proprietario') ?></th>
            <td><?= h($estabelecimento->proprietario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telefone') ?></th>
            <td><?= h($estabelecimento->telefone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Celular') ?></th>
            <td><?= h($estabelecimento->celular) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Logradouro') ?></th>
            <td><?= h($estabelecimento->logradouro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cep') ?></th>
            <td><?= h($estabelecimento->cep) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Numero') ?></th>
            <td><?= h($estabelecimento->numero) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cidade') ?></th>
            <td><?= h($estabelecimento->cidade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categoria') ?></th>
            <td><?= $estabelecimento->has('categoria') ? (($estabelecimento->categoria == 1) ? 'Restaurante' : (($estabelecimento->categoria == 2) ? 'Casa de Show' : ($estabelecimento->categoria == 3)? 'Bar':'Buteco')) : 'Not'; ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($estabelecimento->created) ?></td>
        </tr>
    </table>

    <h3>Eventos</h3>
    <table>
        <thead>
            <tr>
                <th scope="col"><?= __('Nome do evento') ?></th>
                <th scope="col"><?= __('Descrição') ?></th>
                <th scope="col"><?= __('Cronograma') ?></th>
            </tr>
        </thead>
        <tr>
            <?php foreach($eventos as $evento){
            ?>
            <td><?= $evento->nome ;?></td>
            <td><?= $evento->descricao ;?></td>
            <td><?= $evento->cronograma ;?></td>

            <?php 
            } ?>
        </tr>
    </table>
    <?php 
        echo $this->Html->link('Adcionar', ['controller' => 'Eventos', 'action' => 'add', $estabelecimento->id], ['target' => 'blank']);
    ?>
</div>
