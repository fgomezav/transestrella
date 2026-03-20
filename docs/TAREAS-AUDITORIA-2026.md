# Tareas — Auditoría Digital 2026
**Basado en:** Auditoría realizada el 14 de marzo de 2026
**Reporte completo:** `/html/auditoria-digital-2026.html`

---

## Esta Semana — Quick Wins

- [ ] **Corregir doble H1 en Homepage**
  En WordPress, editar la página de inicio y eliminar el segundo `<h1>`. Dejar únicamente _"Transporte de Carga Masiva Terrestre Nacional"_. El segundo H1 convertirlo en H2.

- [ ] **Eliminar bloqueo de AdsBot en robots.txt**
  En Yoast SEO → Herramientas → Editor de archivos, eliminar las líneas:
  ```
  User-agent: AdsBot
  Disallow: /
  ```

- [ ] **Unificar mensaje de años de experiencia**
  Buscar en todo el sitio "30 años", "40 años", "+30", "+40" y reemplazar con referencia coherente: _"fundada en 1980"_ o _"más de 45 años de experiencia"_. Afecta: homepage, /nosotros/, /servicios/, meta descriptions.

- [ ] **Agregar Twitter Card meta tags**
  En Yoast SEO → Configuración de redes sociales → Twitter, habilitar Twitter Cards y configurar imagen por defecto. Verificar con [Twitter Card Validator](https://cards-dev.twitter.com/validator).

- [ ] **Completar atributos `alt` en imágenes**
  Imágenes sin alt detectadas:
  - Imagen hero principal en homepage
  - `icontec_iso_9001.png`
  - `logo-basc.png`
  - Imágenes de flota (turbo, camion, volcos, patineta, tractocamion)

---

## Este Mes

- [ ] **Crear y verificar 8 fichas en Google Business Profile**
  Una ficha por sucursal. Datos a completar en cada ficha:
  - Nombre, categoría ("Empresa de transporte de carga"), teléfono, dirección, horario
  - Enlace al sitio: página de sucursal correspondiente (`/sucursales/sucursal-[ciudad]/`)
  - Fotos de la oficina/operación
  - Sucursales: Medellín, Bogotá, Cali, Barranquilla, Cartagena, Buenaventura, Buga, Manizales

- [ ] **Agregar FAQPage Schema en /servicios/**
  El FAQ existe visualmente con 6 preguntas pero sin marcado estructurado. Agregar en el JSON-LD de la página:
  ```json
  {
    "@type": "FAQPage",
    "mainEntity": [
      { "@type": "Question", "name": "...", "acceptedAnswer": { "@type": "Answer", "text": "..." } }
    ]
  }
  ```
  Verificar con [Rich Results Test](https://search.google.com/test/rich-results).

- [ ] **Completar LocalBusiness Schema**
  En Yoast SEO → Configuración → Organización, o vía WP Headers & Footers, agregar al JSON-LD existente:
  - `"@type": "LocalBusiness"` (además de Organization)
  - `telephone`: +57 604 527 3300
  - `address` con `PostalAddress`: Calle 64 #56-60, La Candelaria, Medellín
  - `openingHoursSpecification`: Lun–Vie 8am–6pm, Sáb 8am–1pm
  - `geo` con coordenadas de la sede principal
  - `foundingDate`: "1980"
  - Actualizar `sameAs` con todas las redes sociales activas

- [ ] **Auditar páginas huérfanas del sitemap**
  Dos páginas en el sitemap sin enlace en menú — decidir acción:
  - `/servicios/transporte-de-importacion-y-exportacion/` → ¿duplicado de /itr/? Si es así, redirigir 301 o consolidar.
  - `/servicios/transporte-de-carga-refrigerada/` → ¿servicio activo? Si no, agregar `noindex` o eliminar.

- [ ] **Verificar redirección 301 de `.com.co` → `.com`**
  Comprobar en terminal:
  ```bash
  curl -I https://transestrella.com.co
  ```
  Debe responder `301 Moved Permanently` con `Location: https://transestrella.com/`. Si no, configurar en el servidor/DNS.

---

## Próximo Trimestre

- [ ] **Enriquecer las 8 páginas de sucursales**
  Cada página `/sucursales/sucursal-[ciudad]/` debe incluir:
  - Mapa embebido de Google Maps con la dirección exacta
  - Teléfono local de la sucursal
  - Rutas principales que atiende esa ciudad (ej. Medellín → Bogotá, Medellín → Buenaventura)
  - Formulario de cotización con campo de ciudad preseleccionado
  - Horario de atención local

- [ ] **Crear perfil de empresa en LinkedIn**
  - Nombre: Transportadora Estrella
  - Categoría: Logistics and Supply Chain / Transportation/Trucking/Railroad
  - Descripción optimizada con keywords B2B
  - Publicar 2–3 veces por semana: normativa, casos de éxito, actualizaciones de flota
  - Agregar la URL de LinkedIn al Schema `sameAs`

- [ ] **Linkbuilding — gremios y medios del sector**
  Objetivos prioritarios:
  - [COLFECAR](https://www.colfecar.org.co) — Federación Colombiana de Transportadores de Carga
  - Publicaciones en Revista de Logística Colombia
  - Directorios de proveedores: industria química, farmacéutica, agroindustria
  - Menciones en medios: La República, Portafolio (sección logística)

- [ ] **Auditar Core Web Vitals**
  Ejecutar en [PageSpeed Insights](https://pagespeed.web.dev/) para:
  - `transestrella.com/` (homepage)
  - `transestrella.com/servicios/`
  - `transestrella.com/servicios/transporte-de-carga-terrestre-nacional/`

  Métricas objetivo: LCP < 2.5s · INP < 200ms · CLS < 0.1
  Acciones comunes: habilitar lazy loading, convertir imágenes JPEG a WebP, configurar caché.

- [ ] **Integrar Forminator con CRM**
  Opciones gratuitas: HubSpot Free, Zoho CRM Free.
  Forminator tiene integración nativa con Zapier y webhooks. Configurar para que cada cotización quede registrada en el CRM con: nombre, empresa, tipo de servicio, origen/destino.

---

## Backlog — Sin Prioridad Definida

- [ ] Corregir typos en nombres de archivos de imagen:
  - `transporte-de-carga-nacioanl.jpeg` → `transporte-de-carga-nacional.jpeg`
  - `camio-urbano-de-transporte.webp` → `camion-urbano-de-transporte.webp`
  - Actualizar referencias en la Media Library de WordPress después de renombrar

- [ ] Crear child theme de Astra para proteger personalizaciones ante actualizaciones del tema

- [ ] Agregar `wp-content/updraft/` y `wp-content/uploads/` al `.gitignore`

- [ ] Regenerar authentication salts de `wp-config.php` para producción
  Generador: https://api.wordpress.org/secret-key/1.1/salt/

- [ ] Agregar `loading="lazy"` a imágenes que no están above-the-fold

- [ ] Evaluar estrategia de email marketing para nurturing de leads del formulario

---

## Snippets Listos para Implementar

### LocalBusiness Schema completo
Pegar en **WP Headers & Footers → Scripts en `<head>`** (reemplaza el bloque `@graph` existente de Yoast o agregar como script separado):

```html
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": ["Organization", "LocalBusiness"],
  "@id": "https://transestrella.com/#organization",
  "name": "Transportadora Estrella",
  "url": "https://transestrella.com/",
  "logo": {
    "@type": "ImageObject",
    "url": "https://transestrella.com/wp-content/uploads/2025/03/TransportadoraEstrella.png",
    "width": 702,
    "height": 344
  },
  "foundingDate": "1980",
  "description": "Empresa colombiana de transporte terrestre de carga masiva y semi masiva con más de 45 años de experiencia. Certificada ISO 9001 ICONTEC y BASC.",
  "telephone": "+57-604-527-3300",
  "email": "servicioalcliente@transestrella.com",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Calle 64 #56-60, La Candelaria",
    "addressLocality": "Medellín",
    "addressRegion": "Antioquia",
    "addressCountry": "CO"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 6.2518,
    "longitude": -75.5636
  },
  "openingHoursSpecification": [
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
      "opens": "08:00",
      "closes": "18:00"
    },
    {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": "Saturday",
      "opens": "08:00",
      "closes": "13:00"
    }
  ],
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+57-310-424-4591",
    "contactType": "customer service",
    "availableLanguage": "Spanish"
  },
  "sameAs": [
    "https://www.instagram.com/transportadoraestrella/"
  ]
}
</script>
```

> Después de publicar, validar en: https://validator.schema.org/

---

### FAQPage Schema para /servicios/
Las preguntas reales detectadas en la página. Agregar dentro del bloque `@graph` de Yoast o como script separado en esa página:

```html
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "¿Qué documentación se requiere para realizar un envío?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Para realizar un envío con Transportadora Estrella se requiere: remesa de transporte, factura comercial de la mercancía, lista de empaque y, para mercancías peligrosas, la hoja de seguridad (MSDS). Nuestro equipo le acompañará en el proceso."
      }
    },
    {
      "@type": "Question",
      "name": "¿Cuáles son los tiempos estimados de entrega?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Los tiempos de entrega varían según la ruta. En corredores principales (Medellín–Bogotá, Medellín–Cali) el tiempo estimado es de 24 a 48 horas. Para destinos más alejados, entre 48 y 72 horas. Mantenemos un índice de entregas a tiempo del 98%."
      }
    },
    {
      "@type": "Question",
      "name": "¿Cómo puedo hacer seguimiento de mi envío?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Contamos con seguimiento GPS 24/7 para toda nuestra flota. Puede consultar el estado de su envío contactando a su ejecutivo de cuenta o a nuestra línea nacional +57 604 527 3300."
      }
    },
    {
      "@type": "Question",
      "name": "¿Cómo se determina el costo de un envío?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "El costo depende del peso y volumen de la carga, el origen y destino, el tipo de mercancía, la frecuencia del servicio y los requisitos especiales (refrigeración, mercancías peligrosas). Solicite una cotización sin costo en menos de 24 horas."
      }
    },
    {
      "@type": "Question",
      "name": "¿Qué tipos de mercancía no se pueden transportar?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No transportamos explosivos de uso civil sin los permisos correspondientes, sustancias ilícitas ni mercancías cuyo transporte esté prohibido por la normativa colombiana. Para mercancías peligrosas categorizadas (químicos, inflamables, corrosivos) contamos con un servicio especializado y personal certificado."
      }
    },
    {
      "@type": "Question",
      "name": "¿Atienden paqueteo o envíos individuales?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Nos especializamos en carga masiva y semi masiva. Para envíos de paquetería individual o pequeños volúmenes, recomendamos empresas especializadas en ese segmento. Nuestro servicio está orientado a empresas con necesidades de transporte frecuente y voluminoso."
      }
    }
  ]
}
</script>
```

---

### Twitter Card meta tags
Agregar en **WP Headers & Footers → Scripts en `<head>`**:

```html
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@transportadoraestrella">
<meta name="twitter:title" content="Transportadora Estrella — Transporte de Carga en Colombia">
<meta name="twitter:description" content="Empresa de transporte de carga terrestre en Colombia. +45 años de experiencia. ISO 9001 · BASC. 8 sucursales. Cotice ahora.">
<meta name="twitter:image" content="https://transestrella.com/wp-content/uploads/2025/04/transportadora-estrella-transporte-de-carga-nacioanl.jpeg">
```

---

## Keywords Objetivo por Página

### Homepage
| Keyword | Intención | Volumen estimado |
|---|---|---|
| transporte de carga terrestre Colombia | Comercial | Alto |
| empresa transporte carga masiva Colombia | Comercial | Medio |
| transporte de carga nacional Colombia | Comercial | Alto |
| empresa logística Colombia | Informacional | Alto |

### /servicios/transporte-de-carga-terrestre-nacional/
| Keyword | Intención |
|---|---|
| transporte carga masiva Colombia | Comercial |
| empresa transporte carga pesada Colombia | Comercial |
| transporte terrestre carga voluminosa | Comercial |
| costo flete terrestre Colombia | Transaccional |

### /servicios/transporte-de-carga-peligrosa/
| Keyword | Intención |
|---|---|
| transporte mercancías peligrosas Colombia | Comercial |
| empresa transporte carga peligrosa BASC | Comercial |
| transporte químicos Colombia | Comercial |
| transporte inflamables Colombia norma | Informacional |

### Páginas de sucursales (patrón por ciudad)
- `transporte de carga [ciudad]`
- `empresa transporte terrestre [ciudad]`
- `flete [ciudad] a [ciudad destino]`
- `cotizar transporte carga [ciudad]`

---

## Calendario de Contenidos — Blog

### Artículos prioritarios por escribir

**Alta prioridad (tráfico + conversión)**
- [ ] "¿Cuánto cuesta el transporte de carga terrestre en Colombia en 2026?" — keyword transaccional con alto volumen
- [ ] "Transporte de carga Medellín a Bogotá: tiempos, costos y cómo cotizar" — ruta principal
- [ ] "Transporte de carga Medellín a Buenaventura: guía completa para exportadores"
- [ ] "Cómo elegir una empresa de transporte de mercancías peligrosas en Colombia"
- [ ] "¿Qué es el RNDC y cómo afecta a tu empresa como generador de carga?"

**Media prioridad (autoridad + linkbait)**
- [ ] "Corredores logísticos de Colombia: cuáles son y qué empresas los dominan"
- [ ] "Certificación BASC en Colombia: qué es, quién la necesita y cómo obtenerla"
- [ ] "Diferencias entre carga masiva, semi masiva y paqueteo en Colombia"
- [ ] "Puerto de Buenaventura en 2026: situación y tiempos de espera actualizados"
- [ ] "Transporte refrigerado en Colombia: normativa y proveedores certificados"

**Baja prioridad (blog interno / thought leadership)**
- [ ] Novedades flota 2026 — nuevas unidades incorporadas
- [ ] Actualización normativa Ministerio de Transporte (publicar con cada decreto relevante)

---

## KPIs — Cómo Medir el Éxito

Revisar mensualmente en Google Search Console + Analytics:

| Métrica | Herramienta | Objetivo a 6 meses |
|---|---|---|
| Clics orgánicos totales | Search Console | +40% vs. línea base actual |
| Impresiones en búsquedas locales | Search Console (filtrar por ciudad) | Aparecer en top 3 local |
| Posición promedio keywords objetivo | Search Console | < 15 para keywords primarias |
| Conversiones del formulario | GA4 (evento form_submit) | Tasa > 3% de visitantes |
| Vistas a páginas de sucursales | GA4 | +60% con GBP activo |
| Reseñas en GBP | Google Business Profile | Mínimo 5 reseñas por sucursal |
| Core Web Vitals LCP | Search Console → Experiencia | Verde (< 2.5s) en móvil |

---

## Datos de Sucursales — Referencia

| Ciudad | Dirección | Teléfono | Página del sitio |
|---|---|---|---|
| Medellín (Sede Principal) | Calle 64 #56-60, La Candelaria | +57 604 527 3300 | /sucursales/sucursal-medellin/ |
| Bogotá | Av. Troncal de Occidente No. 18-76 Of. 301 Torre A | 312 826 5078 | /sucursales/sucursal-bogota/ |
| Cali | Bloque A3 Ofic. 104, Cencar 1 Piso | 310 369 5787 | /sucursales/sucursal-cali/ |
| Barranquilla | Cra. 28 #38-345 Av. Circunvalar, Eds. El Descanso | 310 442 7076 | /sucursales/sucursal-barranquilla/ |
| Cartagena | Diagonal 21 N.° 45A–11, Avenida El Bosque | 314 772 8740 | /sucursales/sucursal-cartagena/ |
| Buenaventura | Calle 7B N.° 4–52 Piso 2 | 313 659 7359 | /sucursales/sucursal-buenaventura/ |
| Buga | Cra. 12A N.° 6Sur–94 | 313 655 3232 | /sucursales/sucursal-buga/ |
| Manizales | Calle 110 N.° 34A–75 | 310 369 5787 | /sucursales/sucursal-manizales/ |

**WhatsApp principal:** +57 310 424 4591
**Email:** servicioalcliente@transestrella.com
**Horario:** Lun–Vie 8am–6pm · Sáb 8am–1pm

---

## Referencias

| Recurso | URL |
|---|---|
| Reporte HTML completo | `/html/auditoria-digital-2026.html` |
| Rich Results Test | https://search.google.com/test/rich-results |
| PageSpeed Insights | https://pagespeed.web.dev/ |
| Google Business Profile | https://business.google.com/ |
| Schema Validator | https://validator.schema.org/ |
| Twitter Card Validator | https://cards-dev.twitter.com/validator |
| Robots.txt Tester | https://search.google.com/search-console/robots.txt |
| Google Search Console | https://search.google.com/search-console/ |
| Yoast SEO (Schema docs) | https://developer.yoast.com/features/schema/ |
| COLFECAR | https://www.colfecar.org.co |
| Generador de salts WP | https://api.wordpress.org/secret-key/1.1/salt/ |
