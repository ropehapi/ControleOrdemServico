<?php 

if(isset($ret)){
        
    switch($ret){
        
        case -1:
            echo "<script>
                      toastr.error(RetornaMsg(-1));
                  </script>";
            break;
        
        case 0:        
            echo "<script>
                      toastr.warning(RetornaMsg(0));
                  </script>";
            break;
        
        case 1:
            echo "<script>
                      toastr.success(RetornaMsg(1));
                  </script>";
            break;
    }
}