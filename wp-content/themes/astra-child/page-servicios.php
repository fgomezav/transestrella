<?php
/**
 * Template Name: Servicios
 *
 * Plantilla para la página principal de Servicios.
 */

get_header(); ?>

<!-- ══════════════════════════════════════════
     HERO INTERIOR
══════════════════════════════════════════ -->
<section class="page-hero page-template-page-servicios">
    <div class="page-hero-bg"></div>
    <div class="page-hero-overlay"></div>
    <div class="page-hero-line"></div>
    <div class="page-hero-content">
        <div class="breadcrumb">
            <a href="<?php echo esc_url(home_url('/')); ?>">Inicio</a>
            <span class="breadcrumb-sep">›</span>
            <span>Servicios</span>
        </div>
        <h1>Transporte de Carga <em>Masiva Terrestre</em></h1>
        <p>Soluciones logísticas especializadas para empresas que mueven grandes volúmenes en Colombia. Flota propia,
            seguimiento 24/7 y más de 30 años de trayectoria.</p>
        <div class="page-hero-btns">
            <a href="#cotizar" class="btn-primary">Solicitar Cotización →</a>
            <a href="#servicios" class="btn-outline-white">Ver Servicios</a>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════
     INTRO STRIP
══════════════════════════════════════════ -->
<div class="intro-strip page-template-page-servicios">
    <div class="intro-strip-inner">
        <p>Nos especializamos exclusivamente en carga masiva y semi masiva. A diferencia de las empresas de paquetería,
            estamos equipados para mover grandes volúmenes, materias primas y carga industrial con la eficiencia que su
            operación requiere.</p>
        <div class="intro-strip-badges">
            <div class="intro-badge">
                <svg viewBox="0 0 24 24">
                    <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                    <polyline points="9 12 11 14 15 10" />
                </svg>
                ISO 9001 · BASC
            </div>
            <div class="intro-badge">
                <svg viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10" />
                    <line x1="2" y1="12" x2="22" y2="12" />
                    <path
                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
                </svg>
                Monitoreo GPS 24/7
            </div>
            <div class="intro-badge">
                <svg viewBox="0 0 24 24">
                    <rect x="1" y="3" width="15" height="13" rx="1" />
                    <path d="M16 8h4l3 5v4h-7V8z" />
                    <circle cx="5.5" cy="18.5" r="2.5" />
                    <circle cx="18.5" cy="18.5" r="2.5" />
                </svg>
                Flota Propia
            </div>
            <div class="intro-badge">
                <svg viewBox="0 0 24 24">
                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                    <circle cx="12" cy="10" r="3" />
                </svg>
                8 Sucursales
            </div>
        </div>
    </div>
</div>

<!-- ══════════════════════════════════════════
     SERVICIOS — LAYOUT ALTERNADO
══════════════════════════════════════════ -->
<section class="services page-template-page-servicios" id="servicios">
    <div class="services-inner">
        <div class="services-header">
            <div class="eyebrow center">Portafolio de servicios</div>
            <h2>Cuatro Líneas de <span>Servicio Especializado</span></h2>
            <p>Cada servicio está diseñado para un tipo específico de operación logística, con la flota, los protocolos
                y el equipo adecuados para cada necesidad.</p>
        </div>

        <!-- SERVICIO 1 — Carga Nacional -->
        <div class="svc-row" style="margin-bottom:4px;">
            <div class="svc-img">
                <img src="https://transestrella.com/wp-content/uploads/2025/04/transportadora-estrella-nuestra-flota-transporte-de-carga-pesada-1.jpeg"
                    alt="Transporte de carga nacional Colombia — Transportadora Estrella" loading="lazy">
                <div class="svc-img-overlay"></div>
                <div class="svc-tag">Nacional</div>
            </div>
            <div class="svc-body">
                <div class="eyebrow">Servicio 01</div>
                <h3>Transporte de Carga Nacional</h3>
                <p>Movilizamos carga masiva y semi masiva entre las principales ciudades y regiones de Colombia. Con más
                    de 30 años de experiencia en rutas nacionales, conocemos cada corredor logístico del país para
                    garantizar entregas seguras y puntuales.</p>
                <ul class="svc-features">
                    <li>
                        <div class="svc-feat-icon"><svg viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg></div>
                        Carga masiva y semi masiva — sin paqueteo
                    </li>
                    <li>
                        <div class="svc-feat-icon"><svg viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg></div>
                        Monitoreo GPS en tiempo real las 24 horas
                    </li>
                    <li>
                        <div class="svc-feat-icon"><svg viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg></div>
                        Cobertura en todos los departamentos del país
                    </li>
                    <li>
                        <div class="svc-feat-icon"><svg viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg></div>
                        Turbos, camiones, patinetas y tractocamiones propios
                    </li>
                    <li>
                        <div class="svc-feat-icon"><svg viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg></div>
                        Respuesta a cotizaciones en máximo 24 horas hábiles
                    </li>
                </ul>
                <a href="<?php echo esc_url(home_url('/servicios/transporte-de-carga-terrestre-nacional/')); ?>"
                    class="svc-link">Ver detalles del servicio →</a>
            </div>
        </div>

        <!-- SERVICIO 2 — Transporte Urbano -->
        <div class="svc-row reverse" style="margin-bottom:4px;">
            <div class="svc-img">
                <img src="https://transestrella.com/wp-content/uploads/2025/06/camio-urbano-de-transporte.webp"
                    alt="Transporte urbano de mercancías Colombia — Transportadora Estrella" loading="lazy">
                <div class="svc-img-overlay"></div>
                <div class="svc-tag">Urbano</div>
            </div>
            <div class="svc-body">
                <div class="eyebrow">Servicio 02</div>
                <h3>Transporte Urbano de Mercancías</h3>
                <p>Distribución de mercancías dentro de las principales ciudades colombianas, adaptada al modelo
                    logístico de cada cliente. Operación coordinada, segura y eficiente en el perímetro urbano con flota
                    de turbos y camiones de carga general.</p>
                <ul class="svc-features">
                    <li>
                        <div class="svc-feat-icon"><svg viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg></div>
                        Distribución adaptada al modelo operativo del cliente
                    </li>
                    <li>
                        <div class="svc-feat-icon"><svg viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg></div>
                        Turbos y camiones de carga general y refrigerada
                    </li>
                    <li>
                        <div class="svc-feat-icon"><svg viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg></div>
                        Cobertura en Medellín, Bogotá, Cali, Barranquilla y más
                    </li>
                    <li>
                        <div class="svc-feat-icon"><svg viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg></div>
                        Coordinación y comunicación en tiempo real
                    </li>
                    <li>
                        <div class="svc-feat-icon"><svg viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg></div>
                        Cumplimiento de restricciones de movilidad urbana
                    </li>
                </ul>
                <a href="<?php echo esc_url(home_url('/servicios/transporte-urbano-de-mercancias/')); ?>"
                    class="svc-link">Ver detalles del servicio →</a>
            </div>
        </div>

        <!-- SERVICIO 3 — Mercancías Peligrosas -->
        <div class="svc-row" style="margin-bottom:4px;">
            <div class="svc-img">
                <img src="https://transestrella.com/wp-content/uploads/2025/06/camion-cisterna.webp"
                    alt="Transporte de mercancías peligrosas Colombia — Transportadora Estrella" loading="lazy">
                <div class="svc-img-overlay"></div>
                <div class="svc-tag">Especializado</div>
            </div>
            <div class="svc-body">
                <div class="eyebrow">Servicio 03</div>
                <h3>Transporte de Mercancías Peligrosas</h3>
                <p>Gestión especializada de materiales peligrosos bajo la normatividad colombiana vigente. Personal
                    certificado, vehículos especialmente equipados y protocolos de seguridad estrictos para el manejo de
                    las 9 clases de mercancías peligrosas establecidas por la regulación.</p>
                <ul class="svc-features">
                    <li>
                        <div class="svc-feat-icon"><svg viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg></div>
                        Cumplimiento total de normativa ADR y regulación colombiana
                    </li>
                    <li>
                        <div class="svc-feat-icon"><svg viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg></div>
                        Conductores con certificación especializada en MMPP
                    </li>
                    <li>
                        <div class="svc-feat-icon"><svg viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg></div>
                        Cisternas, compartimentos herméticos y sistemas de seguridad
                    </li>
                    <li>
                        <div class="svc-feat-icon"><svg viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg></div>
                        Buenas prácticas ambientales certificadas
                    </li>
                    <li>
                        <div class="svc-feat-icon"><svg viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg></div>
                        Documentación completa y trazable de cada operación
                    </li>
                </ul>
                <a href="<?php echo esc_url(home_url('/servicios/transporte-de-carga-peligrosa/')); ?>"
                    class="svc-link">Ver detalles del servicio →</a>
            </div>
        </div>

        <!-- SERVICIO 4 — ITR -->
        <div class="svc-row reverse">
            <div class="svc-img">
                <img src="https://transestrella.com/wp-content/uploads/2025/08/transporte-de-contenedores.jpg"
                    alt="ITR transporte internacional terrestre Colombia — Transportadora Estrella" loading="lazy">
                <div class="svc-img-overlay"></div>
                <div class="svc-tag">Internacional</div>
            </div>
            <div class="svc-body">
                <div class="eyebrow">Servicio 04</div>
                <h3>ITR — Importación y Exportación</h3>
                <p>Transporte Internacional Terrestre desde y hacia los principales puertos de Colombia. Conectamos su
                    operación de comercio exterior con aliados estratégicos especializados, gestionando trámites
                    aduaneros, documentación y seguimiento de principio a fin.</p>
                <ul class="svc-features">
                    <li>
                        <div class="svc-feat-icon"><svg viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg></div>
                        Operaciones desde Buenaventura (Pacífico) y Cartagena (Caribe)
                    </li>
                    <li>
                        <div class="svc-feat-icon"><svg viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg></div>
                        Aliados estratégicos certificados en comercio exterior
                    </li>
                    <li>
                        <div class="svc-feat-icon"><svg viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg></div>
                        Gestión y coordinación de trámites aduaneros
                    </li>
                    <li>
                        <div class="svc-feat-icon"><svg viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg></div>
                        Carga general, consolidada, peligrosa y sobredimensionada
                    </li>
                    <li>
                        <div class="svc-feat-icon"><svg viewBox="0 0 24 24">
                                <polyline points="20 6 9 17 4 12" />
                            </svg></div>
                        Seguimiento GPS en tiempo real durante todo el trayecto
                    </li>
                </ul>
                <a href="<?php echo esc_url(home_url('/servicios/itr/')); ?>" class="svc-link">Ver detalles del servicio
                    →</a>
            </div>
        </div>

    </div>
</section>

<!-- ══════════════════════════════════════════
     PROCESO DE SERVICIO
══════════════════════════════════════════ -->
<section class="process page-template-page-servicios">
    <div class="process-inner">
        <div class="process-header">
            <div class="eyebrow center">Cómo trabajamos</div>
            <h2>Proceso de <span>Servicio</span></h2>
            <p>Seis pasos claros que garantizan la trazabilidad total de su carga desde la cotización hasta la entrega.
            </p>
        </div>
        <div class="process-grid">
            <div class="process-step">
                <div class="process-num">01</div>
                <div class="process-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
                        <polyline points="14 2 14 8 20 8" />
                        <line x1="16" y1="13" x2="8" y2="13" />
                        <line x1="16" y1="17" x2="8" y2="17" />
                        <polyline points="10 9 9 9 8 9" />
                    </svg>
                </div>
                <h4>Solicitud y Cotización</h4>
                <p>Recibimos su solicitud y elaboramos una cotización personalizada según sus necesidades logísticas
                    específicas.</p>
                <ul>
                    <li>Análisis de requerimientos</li>
                    <li>Cotización sin costo</li>
                    <li>Respuesta en máx. 24 horas</li>
                </ul>
            </div>
            <div class="process-step">
                <div class="process-num">02</div>
                <div class="process-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                        <circle cx="9" cy="7" r="4" />
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                    </svg>
                </div>
                <h4>Confirmación y Coordinación</h4>
                <p>Aprobada la cotización, coordinamos los detalles y asignamos el vehículo y equipo adecuados para su
                    operación.</p>
                <ul>
                    <li>Confirmación de fechas</li>
                    <li>Asignación de vehículo</li>
                    <li>Planificación de ruta</li>
                </ul>
            </div>
            <div class="process-step">
                <div class="process-num">03</div>
                <div class="process-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                        <circle cx="12" cy="10" r="3" />
                    </svg>
                </div>
                <h4>Recolección y Documentación</h4>
                <p>Nuestro personal recoge la mercancía, verifica su estado y documenta el proceso con total
                    trazabilidad.</p>
                <ul>
                    <li>Inspección de la carga</li>
                    <li>Documentación completa</li>
                    <li>Embalaje si se requiere</li>
                </ul>
            </div>
            <div class="process-step">
                <div class="process-num">04</div>
                <div class="process-icon">
                    <svg viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10" />
                        <line x1="2" y1="12" x2="22" y2="12" />
                        <path
                            d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
                    </svg>
                </div>
                <h4>Transporte y Seguimiento</h4>
                <p>Transportamos su carga con monitoreo GPS constante, actualizaciones periódicas y respuesta inmediata
                    ante eventualidades.</p>
                <ul>
                    <li>GPS en tiempo real</li>
                    <li>Actualizaciones de estado</li>
                    <li>Alertas ante incidentes</li>
                </ul>
            </div>
            <div class="process-step">
                <div class="process-num">05</div>
                <div class="process-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" />
                        <polyline points="22 4 12 14.01 9 11.01" />
                    </svg>
                </div>
                <h4>Entrega y Verificación</h4>
                <p>Entregamos en el destino acordado, verificando con el destinatario el estado y conformidad de la
                    mercancía.</p>
                <ul>
                    <li>Confirmación de recepción</li>
                    <li>Verificación del estado</li>
                    <li>Documentación firmada</li>
                </ul>
            </div>
            <div class="process-step">
                <div class="process-num">06</div>
                <div class="process-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                    </svg>
                </div>
                <h4>Seguimiento Postventa</h4>
                <p>Realizamos seguimiento posterior para evaluar la experiencia y garantizar la mejora continua de cada
                    proceso.</p>
                <ul>
                    <li>Encuesta de satisfacción</li>
                    <li>Atención de consultas</li>
                    <li>Mejora continua</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════
     MÉTRICAS
══════════════════════════════════════════ -->
<section class="metrics page-template-page-servicios">
    <div class="metrics-inner">
        <div class="metric-item">
            <div class="metric-num">98%</div>
            <div class="metric-label">Entregas a tiempo<br>en el último año</div>
        </div>
        <div class="metric-item">
            <div class="metric-num">99.8%</div>
            <div class="metric-label">Índice de integridad<br>de la carga</div>
        </div>
        <div class="metric-item">
            <div class="metric-num">24h</div>
            <div class="metric-label">Tiempo máximo de<br>respuesta a cotizaciones</div>
        </div>
        <div class="metric-item">
            <div class="metric-num">30+</div>
            <div class="metric-label">Años de experiencia<br>en carga masiva</div>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════
     POR QUÉ ELEGIRNOS
══════════════════════════════════════════ -->
<section class="why page-template-page-servicios">
    <div class="why-inner">
        <div class="why-header">
            <div class="eyebrow center">Por qué elegirnos</div>
            <h2>Ventajas <span>Competitivas</span></h2>
            <p>Lo que distingue a Transportadora Estrella como aliado logístico de primer nivel en el mercado
                colombiano.</p>
        </div>
        <div class="why-grid">
            <div class="why-card">
                <div class="why-num-bg">01</div>
                <div class="why-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                        <polyline points="9 12 11 14 15 10" />
                    </svg>
                </div>
                <h4>Operación Certificada</h4>
                <p>ISO 9001, BASC y vigilancia de SuperTransporte. Sus operaciones cumplen los más altos estándares
                    nacionales e internacionales de calidad y seguridad.</p>
            </div>
            <div class="why-card">
                <div class="why-num-bg">02</div>
                <div class="why-icon">
                    <svg viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10" />
                        <line x1="2" y1="12" x2="22" y2="12" />
                        <path
                            d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
                    </svg>
                </div>
                <h4>Seguimiento 24/7</h4>
                <p>Sistema de monitoreo vehicular en tiempo real que le permite verificar la ubicación exacta y el
                    estado de su mercancía en cualquier momento.</p>
            </div>
            <div class="why-card">
                <div class="why-num-bg">03</div>
                <div class="why-icon">
                    <svg viewBox="0 0 24 24">
                        <rect x="1" y="3" width="15" height="13" rx="1" />
                        <path d="M16 8h4l3 5v4h-7V8z" />
                        <circle cx="5.5" cy="18.5" r="2.5" />
                        <circle cx="18.5" cy="18.5" r="2.5" />
                    </svg>
                </div>
                <h4>Flota Propia y Diversificada</h4>
                <p>Turbos, camiones, volcos, patinetas y tractocamiones propios. El vehículo correcto para cada tipo de
                    carga, con mantenimiento preventivo riguroso.</p>
            </div>
            <div class="why-card">
                <div class="why-num-bg">04</div>
                <div class="why-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                        <circle cx="9" cy="7" r="4" />
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                    </svg>
                </div>
                <h4>Personal Competente</h4>
                <p>Equipo capacitado y proveedores confiables alineados con el mejoramiento continuo de cada proceso.
                    Atención personalizada desde la cotización hasta la entrega.</p>
            </div>
            <div class="why-card">
                <div class="why-num-bg">05</div>
                <div class="why-icon">
                    <svg viewBox="0 0 24 24">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                        <circle cx="12" cy="10" r="3" />
                    </svg>
                </div>
                <h4>8 Sucursales Estratégicas</h4>
                <p>Presencia propia en los principales corredores logísticos del país:
                    <a href="<?php echo esc_url(home_url('/sucursales/sucursal-medellin/')); ?>">Medellín</a>,
                    <a href="<?php echo esc_url(home_url('/sucursales/sucursal-bogota/')); ?>">Bogotá</a>,
                    <a href="<?php echo esc_url(home_url('/sucursales/sucursal-cali/')); ?>">Cali</a>,
                    <a href="<?php echo esc_url(home_url('/sucursales/sucursal-barranquilla/')); ?>">Barranquilla</a>,
                    <a href="<?php echo esc_url(home_url('/sucursales/sucursal-cartagena/')); ?>">Cartagena</a>,
                    <a href="<?php echo esc_url(home_url('/sucursales/sucursal-buenaventura/')); ?>">Buenaventura</a>,
                    <a href="<?php echo esc_url(home_url('/sucursales/sucursal-buga/')); ?>">Buga</a> y
                    <a href="<?php echo esc_url(home_url('/sucursales/sucursal-manizales/')); ?>">Manizales</a>.
                </p>
            </div>
            <div class="why-card">
                <div class="why-num-bg">06</div>
                <div class="why-icon">
                    <svg viewBox="0 0 24 24">
                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" />
                    </svg>
                </div>
                <h4>Puntualidad Garantizada</h4>
                <p>Rutas optimizadas, gestión proactiva de imprevistos y compromiso firme con los tiempos de entrega
                    acordados. El 98% de nuestros despachos llegan a tiempo.</p>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════
     FAQ
══════════════════════════════════════════ -->
<section class="faq page-template-page-servicios">
    <div class="faq-inner">
        <div class="faq-left">
            <div class="eyebrow">Preguntas frecuentes</div>
            <h2>Dudas sobre <span>Nuestro Servicio</span></h2>
            <p>Resolvemos las consultas más comunes sobre cómo funciona el transporte de carga masiva con Transportadora
                Estrella.</p>
            <a href="<?php echo esc_url(home_url('/contactanos/')); ?>" class="btn-outline-dark">Contactar Asesor →</a>
        </div>
        <div class="faq-list">
            <div class="faq-item open">
                <div class="faq-q" onclick="this.parentElement.classList.toggle('open');">
                    <h4>¿Qué documentación se requiere para realizar un envío?</h4>
                    <div class="faq-q-icon"><svg viewBox="0 0 24 24">
                            <polyline points="18 15 12 9 6 15" />
                        </svg></div>
                </div>
                <div class="faq-a">Necesitará factura comercial o documento equivalente, identificación del remitente
                    (cédula o NIT), datos completos del destinatario y descripción detallada de la carga. Para
                    mercancías peligrosas o ITR se requiere documentación adicional según la normativa vigente. Nuestro
                    equipo le asesora en cada caso.</div>
            </div>
            <div class="faq-item">
                <div class="faq-q" onclick="this.parentElement.classList.toggle('open');">
                    <h4>¿Cuáles son los tiempos estimados de entrega?</h4>
                    <div class="faq-q-icon"><svg viewBox="0 0 24 24">
                            <polyline points="6 9 12 15 18 9" />
                        </svg></div>
                </div>
                <div class="faq-a">Ciudades principales: 24 a 48 horas hábiles. Ciudades intermedias: 48 a 72 horas
                    hábiles. Zonas rurales: 3 a 5 días hábiles. Para servicios urgentes contamos con opciones que
                    reducen estos tiempos. Consulte con nuestro equipo para un estimado preciso según su ruta
                    específica.</div>
            </div>
            <div class="faq-item">
                <div class="faq-q" onclick="this.parentElement.classList.toggle('open');">
                    <h4>¿Cómo puedo hacer seguimiento de mi envío?</h4>
                    <div class="faq-q-icon"><svg viewBox="0 0 24 24">
                            <polyline points="6 9 12 15 18 9" />
                        </svg></div>
                </div>
                <div class="faq-a">Todos nuestros vehículos cuentan con GPS y ofrecemos seguimiento en tiempo real a
                    través de nuestro equipo de atención al cliente vía WhatsApp, llamada o correo electrónico. Puede
                    solicitar actualizaciones del estado de su carga en cualquier momento del trayecto.</div>
            </div>
            <div class="faq-item">
                <div class="faq-q" onclick="this.parentElement.classList.toggle('open');">
                    <h4>¿Cómo se determina el costo de un envío?</h4>
                    <div class="faq-q-icon"><svg viewBox="0 0 24 24">
                            <polyline points="6 9 12 15 18 9" />
                        </svg></div>
                </div>
                <div class="faq-a">El costo se calcula considerando el peso y volumen de la carga, la distancia entre
                    origen y destino, el tipo de servicio requerido y las características especiales de la mercancía. Le
                    recomendamos solicitar una cotización personalizada a través de nuestro formulario de contacto o
                    llamando directamente a nuestras oficinas.</div>
            </div>
            <div class="faq-item">
                <div class="faq-q" onclick="this.parentElement.classList.toggle('open');">
                    <h4>¿Qué tipos de mercancía no se pueden transportar?</h4>
                    <div class="faq-q-icon"><svg viewBox="0 0 24 24">
                            <polyline points="6 9 12 15 18 9" />
                        </svg></div>
                </div>
                <div class="faq-a">No transportamos dinero en efectivo, títulos valores, joyas, armas sin permiso,
                    drogas ilícitas ni mercancía de contrabando. Las mercancías peligrosas se pueden transportar con la
                    documentación, vehículos y personal especializado requeridos. Consulte con nuestro equipo ante
                    cualquier duda sobre su tipo de carga específico.</div>
            </div>
            <div class="faq-item">
                <div class="faq-q" onclick="this.parentElement.classList.toggle('open');">
                    <h4>¿Atienden paqueteo o envíos individuales?</h4>
                    <div class="faq-q-icon"><svg viewBox="0 0 24 24">
                            <polyline points="6 9 12 15 18 9" />
                        </svg></div>
                </div>
                <div class="faq-a">No. Transportadora Estrella se especializa exclusivamente en carga masiva y semi
                    masiva para operaciones empresariales de alto volumen. No gestionamos paqueteo ni envíos
                    individuales. Nuestros servicios están diseñados para empresas que requieren turbos, camiones,
                    patinetas o tractocamiones completos.</div>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════
     CTA FINAL + FORMULARIO
══════════════════════════════════════════ -->
<section class="cta page-template-page-servicios" id="cotizar">
    <div class="cta-inner">
        <div class="cta-text">
            <div class="eyebrow">Hablemos hoy</div>
            <h2>Cotice su <span>Carga Masiva</span> con Nosotros</h2>
            <p>Estamos listos para gestionar sus operaciones de carga masiva y semi masiva en todo el territorio
                nacional. Cuéntenos su necesidad y diseñamos la solución logística ideal.</p>
            <div class="cta-contacts">
                <div class="cta-contact">
                    <div class="cta-c-icon">
                        <svg viewBox="0 0 24 24">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.4 2 2 0 0 1 3.6 1.22h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.77a16 16 0 0 0 6 6l.86-.86a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7a2 2 0 0 1 1.72 2.03z" />
                        </svg>
                    </div>
                    <div>
                        <div class="cta-c-label">Línea Nacional</div>
                        <div class="cta-c-val">+57 310 4244591</div>
                    </div>
                </div>
                <div class="cta-contact">
                    <div class="cta-c-icon">
                        <svg viewBox="0 0 24 24">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                            <polyline points="22,6 12,13 2,6" />
                        </svg>
                    </div>
                    <div>
                        <div class="cta-c-label">Correo Electrónico</div>
                        <div class="cta-c-val"><a href="mailto:servicioalcliente@transestrella.com"
                                style="color:inherit;text-decoration:none;">servicioalcliente@transestrella.com</a>
                        </div>
                    </div>
                </div>
                <div class="cta-contact">
                    <div class="cta-c-icon">
                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" />
                            <polyline points="12 6 12 12 16 14" />
                        </svg>
                    </div>
                    <div>
                        <div class="cta-c-label">Horario de Atención</div>
                        <div class="cta-c-val">Lun–Vie 8am–6pm · Sáb 8am–1pm</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-box">
            <h3>Solicitar Cotización</h3>
            <p class="form-box-sub">Complete el formulario y le respondemos en menos de 24 horas hábiles.</p>
            <div class="form-notice">
                <svg class="form-notice-icon" viewBox="0 0 24 24">
                    <circle cx="12" cy="12" r="10" />
                    <line x1="12" y1="8" x2="12" y2="12" />
                    <line x1="12" y1="16" x2="12.01" y2="16" />
                </svg>
                <div>
                    <div class="form-notice-title">Solo Carga Masiva y Semi Masiva</div>
                    <div class="form-notice-text">Atendemos operaciones empresariales de alto volumen. No gestionamos
                        paqueteo ni envíos individuales.</div>
                </div>
            </div>
            <div class="forminator-placeholder">
                <svg viewBox="0 0 24 24">
                    <rect x="9" y="9" width="13" height="13" rx="2" ry="2" />
                    <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1" />
                </svg>
                <p>Formulario Forminator</p>
                <span>[forminator_form id="XX"]</span>
            </div>
            <a href="https://wa.me/573104244591?text=Hola%2C%20necesito%20cotizar%20transporte%20de%20carga%20masiva"
                target="_blank" class="form-wa">
                <svg viewBox="0 0 24 24">
                    <path
                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413z" />
                    <path
                        d="M12 0C5.373 0 0 5.373 0 12c0 2.123.554 4.118 1.524 5.847L.057 23.992l6.304-1.654A11.945 11.945 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.8 9.8 0 01-5.012-1.375l-.36-.214-3.733.979 1-3.642-.235-.374A9.791 9.791 0 012.182 12C2.182 6.58 6.58 2.182 12 2.182S21.818 6.58 21.818 12 17.42 21.818 12 21.818z" />
                </svg>
                <span class="form-wa-text">¿Necesita respuesta inmediata? WhatsApp</span>
            </a>
        </div>
    </div>
</section>

<?php get_footer(); ?>