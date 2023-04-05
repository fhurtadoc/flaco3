list_category()


function list_category(){
    $.ajax({
        url:"../server/controllerchampion.php?action=categorys",
        method:"get",        

    }).done(function (response) {
        let data = JSON.parse(response);
        data.forEach(element => {
            var category = `<option value=${element.id}>${element.name}</option>`
            $("#category_select").append(category);
            $("#category_select_grupos").append(category); 
            $("#tables_categories").append(category);                         
        });

    })
}


 function list_teams(){
    
    $("#teams").children().remove()
    let category_select=$("#category_select_grupos").find(":selected").val()   
    $.ajax({
        url:"../server/controllerchampion.php?action=teams_category",
        method:"post",
        data:{category_select:category_select}       

    }).done(function (response) {       
        let data = JSON.parse(response);
        data.forEach(element => {
            var teams = `<option value=${element.id}>${element.name}</option>`
            $("#teams").append(teams);                                   
        });
          

    })

    
}

function list_groups() {
    let category_select=$("#category_select_grupos").find(":selected").val()
    $.ajax({
        url:"../server/controllerchampion.php?action=groups_category",
        method:"post",
        data:{category_select:category_select}       

    }).done(function (response) {
        let data = JSON.parse(response);
        data.forEach(element => {
            var teams = `<option value=${element.id}>${element.name}</option>`
            $("#groups").append(teams);                                   
        });

    })
    
}


function list_teams(){
    $("#teams").children().remove()
    let category_select=$("#category_select_grupos").find(":selected").val()
    $.ajax({
        url:"../server/controllerchampion.php?action=teams_category",
        method:"post",
        data:{category_select:category_select}       

    }).done(function (response) {
        let data = JSON.parse(response);
        data.forEach(element => {
            var teams = `<option value=${element.id}>${element.name}</option>`
            $("#teams").append(teams);                                   
        });

    })
}


function teams_group(){
    var team=$('#teams').find(":selected").val()
    var group=$('#groups').find(":selected").val()
    var order=$('#order').val();
    $.ajax({
        url:"../server/controllerchampion.php?action=groups_teams",
        method:"post",
        data: { 
            team:team,
            group:group,
            order:order        
        }       

    }).done(function (response) {
        console.log(response);
    })
}

function new_group() {
    var category=$('#category_select').find(":selected").val()
    var groupName=$('#Name_group').val()

    $.ajax({
        url:"../server/controllerchampion.php?action=newgroup",
        method:"post",
        data: { 
            name:groupName,
            id_category:category        
        }       

    }).done(function (response) {
        console.log(response);
    })

  
    
}

function tables_groups() {
    var category=$('#tables_categories').find(":selected").val()
    $.ajax({
        url:"../server/controllerchampion.php?action=tables_goups",
        method:"post",
        data: {                 
            id_category:category        
        }       

    }).done(function (response) {
        let data = JSON.parse(response);
        array_index=[];
        data.forEach(element => {                        
            var exist=array_index.includes(element.group_name)
            if(exist===false){
                array_index.push(element.group_name)
            }                      
        });
        array_index.forEach(element_i => {
            var table=`<table class="table">
                        <tr>
                              <th>${element_i}</th>                                 
                         </tr>`
            data.forEach(element => { 
                if(element.group_name===element_i){
                    table+=
                    `<tr>
                        <td scope="row" >${element.team}</td>                        
                    </tr>                    
                    `
                }

               
            })
            table+=`</table>`
            $("#tables").append(table);            
                                          
        });
        

        
    })
                
}

