
<?php
include "header.php";

    $naviteam = [
        "GIOI THIEU",
        "TIN TUC & THONG BAO",
        "DAO TAO",
        "TUYEN SINH",
        "NGHIEN CUU",
        "DOI NGOAI",
        "VAN BAN",
        "SINH VIEN",
        "LIEN HE"
    ];
    echo '<div class="header-bridcrum container"><nav><ul class="bridcum-list">';

                    foreach ($naviteam as $item){
                     echo    "<li class='bridcrum-item'>
                                    <a class='bridcrum-link' href=''>$item</a>
                             </li>";
                    }
    echo  '</ul></nav></div>';
    
      
?>



