<?php
$mahasiswa1 = 30;
$mahasiswa2 = 45;
$mahasiswa3 = 65;
$mahasiswa4 = 80;
$index;
$ket;

Function Assigning($nilai)
{
    if ($nilai <45) 
    {
        $index = "D";
        $ket = "Tidak Lulus";
        echo "Index = $index <br/>";
        echo "Keterangan = $ket <br/>";
    }
    
    else if ($nilai ==45)
    {
        $index = "C";
        $ket = "Cukup";
        echo "Index = $index <br/>";
        echo "Keterangan = $ket <br/>";
    }
    else if ($nilai <=70 && $nilai >=46)
    {
        $index = "B";
        $ket = "Baik";
        echo "Index = $index <br/>";
        echo "Keterangan = $ket <br/>";
    }
    else if ($nilai >70)
    {
        $index = "A";
        $ket = "Mantab";
        echo "Index = $index <br/>" ;
        echo "Keterangan = $ket <br/>";
    }

}

echo "Mahasiswa 1 : <br/>";
Assigning($mahasiswa1);
echo "<br/>";
echo "Mahasiswa 2 : <br/>";
Assigning($mahasiswa2);
echo "<br/>";
echo "Mahasiswa 3 : <br/>";
Assigning($mahasiswa3);
echo "<br/>";
echo "Mahasiswa 4 : <br/>";
Assigning($mahasiswa4);
echo "<br/>";

?>