</div>
</div>
<footer
    role="contentinfo"
    itemscope
    itemtype="http://schema.org/WPFooter">
    <div class="container">
        <div class="about-me-footer" id="quem-somos">
            <div class="content">
                <a href="/" class="logo">
                    <img
                        src="<?php echo $root ?>/library/icons/baixada-web-studio-logo-2.png"
                        alt=""
                        itemprop="image"
                        class="image" />
                        <h1 class="title">BAIXADA<span>WEB STUDIO</span></h1>
                </a>

                <p>Na Baixada Web Studio, somos especialistas em web design dedicados a transformar a presença online de microempreendedores em algo verdadeiramente impactante. Com anos de experiência, entendemos as necessidades específicas dos pequenos negócios e oferecemos soluções personalizadas que não apenas destacam sua marca, mas também impulsionam resultados tangíveis.</p>
                
                <div class="infos">
                    <h4 class="subtitle">Encontre-nos</h4>
                    <p class="address">Endereço: Rua Amadeu de Queiroz, Jockey Club - São Vicente/SP</p>
                    <p class="phone">Telefone: (13) 98826-4181</p>
                </div>

                <div class="social-networks">
                    <a
                        target="_blank"
                        href="mailto:vdavidmarques@gmail.com"
                        class="scroll-effect">
                        <img
                            src="<?php echo $root ?>/library/icons/email.svg"
                            alt=""
                            itemprop="image"
                            class="ease-in-out" />
                    </a>
                    <a
                        target="_blank"
                        href="https://www.instagram.com/baixadawebstudio"
                        class="scroll-effect">
                        <img
                            src="<?php echo $root ?>/library/icons/instagram.svg"
                            alt=""
                            itemprop="image"
                            class="ease-in-out" />
                    </a>
                    <a
                        target="_blank"
                        href="https://www.behance.net/viniciusdavidmarques"
                        class="scroll-effect">
                        <img
                            src="<?php echo $root ?>/library/icons/behance.svg"
                            alt=""
                            itemprop="image"
                            class="ease-in-out" />
                    </a>
                </div>
            </div>
            <div class="form">
                <?php 
                    include $_SERVER['DOCUMENT_ROOT'] . $root . '/components/form.php';          
                ?>         
            </div>
        </div>
        <div class="wpp-float">
            <a
                target="_blank"
                href="https://api.whatsapp.com/send?phone=5513988264181&text=Olá, achei seu contato através do site da Baixada Web Studio. Gostaria de mais informações sobre desenvolvimento de web sites">
                <img
                    src="<?php echo $root ?>/library/icons/whatsapp.svg"
                    alt="WhatsApp - Consultoria Vida Segura | Empresa especializa em Planos de Saúde, odontológicos e funeral e Seguros de vida"
                    class="ease-in-out"
                    itemprop="image" />
            </a>
        </div>
        <button class="scroll-to-top-btn" id="scrollToTopBtn">
            Subir para o topo
        </button>
    </div>
    <div class="after-footer-bg">
        <div class="container after-footer">
            <div id="copyright" itemprop="copyrightHolder">
                &copy; 2024 Baixada Web Studio - CNPJ: 38.131.123/0001-34
            </div>
        </div>
    </div>
</footer>
</main>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script
    type="text/javascript"
    src="<?php echo $root ?>/library/js/scripts.js"
    id="script-js-js">
</script>

</body>

</html>