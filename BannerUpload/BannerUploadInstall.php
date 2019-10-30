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
        "null" => true,
        "unsigned" => true,
    );
    
    $file_name_column = array(
        "name" => "file_name",
        "type" => "text",
        "null" => false
    );
    
    $fallback_name_column = array(
        "name" => "fallback_name",
        "type" => "text",
        "null" => true
    );
    
    $upload_time_column = array(
        "name" => "upload_time",
        "type" => "int",
        "size" => 10,
        "null" => false,
        "default" => 0,
        "unsigned" => true
    );
    
    $id_index = array(
        "type" => "primary",
        "columns" => array("id_banner")
    );
    
    $columns = array($id_column, $member_column, $file_name_column);
    $indices = array($id_index);
    
    $smcFunc["db_create_table"]("banners", $columns, $indices, array(), "ignore");
    $smcFunc["db_add_column"]("banners", $fallback_name_column, array(), "update");
    $smcFunc["db_add_column"]("banners", $upload_time_column, array(), "update");
?>
