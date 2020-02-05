<div class="header bg-primary pb-6">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row align-items-center py-4">
        <div class="col-lg-6 col-7">
          <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
              <li class="breadcrumb-item"><a href="<?=base_url()?>index.php/home"><i class="fas fa-home"></i></a></li>
              <li class="breadcrumb-item"><a href="<?=base_url()?>index.php/contenedores">Form Contenedor</a></li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Page content -->

<div class="container-fluid mt--6">
  <div class="row">
    <div class="col-md-10">
      <div class="row">
        <div class="col">
          <div class="card shadow">
            <div class="card-header border-0">
              <h3 class="mb-0">Table Contenedor</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-flush" id="contenedor_table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Codigo</th>
                    <th scope="col">Status</th>
                    <th scope="col">Clasificacion</th>
                    <th scope="col">Capacidad</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <nav>
    <div class="nav nav-tabs" id="nav-tab" role="tablist">
      <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Contenedor</a>
      <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Contenedore Info</a>
      <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Info</a>
    </div>
  </nav>
  <div class="tab-content" id="nav-tabContent">
    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
      <div class="row">
        <!--Formulario-->
        <div class="col-md-8">
          <div class="card mb-4">
            <div class="card-body">
              <!-- Form groups used in grid -->
              <!--test-->
              <form id="contenedorForm">
                <p>Contenedores Info: 
                <select id="contenedorInfo" class="form-control" name="contenedorInfo">
                  <option value="" disabled="disabled" selected="selected">Choose one option</option>
                </select>
                <p>Clasificacion: 
                <select id="clasificacion" class="form-control" name="clasificacion">
                  <option value="" disabled="disabled" selected="selected">Choose one option</option>
                </select>
                <div class="form-group btns">
                    <button type="submit" class="btn btn-block btn-primary">Send</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!--Descripcion-->
        <div class="col-md-3">
          <div class="card mb-4 bg-gradient-primary">
            <div class="card-header bg-gradient-success">
              <h3 class="mb-0">Descripcion</h3>
            </div>
            <div class="card-body">
              <h4 class="text-white">En case de querer crear un contenedor con alguna informacion ya cargada previamente.</h4>
              <h4>Informacion del contenedor:</h4>
              <div class="test">
                
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
      <div class="row">
        <!--Formulario-->
        <div class="col-md-8">
          <div class="card mb-4">
            <div class="card-body">
              <!-- Form groups used in grid -->
              <!--test-->
              <form id="contenedorInfoForm">
                <p>Clasificacion: 
                <select id="clasificacionInfo" class="form-control" name="clasificacionInfo">
                  <option value="" disabled="disabled" selected="selected">Choose one option</option>
                </select>
                <div class="form-group">
                  <label class="form-control-label" for="nombre">Nombre:</label>
                  <input type="text" class="form-control" id="nombre" placeholder="Test..." name="nombre">
                </div>
                <div class="form-group">
                  <label class="form-control-label" for="altura">Altura:</label>
                  <input type="number" class="form-control" id="altura" placeholder="12.56" name="altura" step="any">
                </div>
                <div class="form-group">
                  <label class="form-control-label" for="ancho">Ancho:</label>
                  <input type="number" class="form-control" id="ancho" placeholder="12.56" name="ancho" step="any">
                </div>
                <div class="form-group">
                  <label class="form-control-label" for="capacidad">Capacidad:</label>
                  <input type="number" class="form-control" id="capacidad" placeholder="12.56" name="capacidad" step="any">
                </div>
                <div class="form-group">
                  <label class="form-control-label" for="material">Material:</label>
                  <input type="text" class="form-control" id="material" placeholder="Test..." name="material">
                </div>
                <div class="form-group btns">
                    <button type="submit" class="btn btn-block btn-primary">Send</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!--Descripcion-->
        <div class="col-md-3">
          <div class="card mb-4 bg-gradient-primary">
            <div class="card-header bg-gradient-success">
              <h3 class="mb-0">Descripcion</h3>
            </div>
            <div class="card-body">
              <h4 class="text-white">En caso de querer crear un contenedor con informacion nueva sin alguna ya existente, llenar los campos de la izquierda.El formulario aqui no se podra modificar ni editar la informacion</h4>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
      <div class="row">
        <!--Formulario-->
        <div class="col-md-8">
          <div class="card mb-4">
            <div class="card-body">
              <!-- Form groups used in grid -->
              <!--test-->
              <form id="infoForm">
                <div class="form-group">
                  <label class="form-control-label" for="nombre">Nombre:</label>
                  <input type="text" class="form-control" id="nombre" placeholder="Test..." name="nombre">
                </div>
                <div class="form-group">
                  <label class="form-control-label" for="altura">Altura:</label>
                  <input type="number" class="form-control" id="altura" placeholder="12.56" name="altura" step="any">
                </div>
                <div class="form-group">
                  <label class="form-control-label" for="ancho">Ancho:</label>
                  <input type="number" class="form-control" id="ancho" placeholder="12.56" name="ancho" step="any">
                </div>
                <div class="form-group">
                  <label class="form-control-label" for="capacidad">Capacidad:</label>
                  <input type="number" class="form-control" id="capacidad" placeholder="12.56" name="capacidad" step="any">
                </div>
                <div class="form-group">
                  <label class="form-control-label" for="material">Material:</label>
                  <input type="text" class="form-control" id="material" placeholder="Test..." name="material">
                </div>
                <div class="form-group btns">
                </div>
              </form>
            </div>
          </div>
        </div>
        <!--Descripcion-->
        <div class="col-md-3">
          <div class="card mb-4 bg-gradient-primary">
            <div class="card-header bg-gradient-success">
              <h3 class="mb-0">Descripcion</h3>
            </div>
            <div class="card-body">
              <h4 class="text-white">En caso de querer modificar una informacion en especifica dar click en la tabla inferior para abrir la informacion.Solo se podra editar y borrar la informacion ya previa.</h4>
            </div>
          </div>
        </div>
        

      </div>
      <!--Tabla-->
        <div class="row">
          <div class="col-md-10">
            <div class="row">
              <div class="col">
                <div class="card shadow">
                  <div class="card-header border-0">
                    <h3 class="mb-0">Table Informacion Contenedor</h3>
                  </div>
                  <div class="table-responsive">
                    <table class="table align-items-center table-flush" id="info_table">
                      <thead class="thead-light">
                        <tr>
                          <th scope="col">Nombre</th>
                          <th scope="col">Altura</th>
                          <th scope="col">Ancho</th>
                          <th scope="col">Capacidad</th>
                          <th scope="col">Material</th>
                          <th scope="col">Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
  </div>
    </div>
  </div>

  