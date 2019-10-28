<?php
    db_extend("packages");
    
    $id_column = array(
        "name" => "id_banner",
        "type" => "int",
        "size" => 11,
        "null" => false,
        "unsigned" => true,
        "auto" => true
    );
    
    $member_column = array(
        "name" => "id_member",
        "type" => "mediumint",
        "size" => 8,
        "null" => false,
        "unsigned" => true,
    );
    
    $file_path_column = array(
        "name" => "file_path",
        "type" => "text",
        "null" => false
    );
    
    $id_index = array(
        "type" => "primary",
        "columns" => array("id_banner")
    );
    
    $columns = array($id_column, $member_column, $file_path_column);
    $indices = array($id_index);
    
    $smcFunc["db_create_table"]("banner_uploads", $columns, $indices, array(), "ignore");
?>
