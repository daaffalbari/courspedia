<?php 
define("DEVELOPMENT", TRUE);
include_once("layout.php");
function dbConnect()
{
    $db = new mysqli("localhost","root","","coursepedia");
    return $db;
}

function showError($message)
{   
    // style_section();
    ?>
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h5><i class="icon fas fa-ban"></i> Error!</h5>
        <?php echo $message; ?>
    </div>
<?php
// script_section();
}

//DASHBOARD
function countAnggota()
{
	$db = dbConnect();
	if($db->connect_errno == 0)
    {
        $res = $db->query("SELECT COUNT(*) as jml_anggota FROM anggota");
        if($res)
        {
            $data = $res->fetch_assoc();
            $res->free;
            return $data;
        }
        else
            return FALSE;   
    }
    else
        return FALSE;
}

function countKelas()
{
	$db = dbConnect();
	if($db->connect_errno == 0)
    {
        $res = $db->query("SELECT COUNT(*) as jml_kelas FROM kelas");
        if($res)
        {
            $data = $res->fetch_assoc();
            $res->free;
            return $data;
        }
        else
            return FALSE;   
    }
    else
        return FALSE;
}

function countPaket()
{
	$db = dbConnect();
	if($db->connect_errno == 0)
    {
        $res = $db->query("SELECT COUNT(*) as jml_paket FROM paket_belajar");
        if($res)
        {
            $data = $res->fetch_assoc();
            $res->free;
            return $data;
        }
        else
            return FALSE;   
    }
    else
        return FALSE;
}

function countMentor()
{
	$db = dbConnect();
	if($db->connect_errno == 0)
    {
        $res = $db->query("SELECT COUNT(*) as jml_mentor FROM mentor");
        if($res)
        {
            $data = $res->fetch_assoc();
            $res->free;
            return $data;
        }
        else
            return FALSE;   
    }
    else
        return FALSE;
}

?>