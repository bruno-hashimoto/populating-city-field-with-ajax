
        <div>
          <label>Estado:</label>
          <select name="input[estado]" id="estados">
            <option value="" selected>Selecione um estado:</option>
            <?php $a = $sql->select("SELECT * FROM estados");
            foreach ($a as $a) : ?>
              <option value="<?php echo $a['cod_estados']; ?>"><?php echo $a['sigla']; ?></option>
            <?php endforeach; ?>
          </select>
        </div>



        <div>
          <label>Cidade:</label>
          <select name="input[titulo]" id="cidades">
            <option value="" selected>Selecione uma cidade:</option>

          </select>
        </div>



        
     