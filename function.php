<?php
$conn = mysqli_connect('localhost','ilham','123456','Mahasiswa');

// pemanggil tabel
function query($query)
{
    global $conn;

    //memanggil seluruh data pada tabel
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1){
        return mysqli_fetch_assoc($result);
    }
    
    //pemanggil elemen data agar rapih
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah ($Data)
{
    global $conn;

    $Nama           = htmlspecialchars($Data['Nama']);
    $Umur           = htmlspecialchars($Data['Umur']);
    $Agama          = htmlspecialchars($Data['Agama']);
    $Jenis_Kelamin  = htmlspecialchars($Data['Jenis_Kelamin']);
    $Kelas          = htmlspecialchars($Data['Kelas']);
    $Foto           = htmlspecialchars($Data['Foto']);


    $query = "INSERT INTO Data_Mahasiswa
    VALUES 
    (null,'$Nama','$Umur','$Agama','$Jenis_Kelamin','$Kelas','$Foto');";
        mysqli_query($conn, $query);

        echo mysqli_error($conn);
        return mysqli_affected_rows($conn);
}

function hapus($id)
{
   global $conn;
   mysqli_query($conn, "DELETE FROM Data_Mahasiswa WHERE id =$id") or die (mysqli_error($conn));
   return mysqli_affected_rows($conn);
}

function edit($Data)
{
    global $conn;

    $id             = $Data['id'];
    $Nama           = htmlspecialchars($Data['Nama']);
    $Umur           = htmlspecialchars($Data['Umur']);
    $Agama          = htmlspecialchars($Data['Agama']);
    $Jenis_Kelamin  = htmlspecialchars($Data['Jenis_Kelamin']);
    $Kelas          = htmlspecialchars($Data['Kelas']);
    $Foto           = htmlspecialchars($Data['Foto']);


    $query = "UPDATE Data_Mahasiswa SET 
    Nama = '$Nama',
    Umur = '$Umur',
    Agama = '$Agama',
    Jenis_Kelamin = '$Jenis_Kelamin',
    Kelas = '$Kelas',
    Foto = '$Foto'
    WHERE id =$id;";
    
    mysqli_query($conn, $query);

        echo mysqli_error($conn);
        return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    global $conn;

    $query  = "SELECT * FROM Data_Mahasiswa WHERE Nama LIKE '%$keyword%'";
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
}
?>