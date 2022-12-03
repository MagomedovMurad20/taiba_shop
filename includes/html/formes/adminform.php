       <?php
        ?>

       <h3>Загрузка товара</h3>
       <form method="post" enctype="multipart/form-data" id="adminform">
           <p>Название <br />
               <input type="text" name="title" min="3" autofocus required" placeholder="Название товара" />
           </p>
           <p>Описание <br />
               <input type="text" name="description" min="50" max="500" autofocus required placeholder="Описание товара" />
           </p>
           <p>Цена <br />
               <input type="number" name="price" id="price" required /> руб.
           </p>
           <p>Фото <br />
               <input type="file" name="img" id="img" accept=".jpg, .jpeg, .png" required />
           </p>
           <input type="submit" value="Загрузить товар">
           <select name="category_id">


               <?php
                require_once './includes/logic/cart/db.php';
                require_once './includes/logic/formes/adminformselect.php';
                ?>
           </select>
       </form>
       <script>
           document.getElementById("adminform").reset();
       </script>