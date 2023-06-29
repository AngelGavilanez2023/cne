<section class="apply-now" id="apply">
    <div class="container">
      <div class="row">
        <div class="col-md-12 align-self-center">
          <div class="row">
            <div class="col-md-12">
              <div class="item">
                <h3><center>INGRESAR NUEVO CANDIDATO</center></h3>
                <form  class="" action="<?php echo site_url(); ?>/candidatos/guardar" method="post">
                <div class="row">
                  <div class="col-md-4">
                      <label for="" style="color:white">Dignidad:</label>
                      <select class="form-control" name="dignidad_can" id="dignidad_can">
                        <option disabled selected hidden>Seleccionar dignidad</option>
                        <option value="Presidente">Presidente</option>
                        <option value="Asambleista Nacional">Asambleista Nacional</option>
                        <option value="Asambleista Provincial">Asambleista Provincial</option>
                      </select>

            </div>
            <div class="col-md-4">
                  <label for="" style="color:white">Apellido:</label>

                  <input type="text" placeholder="Ingrese su apellido" class="form-control" name="apellido_can" value="" id="apellido_can">
            </div>
            <div class="col-md-4">
                  <label for="" style="color:white">Nombre:</label>

                  <input type="text" placeholder="Ingrese su nombre" class="form-control" name="nombre_can" value="" id="nombre_can">
            </div>
          </div>
          <br>
          <div class="row">
              <div class="col-md-4">
                  <label for="" style="color:white">Edad:</label>

                  <input type="number" placeholder="Ingrese su edad" class="form-control" name="edad_can" value="" id="edad_can">
              </div>

              <div class="col-md-4">
                  <label for="" style="color:white">Teléfono:</label>

                  <input type="number" placeholder="Ingrese su nro. de teléfono" class="form-control" name="telefono_can" value="" id="telefono_can">
              </div>
              <div class="col-md-4">
                <label for="" style="color:white">Tipo:</label>
                <select class="form-control" name="tipo_can" id="tipo_can">
                  <option disabled selected hidden>Seleccionar Tipo</option>
                  <option value="Derecha">Derecha</option>
                  <option value="Izquierda">Izquierda</option>
                </select>
              </div>
            <div class="row">
              <div class="col-md-12">
                <label for="" style="color:white">Movimiento:</label>

                <select class="form-control" name="movimiento_can" id="movimiento_can" >
                  <option disabled selected hidden>Seleccionar Movimiento</option>
                  <option value="PSC">PSC</option>
                  <option value="CREO">CREO</option>
                  <option value="UNES">UNES</option>
                  <option value="PACHAKUTIK">PACHAKUTIK</option>
                  <option value="AVANZA">AVANZA</option>
                  <option value="UNIDAD POPULAR">UNIDAD POPULAR</option>
                  <option value="IZQUIERDA DEMOCRATICA">IZQUIERDA DEMOCRATICA</option>
                  <option value="SUMA">SUMA</option>
                </select>
              </div>
            </div>

          </div>

          <br>
          <div class="row">

              <div class="col-md-6">
                  <label for="" style="color:white">Latitud:</label>

                  <input type="float" placeholder="Ingrese su latitud" class="form-control" readonly name="latitud_can" value="" id="latitud_can">
              </div>


              <div class="col-md-6">
                  <label for="" style="color:white">Longitud:</label>

                  <input type="float" placeholder="Ingrese su longitud" class="form-control" readonly name="longitud_can" value="" id="longitud_can">
              </div>
          </div>
          <br>
          <br>
          <div class="row">
            <label for="" style="color:white">Seleccione aqui :</label>
            <div class="col-md-12">
              <div id="mapaUbicacion" style="height:300px; width:100%; border:2px solid white;"></div>
            </div>
          </div>
          <script type="text/javascript">
            function initMap() {
              var centro=new google.maps.LatLng(-1.6413130933745723,
                -78.64946783526815);
              var mapa1=new google.maps.Map(
                document.getElementById('mapaUbicacion'),
                {
                  center:centro,
                  zoom:7,
                  mapTypeId:google.maps.MapTypeId.HYBRID
                }

              );
              var marcador = new google.maps.Marker({
                position:centro,
                map:mapa1,
                title:"Seleccione la direccion",
                icon: "<?php echo base_url(); ?>/assets/img/marker_general.png",
                //CODIGO nuevo
                draggable:true
              });
              //CODIGO nuevo
              google.maps.event.addListener(marcador,
                'dragend',function(){
                  // alert("Se termino el DRAG");
                  document.getElementById('latitud_can').value=
                  this.getPosition().lat();
                  document.getElementById('longitud_can').value=
                  this.getPosition().lng();
              });
            }//fin function init map
          </script>
          <br>
          <br>
          <div class="col-md-12 text-center">
              <button type="submit" name="buttom" class="btn btn-primary">
                  <b>GUARDAR</b>
              </button>
              &nbsp;
              <a href="<?php echo site_url(); ?>" class="btn btn-danger">
                  <b>CANCELAR</b>
              </a>

              </div>
          </div>
  </form>
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
