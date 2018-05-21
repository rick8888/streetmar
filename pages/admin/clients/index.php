<?php 
  
   $clients=App::getInstance()->getTable('Client')->all();

?>
<div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Administration Clients</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <a href="?page=clients.add"type="button" class="btn btn-sm btn-primary btn-create">add new</a>
                  </div>
                </div>
              </div>
              <div class="panel-body">
              <table id="example" class="table table-striped table-bordered table-list" cellspacing="0" width="100%">
          <thead>

              <tr>
                   <td>Code</td>
                   <td>Nom</td>
                   <td>Email</td>
                   <td>Phone</td>
                   <td>Action</td>
              </tr>

          </thead>
          <tbody>
              <?php foreach($clients as $client): ?>

                 <tr>
                      <td><?= $client->id;?></td>
                      <td><?= $client->nom;?></td>
                      <td><?= $client->email;?></td>
                      <td><?= $client->phone;?></td>
            
                      <td align="center">
                         <a class="btn btn-default" href="?page=client.edit&id=<?= $client->id; ?>"><em class="fa fa-pencil"></em></a>
                        <a class="btn btn-danger" href="?page=client.delete&id=<?= $client->id; ?>"><em class="fa fa-trash"></em></a>
                      </td>
                 </tr>

              <?php endforeach;?>
          </tbody>
    </table>

</div>
</div>
</div>
