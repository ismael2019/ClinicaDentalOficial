    <div class="container-fluid">
     
      <div class="row">
        <div class="col-12">
        <div class="card border-info mb-3 ">
         <div class="card text-white bg-info mb-3">
              <div class="card-header"><h3>Ficha detallada de: <?= h($user->full_name) ?></h3></div>
        </div>
          <div class="card-body">
        <table class="table table-responsive table-striped table-sm">
         <tr>
           <th>Foto</th>
           <td><?=$this->Html->image('../files/users/photo/' . $user->photo_dir . '/' . $user->photo,['class'=>'img-fluid']); ?></td>
        </tr>
        <tr>
            <th>Nombre completo</th>
            <td><?= h($user->full_name) ?></td>
        </tr>
        <tr>
            <th>Ci</th>
            <td><?= h($user->ci) ?></td>
        </tr>
        <tr>
            <th>Email</th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th>Contraseña</th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th>Telefono/Cel</th>
            <td><?= h($user->phone) ?></td>
        </tr>
       <tr>
            <th>Fotografia</th>
            <td><?= h($user->photo_dir) ?></td>
        </tr>
        <tr>
            <th>Cargo</th>
            <td><?= h($user->role) ?></td>
        </tr>
        <tr>
            <th>Id</th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th>Creado</th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th>Modificado</th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Consultations') ?></h4>
        <?php if (!empty($user->consultations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Diagnosis') ?></th>
                <th scope="col"><?= __('Detail') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Patient Id') ?></th>
                <th scope="col"><?= __('Treatment Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->consultations as $consultations): ?>
            <tr>
                <td><?= h($consultations->id) ?></td>
                <td><?= h($consultations->diagnosis) ?></td>
                <td><?= h($consultations->detail) ?></td>
                <td><?= h($consultations->active) ?></td>
                <td><?= h($consultations->created) ?></td>
                <td><?= h($consultations->modified) ?></td>
                <td><?= h($consultations->user_id) ?></td>
                <td><?= h($consultations->patient_id) ?></td>
                <td><?= h($consultations->treatment_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Consultations', 'action' => 'view', $consultations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Consultations', 'action' => 'edit', $consultations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Consultations', 'action' => 'delete', $consultations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consultations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
