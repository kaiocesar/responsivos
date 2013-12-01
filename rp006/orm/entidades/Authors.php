<?php
#### START AUTOCODE
/**
 * Classe generada para a tabela "authors"
 * in 2013-12-01
 * @author Hugo Ferreira da Silva
 * @link http://www.hufersil.com.br/lumine
 * @package entidades
 *
 */

class Authors extends Lumine_Base {

    
    public $id;
    public $name;
    public $email;
    public $status;
    public $createdAt;
    public $modifyAt;
    public $posts = array();
    
    
    
    /**
     * Inicia os valores da classe
     * @author Hugo Ferreira da Silva
     * @return void
     */
    protected function _initialize()
    {
        $this->metadata()->setTablename('authors');
        $this->metadata()->setPackage('entidades');
        
        # nome_do_membro, nome_da_coluna, tipo, comprimento, opcoes
        
        $this->metadata()->addField('id', 'id', 'int', 11, array('primary' => true, 'notnull' => true, 'autoincrement' => true));
        $this->metadata()->addField('name', 'name', 'varchar', 90, array());
        $this->metadata()->addField('email', 'email', 'varchar', 156, array());
        $this->metadata()->addField('status', 'status', 'char', 1, array('default' => '0'));
        $this->metadata()->addField('createdAt', 'created_at', 'datetime', null, array());
        $this->metadata()->addField('modifyAt', 'modify_at', 'datetime', null, array());

        
        $this->metadata()->addRelation('posts', Lumine_Metadata::ONE_TO_MANY, 'Posts', 'authorsId', null, null, null);
    }

    #### END AUTOCODE


}
