<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once "./includes/headers.php" ?>
    <script src="./js/schedule.js"></script>   
    <title>Calendario</title>
</head>
<body>
<h1 class="d-flex aligns-items-center justify-content-center" >Calendario</h1>
<div class="row">
    <div lass="col-12">
        <div  class="d-flex aligns-items-center justify-content-center card text-center w-75 mx-auto" style="width: 50rem;" class="card_form">
            <form>
                <div class="form-group">
                    <select class="form-select" aria-label="Categoria" id="category_select" class="category_class" onchange="tables_groups()">
                        <option selected>Seleccione una Categoria</option>

                    </select>                
            </form>
        </div>
    </div>
</div>
    
</body>
</html>