<?php
namespace P2P\Socket;

/**
 * Simples classe para gerenciamento de Conexoes dos clientes
 * 
 */
class Connection 
{
    
    /**
     * resource da conexao socket
     * @var Object
     */
    private $_socket;
    
    /**
     * Flag para marcar se ja foi realizad o handshake
     * nesta conexao
     * @var Boolean
     */
    public  $handshake = false;
    
    /**
     * Construtor,
     * Define o resource Socket desta Conexao
     *
     * @param Object $socket resource do socket
     *
     * @return void
     */
    public function __construct($socket)
    {
        $this->_socket = $socket;
    }
    
    /**
     * OBtem o resource da conexao socket
     *
     * @return Object resource do socket
     */
    public function getSocket()
    {
        return $this->_socket;
    }
}

