<br>
<hr>
<div class="container">
    <h2>Agregar Nueva Noticia</h2>
    <br>
    <form action="guardarnoticia.php" method="POST" enctype="multipart/form-data" class="form">
        <label for="titulo">Título:</label><br>
        <input type="text" id="titulo" name="titulo" required><br><br>

        <label for="descripcion">Descripción:</label><br>
        <textarea id="descripcion" name="descripcion" rows="4" required></textarea><br><br>

        <label for="imagen">Imagen:</label><br>
        <input type="file" id="imagen" name="imagen" accept="image/*" required><br><br>

        <label for="fecha">Fecha de Publicación:</label><br>
        <input type="date" id="fecha" name="fecha" required><br><br>

        <input type="submit" value="Agregar Noticia" class="btn-submit">
    </form>
</div>

