
<?php
    require_once "./connectBD.php";

    if(isset($_POST['btnPes'])){
        
        $sup = $_POST['super'];
        $tipo = $_POST['status'];
        $ano = $_POST['ano'];
        $numero = $_POST['numero'];

        // echo 
        // "<script language='javascript' type='text/javascript'>
        //     alert('".$ano."  ".$numero."');
        // </script>";

        // Sup == Todos && Tipo == Todos
        if($sup==="Todas" && $tipo==="Todos" && $ano==="" && $numero===""){
            echo 
            "<script language='javascript' type='text/javascript'>
                var cname = \"buscaQUERY\";
                var cvalue = '0-".$sup."-".$tipo."-".$ano."-".$numero."';
                var d = new Date();
                d.setTime(d.getTime() + (3000));
                var expires = \"expires=\"+ d.toUTCString();
                document.cookie = cname + \"=\" + cvalue + \";\" + expires + \";path=/\";;
                window.open(\"../busca.php\",\"_self\");
            </script>";
        }else if($sup==="Todas" && $tipo==="Todos" && $ano!="" && $numero===""){
            echo 
            "<script language='javascript' type='text/javascript'>
                var cname = \"buscaQUERY\";
                var cvalue = '1-".$sup."-".$tipo."-".$ano."-".$numero."';
                var d = new Date();
                d.setTime(d.getTime() + (3000));
                var expires = \"expires=\"+ d.toUTCString();
                document.cookie = cname + \"=\" + cvalue + \";\" + expires + \";path=/\";;
                window.open(\"../busca.php\",\"_self\");
            </script>";
        }else if($sup==="Todas" && $tipo==="Todos" && $ano==="" && $numero!=""){
            echo 
            "<script language='javascript' type='text/javascript'>
                var cname = \"buscaQUERY\";
                var cvalue = '2-".$sup."-".$tipo."-".$ano."-".$numero."';
                var d = new Date();
                d.setTime(d.getTime() + (3000));
                var expires = \"expires=\"+ d.toUTCString();
                document.cookie = cname + \"=\" + cvalue + \";\" + expires + \";path=/\";;
                window.open(\"../busca.php\",\"_self\");
            </script>";
        }else if($sup==="Todas" && $tipo==="Todos" && $ano!="" && $numero!=""){
            echo 
            "<script language='javascript' type='text/javascript'>
                var cname = \"buscaQUERY\";
                var cvalue = '3-".$sup."-".$tipo."-".$ano."-".$numero."';
                var d = new Date();
                d.setTime(d.getTime() + (3000));
                var expires = \"expires=\"+ d.toUTCString();
                document.cookie = cname + \"=\" + cvalue + \";\" + expires + \";path=/\";;
                window.open(\"../busca.php\",\"_self\");
            </script>";
        }
        // Sup == Todos && Tipo != Todos
        else if($sup==="Todas" && $tipo!="Todos" && $ano==="" && $numero===""){
            echo 
            "<script language='javascript' type='text/javascript'>
                var cname = \"buscaQUERY\";
                var cvalue = '4-".$sup."-".$tipo."-".$ano."-".$numero."';
                var d = new Date();
                d.setTime(d.getTime() + (3000));
                var expires = \"expires=\"+ d.toUTCString();
                document.cookie = cname + \"=\" + cvalue + \";\" + expires + \";path=/\";;
                window.open(\"../busca.php\",\"_self\");
            </script>";
        }else if($sup==="Todas" && $tipo!="Todos" && $ano!="" && $numero===""){
            echo 
            "<script language='javascript' type='text/javascript'>
                var cname = \"buscaQUERY\";
                var cvalue = '5-".$sup."-".$tipo."-".$ano."-".$numero."';
                var d = new Date();
                d.setTime(d.getTime() + (3000));
                var expires = \"expires=\"+ d.toUTCString();
                document.cookie = cname + \"=\" + cvalue + \";\" + expires + \";path=/\";;
                window.open(\"../busca.php\",\"_self\");
            </script>";
        }else if($sup==="Todas" && $tipo!="Todos" && $ano==="" && $numero!=""){
            echo 
            "<script language='javascript' type='text/javascript'>
                var cname = \"buscaQUERY\";
                var cvalue = '6-".$sup."-".$tipo."-".$ano."-".$numero."';
                var d = new Date();
                d.setTime(d.getTime() + (3000));
                var expires = \"expires=\"+ d.toUTCString();
                document.cookie = cname + \"=\" + cvalue + \";\" + expires + \";path=/\";;
                window.open(\"../busca.php\",\"_self\");
            </script>";
        }else if($sup==="Todas" && $tipo!="Todos" && $ano!="" && $numero!=""){
            echo 
            "<script language='javascript' type='text/javascript'>
                var cname = \"buscaQUERY\";
                var cvalue = '7-".$sup."-".$tipo."-".$ano."-".$numero."';
                var d = new Date();
                d.setTime(d.getTime() + (3000));
                var expires = \"expires=\"+ d.toUTCString();
                document.cookie = cname + \"=\" + cvalue + \";\" + expires + \";path=/\";;
                window.open(\"../busca.php\",\"_self\");
            </script>";
        }
        // Sup != Todos && Tipo == Todos
        else if($sup!="Todas" && $tipo==="Todos" && $ano==="" && $numero===""){
            echo 
            "<script language='javascript' type='text/javascript'>
                var cname = \"buscaQUERY\";
                var cvalue = '8-".$sup."-".$tipo."-".$ano."-".$numero."';
                var d = new Date();
                d.setTime(d.getTime() + (3000));
                var expires = \"expires=\"+ d.toUTCString();
                document.cookie = cname + \"=\" + cvalue + \";\" + expires + \";path=/\";;
                window.open(\"../busca.php\",\"_self\");
            </script>";
        }else if($sup!="Todas" && $tipo==="Todos" && $ano!="" && $numero===""){
            echo 
            "<script language='javascript' type='text/javascript'>
                var cname = \"buscaQUERY\";
                var cvalue = '9-".$sup."-".$tipo."-".$ano."-".$numero."';
                var d = new Date();
                d.setTime(d.getTime() + (3000));
                var expires = \"expires=\"+ d.toUTCString();
                document.cookie = cname + \"=\" + cvalue + \";\" + expires + \";path=/\";;
                window.open(\"../busca.php\",\"_self\");
            </script>";
        }else if($sup!="Todas" && $tipo==="Todos" && $ano==="" && $numero!=""){
            echo 
            "<script language='javascript' type='text/javascript'>
                var cname = \"buscaQUERY\";
                var cvalue = '10-".$sup."-".$tipo."-".$ano."-".$numero."';
                var d = new Date();
                d.setTime(d.getTime() + (3000));
                var expires = \"expires=\"+ d.toUTCString();
                document.cookie = cname + \"=\" + cvalue + \";\" + expires + \";path=/\";;
                window.open(\"../busca.php\",\"_self\");
            </script>";
        }else if($sup!="Todas" && $tipo==="Todos" && $ano!="" && $numero!=""){
            echo 
            "<script language='javascript' type='text/javascript'>
                var cname = \"buscaQUERY\";
                var cvalue = '11-".$sup."-".$tipo."-".$ano."-".$numero."';
                var d = new Date();
                d.setTime(d.getTime() + (3000));
                var expires = \"expires=\"+ d.toUTCString();
                document.cookie = cname + \"=\" + cvalue + \";\" + expires + \";path=/\";;
                window.open(\"../busca.php\",\"_self\");
            </script>";
        }
        // Sup != Todos && Tipo != Todos
        else if($sup!="Todas" && $tipo!="Todos" && $ano==="" && $numero===""){
            echo 
            "<script language='javascript' type='text/javascript'>
                var cname = \"buscaQUERY\";
                var cvalue = '12-".$sup."-".$tipo."-".$ano."-".$numero."';
                var d = new Date();
                d.setTime(d.getTime() + (3000));
                var expires = \"expires=\"+ d.toUTCString();
                document.cookie = cname + \"=\" + cvalue + \";\" + expires + \";path=/\";;
                window.open(\"../busca.php\",\"_self\");
            </script>";
        }else if($sup!="Todas" && $tipo!="Todos" && $ano!="" && $numero===""){
            echo 
            "<script language='javascript' type='text/javascript'>
                var cname = \"buscaQUERY\";
                var cvalue = '13-".$sup."-".$tipo."-".$ano."-".$numero."';
                var d = new Date();
                d.setTime(d.getTime() + (3000));
                var expires = \"expires=\"+ d.toUTCString();
                document.cookie = cname + \"=\" + cvalue + \";\" + expires + \";path=/\";;
                window.open(\"../busca.php\",\"_self\");
            </script>";
        }else if($sup!="Todas" && $tipo!="Todos" && $ano==="" && $numero!=""){
            echo 
            "<script language='javascript' type='text/javascript'>
                var cname = \"buscaQUERY\";
                var cvalue = '14-".$sup."-".$tipo."-".$ano."-".$numero."';
                var d = new Date();
                d.setTime(d.getTime() + (3000));
                var expires = \"expires=\"+ d.toUTCString();
                document.cookie = cname + \"=\" + cvalue + \";\" + expires + \";path=/\";;
                window.open(\"../busca.php\",\"_self\");
            </script>";
        }else if($sup!="Todas" && $tipo!="Todos" && $ano!="" && $numero!=""){
            echo 
            "<script language='javascript' type='text/javascript'>
                var cname = \"buscaQUERY\";
                var cvalue = '15-".$sup."-".$tipo."-".$ano."-".$numero."';
                var d = new Date();
                d.setTime(d.getTime() + (3000));
                var expires = \"expires=\"+ d.toUTCString();
                document.cookie = cname + \"=\" + cvalue + \";\" + expires + \";path=/\";;
                window.open(\"../busca.php\",\"_self\");
            </script>";
        }
    }
?>