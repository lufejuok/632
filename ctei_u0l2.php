<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>Ingenia</title>
</head>
<body>
<?php require("./layout/header.php")?>
    <body>
        <section>
            <div class="box">
              <div class="banner-fotos"> 
                <img style="display:flex; justify-content:end; width:70% ;" src="img/portada CTeI_1280x240px.jpg">
              </div>
              
                <div class="box1">

                           <?php require("./ctei_contenido.php")?>
 
                    <h2><bold>Unidad 0 - Lección 02 - ¿Cómo hago ciencia en la Escuela?</bold></h2>                    
                  
                    
                    <div class="banner-fotos"> 
                      <img style="justify-content: center; width:50% ;" src="img/ctei/02_LECCION_video.jpg">
                    </div>
                    
                    <p>Te invitamos a ver el siguiente video en el que varios docentes de las Instituciones Educativas, participantes de este proyecto, nos contaron cómo hacer ciencia en la Escuela.</p>
                    <h3>Video</h3> 
                    <p>CTeI</p>
                    <h3>Canal  </h3> 
                    <p>Fortalecimiento CTeI para la innovación educativa</p>
                    <h3>Link   </h3> 
                    <p>https://youtu.be/Q5yFa-mfL-A </p>      

                    <div style="text-align:center;">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/Q5yFa-mfL-A" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>

                    <p>
                    Participa en el foro y comparte con nosotros tu relación con la ciencia.
                    <br>
                    1. ¿Contemplas en tu práctica pedagógica propósitos para hacer ciencia? ¿Cómo lo haces? </p>
                    <h3>Nota   </h3> 
                    <p>El cuadro de texto de tu derecha es para tu participación (foro obligatorio). </p>      


                   
                 

                    </p>
                  </div>

        </section>           
    </body>
    <?php require("./layout/footer.php")?>
    
</body>
</html>