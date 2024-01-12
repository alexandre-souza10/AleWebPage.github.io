<?php  
/*
    **Plugin Name: AleWeb Style
    **Description: Esse e um Plugin para estilização de paginas WEB.
    ** Version: 1.0 | por AleWebMobile | Ver detalhes                        
*/

 function myShortCode(){
  $shortCode = "<h2>Plugin de estlização para sua pagina web.</h2>";
   return $shortCode; 
  }
    
add_shortcode('aleweb','myShortCode');

 function myMenu(){
   add_menu_page('Plugin Style','AleWeb Style','manage_options','aleweb-style','aleweb_page','',200);
  }
         
add_action('admin_menu','myMenu');
     
 function aleweb_page(){
    if(array_key_exists('acao', $_POST)){
      update_option('conteudo_html',$_POST['conteudo_html']);
      echo '<div class="notice notice-success is-dismissible"> 
	<p><strong>As alterações foram salvas com sucesso.</strong></p>
	<button type="button" class="notice-dismiss">
		<span class="screen-reader-text">fechar.</span>
	</button>
 </div>';
    }
    $conteudo_html = get_option('conteudo_html');
    echo '
    <div class="wrap">
      <h2>| Bem-Vindos ao AleWeb Style |</h2>
    <form method="post">
    <label for="nome">Conteudo de Estilização:</label>
    <textarea name="conteudo_html" class="large-text" placeholder="Conteudo de Estilização...">'.$conteudo_html.'</textarea>
         <input type="submit" name="acao" value="Salvar" class="button button-primary" />
      </form>
    </div>
     
     ';    
 }
 
 function getConteudoHead(){
  $conteudo_html = get_option('conteudo_html');
  echo $conteudo_html;
 }

 function getConteudoFooter(){
  $conteudo_html = get_option('conteudo_html');
  echo $conteudo_html;
 }
 
 add_action('wp_head','getConteudoHead');
 
 add_action('wp_footer','getConteudoFooter');
 
?>