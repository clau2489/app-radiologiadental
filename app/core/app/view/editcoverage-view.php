<?php $user = CoverageData::getById($_GET["id"]);?>
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <div class="card">
      <div class="card-header" data-background-color="blue">
        <h4 class="title">Editar Cobertura</h4>
      </div>
      <div class="card-content table-responsive">
        <form class="form-horizontal" method="post" id="addproduct" action="index.php?view=updatecoverage" role="form">
          <div class="form-group">
            <label for="inputEmail1" class="col-md-4">Identificación</label>
            <div class="col-md-8">
              <input type="text" name="name" value="<?php echo $user->name;?>" class="form-control" id="name" placeholder="Identificacion">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail1" class="col-md-4">Nombre Completo</label>
            <div class="col-md-8">
              <input type="text" name="lastname" value="<?php echo $user->lastname;?>" class="form-control" id="lastname" placeholder="Nombre Completo">
            </div>
          </div>          
          <div class="form-group">
            <div class="col-md-offset-4 col-md-4 col-md-offset-4">
              <input type="hidden" name="user_id" value="<?php echo $user->id;?>">
              <button type="submit" class="btn btn-primary btn-lg btn-block">Actualizar Cobertura</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>