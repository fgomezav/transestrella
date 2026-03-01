<?php
/**
 * Template Name: Sucursales
 * Template Post Type: page
 */

get_header();
?>
<style>
  /* ── HERO ── */
  .hero {
    position: relative;
    min-height: 56vh;
    display: flex;
    align-items: center;
    background: var(--ts-blue-deep);
    overflow: hidden;
  }

  .hero-bg {
    position: absolute;
    inset: 0;
    background-image: url('https://transestrella.com/wp-content/uploads/2025/04/transportadora-estrella-nuestra-flota-transporte-de-carga-pesada-1.jpeg');
    background-size: cover;
    background-position: center;
    opacity: .16;
  }

  .hero-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(108deg, rgba(8, 50, 102, .98) 0%, rgba(8, 50, 102, .88) 50%, rgba(15, 91, 167, .3) 100%);
  }

  .hero-line {
    position: absolute;
    top: 0;
    right: 36%;
    width: 1px;
    height: 100%;
    background: linear-gradient(to bottom, transparent, rgba(245, 166, 35, .1), transparent);
    transform: rotate(10deg);
  }

  /* Colombia outline decorative */
  .hero-map-deco {
    position: absolute;
    right: 8%;
    top: 50%;
    transform: translateY(-50%);
    opacity: .04;
    pointer-events: none;
  }

  .hero-map-deco svg {
    width: 260px;
    height: 340px;
    fill: var(--ts-white);
  }

  .hero-content {
    position: relative;
    z-index: 5;
    max-width: 1240px;
    margin: 0 auto;
    padding: 100px 40px 80px;
    width: 100%;
  }

  .breadcrumb {
    display: flex;
    align-items: center;
    gap: 8px;
    margin-bottom: 22px;
  }

  .breadcrumb a {
    font-family: var(--font-display);
    font-size: 12px;
    font-weight: 600;
    letter-spacing: .1em;
    text-transform: uppercase;
    color: rgba(255, 255, 255, .4);
    text-decoration: none;
  }

  .breadcrumb a:hover {
    color: var(--ts-gold);
  }

  .breadcrumb-sep {
    color: rgba(255, 255, 255, .2);
    font-size: 12px;
  }

  .breadcrumb span {
    font-family: var(--font-display);
    font-size: 12px;
    font-weight: 600;
    letter-spacing: .1em;
    text-transform: uppercase;
    color: var(--ts-gold);
  }

  .hero h1 {
    font-family: var(--font-display);
    font-size: clamp(44px, 6vw, 78px);
    font-weight: 800;
    line-height: .92;
    text-transform: uppercase;
    color: #FFFFFF;
    letter-spacing: .01em;
    margin-bottom: 18px;
    max-width: 680px;
  }

  .hero h1 em {
    color: var(--ts-gold);
    font-style: normal;
    display: block;
  }

  .hero-desc {
    font-size: 17px;
    line-height: 1.78;
    color: rgba(255, 255, 255, .62);
    max-width: 520px;
    margin-bottom: 40px;
  }

  /* Stats row */
  .hero-stats {
    display: flex;
    gap: 48px;
    padding-top: 36px;
    border-top: 1px solid rgba(255, 255, 255, .08);
  }

  .hero-stat-num {
    font-family: var(--font-display);
    font-size: 44px;
    font-weight: 800;
    color: var(--ts-gold);
    line-height: 1;
  }

  .hero-stat-label {
    font-size: 13px;
    color: rgba(255, 255, 255, .45);
    margin-top: 3px;
  }

  /* ── TABS FILTRO REGIONES ── */
  .filter-bar {
    background: #FFFFFF;
    border-bottom: 1px solid var(--ts-gray-line);
    padding: 0 40px;
    position: sticky;
    top: 68px;
    z-index: 90;
  }

  .filter-inner {
    max-width: 1240px;
    margin: 0 auto;
    display: flex;
    align-items: center;
    gap: 4px;
    overflow-x: auto;
  }

  .filter-tab {
    font-family: var(--font-display);
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .1em;
    text-transform: uppercase;
    color: var(--ts-gray);
    padding: 18px 20px;
    border: none;
    background: none;
    cursor: pointer;
    white-space: nowrap;
    border-bottom: 3px solid transparent;
    transition: color .18s, border-color .18s;
  }

  .filter-tab:hover {
    color: var(--ts-blue);
  }

  .filter-tab.active {
    color: var(--ts-blue);
    border-bottom-color: var(--ts-blue);
  }

  .filter-count {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 18px;
    height: 18px;
    background: var(--ts-blue);
    color: #fff;
    border-radius: 50%;
    font-size: 10px;
    font-weight: 800;
    margin-left: 6px;
    vertical-align: middle;
  }

  .filter-tab.active .filter-count {
    background: var(--ts-gold);
  }

  /* ── SEDE PRINCIPAL (Medellín) ── */
  .main-branch {
    padding: 72px 40px 0;
    background: #FFFFFF;
  }

  .main-branch-inner {
    max-width: 1240px;
    margin: 0 auto;
  }

  .main-branch-card {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 0;
    border-radius: 16px;
    overflow: hidden;
    border: 2px solid var(--ts-gold);
    box-shadow: 0 16px 48px rgba(8, 50, 102, .1);
  }

  .main-branch-info {
    padding: 44px 48px;
    background: #FFFFFF;
  }

  .main-tag {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: rgba(245, 166, 35, .1);
    border: 1px solid rgba(245, 166, 35, .25);
    border-radius: 4px;
    padding: 5px 12px;
    margin-bottom: 16px;
  }

  .main-tag svg {
    width: 13px;
    height: 13px;
    fill: var(--ts-gold);
  }

  .main-tag span {
    font-family: var(--font-display);
    font-size: 11px;
    font-weight: 800;
    letter-spacing: .12em;
    text-transform: uppercase;
    color: var(--ts-gold);
  }

  .main-branch-info h2 {
    font-family: var(--font-display);
    font-size: clamp(32px, 4vw, 52px);
    font-weight: 800;
    text-transform: uppercase;
    color: #333333;
    line-height: .95;
    margin-bottom: 6px;
  }

  .main-branch-info .region {
    font-family: var(--font-display);
    font-size: 14px;
    font-weight: 600;
    letter-spacing: .1em;
    text-transform: uppercase;
    color: var(--ts-blue);
    margin-bottom: 28px;
  }

  .contact-list {
    display: flex;
    flex-direction: column;
    gap: 16px;
    margin-bottom: 32px;
  }

  .contact-item {
    display: flex;
    align-items: flex-start;
    gap: 14px;
  }

  .contact-icon {
    width: 38px;
    height: 38px;
    background: #EEF3FA;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }

  .contact-icon svg {
    width: 16px;
    height: 16px;
    stroke: var(--ts-blue);
    fill: none;
    stroke-width: 1.9;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  .contact-label {
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: .08em;
    color: var(--ts-gray);
    margin-bottom: 2px;
  }

  .contact-val {
    font-family: var(--font-display);
    font-size: 16px;
    font-weight: 700;
    color: #333333;
    line-height: 1.2;
  }

  .contact-val a {
    color: var(--ts-blue);
    text-decoration: none;
  }

  .main-branch-btns {
    display: flex;
    gap: 12px;
    flex-wrap: wrap;
  }

  .btn-waze {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 12px 22px;
    background: #33CCFF;
    color: #fff;
    font-family: var(--font-display);
    font-size: 13px;
    font-weight: 700;
    letter-spacing: .06em;
    text-transform: uppercase;
    border-radius: 4px;
    text-decoration: none;
  }

  .btn-gmaps {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 12px 22px;
    background: #4285F4;
    color: #fff;
    font-family: var(--font-display);
    font-size: 13px;
    font-weight: 700;
    letter-spacing: .06em;
    text-transform: uppercase;
    border-radius: 4px;
    text-decoration: none;
  }

  /* Map placeholder */
  .main-branch-map {
    background: #D6E4F0;
    position: relative;
    min-height: 380px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    gap: 12px;
  }

  .map-placeholder-icon {
    width: 64px;
    height: 64px;
    background: var(--ts-blue);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .map-placeholder-icon svg {
    width: 28px;
    height: 28px;
    stroke: #fff;
    fill: none;
    stroke-width: 1.8;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  .map-placeholder-label {
    font-family: var(--font-display);
    font-size: 13px;
    font-weight: 700;
    letter-spacing: .1em;
    text-transform: uppercase;
    color: var(--ts-blue-dark);
    opacity: .5;
  }

  .map-placeholder-sub {
    font-size: 12px;
    color: var(--ts-blue-dark);
    opacity: .4;
  }

  /* Nota: en Divi se reemplaza por iframe Google Maps */
  .map-note {
    position: absolute;
    bottom: 12px;
    left: 50%;
    transform: translateX(-50%);
    font-size: 11px;
    color: rgba(8, 50, 102, .35);
    font-family: var(--font-display);
    font-weight: 600;
    letter-spacing: .08em;
    text-transform: uppercase;
    white-space: nowrap;
  }

  /* ── CORREDORES + GRID SUCURSALES ── */
  .branches {
    padding: 64px 40px 88px;
    background: #FFFFFF;
  }

  .branches-inner {
    max-width: 1240px;
    margin: 0 auto;
  }

  /* Corredor header */
  .corridor {
    margin-bottom: 48px;
  }

  .corridor:last-child {
    margin-bottom: 0;
  }

  .corridor-header {
    display: flex;
    align-items: center;
    gap: 16px;
    margin-bottom: 20px;
    padding-bottom: 16px;
    border-bottom: 2px solid var(--ts-gray-bg);
  }

  .corridor-dot {
    width: 10px;
    height: 10px;
    background: var(--ts-gold);
    border-radius: 50%;
    flex-shrink: 0;
  }

  .corridor-name {
    font-family: var(--font-display);
    font-size: 13px;
    font-weight: 700;
    letter-spacing: .18em;
    text-transform: uppercase;
    color: var(--ts-gray);
  }

  .corridor-line {
    flex: 1;
    height: 1px;
    background: var(--ts-gray-line);
  }

  .corridor-count {
    font-family: var(--font-display);
    font-size: 11px;
    font-weight: 700;
    letter-spacing: .1em;
    text-transform: uppercase;
    color: var(--ts-gray);
    background: var(--ts-gray-bg);
    border-radius: 3px;
    padding: 3px 8px;
  }

  /* Branch cards grid */
  .branches-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 16px;
  }

  .branch-card {
    background: #FFFFFF;
    border-radius: 12px;
    border: 1px solid var(--ts-gray-line);
    overflow: hidden;
    transition: border-color .2s, box-shadow .2s, transform .2s;
  }

  .branch-card:hover {
    border-color: var(--ts-gold);
    box-shadow: 0 10px 28px rgba(8, 50, 102, .08);
    transform: translateY(-3px);
  }

  /* Card map strip */
  .branch-map-strip {
    height: 120px;
    background: #D6E4F0;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
  }

  .branch-map-pin {
    width: 40px;
    height: 40px;
    background: var(--ts-blue);
    border-radius: 50% 50% 50% 0;
    transform: rotate(-45deg);
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 12px rgba(8, 50, 102, .3);
  }

  .branch-map-pin svg {
    width: 16px;
    height: 16px;
    stroke: #fff;
    fill: none;
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
    transform: rotate(45deg);
  }

  .branch-region-tag {
    position: absolute;
    top: 10px;
    left: 10px;
    font-family: var(--font-display);
    font-size: 10px;
    font-weight: 700;
    letter-spacing: .1em;
    text-transform: uppercase;
    color: rgba(8, 50, 102, .5);
    background: rgba(255, 255, 255, .7);
    border-radius: 3px;
    padding: 3px 8px;
  }

  /* Card body */
  .branch-card-body {
    padding: 20px 22px 24px;
  }

  .branch-city {
    font-family: var(--font-display);
    font-size: 24px;
    font-weight: 800;
    text-transform: uppercase;
    color: #333333;
    line-height: 1;
    margin-bottom: 4px;
  }

  .branch-dept {
    font-family: var(--font-display);
    font-size: 12px;
    font-weight: 600;
    letter-spacing: .1em;
    text-transform: uppercase;
    color: var(--ts-blue);
    margin-bottom: 16px;
  }

  .branch-contacts {
    display: flex;
    flex-direction: column;
    gap: 9px;
    margin-bottom: 18px;
  }

  .branch-contact-row {
    display: flex;
    align-items: flex-start;
    gap: 10px;
  }

  .branch-contact-row svg {
    width: 13px;
    height: 13px;
    stroke: var(--ts-gray);
    fill: none;
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
    flex-shrink: 0;
    margin-top: 3px;
  }

  .branch-contact-row span {
    font-size: 13px;
    color: #333333;
    line-height: 1.4;
  }

  .branch-contact-row a {
    font-size: 13px;
    color: var(--ts-blue);
    font-weight: 600;
    text-decoration: none;
  }

  .branch-map-links {
    display: flex;
    gap: 8px;
  }

  .branch-map-link {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    font-family: var(--font-display);
    font-size: 10px;
    font-weight: 700;
    letter-spacing: .08em;
    text-transform: uppercase;
    padding: 6px 10px;
    border-radius: 3px;
    text-decoration: none;
  }

  .bml-waze {
    background: #33CCFF;
    color: #fff;
  }

  .bml-gmaps {
    background: #4285F4;
    color: #fff;
  }

  /* Tint variations per corridor */
  .strip-andina {
    background: #D4E4F0;
  }

  .strip-pacifico {
    background: #D4E8E4;
  }

  .strip-caribe {
    background: #D4DCF0;
  }

  .strip-eje {
    background: #F0EAD4;
  }

  /* Pin colors */
  .pin-andina {
    background: var(--ts-blue);
  }

  .pin-pacifico {
    background: #0D7377;
  }

  .pin-caribe {
    background: #1A237E;
  }

  .pin-eje {
    background: #795548;
  }

  /* ── COBERTURA NACIONAL ── */
  .coverage {
    padding: 88px 40px;
    background: var(--ts-blue-deep);
    position: relative;
    overflow: hidden;
  }

  .coverage::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image: linear-gradient(rgba(255, 255, 255, .02) 1px, transparent 1px), linear-gradient(90deg, rgba(255, 255, 255, .02) 1px, transparent 1px);
    background-size: 52px 52px;
  }

  .coverage-inner {
    max-width: 1240px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: center;
    position: relative;
    z-index: 2;
  }

  .coverage-text .eyebrow {
    margin-bottom: 16px;
  }

  .coverage-text h2 {
    font-family: var(--font-display);
    font-size: clamp(28px, 3.5vw, 46px);
    font-weight: 800;
    text-transform: uppercase;
    color: #FFFFFF;
    line-height: 1.0;
    margin-bottom: 16px;
  }

  .coverage-text h2 span {
    color: var(--ts-gold);
  }

  .coverage-text p {
    font-size: 15px;
    color: rgba(255, 255, 255, .6);
    line-height: 1.8;
    margin-bottom: 28px;
  }

  .coverage-corridors {
    display: flex;
    flex-direction: column;
    gap: 10px;
  }

  .corridor-item {
    display: flex;
    align-items: center;
    gap: 14px;
    padding: 12px 16px;
    background: rgba(255, 255, 255, .04);
    border: 1px solid rgba(255, 255, 255, .08);
    border-radius: 8px;
  }

  .corridor-item-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    flex-shrink: 0;
  }

  .corridor-item-name {
    font-family: var(--font-display);
    font-size: 14px;
    font-weight: 700;
    text-transform: uppercase;
    color: #FFFFFF;
    flex: 1;
  }

  .corridor-item-cities {
    font-size: 12px;
    color: rgba(255, 255, 255, .4);
  }

  /* Stats grid */
  .coverage-stats {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 2px;
    border-radius: 14px;
    overflow: hidden;
    border: 1px solid rgba(255, 255, 255, .08);
  }

  .cov-stat {
    background: rgba(255, 255, 255, .04);
    padding: 32px 24px;
    text-align: center;
  }

  .cov-stat:hover {
    background: rgba(255, 255, 255, .07);
  }

  .cov-stat-num {
    font-family: var(--font-display);
    font-size: 52px;
    font-weight: 800;
    color: var(--ts-gold);
    line-height: 1;
    margin-bottom: 6px;
  }

  .cov-stat-label {
    font-size: 13px;
    color: rgba(255, 255, 255, .45);
    line-height: 1.4;
  }

  /* ── HORARIOS + CONTACTO GENERAL ── */
  .contact-section {
    padding: 88px 40px;
    background: var(--ts-gray-bg);
  }

  .contact-section-inner {
    max-width: 1240px;
    margin: 0 auto;
  }

  .contact-section-header {
    text-align: center;
    max-width: 480px;
    margin: 0 auto 52px;
  }

  .contact-section-header h2 {
    font-family: var(--font-display);
    font-size: clamp(28px, 3.5vw, 44px);
    font-weight: 800;
    text-transform: uppercase;
    color: #333333;
    line-height: 1.0;
    margin-bottom: 10px;
    margin-top: 12px;
  }

  .contact-section-header h2 span {
    color: var(--ts-gold);
  }

  .contact-section-header p {
    font-size: 16px;
    color: #333333;
  }

  .contact-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
  }

  .contact-card {
    background: #FFFFFF;
    border-radius: 12px;
    padding: 32px 28px;
    border: 1px solid var(--ts-gray-line);
    text-align: center;
    transition: border-color .2s, box-shadow .2s;
  }

  .contact-card:hover {
    border-color: var(--ts-gold);
    box-shadow: 0 8px 24px rgba(245, 166, 35, .08);
  }

  .contact-card-icon {
    width: 60px;
    height: 60px;
    background: #EEF3FA;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 16px;
  }

  .contact-card-icon svg {
    width: 26px;
    height: 26px;
    stroke: var(--ts-blue);
    fill: none;
    stroke-width: 1.7;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  .contact-card h4 {
    font-family: var(--font-display);
    font-size: 18px;
    font-weight: 800;
    text-transform: uppercase;
    color: #333333;
    margin-bottom: 6px;
  }

  .contact-card .contact-main {
    font-family: var(--font-display);
    font-size: 20px;
    font-weight: 800;
    color: var(--ts-blue);
    margin-bottom: 4px;
  }

  .contact-card .contact-sub {
    font-size: 13px;
    color: var(--ts-gray);
    line-height: 1.5;
  }

  .contact-card a {
    color: var(--ts-blue);
    text-decoration: none;
  }

  /* Horarios box */
  .hours-box {
    margin-top: 40px;
    background: #FFFFFF;
    border-radius: 12px;
    padding: 28px 36px;
    border: 1px solid var(--ts-gray-line);
    display: flex;
    align-items: center;
    gap: 48px;
    flex-wrap: wrap;
    justify-content: center;
  }

  .hours-item {
    text-align: center;
  }

  .hours-day {
    font-family: var(--font-display);
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .12em;
    text-transform: uppercase;
    color: var(--ts-gray);
    margin-bottom: 4px;
  }

  .hours-time {
    font-family: var(--font-display);
    font-size: 20px;
    font-weight: 800;
    color: #333333;
  }

  .hours-divider {
    width: 1px;
    height: 40px;
    background: var(--ts-gray-line);
  }

  .hours-note {
    font-size: 13px;
    color: var(--ts-gray);
    text-align: center;
    margin-top: 16px;
  }

  /* ── CTA ── */
  .cta {
    background: var(--ts-blue-deep);
    padding: 80px 40px;
    position: relative;
    overflow: hidden;
  }

  .cta::before {
    content: '';
    position: absolute;
    top: -40%;
    left: -8%;
    width: 55%;
    height: 180%;
    background: radial-gradient(ellipse, rgba(15, 91, 167, .2) 0%, transparent 68%);
  }

  .cta::after {
    content: '';
    position: absolute;
    bottom: -25%;
    right: -4%;
    width: 45%;
    height: 140%;
    background: radial-gradient(ellipse, rgba(245, 166, 35, .08) 0%, transparent 68%);
  }

  .cta-inner {
    max-width: 1240px;
    margin: 0 auto;
    text-align: center;
    position: relative;
    z-index: 2;
  }

  .cta h2 {
    font-family: var(--font-display);
    font-size: clamp(28px, 4vw, 52px);
    font-weight: 800;
    text-transform: uppercase;
    color: #FFFFFF;
    line-height: .95;
    margin-bottom: 14px;
    margin-top: 12px;
  }

  .cta h2 span {
    color: var(--ts-gold);
  }

  .cta p {
    font-size: 17px;
    color: rgba(255, 255, 255, .55);
    max-width: 480px;
    margin: 0 auto 36px;
    line-height: 1.7;
  }

  .cta-btns {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 14px;
    flex-wrap: wrap;
  }

  /* ── RESPONSIVE ── */
  @media(max-width:1024px) {
    .main-branch-card {
      grid-template-columns: 1fr;
    }

    .main-branch-map {
      min-height: 260px;
    }

    .coverage-inner {
      grid-template-columns: 1fr;
      gap: 44px;
    }

    .branches-grid {
      grid-template-columns: repeat(2, 1fr);
    }

    .footer-top {
      grid-template-columns: 1fr 1fr;
    }
  }

  @media(max-width:768px) {
    .hero-content {
      padding: 80px 20px 60px;
    }

    .hero h1 {
      font-size: 40px;
    }

    .hero-stats {
      gap: 24px;
      flex-wrap: wrap;
    }

    .hero-stats>div {
      min-width: 40%;
    }

    .filter-bar {
      padding: 0 16px;
      top: 58px;
    }

    .main-branch {
      padding: 44px 20px 0;
    }

    .main-branch-info {
      padding: 28px 24px;
    }

    .branches {
      padding: 44px 20px 60px;
    }

    .branches-grid {
      grid-template-columns: 1fr 1fr;
    }

    .coverage,
    .contact-section,
    .cta {
      padding: 60px 20px;
    }

    .coverage-stats {
      grid-template-columns: 1fr 1fr;
    }

    .contact-grid {
      grid-template-columns: 1fr;
    }

    .hours-box {
      gap: 24px;
      padding: 22px 20px;
    }

    .hours-divider {
      display: none;
    }
  }

  @media(max-width:480px) {
    .hero h1 {
      font-size: 34px;
    }

    .branches-grid {
      grid-template-columns: 1fr;
    }

    .main-branch-btns {
      flex-direction: column;
    }

    .cta-btns {
      flex-direction: column;
      align-items: stretch;
    }

    .cta-btns a {
      justify-content: center;
    }
  }
</style>

<!-- ══════════════════════════════════════════
     HERO
══════════════════════════════════════════ -->
<section class="hero">
  <div class="hero-bg"></div>
  <div class="hero-overlay"></div>
  <div class="hero-line"></div>
  <div class="hero-map-deco">
    <!-- Colombia silhouette decorativa -->
    <svg viewBox="0 0 200 280" xmlns="http://www.w3.org/2000/svg">
      <path
        d="M95,8 L110,15 L130,12 L148,22 L155,38 L150,55 L162,68 L168,85 L160,100 L165,118 L158,135 L148,148 L152,165 L145,182 L132,195 L118,210 L105,228 L92,242 L80,255 L68,262 L58,252 L50,238 L42,222 L38,205 L32,188 L28,170 L22,152 L18,134 L15,115 L20,98 L28,82 L35,65 L40,48 L48,33 L60,20 L75,10 Z" />
    </svg>
  </div>
  <div class="hero-content">
    <div class="breadcrumb">
      <a href="/">Inicio</a>
      <span class="breadcrumb-sep">›</span>
      <span>Sucursales</span>
    </div>
    <h1>
      8 Sucursales en
      <em>Todo Colombia</em>
    </h1>
    <p class="hero-desc">Presencia propia en los principales corredores logísticos del país. Equipos locales
      especializados para atender su operación de carga masiva con conocimiento de cada región.</p>
    <div class="hero-stats">
      <div>
        <div class="hero-stat-num">8</div>
        <div class="hero-stat-label">Sucursales propias</div>
      </div>
      <div>
        <div class="hero-stat-num">4</div>
        <div class="hero-stat-label">Corredores logísticos</div>
      </div>
      <div>
        <div class="hero-stat-num">32</div>
        <div class="hero-stat-label">Departamentos con cobertura</div>
      </div>
      <div>
        <div class="hero-stat-num">30+</div>
        <div class="hero-stat-label">Años de trayectoria</div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     FILTER BAR
══════════════════════════════════════════ -->
<div class="filter-bar">
  <div class="filter-inner">
    <button class="filter-tab active">Todas las Sucursales <span class="filter-count">8</span></button>
    <button class="filter-tab">Corredor Andino <span class="filter-count">3</span></button>
    <button class="filter-tab">Corredor Pacífico <span class="filter-count">2</span></button>
    <button class="filter-tab">Corredor Caribe <span class="filter-count">2</span></button>
    <button class="filter-tab">Eje Cafetero <span class="filter-count">1</span></button>
  </div>
</div>

<!-- ══════════════════════════════════════════
     SEDE PRINCIPAL — MEDELLÍN
══════════════════════════════════════════ -->
<div class="main-branch">
  <div class="main-branch-inner">
    <div class="main-branch-card">
      <div class="main-branch-info">
        <div class="main-tag">
          <svg viewBox="0 0 24 24">
            <polygon
              points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
          </svg>
          <span>Sede Principal</span>
        </div>
        <h2>Medellín</h2>
        <div class="region">Antioquia · Corredor Andino</div>
        <div class="contact-list">
          <div class="contact-item">
            <div class="contact-icon">
              <svg viewBox="0 0 24 24">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                <circle cx="12" cy="10" r="3" />
              </svg>
            </div>
            <div>
              <div class="contact-label">Dirección</div>
              <div class="contact-val">Calle 64 #56-60, La Candelaria</div>
            </div>
          </div>
          <div class="contact-item">
            <div class="contact-icon">
              <svg viewBox="0 0 24 24">
                <path
                  d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.4 2 2 0 0 1 3.6 1.22h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.77a16 16 0 0 0 6 6z" />
              </svg>
            </div>
            <div>
              <div class="contact-label">PBX Línea Principal</div>
              <div class="contact-val"><a href="tel:+576045273300">PBX (604) 527 3300</a></div>
            </div>
          </div>
          <div class="contact-item">
            <div class="contact-icon">
              <svg viewBox="0 0 24 24">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                <polyline points="22,6 12,13 2,6" />
              </svg>
            </div>
            <div>
              <div class="contact-label">Correo Electrónico</div>
              <div class="contact-val"><a
                  href="mailto:servicioalcliente@transestrella.com">servicioalcliente@transestrella.com</a></div>
            </div>
          </div>
          <div class="contact-item">
            <div class="contact-icon">
              <svg viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="10" />
                <polyline points="12 6 12 12 16 14" />
              </svg>
            </div>
            <div>
              <div class="contact-label">Horario de Atención</div>
              <div class="contact-val">Lun–Vie 8:00am–6:00pm · Sáb 8:00am–1:00pm</div>
            </div>
          </div>
        </div>
        <div class="main-branch-btns">
          <a href="https://waze.com/ul?q=Calle+64+%2356-60+Medellin" target="_blank" class="btn-waze">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="white">
              <circle cx="12" cy="11" r="8" />
              <path fill="#33CCFF" d="M12 3a8 8 0 1 0 0 16A8 8 0 0 0 12 3z" />
              <circle cx="9.5" cy="10.5" r="1.5" fill="#333" />
              <circle cx="14.5" cy="10.5" r="1.5" fill="#333" />
              <path d="M9 14s1 1.5 3 1.5S15 14 15 14" stroke="#333" stroke-width="1.2" fill="none"
                stroke-linecap="round" />
            </svg>
            Abrir en Waze
          </a>
          <a href="https://maps.google.com/?q=Calle+64+%2356-60+Medellin+Colombia" target="_blank" class="btn-gmaps">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="white">
              <path
                d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" />
            </svg>
            Google Maps
          </a>
          <a href="https://wa.me/576045273300" target="_blank" class="btn-primary"
            style="font-size:13px;padding:12px 20px;">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="white">
              <path
                d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413z" />
              <path
                d="M12 0C5.373 0 0 5.373 0 12c0 2.123.554 4.118 1.524 5.847L.057 23.992l6.304-1.654A11.945 11.945 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.8 9.8 0 01-5.012-1.375l-.36-.214-3.733.979 1-3.642-.235-.374A9.791 9.791 0 012.182 12C2.182 6.58 6.58 2.182 12 2.182S21.818 6.58 21.818 12 17.42 21.818 12 21.818z" />
            </svg>
            WhatsApp
          </a>
        </div>
      </div>
      <div class="main-branch-map">
        <!-- En Divi: reemplazar con iframe de Google Maps embebido -->
        <div class="map-placeholder-icon">
          <svg viewBox="0 0 24 24">
            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
            <circle cx="12" cy="10" r="3" />
          </svg>
        </div>
        <div class="map-placeholder-label">Mapa Interactivo</div>
        <div class="map-placeholder-sub">Calle 64 #56-60, La Candelaria, Medellín</div>
        <div class="map-note">Insertar iframe Google Maps · &lt;iframe src="https://maps.google.com/..." /&gt;</div>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════════════════════════════════
     OTRAS SUCURSALES POR CORREDOR
══════════════════════════════════════════ -->
<section class="branches">
  <div class="branches-inner">

    <!-- CORREDOR ANDINO -->
    <div class="corridor">
      <div class="corridor-header">
        <div class="corridor-dot" style="background:#0F5BA7;"></div>
        <div class="corridor-name">Corredor Andino</div>
        <div class="corridor-line"></div>
        <div class="corridor-count">Bogotá · Buga</div>
      </div>
      <div class="branches-grid" style="grid-template-columns:repeat(2,1fr);">

        <div class="branch-card">
          <div class="branch-map-strip strip-andina">
            <span class="branch-region-tag">Bogotá D.C.</span>
            <div class="branch-map-pin pin-andina">
              <svg viewBox="0 0 24 24">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                <circle cx="12" cy="10" r="3" />
              </svg>
            </div>
          </div>
          <div class="branch-card-body">
            <div class="branch-city">Bogotá</div>
            <div class="branch-dept">Cundinamarca · Corredor Andino</div>
            <div class="branch-contacts">
              <div class="branch-contact-row">
                <svg viewBox="0 0 24 24">
                  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                  <circle cx="12" cy="10" r="3" />
                </svg>
                <span>Av. Troncal de Occidente No. 18-76 Of. 301 Torre A</span>
              </div>
              <div class="branch-contact-row">
                <svg viewBox="0 0 24 24">
                  <path
                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.4 2 2 0 0 1 3.6 1.22h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.77a16 16 0 0 0 6 6z" />
                </svg>
                <a href="tel:3128265078">312 826 5078</a>
              </div>
            </div>
            <div class="branch-map-links">
              <a href="https://waze.com/ul?q=Av+Troncal+de+Occidente+18-76+Bogota" target="_blank"
                class="branch-map-link bml-waze">Waze</a>
              <a href="https://maps.google.com/?q=Av+Troncal+de+Occidente+18-76+Bogota" target="_blank"
                class="branch-map-link bml-gmaps">Google Maps</a>
            </div>
          </div>
        </div>

        <div class="branch-card">
          <div class="branch-map-strip strip-andina">
            <span class="branch-region-tag">Valle del Cauca</span>
            <div class="branch-map-pin pin-andina">
              <svg viewBox="0 0 24 24">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                <circle cx="12" cy="10" r="3" />
              </svg>
            </div>
          </div>
          <div class="branch-card-body">
            <div class="branch-city">Buga</div>
            <div class="branch-dept">Valle del Cauca · Corredor Andino</div>
            <div class="branch-contacts">
              <div class="branch-contact-row">
                <svg viewBox="0 0 24 24">
                  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                  <circle cx="12" cy="10" r="3" />
                </svg>
                <span>Cra. 12A N.° 6Sur–94</span>
              </div>
              <div class="branch-contact-row">
                <svg viewBox="0 0 24 24">
                  <path
                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.4 2 2 0 0 1 3.6 1.22h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.77a16 16 0 0 0 6 6z" />
                </svg>
                <a href="tel:3136553232">313 655 3232</a>
              </div>
            </div>
            <div class="branch-map-links">
              <a href="https://waze.com/ul?q=Carrera+12A+6Sur-94+Buga+Colombia" target="_blank"
                class="branch-map-link bml-waze">Waze</a>
              <a href="https://maps.google.com/?q=Cra+12A+6Sur-94+Buga+Colombia" target="_blank"
                class="branch-map-link bml-gmaps">Google Maps</a>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- CORREDOR PACÍFICO -->
    <div class="corridor">
      <div class="corridor-header">
        <div class="corridor-dot" style="background:#0D7377;"></div>
        <div class="corridor-name">Corredor Pacífico</div>
        <div class="corridor-line"></div>
        <div class="corridor-count">Cali · Buenaventura</div>
      </div>
      <div class="branches-grid" style="grid-template-columns:repeat(2,1fr);">

        <div class="branch-card">
          <div class="branch-map-strip strip-pacifico">
            <span class="branch-region-tag">Valle del Cauca</span>
            <div class="branch-map-pin pin-pacifico">
              <svg viewBox="0 0 24 24">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                <circle cx="12" cy="10" r="3" />
              </svg>
            </div>
          </div>
          <div class="branch-card-body">
            <div class="branch-city">Cali</div>
            <div class="branch-dept">Valle del Cauca · Corredor Pacífico</div>
            <div class="branch-contacts">
              <div class="branch-contact-row">
                <svg viewBox="0 0 24 24">
                  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                  <circle cx="12" cy="10" r="3" />
                </svg>
                <span>Bloque A3 Oficina 104, Cencar 1 Piso</span>
              </div>
              <div class="branch-contact-row">
                <svg viewBox="0 0 24 24">
                  <path
                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.4 2 2 0 0 1 3.6 1.22h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.77a16 16 0 0 0 6 6z" />
                </svg>
                <a href="tel:3103695787">310 369 5787</a>
              </div>
            </div>
            <div class="branch-map-links">
              <a href="https://waze.com/ul?q=Cencar+Cali+Colombia" target="_blank"
                class="branch-map-link bml-waze">Waze</a>
              <a href="https://maps.google.com/?q=Cencar+Bloque+A3+Cali+Colombia" target="_blank"
                class="branch-map-link bml-gmaps">Google Maps</a>
            </div>
          </div>
        </div>

        <div class="branch-card">
          <div class="branch-map-strip strip-pacifico">
            <span class="branch-region-tag">Valle del Cauca</span>
            <div class="branch-map-pin pin-pacifico">
              <svg viewBox="0 0 24 24">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                <circle cx="12" cy="10" r="3" />
              </svg>
            </div>
          </div>
          <div class="branch-card-body">
            <div class="branch-city">Buenaventura</div>
            <div class="branch-dept">Valle del Cauca · Puerto Pacífico</div>
            <div class="branch-contacts">
              <div class="branch-contact-row">
                <svg viewBox="0 0 24 24">
                  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                  <circle cx="12" cy="10" r="3" />
                </svg>
                <span>Calle 7B N.° 4–52 Piso 2</span>
              </div>
              <div class="branch-contact-row">
                <svg viewBox="0 0 24 24">
                  <path
                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.4 2 2 0 0 1 3.6 1.22h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.77a16 16 0 0 0 6 6z" />
                </svg>
                <a href="tel:3136597359">313 659 7359</a>
              </div>
            </div>
            <div class="branch-map-links">
              <a href="https://waze.com/ul?q=Calle+7B+4-52+Buenaventura+Colombia" target="_blank"
                class="branch-map-link bml-waze">Waze</a>
              <a href="https://maps.google.com/?q=Calle+7B+4-52+Buenaventura+Colombia" target="_blank"
                class="branch-map-link bml-gmaps">Google Maps</a>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- CORREDOR CARIBE -->
    <div class="corridor">
      <div class="corridor-header">
        <div class="corridor-dot" style="background:#1A237E;"></div>
        <div class="corridor-name">Corredor Caribe</div>
        <div class="corridor-line"></div>
        <div class="corridor-count">Barranquilla · Cartagena</div>
      </div>
      <div class="branches-grid" style="grid-template-columns:repeat(2,1fr);">

        <div class="branch-card">
          <div class="branch-map-strip strip-caribe">
            <span class="branch-region-tag">Atlántico</span>
            <div class="branch-map-pin pin-caribe">
              <svg viewBox="0 0 24 24">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                <circle cx="12" cy="10" r="3" />
              </svg>
            </div>
          </div>
          <div class="branch-card-body">
            <div class="branch-city">Barranquilla</div>
            <div class="branch-dept">Atlántico · Corredor Caribe</div>
            <div class="branch-contacts">
              <div class="branch-contact-row">
                <svg viewBox="0 0 24 24">
                  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                  <circle cx="12" cy="10" r="3" />
                </svg>
                <span>Cra. 28 #38-345 Av. Circunvalar, Eds. El Descanso</span>
              </div>
              <div class="branch-contact-row">
                <svg viewBox="0 0 24 24">
                  <path
                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.4 2 2 0 0 1 3.6 1.22h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.77a16 16 0 0 0 6 6z" />
                </svg>
                <a href="tel:3104427076">310 442 7076</a>
              </div>
            </div>
            <div class="branch-map-links">
              <a href="https://waze.com/ul?q=Carrera+28+38-345+Barranquilla" target="_blank"
                class="branch-map-link bml-waze">Waze</a>
              <a href="https://maps.google.com/?q=Cra+28+38-345+Barranquilla+Colombia" target="_blank"
                class="branch-map-link bml-gmaps">Google Maps</a>
            </div>
          </div>
        </div>

        <div class="branch-card">
          <div class="branch-map-strip strip-caribe">
            <span class="branch-region-tag">Bolívar</span>
            <div class="branch-map-pin pin-caribe">
              <svg viewBox="0 0 24 24">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                <circle cx="12" cy="10" r="3" />
              </svg>
            </div>
          </div>
          <div class="branch-card-body">
            <div class="branch-city">Cartagena</div>
            <div class="branch-dept">Bolívar · Puerto Caribe</div>
            <div class="branch-contacts">
              <div class="branch-contact-row">
                <svg viewBox="0 0 24 24">
                  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                  <circle cx="12" cy="10" r="3" />
                </svg>
                <span>Diagonal 21 N.° 45A–11, Avenida El Bosque</span>
              </div>
              <div class="branch-contact-row">
                <svg viewBox="0 0 24 24">
                  <path
                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.4 2 2 0 0 1 3.6 1.22h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.77a16 16 0 0 0 6 6z" />
                </svg>
                <a href="tel:3147728740">314 772 8740</a>
              </div>
            </div>
            <div class="branch-map-links">
              <a href="https://waze.com/ul?q=Diagonal+21+45A-11+Cartagena" target="_blank"
                class="branch-map-link bml-waze">Waze</a>
              <a href="https://maps.google.com/?q=Diagonal+21+45A-11+Cartagena+Colombia" target="_blank"
                class="branch-map-link bml-gmaps">Google Maps</a>
            </div>
          </div>
        </div>

      </div>
    </div>

    <!-- EJE CAFETERO -->
    <div class="corridor">
      <div class="corridor-header">
        <div class="corridor-dot" style="background:#795548;"></div>
        <div class="corridor-name">Eje Cafetero</div>
        <div class="corridor-line"></div>
        <div class="corridor-count">Manizales</div>
      </div>
      <div class="branches-grid" style="grid-template-columns:repeat(3,1fr);">

        <div class="branch-card">
          <div class="branch-map-strip strip-eje">
            <span class="branch-region-tag">Caldas</span>
            <div class="branch-map-pin pin-eje">
              <svg viewBox="0 0 24 24">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                <circle cx="12" cy="10" r="3" />
              </svg>
            </div>
          </div>
          <div class="branch-card-body">
            <div class="branch-city">Manizales</div>
            <div class="branch-dept">Caldas · Eje Cafetero</div>
            <div class="branch-contacts">
              <div class="branch-contact-row">
                <svg viewBox="0 0 24 24">
                  <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                  <circle cx="12" cy="10" r="3" />
                </svg>
                <span>Calle 110 N.° 34A–75</span>
              </div>
              <div class="branch-contact-row">
                <svg viewBox="0 0 24 24">
                  <path
                    d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.4 2 2 0 0 1 3.6 1.22h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.77a16 16 0 0 0 6 6z" />
                </svg>
                <a href="tel:3103695787">310 369 5787</a>
              </div>
            </div>
            <div class="branch-map-links">
              <a href="https://waze.com/ul?q=Calle+110+34A-75+Manizales+Colombia" target="_blank"
                class="branch-map-link bml-waze">Waze</a>
              <a href="https://maps.google.com/?q=Calle+110+34A-75+Manizales+Colombia" target="_blank"
                class="branch-map-link bml-gmaps">Google Maps</a>
            </div>
          </div>
        </div>

        <!-- Spacer visual -->
        <div
          style="background:var(--ts-gray-bg);border-radius:12px;border:1px dashed var(--ts-gray-line);display:flex;align-items:center;justify-content:center;padding:32px;text-align:center;grid-column:span 2;">
          <div>
            <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#C8D0DC" stroke-width="1.5"
              stroke-linecap="round" style="display:block;margin:0 auto 10px;">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg>
            <p
              style="font-family:'Barlow Condensed',sans-serif;font-size:13px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:#C8D0DC;">
              Cobertura en todo el Eje Cafetero</p>
            <p style="font-size:12px;color:#C8D0DC;margin-top:4px;">Risaralda · Quindío · norte del Valle</p>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>

<!-- ══════════════════════════════════════════
     COBERTURA NACIONAL
══════════════════════════════════════════ -->
<section class="coverage">
  <div class="coverage-inner">
    <div class="coverage-text">
      <div class="eyebrow">Red logística nacional</div>
      <h2>Cobertura en los <span>32 Departamentos</span></h2>
      <p>Nuestras 8 sucursales están estratégicamente ubicadas en los nodos logísticos de mayor importancia del país, lo
        que nos permite alcanzar cualquier punto de Colombia con tiempos de tránsito competitivos y atención local
        especializada.</p>
      <div class="coverage-corridors">
        <div class="corridor-item">
          <div class="corridor-item-dot" style="background:#0F5BA7;"></div>
          <div class="corridor-item-name">Corredor Andino</div>
          <div class="corridor-item-cities">Medellín · Bogotá · Buga</div>
        </div>
        <div class="corridor-item">
          <div class="corridor-item-dot" style="background:#0D7377;"></div>
          <div class="corridor-item-name">Corredor Pacífico</div>
          <div class="corridor-item-cities">Cali · Buenaventura</div>
        </div>
        <div class="corridor-item">
          <div class="corridor-item-dot" style="background:#1A237E;"></div>
          <div class="corridor-item-name">Corredor Caribe</div>
          <div class="corridor-item-cities">Barranquilla · Cartagena</div>
        </div>
        <div class="corridor-item">
          <div class="corridor-item-dot" style="background:#795548;"></div>
          <div class="corridor-item-name">Eje Cafetero</div>
          <div class="corridor-item-cities">Manizales · Risaralda · Quindío</div>
        </div>
      </div>
    </div>
    <div class="coverage-stats">
      <div class="cov-stat">
        <div class="cov-stat-num">8</div>
        <div class="cov-stat-label">Sucursales propias con equipo local especializado</div>
      </div>
      <div class="cov-stat">
        <div class="cov-stat-num">32</div>
        <div class="cov-stat-label">Departamentos con cobertura de transporte de carga</div>
      </div>
      <div class="cov-stat">
        <div class="cov-stat-num">4</div>
        <div class="cov-stat-label">Corredores logísticos estratégicos cubiertos</div>
      </div>
      <div class="cov-stat">
        <div class="cov-stat-num">24/7</div>
        <div class="cov-stat-label">Monitoreo GPS en toda la red de operaciones</div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════════════════════
     CONTACTO GENERAL + HORARIOS
══════════════════════════════════════════ -->
<section class="contact-section">
  <div class="contact-section-inner">
    <div class="contact-section-header">
      <div class="eyebrow center">Contáctenos</div>
      <h2>Canales de <span>Atención Nacional</span></h2>
      <p>Para cotizaciones y consultas puede comunicarse por cualquiera de estos canales o directamente con la sucursal
        más cercana.</p>
    </div>
    <div class="contact-grid">
      <div class="contact-card">
        <div class="contact-card-icon">
          <svg viewBox="0 0 24 24">
            <path
              d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.4 2 2 0 0 1 3.6 1.22h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.77a16 16 0 0 0 6 6l.86-.86a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7a2 2 0 0 1 1.72 2.03z" />
          </svg>
        </div>
        <h4>Línea Nacional</h4>
        <div class="contact-main"><a href="tel:+576045273300">+57 604 527 3300</a></div>
        <div class="contact-sub">PBX Sede Principal Medellín<br>Atención en horario de oficina</div>
      </div>
      <div class="contact-card">
        <div class="contact-card-icon">
          <svg viewBox="0 0 24 24">
            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
            <polyline points="22,6 12,13 2,6" />
          </svg>
        </div>
        <h4>Correo Electrónico</h4>
        <div class="contact-main" style="font-size:15px;"><a
            href="mailto:servicioalcliente@transestrella.com">servicioalcliente@<br>transestrella.com</a></div>
        <div class="contact-sub">Respuesta en menos de<br>24 horas hábiles</div>
      </div>
      <div class="contact-card" style="background:rgba(37,211,102,.04);border-color:rgba(37,211,102,.2);">
        <div class="contact-card-icon" style="background:rgba(37,211,102,.1);">
          <svg viewBox="0 0 24 24" style="stroke:#25D366;">
            <path
              d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413z" />
            <path
              d="M12 0C5.373 0 0 5.373 0 12c0 2.123.554 4.118 1.524 5.847L.057 23.992l6.304-1.654A11.945 11.945 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 21.818a9.8 9.8 0 01-5.012-1.375l-.36-.214-3.733.979 1-3.642-.235-.374A9.791 9.791 0 012.182 12C2.182 6.58 6.58 2.182 12 2.182S21.818 6.58 21.818 12 17.42 21.818 12 21.818z" />
          </svg>
        </div>
        <h4>WhatsApp</h4>
        <div class="contact-main" style="color:#25D366;"><a href="https://wa.me/576045273300" target="_blank"
            style="color:#25D366;">+57 604 527 3300</a></div>
        <div class="contact-sub">Respuesta inmediata<br>en días y horas hábiles</div>
      </div>
    </div>
    <div class="hours-box">
      <div class="hours-item">
        <div class="hours-day">Lunes a Viernes</div>
        <div class="hours-time">8:00 am — 6:00 pm</div>
      </div>
      <div class="hours-divider"></div>
      <div class="hours-item">
        <div class="hours-day">Sábados</div>
        <div class="hours-time">8:00 am — 1:00 pm</div>
      </div>
      <div class="hours-divider"></div>
      <div class="hours-item">
        <div class="hours-day">Domingos y Festivos</div>
        <div class="hours-time">Cerrado</div>
      </div>
      <div class="hours-divider"></div>
      <div class="hours-item">
        <div class="hours-day">Seguimiento GPS</div>
        <div class="hours-time">24 / 7</div>
      </div>
    </div>
    <p class="hours-note">* El seguimiento vehicular GPS opera las 24 horas los 7 días de la semana. La atención
      comercial y de servicio al cliente se presta en horario de oficina.</p>
  </div>
</section>

<!-- ══════════════════════════════════════════
     CTA FINAL
══════════════════════════════════════════ -->
<section class="cta">
  <div class="cta-inner">
    <div class="eyebrow center" style="margin-bottom:12px;">Empiece hoy</div>
    <h2>¿Listo para Mover su <span>Carga con Nosotros?</span></h2>
    <p>Contáctenos desde la sucursal más cercana o solicite una cotización en línea. Le respondemos en menos de 24 horas
      hábiles.</p>
    <div class="cta-btns">
      <a href="/contactanos/" class="btn-primary">Solicitar Cotización →</a>
      <a href="/servicios/" class="btn-outline-white">Ver Nuestros Servicios</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>