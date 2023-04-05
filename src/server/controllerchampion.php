<?php
  include_once("../model/server.php");

$newService=new Services();
if (isset($_GET['action'])) {

    switch ($_GET['action']) {
        
        case "categorys":            
                $query="SELECT * from category c";
                $listCategory=$newService->select($query);
                echo json_encode($listCategory); 
                break;         
        case "teams_category":
                $category=$_POST['category_select'];
                $query_id_category=
                "select t.name, t.id from categoty_teams ct 
                inner join teams t on t.id =ct.team 
                inner join category c on ct.category = c.id
                where c.id = $category";
                $listcatefory_teams=$newService->select($query_id_category);
                echo json_encode($listcatefory_teams); 
                break;

        case "groups_teams":
            $team=$_POST['team'];
            $group=$_POST['group'];
            $order=$_POST['order'];
            $sql="INSERT INTO grupos_teams (id_team, id_group, `order`) VALUES($team, $group, $order);";
            $new_group_team=$newService->insert($sql);
            echo json_encode($new_group);              
            break;

        case "groups_category":
            $category=$_POST['category_select'];
            $groups_category="SELECT *
            FROM `groups` where  id_category=$category";
            $group_team=$newService->select($groups_category);           
            echo json_encode($group_team);              
            break;

        case "tables_goups":
            $category=$_POST['id_category'];
            $groups_table="select t.name as team, g.name as group_name from grupos_teams gt
            inner join teams t on gt.id_team = t.id 
            inner join `groups` g on g.id =gt.id_group
            where g.id_category =$category";            
            $group_table=$newService->select($groups_table);                     
            echo json_encode($group_table);              
                             
            break;


        case "tablecronograma":
            $category=$_POST['id_category'];
            $groups_table="select t.name as team, g.name as group_name, gt.`order` from grupos_teams gt
            inner join teams t on gt.id_team = t.id 
            inner join `groups` g on g.id =gt.id_group
            where g.id_category =$category";
            $group_table=$newService->select($groups_table); 
            echo json_encode($group_table);             
                             
            break;


        case "newgroup":
            $name=$_POST['name'];
            $id_category=$_POST['id_category'];
            $sql="INSERT INTO `groups` (id_category, name) VALUES($id_category, '$name')";
            $new_group=$newService->insert($sql);
            echo json_encode($new_group);                         
            break;


        


            
    }
}