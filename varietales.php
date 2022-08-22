<?php include ('header.php') ?>

<section class="varietales_contenido">
    <h1>Varietales</h1>
        <div class="varietales_botonera">
            <ul>
                <li><a href="varietales.php?varietal=ch">Chardonnay</a></li>
                <li><a href="varietales.php?varietal=sb">Sauvignon Blanc</a></li>
                <li><a href="varietales.php?varietal=cs">Cabernet Sauvignon</a></li>
                <li><a href="varietales.php?varietal=ml">Malbec</a></li>
                <li><a href="varietales.php?varietal=pg">Pinot Gris</a></li>
            </ul>
        </div>
</section>

<?php
if (isset ($_GET['varietal'])){
    switch ($_GET['varietal']) {
        case 'ch':
            $cepa = 'Chardonnay';
            $descripcion = 'De origen francés, es considerada la variedad indicada para elaborar los más finos vinos varietales blancos. Es considerada la reina de las cepas blancas, siendo también utilizada como base para algunos vinos blancos genéricos o de corte, y para champañas de excelente calidad. Es una variedad fácil de cultivar y muy resistente.';
            $vino = 'Es un vino de buen cuerpo con aromas tropicales (banana, anana, manzana con toques de vainilla, miel y ahumado cuando es joven; Con la guarda aparecen matices de avellanas y pan tostado). Después de una crianza en madera (Reserva) adquiere notas tostadas y a mantequilla, dándole una cremosidad que acompaña muy bien al Salmón y a otros pescados grasos.';
            $color = 'Amarillo pálido';
            $img = './imagenes/chardonnay.jpg';
            break;
        case 'sb':
            $cepa = 'Sauvignon Blanc';
            $descripcion = 'Es la variedad más fina entre las cepas blancas de origen francés, obteniéndose de esta variedad excelentes y delicados vinos blancos secos; mundialmente puede utilizársela sola o combinada con otra importante variedad como el Semillón.';
            $vino = 'Se obtiene un vino con notas afrutadas verdes, toques de minerales y acidez viva. Puede acompañar mariscos, quesos de cabra y pescados blancos como la reineta y el lenguado. No es apto para guarda. Su color es amarillo medio con notas verdosas y reflejos acerados. El aroma recuerda a flores, ruda, pomelo rosado y herbáceos.';
            $color = 'Amarillo verdoso';
            $img = './imagenes/sauvignonblanc.jpg';
            break;
        case 'cs':
            $cepa = 'Cabernet Sauvignon';
            $descripcion = 'Es considerada la reina de las cepas tintas, y es de origen francés, de Burdeos. Cuando las uvas maduraron bien y al tiempo adecuado, este cepaje puede permanecer largos años en la apreciada botella que lo guarda.';
            $vino = 'Se obtiene un vino complejo, robusto y tánico (Áspero) con notas de frutos negros (Arándanos y moras). El roble francés le aporta notas a café, tabaco y chocolate; mientras que el roble americano le brinda recuerdos a vainilla y coco. Si el roble es de segundo uso, producirá un equilibrio mayor y taninos mas astringentes. Esta particular aspereza lo hace muy adecuado para acompañar carnes de vacuno, logrando suavizar su textura fibrosa y haciéndola más fácil de digerir.';
            $color = 'Azulado oscuro';
            $img = './imagenes/cabernetsauvignon.jpg';
            break;
        case 'ml':
            $cepa = 'Malbec';
            $descripcion = 'Es una cepa de origen francés muy extendida, y propia de la vitinicultura argentina. Ha logrado importantes premios internacionales y expertos afirman que posee mayor calidad en esta región que en la originaria. Conocida en Francia como Cot, debido a que "malbec" significa mal pico. Y en la zona de donde proviene se la llama Auxerrois. En 1775 fue llevada desde el Valle de Cahors hacia Burdeos por un técnico francés de apellido Malbeck, de ahi su nombre. Y luego aproximadamente en 1868 fue llevada a la Argentina por el Ing. Michel Aime Pouget mezclada por las denominadas uvas francesas por pedido del entonces presidente argentino D. F. Sarmiento. Finalmente fueron plantadas en la provincia de Mendoza.';
            $vino = 'Se obtiene un vino de cuerpo medio y taninos dulces y amables, con notas florales y especiadas. Su aroma recuerda a frutas como la ciruela, el cassis, guindas, frutillas y violetas. Con la crianza aporta notas de cuero, vainilla y chocolate. Se combina muy bien con cordero, carnes rojas y de caza (Ciervo y jabalí).';
            $color = 'Rojo violáceo profundo';
            $img = './imagenes/malbec.jpg';
            break;
        case 'pg':
            $cepa = 'Pinot Gris';
            $descripcion = 'La palabra "Pinot" significa "Piña" en francés debido a que los racimos presentan una forma de cono de pino, de baya azul grisácea.';
            $vino = 'Los vinos producidos por esta variedad van desde amarillos dorados intensos a cobrizos y hasta reflejos rosas. El clon de pinot gris que crece en Italia es conocido como Pinot Grigio. Color amarillo dorado hacia cobrizo o levemente rosado. Seco en boca, cuerpo medio, afrutado con recuerdos a hojas secas, hierbas y hongos secos.';
            $color = 'Marrón rosado';
            $img = './imagenes/pinotgris.jpg';
            break;
    }
    ?>
<div class="varietal_descripcion">
    <h2> <?php echo $cepa; ?></h2>
    <p> <?php echo $descripcion; ?></p>
    <p> <?php echo $vino; ?></p>
    <p> <?php echo $color; ?></p>
    <div class="contenedor_img">
        <img src="<?php echo $img ?>" alt="">
    </div>
  
    <?php } ?>
</div>


<?php include ('footer.php') ?>