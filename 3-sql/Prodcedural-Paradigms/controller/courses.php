<?php

function index()
{
    // $con = mysqli_connect("localhost", "hha", "hanhtunaung97", "wad_school");
    // $sql = "SELECT * FROM courses";
    // $query = mysqli_query($con, $sql);
    // $rows = [];
    // while ($row = mysqli_fetch_assoc($query)) {
    //     array_push($rows, $row);
    // }
    // // print_r($rows);
    // header("Content-Type:application/json");
    // echo json_encode($rows);
    $rows = get("SELECT * FROM courses");
    // dd($rows);
    return view("courses/index", ["courses" => $rows]);
}
function delete()
{
    $id = $_GET['id'];
    $delete = runQuery("DELETE FROM courses WHERE id=$id");
    if ($delete) {
        redirect("/courses");
    }
}
function store() {}
