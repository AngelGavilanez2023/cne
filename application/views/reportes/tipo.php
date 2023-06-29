<section class="our-facts">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">
              <h2><center>REPORTE TIPO POLITICA</center></h2>
            </div>

            <div class="col-md-12" >
              <div class="row" >
                <div class="col-6">
                  <div class="count-area-content">
                    <img src="<?php echo base_url('assets/img/marker_asam_pro.png'); ?>" alt="" style="width:60px; height:60px">
                    <div class="count-title">Marcador Politicia Derecha</div>
                  </div>
                </div>
                <div class="col-6">
                  <div class="count-area-content">
                    <img src="<?php echo base_url('assets/img/marker_presi.png'); ?>" alt="" style="width:60px; height:60px">
                    <div class="count-title">Marcador Politica Izquierda</div>
                  </div>
                </div>


                <div class="col-md-12">
                  <div class="video" style="background:white">
                      <br>
                      <div class="container">
                        <div class="row">
                          <div class="col-md-12">
                            <div id="mapabase" style="height:500px; width:100%; border: 2px solid black;"></div>
                          </div>
                        </div>
                      </div>
                      <script type="text/javascript">
                        function initMap() {
                          var centro=new google.maps.LatLng(-0.9169304301515272, -78.63320280199586);
                          var mapaCandidatos=new google.maps.Map(
                            document.getElementById('mapabase'),
                              {
                                center:centro,
                                zoom:7,
                                mapTypeId:google.maps.MapTypeId.ROADMAP
                              }
                           );

                           <?php  if($derecha_api): ?>
                             <?php  foreach($derecha_api as $lugarTemporal): ?>
                             var coordenadaTemporal=new google.maps.LatLng(<?php echo $lugarTemporal->latitud_can; ?>,
                               <?php echo $lugarTemporal->longitud_can; ?>);
                             var marcador = new google.maps.Marker({
                               position:coordenadaTemporal,
                               title:"<?php echo $lugarTemporal->tipo_can; ?>,<?php echo $lugarTemporal->nombre_can; ?> <?php echo $lugarTemporal->apellido_can; ?>",
                               icon: "<?php echo base_url(); ?>/assets/img/marker_asam_pro.png",
                               map: mapaCandidatos
                             });
                             <?php endforeach; ?>
                           <?php endif; ?>
                           <?php  if($izquierda_api): ?>
                             <?php  foreach($izquierda_api as $lugarTemporal): ?>
                             var coordenadaTemporal=new google.maps.LatLng(<?php echo $lugarTemporal->latitud_can; ?>,
                               <?php echo $lugarTemporal->longitud_can; ?>);
                             var marcador = new google.maps.Marker({
                               position:coordenadaTemporal,
                               title:"<?php echo $lugarTemporal->tipo_can; ?>,<?php echo $lugarTemporal->nombre_can; ?> <?php echo $lugarTemporal->apellido_can; ?>",
                               icon: "<?php echo base_url(); ?>/assets/img/marker_presi.png",
                               map: mapaCandidatos
                             });
                             <?php endforeach; ?>
                           <?php endif; ?>


                        }//cierre de la funcion
                      </script>
                      <br>
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
