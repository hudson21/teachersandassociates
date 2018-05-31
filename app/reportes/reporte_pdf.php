<?php
          require_once('../lib/pdf/mpdf.php');
          
          require("config.php");

          $conexion=mysqli_connect($Servidor,$User,$Psw,$bd);
          $query="select * from $tablaAsesorias";
          $prepare =$conexion->prepare($query);
          $prepare->execute();
          $resultSet = $prepare->get_result();
          while($row[] = $resultSet->fetch_array());
          $resultSet->close();
          $prepare->close();
          $conexion->close();


          $html='<header class="clearfix">
      <div id="logo">
        <img src="img/1.jpg">
      </div>
      <h1>TEACHERS AND ASSOCIATES</h1>
      <div id="company" class="clearfix">
        <div>NOMBRE DE LA COMPAÑÍA</div>
        <div>TEACHERS AND ASSOCIATES <br /> AV KABAH 1353, MX</div>
        <div>(+521) 998-242-7098</div>
        <div><a href="mailto:company@example.com">carlosmigu27@hotmail.com</a></div>
      </div>
      <div id="project">
        <div><span>PROYECTO</span> Asesorías dentro de la Escuela</div>
        <div><span>ORGANIZADOR</span> Teachers and Associates</div>
        <div><span>DIRECCIÓN</span> Tecnológico de Cancún Av. Kabah</div>
        <div><span>EMAIL</span> <a href="mailto:john@example.com">carlosmigu27@hotmail.com</a></div>
        <div><span>FECHA</span> 25 de Noviembre del 2016</div>
        <div><span>FECHA DE EXPIRACIÓN</span> 30 de Noviembre del 2016</div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="service">ID_MATERIA</th>
            <th class="desc">NOMBRE DE LA MATERIA</th>
            <th>DIA</th>
            <th>PROFESOR</th>
            <th>TURNO</th>
          </tr>

        </thead>
        <tbody>


                <tr>
                      <td class="service">13530288</td>
                      <td class="desc">QUIMICA</td>
                      <td class="unit">MARTES</td>
                      <td class="qty">OCTAVIO</td>
                      <td class="total">VESPERTINO</td>
                </tr>

                <tr>
                      <td class="service">13526457</td>
                      <td class="desc">ESPAÑOL</td>
                      <td class="unit">MIERCOLES</td>
                      <td class="qty">LAURA GEORGINA</td>
                      <td class="total">MATUTINO</td>
                </tr>
                <tr>
                      <td class="service">13278423</td>
                      <td class="desc">MATEMÁTICAS</td>
                      <td class="unit">VIERNES</td>
                      <td class="qty">JULIAN PEREZ</td>
                      <td class="total">VESPERTINO</td>
                </tr>

                 <tr>
                      <td class="service">13272945</td>
                      <td class="desc">CALCULO DIFERENCIAL</td>
                      <td class="unit">MARTES</td>
                      <td class="qty">RAFAEL ALDAMA</td>
                      <td class="total">VESPERTINO</td>
                </tr>

                <tr>
                      <td class="service">13782532</td>
                      <td class="desc">HUMANIDADES</td>
                      <td class="unit">VIERNES</td>
                      <td class="qty">EDUARDO OSORIO</td>
                      <td class="total">MATUTINO</td>
                </tr>

        </tbody>
      </table>
      <div id="notices">
        <div>AVISO:</div>
        <div class="notice">PARA MAYOES INFORMES COMUNICARSE AL TELÉFONO 9982427098 EXT. 215</div>
      </div>
    </main>';

          $mpdf = new mPDF('c', 'A4');
          $css = file_get_contents('css/style.css');
          $mpdf->writeHTML($css, 1);
          $mpdf-> writeHTML($html);
          $mpdf-> Output('reporte.pdf','I');
?>