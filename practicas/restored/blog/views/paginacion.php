<?php $no_paginas = noPaginas($blog_config['ppp'], $conexion); ?>
<section class="paginacion">

    <ul>

        <?php if(paginaActual() == 1): ?>

            <li class="disabled">&laquo;</li>
        <?php else: ?>

            <li><a href="index.php?p=<?php echo paginaActual() - 1; ?>">&laquo;</a></li>
        <?php endif; ?>

        <?php for($i = 1; $i <= $no_paginas; $i++): ?>

            <?php if(paginaActual() === $i): ?>

                <li class="active">
                
                    <?php echo $i; ?>
                </li>
            <?php else: ?>
                
                <li><a href="index.php?p=<?php echo $i; ?>"><?php echo $i; ?></a></li>

            <?php endif; ?>
        <?php endfor; ?>

        <?php if(paginaActual() == $no_paginas): ?>
            
            <li class="disabled">&raquo;</li>
        <?php else: ?>

            <li><a href="index.php?p=<?php echo paginaActual() + 1 ; ?>">&raquo;</a></li>
        <?php endif; ?>

        <!--<li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">&raquo;</a></li>-->
    </ul>
</section>