<div class="row">
<nav class="col-md-2" id="actions-sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a><?= __('Actions') ?></a></li>
        <li><?= $this->Html->link(__('New {0}', ['Quotas Conta']), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List {0}', ['Contas']), ['controller' => 'Contas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New {0}', ['Conta']), ['controller' => 'Contas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="quotasContas index col-md-10 columns content">
    <h3>Quotas Contas</h3>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('conta_id') ?></th>
                <th><?= $this->Paginator->sort('valor') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($quotasContas as $quotasConta): ?>
            <tr>
                <td><?= $this->Number->format($quotasConta->id) ?></td>
                <td><?= $quotasConta->has('conta') ? $this->Html->link($quotasConta->conta->id, ['controller' => 'Contas', 'action' => 'view', $quotasConta->conta->id]) : '' ?></td>
                <td><?= $this->Number->format($quotasConta->valor) ?></td>
                <td><?= h($quotasConta->created) ?></td>
                <td><?= h($quotasConta->modified) ?></td>
                <td class="actions" style="white-space:nowrap">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $quotasConta->id], ['class'=>'btn btn-default btn-xs']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $quotasConta->id], ['class'=>'btn btn-primary btn-xs']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $quotasConta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $quotasConta->id), 'class'=>'btn btn-danger btn-xs']) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <center>
            <ul class="pagination">
                <?= $this->Paginator->prev('&laquo; ' . __('previous'), ['escape'=>false]) ?>
                <?= $this->Paginator->numbers(['escape'=>false]) ?>
                <?= $this->Paginator->next(__('next') . ' &raquo;', ['escape'=>false]) ?>
            </ul>
            <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} records out of
         {{count}} total, starting on record {{start}}, ending on {{end}}')) ?></p>
        </div>
    </center>
</div>
</div>