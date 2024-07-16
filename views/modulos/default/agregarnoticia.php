<br>
<div class="container">
    <h2>Administrador de noticias y promociones</h2>
    <br>
    <div class="tabs">
        <button id="defaultOpen" class="tablink" onclick="openTab(event, 'administrar')">Administrar Noticias</button>
        <button class="tablink" onclick="openTab(event, 'agregar')">Agregar Noticia</button>
    </div>

    <!-- Formulario para agregar noticia -->
    <div id="agregar" class="tabcontent" style="display:none;">
        <form action="<?php echo $url?>guardar-noticia" method="POST" enctype="multipart/form-data" class="form">
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


    <div id="administrar" class="tabcontent">
        <table class="noticias-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Descripción</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Aquí se incluye el código PHP para mostrar las noticias dinámicamente
                $controlador = new ControladorNoticias();
                $noticias = $controlador->mostrarNoticias();

                // Iteración para mostrar cada noticia en la tabla
                foreach ($noticias as $noticia) {
                    echo "<tr>";
                    echo "<td>" . $noticia['id'] . "</td>";
                    echo "<td>" . $noticia['titulo'] . "</td>";
                    echo "<td>" . $noticia['descripcion'] . "</td>";
                    echo "<td><img src='" . $url . $noticia['imagen'] . "' alt='" . $noticia['titulo'] . "' style='max-width: 100px; max-height: 100px;'></td>";
                    echo "<td><button onclick='openEditModal(" . json_encode($noticia) . ")'>Editar</button> | <button onclick='deleteNoticia(" . $noticia['id'] . ")'>Eliminar</button></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Modal para editar noticias -->
    <div id="editModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeEditModal()">&times;</span>
            <form id="editForm" action="<?php echo $url?>editar-noticia" method="POST" enctype="multipart/form-data">
                <input type="hidden" id="editId" name="id">
                <label for="editTitulo">Título:</label><br>
                <input type="text" id="editTitulo" name="titulo" required><br><br>

                <label for="editDescripcion">Descripción:</label><br>
                <textarea id="editDescripcion" name="descripcion" rows="4" required></textarea><br><br>

                <label for="editImagen">Imagen:</label><br>
                <input type="file" id="editImagen" name="imagen" accept="image/*"><br><br>

                <label for="editFecha">Fecha de Publicación:</label><br>
                <input type="date" id="editFecha" name="fecha" required><br><br>

                <input type="submit" value="Guardar Cambios" class="btn-submit">
                <button type="button" onclick="closeEditModal()">Cancelar</button>
            </form>
        </div>
    </div>
</div>

<!-- Script para manejar las pestañas y el modal -->
<script>
    document.getElementById("defaultOpen").click(); // Abrir la pestaña por defecto al cargar la página

    function openTab(evt, tabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Función para abrir el modal de edición con los datos de la noticia seleccionada
    function openEditModal(noticia) {
        document.getElementById("editId").value = noticia.id;
        document.getElementById("editTitulo").value = noticia.titulo;
        document.getElementById("editDescripcion").value = noticia.descripcion;
        document.getElementById("editFecha").value = noticia.fecha_publicacion;

        var modal = document.getElementById("editModal");
        modal.style.display = "block";
    }

    // Función para cerrar el modal de edición
    function closeEditModal() {
        var modal = document.getElementById("editModal");
        modal.style.display = "none";
    }

    // Función para eliminar una noticia
    function deleteNoticia(id) {
        if (confirm("¿Estás seguro de que deseas eliminar esta noticia?")) {
            window.location.href = "eliminar-noticia?id=" + id;
        }
    }
</script>



