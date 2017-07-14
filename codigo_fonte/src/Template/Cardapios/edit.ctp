<nav class="col-md-2 columns" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Menu') ?></a></li>
        <li><?= $this->Form->postLink(
                __('Excluir'),
                ['action' => 'delete', $cardapio->id],
                ['confirm' => __('Você deseja excluir o item atual?', $cardapio->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Voltar'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="cardapios form col-md-10 columns content">
    <?= $this->Form->create($cardapio) ?>
    <fieldset>
        <legend><?= 'Editar' ?></legend>
        <?php
            echo $this->Form->input('codigo');
            echo $this->Form->input('descricao');
            echo $this->Form->input('preco');
            echo $this->Form->input('status');

        ?>
    </fieldset>
    <?= $this->Form->button(__('Salvar')) ?>
    <?= $this->Form->end() ?>
</div>
