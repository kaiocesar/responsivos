<?php
#### START AUTOCODE
/**
 * Classe generada para a tabela "users"
 * in 2013-12-23
 * @author Hugo Ferreira da Silva
 * @link http://www.hufersil.com.br/lumine
 * @package entidades
 *
 */

class Users extends Lumine_Base {

    
    public $id;
    public $name;
    public $username;
    public $password;
    public $status;
    public $level;
    public $email;
    
    
    
    /**
     * Inicia os valores da classe
     * @author Hugo Ferreira da Silva
     * @return void
     */
    protected function _initialize()
    {
        $this->metadata()->setTablename('users');
        $this->metadata()->setPackage('entidades');
        
        # nome_do_membro, nome_da_coluna, tipo, comprimento, opcoes
        
        $this->metadata()->addField('id', 'id', 'int', 11, array('primary' => true, 'notnull' => true, 'autoincrement' => true));
        $this->metadata()->addField('name', 'name', 'varchar', 45, array());
        $this->metadata()->addField('username', 'username', 'varchar', 45, array());
        $this->metadata()->addField('password', 'password', 'varchar', 150, array());
        $this->metadata()->addField('status', 'status', 'char', 1, array());
        $this->metadata()->addField('level', 'level', 'char', 3, array());
        $this->metadata()->addField('email', 'email', 'varchar', 150, array());

        
    }

    #### END AUTOCODE


}
