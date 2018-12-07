<?php

class connect_bdd 
{
    private $_username;
    private $_password;
    private $_DBname;
    private $_hostName;
    
    function connect_bdd ($username, $password, $DBname, $hostName)
    {
        $this->_username = username;
        $this->_password = password;
        $this->_DBname = DBname;
        $this->_hostName = hostName;
    }
    
    function _connect ()
    {
        
    try 
    {
    $linkBDD = mysqli_connect($_hostName, $_username, $_password, $_DBname); 
    if (mysqli_connect_errno())
        {
            die(mysqli_connect_error());
        }  
    } catch (Exception $ex) 
    {
        die ('erreur :'.$ex->getMessage());
    }
    }
    /*
    function _insertBDD ()
    {
        
    }
    
    function _selectBDD ()
    {
        
    }
    
    function _updateBDD ()
    {
        
    }
    
    function _deleteBDD()
    {
        
    }*/
}

$value = new connect_bdd('root', 'password','mysql' ,'localhost');
$value->_connect();
