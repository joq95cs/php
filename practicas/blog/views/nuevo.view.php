<?php require 'header.php'; ?>

<div class="contenedor">

    <div class="post">

    <article>

        <h2 class="titulo">Nuevo post</h2>

        <form class="formulario" method="post" enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">

            <input type="text" name="titulo" placeholder="Título">
            <input type="text" name="extracto" placeholder="Extracto">
            <textarea name="texto" placeholder="Texto"></textarea>
            <input type="file" name="thumb">
            <input type="submit" value="Crear">
        </form>
    </article>
    </div>
</div>
<?php require 'footer.php';
