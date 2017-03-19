<?php
/**
 * Classe AutoLoad
 * @author Temístocles Arêa
 */

define( 'DS', DIRECTORY_SEPARATOR );

class AutoLoad 
{
    
    private $arquivos;
    
    private $subExtensao = '.class';
    
    public function __construct() 
    {
        
        spl_autoload_register( [$this, 'diretorios'] );
        
    }
    
    private function diretorios( $itens )
    {
        
        $this->arquivos = [$itens . $this->subExtensao . '.php'];
        
        foreach ( $this->arquivos as $arquivo ) {
            
            $arquivo = str_replace( "\\", DS, $arquivo );
            
            if( file_exists( $arquivo ) ) {
                
                require_once $arquivo;
                
            } else {
             
                print_r('Arquivo não encontrado!');
                
            }
            
        }
        
    }
    
}

new AutoLoad;
