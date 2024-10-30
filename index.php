<!--index.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reciclá tu ropa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url('fondo.jpg'); /* Imagen de fondo */
            background-size: cover;
            background-position: center;
        }
        .container {
            width: 80%;
            margin: auto;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
            padding: 30px 0;
            background-color: rgba(255, 255, 255, 0.8); /* Fondo blanco con transparencia */
            border-radius: 10px;
        }
        h2 {
            font-size: 20px; /* Tamaño equivalente a 20 en Word */
            font-weight: bold; /* Negrita */
            color: #333;
            margin-bottom: 15px;
        }
        h3 {
           
        font-size: 35px; /* Tamaño equivalente a 20 en Word */
        font-weight: bold; /* Negrita */
        color: #333;
        }
        
        .section {
            display: flex;
            align-items: center;
            justify-content: space-between; /* Distribución entre imagen y texto */
            margin: 30px 0;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Fondo blanco claro */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Sombra para efecto de cuadro */
        }
        .section img {
            width: 600px; /* Tamaño normalizado */
            height: auto;
            border-radius: 10px;
            margin-right: 20px; /* Espacio a la derecha de la imagen */
            margin-left: 20px;  /* Espacio a la izquierda (para las secciones pares) */
        }

        .section p {
            font-size: 20px; /* Tamaño equivalente a 12 en Word */
            color: #555;
            margin: 10;
        }
        /* Estilos para secciones impares (imagen a la izquierda) */
        .section.impar {
            flex-direction: row; /* Imagen a la izquierda, texto a la derecha */
        }
        /* Estilos para secciones pares (imagen a la derecha) */
        .section.par {
            flex-direction: row-reverse; /* Imagen a la derecha, texto a la izquierda */
        }
        .section video {
            margin-right: 50px; /* Ajuste del margen derecho para acercar el video al texto */
            margin-left: 150px; /* Esto asegura que no haya espacio extra a la izquierda */
        }
      .btn-donacion {
          display: block;
          width: 100%;
          max-width: 300px;
          margin: 20px auto;
          padding: 10px;
          background-color: #4CAF50;
          color: white;
          text-align: center;
          font-size: 18px;
          border-radius: 5px;
          text-decoration: none;
      }
      .btn-donacion:hover {
          background-color: #45a049;
      }

    </style>
</head>
<body>

    <div style="text-align: center;">
        <img src="union.png" alt="TN PLATEX" style="width: 800px; height: auto;">
       
          </div>

    
        




        <div class="section video" style="display: flex; align-items: center; justify-content: flex-start; margin: 30px 0; padding: 20px; background-color: rgba(255, 255, 255, 0.8); border-radius: 10px;">
            <video width="300" controls style="margin-right: 10px;"> <!-- Video con margen derecho -->
                <source src="video.mp4" type="video/mp4">
            </video>
            <div style="text-align: left;">
                <h2 style="font-size: 30px; font-weight: bold;">¿Querés reciclar tu ropa pero no sabes dónde?</h2>
                <p style="font-size: 20px; color: #555; margin: 20px;">¡No te preocupes! Nuestros contenedores están por toda la ciudad,</p> 
                <p style="font-size: 20px; color: #555; margin: 20px;">listos para darle una nueva vida a tus prendas. ¡Recicla y sé parte del cambio!</p>
                <a href="zformulario.html" class="btn-donacion">Participá vos también, ¡doná ropa!</a>
            </div>
        </div>

        <div class="section video" style="display: flex; align-items: center; justify-content: flex-start; margin: 30px 0; padding: 20px; background-color: rgba(255, 255, 255, 0.8); border-radius: 10px; flex-direction: row-reverse;">
            <video width="300" controls style="margin-left: 10px;"> <!-- Video con margen izquierdo -->
                <source src="video2.mp4" type="video/mp4">
            </video>
            <div style="text-align: left;">
                <h2 style="font-size: 30px; font-weight: bold;">¿Sabías que tu ropa vieja puede tener una nueva historia?</h2>
                <p style="font-size: 20px; color: #555; margin: 20px;">En TN Platex, transformamos tus prendas olvidadas en productos que marcan la diferencia.</p> 
                <p style="font-size: 20px; color: #555; margin: 20px;">Dale play a nuestro reel y descubre cómo convertir tu ropa en moda sustentable. ¡Es más fácil de lo que crees!</p>
                <a href="zformulario.html" class="btn-donacion">Participá vos también, ¡doná ropa!</a>
            </div>
        </div>

        
        <div>
        <div style="text-align: center;">
            <a href="https://www.canva.com/design/DAGTMsZDCUg/HXI88vobk1-3vMSS87ZJqA/edit?utm_content=DAGTMsZDCUg&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton" target="_blank">
                <img src="miniatura.jpg" alt="Miniatura del diseño" style="width: 800px; height: auto;">
            </a>
        </div>
        </div>

        <div style="text-align: center;">
            <img src="Infografia.jpg" alt="Infografía">
        </div>
 

        <!-- Sección 1: Recepción de Ropa (Impar: Imagen a la izquierda) -->
        <div class="section impar">
            <img src="fader3.jpg" alt="Recepción de ropa usada reciclada">
            <div>
                <h3>TN Platex presenta una línea de moda sostenible con diseños serigrafiados     que 
                    celebran la biodiversidad argentina.</h3>
                <p></p>
            </div>
        </div>

        <!-- Sección 2: Procesamiento - Clasificación y Trituración (Par: Imagen a la derecha) -->
        <div class="section par">
            <img src="fader5.jpg" alt="Clasificación y trituración de ropa">
            <div>
                <h2>DISEÑOS</h2>
                <p>Cada prenda de esta colección cuenta con la ilustración detallada de un emblemático animal autóctono en peligro de extinción. Entre los protagonistas se encuentran el aguará guazú, el tapir, el jaguar, el águila poma, el huillín y el pingüino patagónico. Estos diseños no solo son estéticamente atractivos, sino que también buscan generar conciencia sobre la importancia de preservar nuestras especies autóctonas y sus hábitats.</p>
            </div>
        </div>

        <div class="section impar">
            <img src="fader6.jpg" alt="Hilado y tejido de fibras recicladas">
            <div>
                <h2></h2>
                <p>Como pieza central de la colección, se ha diseñado una bolsa de tela con la silueta de Argentina, en la que se ubican los diferentes animales representados en las remeras. Esta pieza unifica la colección y ofrece una perspectiva más amplia sobre la distribución de estas especies en nuestro país.</p>
            </div>
        </div>

        <div class="section par">
            <img src="fader1.jpg" alt="Clasificación y trituración de ropa">
            <div>
                <h2>EXPLICACIÓN DE LA TÉCNICA</h2>
                <p>La técnica de serigrafía utilizada garantiza una alta calidad de impresión, durabilidad y versatilidad en cuanto a los materiales. Además, se propone reutilizar los retazos de tela para crear etiquetas personalizadas, reduciendo el desperdicio y optimizando los recursos.</p>
            </div>
        </div>
<!--
      
        <div class="section impar">
            <img src="fader2.jpg" alt="Hilado y tejido de fibras recicladas">
            <div>
                <h2> </h2>
                <p>Ésta técnica nos favorece ya que está recomendada para estampar detalles finos y complejos. Así mismo favorece a la empresa ya que, a diferencia de la técnica usada actualmente, se pueden estampar en todo tipo de tela. Por lo tanto, resolvemos la problemática de solo poder estampar en cierta clase de telas, abriendo las posibilidades de   materiales que se pueden estampar los productos de TN Platex.
                También se beneficia a los clientes porque se aplican capas de tinta más duraderas, lo que garantiza que el diseño no se desgaste con facilidad, ya que la tinta utilizada en la serigrafía se adhiere completamente a la fibra del tejido, lo que la hace resistente a múltiples ciclos de lavado.</p>
            </div>
        </div>

      
        <div class="section par">
            <img src="fader4.jpg" alt="Ropa reciclada lista para la venta">        
            <div>
                <h2>MÁS PROPUESTAS</h2>
                <p>Tomamos la decisión de no procesar retazos de tela que tengan un tamaño determinado y no estén muy dañados o contaminados; utilizándolos para hacer etiquetas a pedido o para la misma TN Platex. Dicha etiqueta usaría la técninca serigráfica, sin necesidad de tener un solo shablon por etiqueta, sino uno para estampar varias etiquetas en una sola pasada de tinta.</p>
            </div>
        </div>

-->
</body>
</html>
