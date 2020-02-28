<?php
  function consultarSQL($query){
    $mysqli= new mysqli("localhost","root","","clinica_medica");
    if(mysqli_conect_errno()){
    	echo "Este sitio esta presentando problemas";
       }
     $mysqli-> set_charset("utf8");
     $mysqli-> autocommit(FALSE);
     $mysqli-> begin_transaction(MYSQULI_TRANS_STAR_WITh_CONSISTENT_SNAPSHOT); 
     if (consulta==$mysqli-> query($query)) {
          if ($mysqli->commit()) {
          	echo "datos guardados";
          }else{

          	echo "error datos no guardados";
          }
      	

     }else{
        $mysqli->rollback();
        echo "Error datos no guardados";

     }

    return $consulta;

  }


?>