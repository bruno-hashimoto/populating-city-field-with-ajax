<script>
          $(document).ready(function() {
            $("#estados").change(function() {

              var estadoEscolhido = $("#estados").val();

              if (estadoEscolhido != "") {
                $.ajax({
                  type: "POST",
                  url: "<?php echo _BASE_; ?>sh-admin/cidades/ajax_exibe_cidade.php",
                  dataType: "json",
                  data: {
                    id_estado: estadoEscolhido
                  },
                  success: function(res) {
                    if (res) {
                      var html = "";
                      $.each(res, function(index, value) {
                        /* html += "<option value='" + res[index].cod_cidades + "'>" + res[index].nome + "</option>"; */
                        html += "<option value='" + res[index].nome + "'>" + res[index].nome + "</option>";
                      });

                      $("#cidades").html(html);
                    }
                  }
                });
              }
            });
          });
        </script>