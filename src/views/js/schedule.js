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
    var category=$('#category_select').find(":selected").val()
    $.ajax({
        url:"../server/controllerchampion.php?action=tablecronograma",
        method:"post",
        data: {                 
            id_category:category        
        }       

    }).done(function (response) {
        let data = JSON.parse(response);
        array_index=[];
        arrayAsoc=[];
        data.forEach(element => {                        
            var exist=array_index.includes(element.group_name)
            if(exist===false){
                array_index.push(element.group_name)
                arrayAsoc[element.group_name]=[] 
            }                      
        });
        arraynumgamer=[]        
        array_index.forEach(element_i => {
            coun=0                     
            data.forEach(element => {
                if(element.group_name===element_i){
                    arrayAsoc[element_i].push([element.order]=element.team)
                    coun++
                }                              
            })
            arraynumgamer.push(coun)  
        });
        
        for (let index = 0; index < arraynumgamer.length; index++) {
            const element = array[index];
            
        }
    })
                
}
