<?php  date_default_timezone_set('America/Lima'); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="robots" content="noindex"‎>
    <meta name="googlebot" content="noindex"‎>	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registra tu deposito</title>
</head>
<body class="bg-light">
    <div class="container">
  <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="../assets/deposito.png" alt="" width="72" height="72">
    <h2>Deposito</h2>
    <p class="lead">Ejemplo</p>
  </div>

  <div class="row">
  <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Leyenda</span>    
      </h4>
      <div class="Ygf454">
      </div>
   </div>

    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Datos</h4>
       <div class="row">
	        <div class="col-md-4 mb-3">
	         <input type="date" class="form-control" id="fecha" value="<?php echo date('Y-m-d') ?>" >
	        </div>
          <div class="col-md-3 mb-3">
           <input type="time" class="form-control" id="time" value="<?php echo date('h:m') ?>"  >
          </div>
          <div class='col-5 mb-3'>
                <form class='form-inline'>
                        <div class='form-group mb-2'>
                            <label for='staticEmail2' >Distrito : &nbsp;&nbsp;</label>
                            <select  id='select-search-distrito' class='selectpicker' data-live-search='true' data-style='btn-primary'>
                                                                          
                            </select>
                        </div>

                </form>        
           </div>



        </div>
      <form class="needs-validation" novalidate autocomplete="off">
        <div class="row">
          <div class="col-md-4 mb-3" style="display:none;">
            <label for="type-deposito">Tipo</label>
            <select class="custom-select d-block w-100" id="type-deposito" required>
              <option value="Deposito en efectivo">Deposito en efectivo</option>
              
            </select>
            <div class="invalid-feedback">
              Por favor seleccione un tipo de deposito.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="titular">Titular</label>
            <input type="text" class="form-control" id="titular" placeholder="Buscar Titular" value="" required>
            <div class="invalid-feedback">
              El nombre del titular es obligatorio.
            </div>
            <input type="hidden" class="form-control" id="titular-hide">
          </div>
          <div class='col-4 mb-3'>
            
                            <label for='select-search-cliente' >Seleccione Titular : &nbsp;&nbsp;</label>
                            <select  id='select-search-cliente' class='selectpicker' data-live-search='true' data-style='btn-primary'>
                                                                          
                             
           </div>


          <div class="col-md-4 mb-3">
            <label for="nro-cta">Cta</label>
            <input type="text" class="form-control" id="nro-cta" placeholder="Ingrese N cuenta" value="" required>
            <div class="invalid-feedback">
              Cta es obligatorio.
            </div>
          </div>

        </div>

        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="oficina">Oficina</label>
            <input type="text" class="form-control" id="oficina" placeholder="Buscar Oficina" value="" required>
            <div class="invalid-feedback">
              El nombre de la oficina es obligatorio.
            </div>
            <input type="hidden" class="form-control" id="oficina-hide">
          </div>
          <div class='col-4 mb-3'>
            
                            <label for='select-search-oficina' >Seleccione oficina : &nbsp;&nbsp;</label>
                            <select  id='select-search-oficina' class='selectpicker' data-live-search='true' data-style='btn-primary'>
                                                                          
                             
           </div>


          <div class="col-md-4 mb-3">
            <label for="nro-clave">CLAVE</label>
            <input type="text" class="form-control" id="nro-clave" placeholder="Ingrese Código de Oficina" value="" required>
            <div class="invalid-feedback">
              Clave Oficina es obligatorio.
            </div>
          </div>

          

        </div>

        <h4 class="mb-3">Tipo de moneda</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="soles" name="moneymethod" type="radio" class="custom-control-input" value="0"  checked required>
            <label class="custom-control-label" for="soles">Soles</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="dolares" name="moneymethod" type="radio" class="custom-control-input" value="1"  required>
            <label class="custom-control-label" for="dolares">Dolares</label>
          </div>

        </div>
        
        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="importe">Importe</label>
            <input type="text" class="form-control" id="importe" placeholder="00.00" value="" required>
            <div class="invalid-feedback">
              Importe es obligatorio.
            </div>
          </div>        	
        </div>

  




        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" id="btn-register" type="submit">Registrar</button>
      </form>
    </div>
  </div>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2022 TI SOLUTION S.A.C</p>
    <ul class="list-inline">

    </ul>
  </footer>
</div>


</html>