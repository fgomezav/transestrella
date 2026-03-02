<?php
/**
 * The template for displaying the footer
 */
?>
<!-- FOOTER -->
<footer>
    <div class="footer-inner">
        <div class="footer-top">
            <div class="footer-brand">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="nav-logo">
                    <img src="https://transestrella.com/wp-content/uploads/2025/07/logo-transportadora-estrella-254x94.png"
                        alt="Transportadora Estrella" style="height: 40px; width: auto;">
                </a>
                <p>Empresa de transporte de carga masiva y semi masiva terrestre en Colombia. Más de 30 años conectando
                    empresas con todo el territorio nacional.</p>
                <div class="footer-certs">
                    <span class="footer-cert">ISO 9001</span>
                    <span class="footer-cert">BASC</span>
                    <span class="footer-cert">SuperTransporte</span>
                </div>
            </div>
            <div>
                <div class="footer-col-title">Servicios</div>
                <ul class="footer-links">
                    <li><a
                            href="<?php echo esc_url(home_url('/servicios/transporte-de-carga-terrestre-nacional/')); ?>">Carga
                            Terrestre Nacional</a></li>
                    <li><a href="<?php echo esc_url(home_url('/servicios/transporte-urbano-de-mercancias/')); ?>">Transporte
                            Urbano</a></li>
                    <li><a href="<?php echo esc_url(home_url('/servicios/transporte-de-carga-peligrosa/')); ?>">Mercancías
                            Peligrosas</a></li>
                    <li><a href="<?php echo esc_url(home_url('/servicios/itr/')); ?>">ITR Internacional</a></li>
                </ul>
            </div>
            <div>
                <div class="footer-col-title">Sucursales</div>
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url(home_url('/sucursales/sucursal-medellin/')); ?>">Medellín (Sede
                            Principal)</a>
                    </li>
                    <li><a href="<?php echo esc_url(home_url('/sucursales/sucursal-bogota/')); ?>">Bogotá</a></li>
                    <li><a href="<?php echo esc_url(home_url('/sucursales/sucursal-cali/')); ?>">Cali</a></li>
                    <li><a href="<?php echo esc_url(home_url('/sucursales/sucursal-cartagena/')); ?>">Cartagena</a></li>
                    <li><a href="<?php echo esc_url(home_url('/sucursales/')); ?>">Ver todas →</a></li>
                </ul>
            </div>
            <div>
                <div class="footer-col-title">Empresa</div>
                <ul class="footer-links">
                    <li><a href="<?php echo esc_url(home_url('/nosotros/')); ?>">Nosotros</a></li>
                    <li><a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a></li>
                    <li><a href="<?php echo esc_url(home_url('/blog/category/comunicados/')); ?>">Comunicados</a></li>
                    <li><a href="<?php echo esc_url(home_url('/contactanos/')); ?>">Contáctanos</a></li>
                    <li><a href="<?php echo esc_url(home_url('/preguntas-frecuentes/')); ?>">Preguntas Frecuentes</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="footer-copy">©
                <?php echo date('Y'); ?> Transportadora Estrella S.A.S. — Todos los derechos reservados.
            </div>
            <div class="footer-legal">
                <a href="<?php echo esc_url(home_url('/politica-privacidad/')); ?>">Política de Privacidad</a>
                <a href="<?php echo esc_url(home_url('/politica-tratamiento-datos/')); ?>">Tratamiento de Datos</a>
                <a href="<?php echo esc_url(home_url('/politica-integrada/')); ?>">Política Integrada</a>
            </div>
        </div>
    </div>
</footer>

<!-- WHATSAPP FLOTANTE -->
<div class="wa-float">
    <div class="wa-bubble">
        <strong>¿Necesita cotizar?</strong>
        Escríbanos, respondemos de inmediato.
    </div>
    <a href="https://wa.me/573104244591?text=Hola%2C%20quiero%20cotizar%20transporte%20de%20carga%20masiva"
        target="_blank" class="wa-btn">
        <svg viewBox="0 0 24 24">
            <path
                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413z" />
            <path
                d="M12 0C5.373 0 0 5.373 0 12c0 2.123.554 4.118 1.524 5.847L.057 23.992l6.304-1.654A11.945 11.945 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.8 9.8 0 01-5.012-1.375l-.36-.214-3.733.979 1-3.642-.235-.374A9.791 9.791 0 012.182 12C2.182 6.58 6.58 2.182 12 2.182S21.818 6.58 21.818 12 17.42 21.818 12 21.818z" />
        </svg>
    </a>
</div>

<?php wp_footer(); ?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const navToggle = document.querySelector('.nav-toggle');
        const navLinks = document.querySelector('.nav-links');

        if (navToggle && navLinks) {
            navToggle.addEventListener('click', function () {
                navLinks.classList.toggle('nav-active');
                const isExpanded = navToggle.getAttribute('aria-expanded') === 'true';
                navToggle.setAttribute('aria-expanded', !isExpanded);
            });
        }
    });
</script>
</body>

</html>