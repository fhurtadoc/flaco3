<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once "./includes/headers.php" ?>
    <title>Grupos</title>
</head>
<body>
    
<h1 class="d-flex aligns-items-center justify-content-center" >Crear Nuevo Grupo</h1>
<div class="row">
    <div lass="col-12">
        <div  class="d-flex aligns-items-center justify-content-center card text-center w-75 mx-auto" style="width: 50rem;" class="card_form">
            <form>
                <div class="form-group">
                    <select class="form-select" aria-label="Categoria" id="category_select" class="category_class">
                        <option selected>Seleccione una Categoria</option>

                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Grupo</label>
                    <input type="text" class="form-control" id="Name_group" aria-describedby="emailHelp" placeholder="Nombre del grupo">
                    <small id="Name_group" class="form-text text-muted">Seleccione el Nombre del Grupo</small>
                </div><br>    
                <a  class="btn btn-primary" onclick="new_group()" >Enviar</a>
            </form>
        </div>
    </div>
</div>
<h1 class="d-flex aligns-items-center justify-content-center"  >Tablas de Grupos</h1>

<div class="row">
    <div lass="col-12">
        <div class="d-flex aligns-items-center justify-content-center card text-center w-75 mx-auto" style="width: 50rem;" class="card_form">
        <div class="form-group">
        <label for="category_select_grupos">Seleccione una Categoria</label>    
        <select class="form-select" aria-label="Categoria" id="category_select_grupos" class="category_class" onchange="list_teams(), list_groups()  ">
                <option selected>Seleccione una Categoria</option>

            </select>
            <label for="teams">Seleccione un Equipo</label>
            <select class="form-select" aria-label="Categoria" id="teams" class="category_class">
                <option selected>Seleccione un Equipo</option>

            </select>
            <label for="groups">Seleccione un Grupo</label>
            <select class="form-select" aria-label="Grupo" id="groups" class="category_class">
                <option selected>Seleccione un Grupo</option>

            </select><br>
            <div class="form-group">
                <label for="order">Seleccione la posision del equipo</label>
                <input type="number" id='order'>            
            </div><br>
            <a  class="btn btn-primary" onclick="teams_group()" >Enviar</a>
        </div>
            
        </div>
    </div>
</div>

<div class="row">
    <div lass="col-12">
        <div class="d-flex aligns-items-center justify-content-center card text-center w-75 mx-auto" style="width: 50rem;" id="tables" >
            <select class="form-select" aria-label="Categoria" id="tables_categories" class="category_class" onchange="tables_groups()">
                        <option selected>Seleccione una Categoria</option>

            </select>        
        </div>            
        </div>
    </div>
</div>





<script src="./js/groups.js"></script>       
</body>
</html>