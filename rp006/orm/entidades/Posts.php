<?php
#### START AUTOCODE
/**
 * Classe generada para a tabela "posts"
 * in 2013-12-01
 * @author Hugo Ferreira da Silva
 * @link http://www.hufersil.com.br/lumine
 * @package entidades
 *
 */

class Posts extends Lumine_Base {

    
    public $id;
    public $title;
    public $body;
    public $createdAt;
    public $modifyAt;
    public $authorsId;
    
    
    
    /**
     * Inicia os valores da classe
     * @author Hugo Ferreira da Silva
     * @return void
     */
    protected function _initialize()
    {
        $this->metadata()->setTablename('posts');
        $this->metadata()->setPackage('entidades');
        
        # nome_do_membro, nome_da_coluna, tipo, comprimento, opcoes
        
        $this->metadata()->addField('id', 'id', 'int', 11, array('primary' => true, 'notnull' => true, 'autoincrement' => true));
        $this->metadata()->addField('title', 'title', 'text', 65535, array());
        $this->metadata()->addField('body', 'body', 'text', 65535, array());
        $this->metadata()->addField('createdAt', 'created_at', 'datetime', null, array());
        $this->metadata()->addField('modifyAt', 'modify_at', 'datetime', null, array());
        $this->metadata()->addField('authorsId', 'authors_id', 'int', 11, array('notnull' => true, 'foreign' => '1', 'onUpdate' => 'RESTRICT', 'onDelete' => 'RESTRICT', 'linkOn' => 'id', 'class' => 'Authors'));

        
    }

    #### END AUTOCODE


}
