<section class="apply-now" id="apply">
    <div class="container">
      <div class="row">
        <div class="col-md-12 align-self-center">
          <div class="row">
            <div class="col-md-12">
              <div class="item">
                <h3><center>LISTADO DE CANDIDATOS</center></h3>
                <div class="row">
  <div class="col-md-8">
  </div>
  <div class="col-md-4">
    <a href="<?php echo site_url('candidatos/nuevo'); ?>">
      <button type="button" class="btn btn-primary">
        <i class="bi bi-person-add" style="font-size: 22px;"></i>
        Agregar Candidatos</button>
    </a>
  </div>
</div>
<div class="container">
    <br>
    <?php if ($candidatos): ?>
        <table class="table table-striped table-bordered table-hover table-primary">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>DIGNIDAD</th>
                    <th>APELLIDO</th>
                    <th>NOMBRE</th>
                    <th>EDAD</th>
                    <th>TELEFONO</th>
                    <th>TIPO POLITICA</th>
                    <th>MOVIMIENTO</th>
                    <th>LATITUD</th>
                    <th>LONGITUD</th>
                    <th>ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($candidatos as $filaTemporal): ?>
                    <tr>
                        <td>
                            <?php echo $filaTemporal->id_can; ?>
                        </td>
                        <td>
                            <?php echo $filaTemporal->dignidad_can; ?>
                        </td>
                        <td>
                            <?php echo $filaTemporal->apellido_can; ?>
                        </td>
                        <td>
                            <?php echo $filaTemporal->nombre_can; ?>
                        </td>
                        <td>
                            <?php echo $filaTemporal->edad_can; ?>
                        </td>
                        <td>
                            <?php echo $filaTemporal->telefono_can; ?>
                        </td>
                        <td>
                            <?php echo $filaTemporal->tipo_can; ?>
                        </td>
                        <td>
                            <?php echo $filaTemporal->movimiento_can; ?>
                        </td>
                        <td>
                            <?php echo $filaTemporal->latitud_can; ?>
                        </td>
                        <td>
                            <?php echo $filaTemporal->longitud_can; ?>
                        </td>
                        <td class="text-center">


                            <a href="<?php echo site_url(); ?>/candidatos/editar/<?php echo $filaTemporal->id_can; ?>" title="Editar Instructor" >
                             <i class="bi bi-pencil-square" style="font-size: 22px; color: black"></i>
                        
                           </a>
                            &nbsp;&nbsp;&nbsp;

                            <a href="<?php echo site_url(); ?>/candidatos/eliminar/<?php echo $filaTemporal->id_can; ?>"
                              title="Eliminar Cliente" style="color:red;"
                              onclick="return confirm('Estas seguro?');"
                              style="color:red;">
                              <i class="bi bi-trash" style="font-size: 22px;"></i>
                            </a>

                        </td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>

    <?php else: ?>
        <h1>No hay instructores</h1>
    <?php endif; ?>

</div>

                  <!-- <div class="main-button-red">
                  <div class="scroll-to-section"><a href="#contact">Join Us Now!</a></div> -->
              </div>
              </div>
            </div>

            </div>
          </div>
        </div>

        </div>
      </div>
    </div>
  </section>
