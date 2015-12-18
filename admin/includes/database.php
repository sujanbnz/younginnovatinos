<?php
include('constants.php');
class Database
{
    function db_connect($host=HOSTNAME,$user=USERNAME,$pass=PASSWORD)
    {
        return mysql_connect($host,$user,$pass) or die(mysql_error());
    } //connect db close
    function db_select($db=DBNAME)
    {    
        return mysql_select_db($db) or die(mysql_error());
    }//select db close
    function select_query($tbl_name,$where=""){
        $query = "select * from $tbl_name";
        if($where!=""){
            $query .= " where $where";
        }
        return $query;
    }//select query close
    function exec_query($query){
        $res = mysql_query($query) or die(mysql_error());
        return $res;
    }//execute query close
    function num_rows($res){
        $res=mysql_num_rows($res);
        return $res;        
    }// num rows return close
    function fetch($res){
        $res=mysql_fetch_assoc($res);
        return $res;        
    }// fetch close
    function insert_query($tbl_name){
        unset($_POST['send']);
        $arr=array();
        foreach($_POST as $k => $v){
            $arr[]="$k='$v'";
        }
        $set = implode(',',$arr);
        $query = "insert into $tbl_name set $set";
        return $query;
    }// insert query close
    function insert_idimg_query($tbl_name,$id){
        $set = "news_id = '$id' ";
        $query = "insert into $tbl_name set $set";
        return $query;
    }// insert image query close
    
    function update_query($tbl_name){
        $id=$_POST['id'];
        unset($_POST['id']);
        unset($_POST['editsend']);        
        $arr=array();
        foreach($_POST as $k => $v){
            $arr[]="$k='$v'";
        }//update query close
        $where=" id = '$id'";
        $set = implode(',',$arr);
        $query = "update $tbl_name set $set where $where";
        return $query;
    }// update query close
       
    function delete_query($tbl_name,$id){
        $where =" where id = '$id'";
        $query = "delete from $tbl_name $where";
        return $query;
    }//select query close
    function delete_img_query($tbl_name,$id){
        $where =" where images_id = '$id'";
        $query = "delete from $tbl_name $where";
        return $query;
    }//select query close
    

} // class database closing