<?php
function index()
{
    $rows = get("SELECT * FROM batches");
    // dd($rows);
    return view("batches/index", ["batches" => $rows]);
}
function delete()
{
    $id = $_GET['id'];
    $delete = runQuery("DELETE FROM batches WHERE id=$id");
    // dd($delete);
    if ($delete) {

        redirect("/batches");
    }
}
function store() {}
