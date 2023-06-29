<section class="our-facts">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-12">
              <h2><center>REPORTE ASAMBLEISTAS NACIONALES</center></h2>
            </div>
            <div class="col-md-12">
              <div class="row">
                <div class="col-md-3">
                  <div class="count-area-content">
                    <img src="<?php echo base_url('assets/img/marker_asam_nac.png'); ?>" alt="" style="width:60px; height:60px">
                    <div class="count-title">Color de Marcador</div>
                  </div>
                </div>

                <div class="col-md-8">
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

                          <?php  if($asambleistaN_api): ?>
                            <?php  foreach($asambleistaN_api as $lugarTemporal): ?>
                              var coordenadaTemporal=new google.maps.LatLng(<?php echo $lugarTemporal->latitud_can; ?>,
                                <?php echo $lugarTemporal->longitud_can; ?>);
                                  var marcador = new google.maps.Marker({
                                    position:coordenadaTemporal,
                                    title:"<?php echo $lugarTemporal->dignidad_can; ?>,<?php echo $lugarTemporal->nombre_can; ?> <?php echo $lugarTemporal->apellido_can; ?>",
                                    icon: "<?php echo base_url(); ?>/assets/img/marker_asam_nac.png",
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
