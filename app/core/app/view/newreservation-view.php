<?php
$pacients = PacientData::getAll();
$coverages = CoverageData::getAll();
$medics = MedicData::getAll();
$statuses = StatusData::getAll();
$payments = PaymentData::getAll();
$payments_types = Payment_typeData::getAll();
$categories = CategoryData::getAll();
?>
<div class="card">
  <div class="row">
    <div class="card-header" data-background-color="blue">
      <h4 class="title">Nuevo Turno</h4>        
    </div>    
    <div class="col-md-offset-2 col-md-8">
      <form class="form-vertical" role="form" method="post" action="./?action=addreservation">
        <div class="row">
          <div class="col-md-6">
            <label>Fecha</label>
            <input type="date" name="date_at" required class="form-control" id="inputEmail1" placeholder="Fecha">
          </div>        
          <div class="col-md-6">
            <label>Hora</label>
            <input type="time" name="time_at" required class="form-control" id="inputEmail1" placeholder="Hora">
          </div>       
        </div>
        <div class="row">
          <div class="col-md-6">
            <label>Paciente</label>
            <select name="pacient_id" class="selectpicker" data-width="100%" data-live-search="true" required>
              <option>Seleccionar </option>
              <?php foreach($pacients as $p):?>
                <option value="<?php echo $p->id; ?>"><?php echo $p->lastname." ".$p->name; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="col-md-6">
            <label>Tipo de Cobertura</label>
            <select name="coverage_id" class="selectpicker" data-width="100%" data-live-search="true" required>
              <option>Seleccionar </option>
              <?php foreach($coverages as $p):?>
                <option value="<?php echo $p->id; ?>"><?php echo $p->name; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label>Tipo de Estudio</label>
            <select name="category_id" class="sel selectpicker" data-width="100%" data-live-search="true">
            <option>Seleccionar </option>      
            <?php foreach($categories as $p):?>
            <option value="<?php echo $p->id; ?>"><?php echo $p->name; ?></option>      
            <?php endforeach;?>
            </select>
          </div>
          <div class="col-md-6">
            <label>Técnico Asignado</label>
            <select name="medic_id" class="selectpicker" data-width="100%" data-live-search="true" required>
            <option>Seleccionar </option> 
              <?php foreach($medics as $p):?>
                <option value="<?php echo $p->id; ?>"><?php echo $p->lastname." ".$p->name; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>          
        <div class="row">
          <div class="col-md-6">
            <label>Estado de pago</label> 
            <select name="payment_id" class="selectpicker" data-width="100%" data-live-search="true">
            <option>Seleccionar </option>                
              <?php foreach($payments as $p):?>
                <option value="<?php echo $p->id; ?>"><?php echo $p->name; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <div class="col-md-6">
            <label>Estado del turno</label>
            <select name="status_id" class="selectpicker" data-width="100%" data-live-search="true">
            <option>Seleccionar </option>               
              <?php foreach($statuses as $p):?>
                <option value="<?php echo $p->id; ?>"><?php echo $p->name; ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <label>Costo del Estudio</label>
            <div class="input-groups">
              <input type="number" step="0.01" class="form-control" name="price">
            </div>
          </div>
          <div class="col-md-6">
            <label>Forma de pago</label>
            <select name="payment_type_id" class="selectpicker" data-width="100%" data-live-search="true">
              <option>Seleccionar </option>
              <?php foreach($payments_types as $p):?>
                <option value="<?php echo $p->id; ?>"><?php echo $p->name; ?></option>
              <?php endforeach; ?>
            </select>
          </div>         
        </div>
        <br>
        <div class="row">
          <div class="col-md-offset-4 col-md-4 col-md-offset-4">
            <button type="submit" class="btn btn-primary btn-lg btn-block"><i class='fa fa-plus-circle'></i> Guardar Turno</button>
          </div>
        </div>
      </form>
    </div>    
  </div>
</div>