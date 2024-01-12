<?php
	//Template Name: Contato
?>
<?php
		get_header();
	?>
</div>
</section>
<section class="contato">
    <div class="center">
        <div class="w50 contato-info">
            <h2>A mais importante,<br />primeira conversa.</h2>
            <br />
            <p><strong><?php the_field('tipo_contato'); ?></strong></p>
            <p><strong><?php the_field('tipo_email'); ?></strong></p>
            <p><strong><?php the_field('tipo_end'); ?></strong></p>
            </br>
            <div class="mapa-container">
                <div id="mapa"></div>
            </div>
            <!--mapa-->
        </div>

        <div class="w50 contato-form">
            <?php the_content(); ?>

            <!-- <form>
                <input placeholder="Nome" type="text" />
                <input placeholder="E-mail" type="text" />
                <input placeholder="Telefone" type="text" />
                <select>
                    <option>Geral</option>
                    <option>Suporte</option>
                </select>
                <textarea placeholder="Mensagem"></textarea>
                <input type="submit" value="Enviar!">
                </form>-->
        </div>
        <div class="clear"></div>
    </div>
</section>


<?php get_footer(); ?>