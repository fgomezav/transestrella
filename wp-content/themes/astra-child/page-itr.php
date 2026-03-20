<?php
/**
 * Template Name: ITR
 */

get_header(); ?>

<style>
  /* CSS específico de ITR */
  /* ── HERO ── */
  .hero {
    position: relative;
    min-height: 92vh;
    display: flex;
    align-items: center;
    background: #061E3D;
    overflow: hidden;
  }

  .hero-bg {
    position: absolute;
    inset: 0;
    background-image: url('https://transestrella.com/wp-content/uploads/2025/08/transporte-de-contenedores.jpg');
    background-size: cover;
    background-position: center;
    opacity: .2;
  }

  .hero-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(108deg, rgba(6, 30, 61, .98) 0%, rgba(8, 50, 102, .90) 44%, rgba(13, 115, 119, .2) 100%);
  }

  /* Teal accent — mar/puertos */
  .hero-accent {
    position: absolute;
    top: 0;
    right: 0;
    width: 3px;
    height: 100%;
    background: linear-gradient(to bottom, transparent, rgba(13, 115, 119, .5), transparent);
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

  .hero-content {
    position: relative;
    z-index: 5;
    max-width: 1240px;
    margin: 0 auto;
    padding: 120px 40px 96px;
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

  /* ITR badge */
  .itr-badge {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: rgba(13, 115, 119, .15);
    border: 1px solid rgba(13, 115, 119, .4);
    border-radius: 6px;
    padding: 8px 18px;
    margin-bottom: 20px;
  }

  .itr-badge svg {
    width: 16px;
    height: 16px;
    stroke: #4ECDC4;
    fill: none;
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  .itr-badge span {
    font-family: var(--font-display);
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .12em;
    text-transform: uppercase;
    color: #4ECDC4;
  }

  .hero h1 {
    font-family: var(--font-display);
    font-size: clamp(44px, 6vw, 82px);
    font-weight: 800;
    line-height: .92;
    text-transform: uppercase;
    color: #FFFFFF;
    letter-spacing: .01em;
    margin-bottom: 22px;
    max-width: 780px;
  }

  .hero h1 em {
    color: var(--ts-gold);
    font-style: normal;
    display: block;
  }

  .hero-desc {
    font-size: 17px;
    line-height: 1.78;
    color: rgba(255, 255, 255, .65);
    max-width: 580px;
    margin-bottom: 38px;
  }

  .hero-btns {
    display: flex;
    align-items: center;
    gap: 14px;
    flex-wrap: wrap;
    margin-bottom: 60px;
  }

  .hero-pills {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    padding-top: 44px;
    border-top: 1px solid rgba(255, 255, 255, .08);
  }

  .hero-pill {
    display: flex;
    align-items: center;
    gap: 8px;
    background: rgba(255, 255, 255, .06);
    border: 1px solid rgba(255, 255, 255, .1);
    border-radius: 100px;
    padding: 7px 16px;
  }

  .hero-pill svg {
    width: 14px;
    height: 14px;
    stroke: var(--ts-gold);
    fill: none;
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
    flex-shrink: 0;
  }

  .hero-pill span {
    font-family: var(--font-display);
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .08em;
    text-transform: uppercase;
    color: rgba(255, 255, 255, .72);
  }

  /* ── QUÉ ES ITR ── */
  .what {
    padding: 88px 40px;
    background: #FFFFFF;
  }

  .what-inner {
    max-width: 1240px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: start;
  }

  .what-text .eyebrow {
    margin-bottom: 16px;
  }

  .what-text h2 {
    font-family: var(--font-display);
    font-size: clamp(28px, 3.2vw, 42px);
    font-weight: 800;
    text-transform: uppercase;
    color: #333333;
    line-height: 1.0;
    margin-bottom: 18px;
  }

  .what-text h2 span {
    color: var(--ts-gold);
  }

  .what-text p {
    font-size: 15px;
    color: #333333;
    line-height: 1.8;
    margin-bottom: 14px;
  }

  .what-text p:last-child {
    margin-bottom: 0;
  }

  .what-visual {
    display: flex;
    flex-direction: column;
    gap: 16px;
  }

  .what-img {
    border-radius: 12px;
    overflow: hidden;
    border: 1px solid var(--ts-gray-line);
  }

  .what-img img {
    width: 100%;
    display: block;
    height: 240px;
    object-fit: cover;
  }

  /* ITR definition box */
  .itr-def-box {
    background: var(--ts-blue-deep);
    border-radius: 12px;
    padding: 24px 28px;
  }

  .itr-def-title {
    font-family: var(--font-display);
    font-size: 13px;
    font-weight: 700;
    letter-spacing: .14em;
    text-transform: uppercase;
    color: var(--ts-gold);
    margin-bottom: 12px;
  }

  .itr-def-text {
    font-size: 14px;
    color: rgba(255, 255, 255, .68);
    line-height: 1.7;
  }

  .itr-def-text strong {
    color: rgba(255, 255, 255, .9);
  }

  .itr-acronym {
    display: flex;
    gap: 6px;
    margin-top: 16px;
    flex-wrap: wrap;
  }

  .itr-letter {
    background: rgba(245, 166, 35, .12);
    border: 1px solid rgba(245, 166, 35, .22);
    border-radius: 6px;
    padding: 6px 12px;
    text-align: center;
  }

  .itr-letter-char {
    font-family: var(--font-display);
    font-size: 22px;
    font-weight: 800;
    color: var(--ts-gold);
    line-height: 1;
  }

  .itr-letter-word {
    font-size: 11px;
    color: rgba(255, 255, 255, .5);
    text-transform: uppercase;
    letter-spacing: .06em;
    margin-top: 2px;
  }

  /* ── PUERTOS PRINCIPALES ── */
  .ports {
    padding: 88px 40px;
    background: var(--ts-gray-bg);
  }

  .ports-inner {
    max-width: 1240px;
    margin: 0 auto;
  }

  .ports-header {
    text-align: center;
    max-width: 540px;
    margin: 0 auto 52px;
  }

  .ports-header h2 {
    font-family: var(--font-display);
    font-size: clamp(28px, 3.5vw, 44px);
    font-weight: 800;
    text-transform: uppercase;
    color: #333333;
    line-height: 1.0;
    margin-bottom: 12px;
    margin-top: 12px;
  }

  .ports-header h2 span {
    color: var(--ts-gold);
  }

  .ports-header p {
    font-size: 16px;
    color: #333333;
  }

  .ports-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 24px;
    margin-bottom: 32px;
  }

  .port-card {
    background: #FFFFFF;
    border-radius: 14px;
    overflow: hidden;
    border: 1px solid var(--ts-gray-line);
    transition: box-shadow .22s;
  }

  .port-card:hover {
    box-shadow: 0 16px 36px rgba(8, 50, 102, .1);
  }

  .port-card-img {
    height: 220px;
    overflow: hidden;
    position: relative;
  }

  .port-card-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform .4s;
  }

  .port-card:hover .port-card-img img {
    transform: scale(1.05);
  }

  .port-card-img-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(to top, rgba(8, 50, 102, .7) 0%, transparent 55%);
  }

  .port-card-img-label {
    position: absolute;
    bottom: 16px;
    left: 16px;
    right: 16px;
    z-index: 2;
  }

  .port-card-img-label h3 {
    font-family: var(--font-display);
    font-size: 26px;
    font-weight: 800;
    text-transform: uppercase;
    color: #FFFFFF;
    line-height: 1;
  }

  .port-card-img-label span {
    font-family: var(--font-display);
    font-size: 12px;
    font-weight: 600;
    letter-spacing: .12em;
    text-transform: uppercase;
    color: rgba(255, 255, 255, .6);
  }

  .port-card-body {
    padding: 24px 26px;
  }

  .port-card-body p {
    font-size: 14px;
    color: #333333;
    line-height: 1.7;
    margin-bottom: 16px;
  }

  .port-facts {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
  }

  .port-fact {
    display: flex;
    align-items: center;
    gap: 6px;
    font-family: var(--font-display);
    font-size: 11px;
    font-weight: 700;
    letter-spacing: .06em;
    text-transform: uppercase;
    color: var(--ts-blue);
    background: #EEF3FA;
    border-radius: 4px;
    padding: 5px 10px;
  }

  .port-fact svg {
    width: 11px;
    height: 11px;
    stroke: var(--ts-blue);
    fill: none;
    stroke-width: 2.2;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  /* Other ports strip */
  .ports-also {
    background: #FFFFFF;
    border-radius: 12px;
    padding: 20px 28px;
    border: 1px solid var(--ts-gray-line);
    display: flex;
    align-items: center;
    gap: 16px;
    flex-wrap: wrap;
  }

  .ports-also-label {
    font-family: var(--font-display);
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .14em;
    text-transform: uppercase;
    color: var(--ts-gray);
    white-space: nowrap;
  }

  .ports-also-divider {
    width: 1px;
    height: 24px;
    background: var(--ts-gray-line);
    flex-shrink: 0;
  }

  .ports-also-list {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
  }

  .port-chip {
    font-family: var(--font-display);
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .06em;
    text-transform: uppercase;
    color: #333333;
    background: var(--ts-gray-bg);
    border-radius: 4px;
    padding: 5px 12px;
    border: 1px solid var(--ts-gray-line);
  }

  /* ── FLUJO OPERATIVO ── */
  .flow {
    padding: 88px 40px;
    background: var(--ts-blue-deep);
    position: relative;
    overflow: hidden;
  }

  .flow::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image: linear-gradient(rgba(255, 255, 255, .02) 1px, transparent 1px), linear-gradient(90deg, rgba(255, 255, 255, .02) 1px, transparent 1px);
    background-size: 52px 52px;
  }

  .flow-inner {
    max-width: 1240px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
  }

  .flow-header {
    text-align: center;
    max-width: 560px;
    margin: 0 auto 56px;
  }

  .flow-header h2 {
    font-family: var(--font-display);
    font-size: clamp(28px, 3.5vw, 44px);
    font-weight: 800;
    text-transform: uppercase;
    color: #FFFFFF;
    line-height: 1.0;
    margin-bottom: 12px;
    margin-top: 12px;
  }

  .flow-header h2 span {
    color: var(--ts-gold);
  }

  .flow-header p {
    font-size: 16px;
    color: rgba(255, 255, 255, .5);
  }

  /* Timeline horizontal */
  .flow-timeline {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 0;
    position: relative;
  }

  .flow-timeline::before {
    content: '';
    position: absolute;
    top: 28px;
    left: 10%;
    right: 10%;
    height: 2px;
    background: linear-gradient(to right, rgba(245, 166, 35, .15), rgba(245, 166, 35, .5), rgba(245, 166, 35, .15));
    z-index: 0;
  }

  .flow-step {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: 0 12px;
    position: relative;
    z-index: 1;
  }

  .flow-step-dot {
    width: 56px;
    height: 56px;
    background: rgba(245, 166, 35, .1);
    border: 2px solid rgba(245, 166, 35, .35);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 16px;
    transition: background .2s, border-color .2s;
  }

  .flow-step:hover .flow-step-dot {
    background: rgba(245, 166, 35, .2);
    border-color: var(--ts-gold);
  }

  .flow-step-dot svg {
    width: 22px;
    height: 22px;
    stroke: var(--ts-gold);
    fill: none;
    stroke-width: 1.8;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  .flow-step-num {
    font-family: var(--font-display);
    font-size: 10px;
    font-weight: 700;
    letter-spacing: .14em;
    color: rgba(255, 255, 255, .3);
    text-transform: uppercase;
    margin-bottom: 6px;
  }

  .flow-step-title {
    font-family: var(--font-display);
    font-size: 14px;
    font-weight: 800;
    text-transform: uppercase;
    color: #FFFFFF;
    line-height: 1.1;
    margin-bottom: 6px;
  }

  .flow-step-desc {
    font-size: 12px;
    color: rgba(255, 255, 255, .45);
    line-height: 1.55;
  }



  /* ── BASC — GARANTÍA EN COMERCIO EXTERIOR ── */
  .basc {
    padding: 72px 40px;
    background: #F0F5FB;
    border-top: 1px solid #D6E4F7;
    border-bottom: 1px solid #D6E4F7;
  }

  .basc-inner {
    max-width: 1240px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: auto 1fr;
    gap: 48px;
    align-items: center;
  }

  .basc-icon-col {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 12px;
  }

  .basc-shield {
    width: 100px;
    height: 100px;
    background: var(--ts-blue-deep);
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .basc-shield svg {
    width: 48px;
    height: 48px;
    stroke: var(--ts-gold);
    fill: none;
    stroke-width: 1.5;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  .basc-cert-label {
    font-family: var(--font-display);
    font-size: 11px;
    font-weight: 700;
    letter-spacing: .1em;
    text-transform: uppercase;
    color: var(--ts-blue);
    text-align: center;
  }

  .basc-body h3 {
    font-family: var(--font-display);
    font-size: clamp(22px, 2.5vw, 32px);
    font-weight: 800;
    text-transform: uppercase;
    color: #333333;
    margin-bottom: 10px;
    line-height: 1.0;
  }

  .basc-body h3 span {
    color: var(--ts-blue);
  }

  .basc-body p {
    font-size: 15px;
    color: #333333;
    line-height: 1.75;
    margin-bottom: 12px;
    max-width: 800px;
  }

  .basc-body p:last-child {
    margin-bottom: 0;
  }

  .basc-pills {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-top: 14px;
  }

  .basc-pill {
    font-family: var(--font-display);
    font-size: 11px;
    font-weight: 700;
    letter-spacing: .07em;
    text-transform: uppercase;
    color: var(--ts-blue);
    background: #FFFFFF;
    border: 1px solid #D6E4F7;
    border-radius: 4px;
    padding: 5px 12px;
  }

  /* ── TIPOS DE CARGA ITR ── */
  .cargo {
    padding: 88px 40px;
    background: var(--ts-gray-bg);
  }

  .cargo-inner {
    max-width: 1240px;
    margin: 0 auto;
  }

  .cargo-header {
    display: grid;
    grid-template-columns: 1fr auto;
    align-items: end;
    gap: 20px;
    margin-bottom: 48px;
  }

  .cargo-header-left h2 {
    font-family: var(--font-display);
    font-size: clamp(28px, 3.5vw, 44px);
    font-weight: 800;
    text-transform: uppercase;
    color: #333333;
    line-height: 1.0;
    margin-bottom: 10px;
    margin-top: 12px;
  }

  .cargo-header-left h2 span {
    color: var(--ts-gold);
  }

  .cargo-header-left p {
    font-size: 16px;
    color: #333333;
    max-width: 400px;
  }

  .cargo-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 2px;
    border-radius: 14px;
    overflow: hidden;
    border: 1px solid var(--ts-gray-line);
  }

  .cargo-card {
    background: #FFFFFF;
    padding: 26px 22px;
    transition: background .2s;
  }

  .cargo-card:hover {
    background: #EEF3FA;
  }

  .cargo-icon {
    width: 44px;
    height: 44px;
    background: var(--ts-gray-bg);
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 14px;
    border: 1px solid var(--ts-gray-line);
  }

  .cargo-icon svg {
    width: 21px;
    height: 21px;
    stroke: var(--ts-blue);
    fill: none;
    stroke-width: 1.8;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  .cargo-card h4 {
    font-family: var(--font-display);
    font-size: 16px;
    font-weight: 800;
    text-transform: uppercase;
    color: #333333;
    margin-bottom: 6px;
    line-height: 1.1;
  }

  .cargo-card p {
    font-size: 12px;
    color: #333333;
    line-height: 1.6;
  }

  /* ── POR QUÉ ESTRELLA PARA ITR ── */
  .why {
    padding: 88px 40px;
    background: #FFFFFF;
  }

  .why-inner {
    max-width: 1240px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: center;
  }

  .why-text .eyebrow {
    margin-bottom: 16px;
  }

  .why-text h2 {
    font-family: var(--font-display);
    font-size: clamp(28px, 3.2vw, 42px);
    font-weight: 800;
    text-transform: uppercase;
    color: #333333;
    line-height: 1.0;
    margin-bottom: 18px;
  }

  .why-text h2 span {
    color: var(--ts-gold);
  }

  .why-text p {
    font-size: 15px;
    color: #333333;
    line-height: 1.8;
    margin-bottom: 28px;
  }

  .why-list {
    display: flex;
    flex-direction: column;
    gap: 14px;
  }

  .why-item {
    display: flex;
    align-items: flex-start;
    gap: 14px;
    padding: 16px 18px;
    background: var(--ts-gray-bg);
    border-radius: 9px;
    border: 1px solid var(--ts-gray-line);
    transition: border-color .2s;
  }

  .why-item:hover {
    border-color: var(--ts-gold);
  }

  .why-item-icon {
    width: 40px;
    height: 40px;
    background: #FFFFFF;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    border: 1px solid var(--ts-gray-line);
  }

  .why-item-icon svg {
    width: 18px;
    height: 18px;
    stroke: var(--ts-blue);
    fill: none;
    stroke-width: 1.8;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  .why-item-body h5 {
    font-family: var(--font-display);
    font-size: 15px;
    font-weight: 800;
    text-transform: uppercase;
    color: #333333;
    margin-bottom: 3px;
  }

  .why-item-body p {
    font-size: 13px;
    color: #333333;
    line-height: 1.55;
  }

  /* Metrics side */
  .why-metrics {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
  }

  .why-metric {
    background: var(--ts-blue-deep);
    border-radius: 12px;
    padding: 28px 22px;
    text-align: center;
  }

  .why-metric-num {
    font-family: var(--font-display);
    font-size: 40px;
    font-weight: 800;
    color: var(--ts-gold);
    line-height: 1;
    margin-bottom: 6px;
  }

  .why-metric-label {
    font-size: 12px;
    color: rgba(255, 255, 255, .45);
    line-height: 1.4;
  }

  .why-img {
    border-radius: 12px;
    overflow: hidden;
    border: 1px solid var(--ts-gray-line);
  }

  .why-img img {
    width: 100%;
    display: block;
    height: 180px;
    object-fit: cover;
  }

  /* ── SECTORES ── */
  .sectors {
    padding: 72px 40px;
    background: var(--ts-gray-bg);
  }

  .sectors-inner {
    max-width: 1240px;
    margin: 0 auto;
  }

  .sectors-header {
    text-align: center;
    max-width: 480px;
    margin: 0 auto 40px;
  }

  .sectors-header h3 {
    font-family: var(--font-display);
    font-size: clamp(22px, 2.8vw, 34px);
    font-weight: 800;
    text-transform: uppercase;
    color: #333333;
    margin-top: 10px;
  }

  .sectors-header p {
    font-size: 15px;
    color: var(--ts-gray);
    margin-top: 6px;
  }

  .sectors-grid {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 12px;
  }

  .sector-chip {
    background: #FFFFFF;
    border: 1px solid var(--ts-gray-line);
    border-radius: 9px;
    padding: 16px 14px;
    text-align: center;
    transition: border-color .2s;
  }

  .sector-chip:hover {
    border-color: var(--ts-blue);
  }

  .sector-chip svg {
    width: 22px;
    height: 22px;
    stroke: var(--ts-blue);
    fill: none;
    stroke-width: 1.7;
    stroke-linecap: round;
    stroke-linejoin: round;
    margin: 0 auto 8px;
    display: block;
  }

  .sector-chip span {
    font-family: var(--font-display);
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    color: #333333;
    display: block;
    line-height: 1.2;
  }

  /* ── OTROS SERVICIOS ── */
  .other-services {
    padding: 72px 40px;
    background: #FFFFFF;
    border-top: 1px solid var(--ts-gray-line);
  }

  .other-services-inner {
    max-width: 1240px;
    margin: 0 auto;
  }

  .other-header {
    text-align: center;
    margin-bottom: 36px;
  }

  .other-header h3 {
    font-family: var(--font-display);
    font-size: clamp(22px, 2.5vw, 32px);
    font-weight: 800;
    text-transform: uppercase;
    color: #333333;
    margin-top: 10px;
  }

  .other-header p {
    font-size: 15px;
    color: var(--ts-gray);
    margin-top: 6px;
  }

  .other-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 16px;
  }

  .other-card {
    border: 1px solid var(--ts-gray-line);
    border-radius: 10px;
    overflow: hidden;
    transition: border-color .2s, box-shadow .2s;
    text-decoration: none;
    background: #FFFFFF;
  }

  .other-card:hover {
    border-color: var(--ts-gold);
    box-shadow: 0 6px 20px rgba(245, 166, 35, .08);
  }

  .other-card-img {
    height: 140px;
    overflow: hidden;
  }

  .other-card-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    transition: transform .3s;
  }

  .other-card:hover .other-card-img img {
    transform: scale(1.05);
  }

  .other-card-body {
    padding: 16px 18px;
  }

  .other-tag {
    font-family: var(--font-display);
    font-size: 10px;
    font-weight: 700;
    letter-spacing: .1em;
    text-transform: uppercase;
    color: var(--ts-gold);
    margin-bottom: 5px;
  }

  .other-card-body h4 {
    font-family: var(--font-display);
    font-size: 17px;
    font-weight: 800;
    text-transform: uppercase;
    color: #333333;
    line-height: 1.1;
    margin-bottom: 5px;
  }

  .other-card-body p {
    font-size: 13px;
    color: var(--ts-gray);
  }

  .other-link {
    display: flex;
    align-items: center;
    gap: 5px;
    font-family: var(--font-display);
    font-size: 12px;
    font-weight: 700;
    letter-spacing: .06em;
    text-transform: uppercase;
    color: var(--ts-blue);
    margin-top: 10px;
  }

  /* ── CTA ── */
  .cta {
    background: var(--ts-blue-deep);
    padding: 88px 40px;
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
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 72px;
    align-items: start;
    position: relative;
    z-index: 2;
  }

  .cta-text h2 {
    font-family: var(--font-display);
    font-size: clamp(28px, 3.5vw, 46px);
    font-weight: 800;
    text-transform: uppercase;
    color: #FFFFFF;
    line-height: 1.0;
    margin-bottom: 14px;
    margin-top: 12px;
  }

  .cta-text h2 span {
    color: var(--ts-gold);
  }

  .cta-text p {
    font-size: 16px;
    color: rgba(255, 255, 255, .58);
    line-height: 1.75;
    margin-bottom: 32px;
  }

  .cta-contacts {
    display: flex;
    flex-direction: column;
    gap: 14px;
  }

  .cta-contact {
    display: flex;
    align-items: center;
    gap: 13px;
  }

  .cta-c-icon {
    width: 40px;
    height: 40px;
    background: rgba(255, 255, 255, .06);
    border: 1px solid rgba(255, 255, 255, .1);
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }

  .cta-c-icon svg {
    width: 18px;
    height: 18px;
    stroke: var(--ts-gold);
    fill: none;
    stroke-width: 1.8;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  .cta-c-label {
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: .1em;
    color: var(--ts-gray);
    margin-bottom: 1px;
  }

  .cta-c-val {
    font-family: var(--font-display);
    font-size: 17px;
    font-weight: 700;
    color: #FFFFFF;
  }

  .form-box {
    background: rgba(255, 255, 255, .05);
    border: 1px solid rgba(255, 255, 255, .1);
    border-radius: 14px;
    padding: 32px;
  }

  .form-box h3 {
    font-family: var(--font-display);
    font-size: 21px;
    font-weight: 800;
    text-transform: uppercase;
    color: #FFFFFF;
    margin-bottom: 6px;
  }

  .form-box-sub {
    font-size: 14px;
    color: rgba(255, 255, 255, .45);
    margin-bottom: 20px;
    line-height: 1.55;
  }

  .form-notice {
    background: rgba(245, 166, 35, .09);
    border: 1px solid rgba(245, 166, 35, .22);
    border-radius: 7px;
    padding: 12px 14px;
    margin-bottom: 20px;
    display: flex;
    align-items: flex-start;
    gap: 10px;
  }

  .form-notice-icon {
    width: 20px;
    height: 20px;
    stroke: var(--ts-gold);
    fill: none;
    stroke-width: 1.8;
    stroke-linecap: round;
    stroke-linejoin: round;
    flex-shrink: 0;
    margin-top: 1px;
  }

  .form-notice-title {
    font-family: var(--font-display);
    font-size: 12px;
    font-weight: 700;
    color: var(--ts-gold);
    text-transform: uppercase;
    letter-spacing: .06em;
    margin-bottom: 2px;
  }

  .form-notice-text {
    font-size: 12px;
    color: rgba(255, 255, 255, .48);
    line-height: 1.5;
  }

  .forminator-placeholder {
    background: rgba(255, 255, 255, .04);
    border: 2px dashed rgba(255, 255, 255, .15);
    border-radius: 10px;
    padding: 36px 24px;
    text-align: center;
  }

  .forminator-placeholder svg {
    width: 36px;
    height: 36px;
    stroke: rgba(255, 255, 255, .25);
    fill: none;
    stroke-width: 1.5;
    stroke-linecap: round;
    stroke-linejoin: round;
    margin: 0 auto 12px;
    display: block;
  }

  .forminator-placeholder p {
    font-family: var(--font-display);
    font-size: 15px;
    font-weight: 600;
    letter-spacing: .05em;
    text-transform: uppercase;
    color: rgba(255, 255, 255, .3);
  }

  .forminator-placeholder span {
    font-size: 13px;
    color: rgba(255, 255, 255, .2);
    display: block;
    margin-top: 4px;
  }

  .form-wa {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    margin-top: 14px;
    padding: 12px;
    background: rgba(37, 211, 102, .09);
    border: 1px solid rgba(37, 211, 102, .2);
    border-radius: 8px;
    text-decoration: none;
  }

  .form-wa svg {
    width: 18px;
    height: 18px;
    fill: #25D366;
    flex-shrink: 0;
  }

  .form-wa-text {
    font-family: var(--font-display);
    font-size: 14px;
    font-weight: 700;
    color: #25D366;
    letter-spacing: .04em;
  }
</style>

<div class="page-itr-wrapper">
  <!-- ══════════════════════════════════════════
     HERO
══════════════════════════════════════════ -->
  <section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-overlay"></div>
    <div class="hero-accent"></div>
    <div class="hero-line"></div>
    <div class="hero-content">
      <div class="breadcrumb">
        <a href="<?php echo esc_url(home_url('/')); ?>">Inicio</a>
        <span class="breadcrumb-sep">›</span>
        <a href="<?php echo esc_url(home_url('/servicios/')); ?>">Servicios</a>
        <span class="breadcrumb-sep">›</span>
        <span>ITR — Importación y Exportación</span>
      </div>
      <div class="itr-badge">
        <svg viewBox="0 0 24 24">
          <circle cx="12" cy="12" r="10" />
          <line x1="2" y1="12" x2="22" y2="12" />
          <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
        </svg>
        <span>Servicio ITR · Transporte Internacional de Carga</span>
      </div>
      <h1>
        Importación y Exportación
        <em>Desde los Puertos de Colombia</em>
      </h1>
      <p class="hero-desc">Movilizamos carga desde y hacia los principales puertos colombianos con aliados estratégicos
        especializados en operaciones de comercio exterior. Conectamos su empresa con el mundo bajo los estándares BASC
        e ISO 9001.</p>
      <div class="hero-btns">
        <a href="#cotizar" class="btn-primary">Solicitar Cotización →</a>
        <a href="#puertos" class="btn-outline-white">Ver Puertos que Operamos</a>
      </div>
      <div class="hero-pills">
        <div class="hero-pill">
          <svg viewBox="0 0 24 24">
            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
            <polyline points="9 22 9 12 15 12 15 22" />
          </svg>
          <span>Puerto Buenaventura</span>
        </div>
        <div class="hero-pill">
          <svg viewBox="0 0 24 24">
            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
            <polyline points="9 22 9 12 15 12 15 22" />
          </svg>
          <span>Puerto Cartagena</span>
        </div>
        <div class="hero-pill">
          <svg viewBox="0 0 24 24">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
            <polyline points="9 12 11 14 15 10" />
          </svg>
          <span>BASC · ISO 9001</span>
        </div>
        <div class="hero-pill">
          <svg viewBox="0 0 24 24">
            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
            <circle cx="9" cy="7" r="4" />
            <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
          </svg>
          <span>Aliados Estratégicos Certificados</span>
        </div>
        <div class="hero-pill">
          <svg viewBox="0 0 24 24">
            <rect x="1" y="3" width="15" height="13" rx="1" />
            <path d="M16 8h4l3 5v4h-7V8z" />
            <circle cx="5.5" cy="18.5" r="2.5" />
            <circle cx="18.5" cy="18.5" r="2.5" />
          </svg>
          <span>Contenedores y Carga Suelta</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ══════════════════════════════════════════
     QUÉ ES ITR
══════════════════════════════════════════ -->
  <section class="what">
    <div class="what-inner">
      <div class="what-text">
        <div class="eyebrow">El servicio</div>
        <h2>Conectamos su Empresa <span>con el Comercio Exterior</span></h2>
        <p>El servicio ITR (Inland Transport Route) es la solución de transporte terrestre especializada que conecta los
          centros de producción, distribución y consumo del interior del país con los principales puertos de Colombia,
          habilitando así las operaciones de importación y exportación.</p>
        <p>Transportadora Estrella moviliza su carga desde cualquier ciudad del país hasta los puertos de Colombia —y viceversa— trabajando en coordinación estrecha con aliados estratégicos especializados en
          trámites aduaneros, operación portuaria y logística de comercio exterior.</p>
        <p>Esta integración nos permite ofrecer a su empresa una solución end-to-end: desde la planta o bodega de origen
          hasta el costado del buque, o desde el puerto de llegada hasta el destino final en cualquier punto de
          Colombia.</p>
      </div>
      <div class="what-visual">
        <div class="what-img">
          <img src="https://transestrella.com/wp-content/uploads/2025/08/transporte-de-contenedores.jpg"
            alt="Transporte de contenedores ITR Colombia — Transportadora Estrella" loading="lazy">
        </div>
        <div class="itr-def-box">
          <div class="itr-def-title">¿Qué significa ITR?</div>
          <div class="itr-def-text">
            <strong>Inland Transport Route</strong> — Ruta de Transporte Interior. Es el tramo terrestre de la cadena
            logística internacional que conecta el interior del país con la infraestructura portuaria. En Colombia es la
            ruta que une las ciudades industriales con <strong>Buenaventura</strong> (Océano Pacífico) y
            <strong>Cartagena</strong> (Mar Caribe).
          </div>
          <div class="itr-acronym">
            <div class="itr-letter">
              <div class="itr-letter-char">I</div>
              <div class="itr-letter-word">Inland</div>
            </div>
            <div class="itr-letter">
              <div class="itr-letter-char">T</div>
              <div class="itr-letter-word">Transport</div>
            </div>
            <div class="itr-letter">
              <div class="itr-letter-char">R</div>
              <div class="itr-letter-word">Route</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ══════════════════════════════════════════
     PUERTOS PRINCIPALES
══════════════════════════════════════════ -->
  <section class="ports" id="puertos">
    <div class="ports-inner">
      <div class="ports-header">
        <div class="eyebrow center">Infraestructura portuaria</div>
        <h2>Los Dos Puertos <span>Clave de Colombia</span></h2>
        <p>Nuestra operación ITR está centrada en los dos principales puertos de comercio exterior del país, con
          sucursal propia en ambas ciudades.</p>
      </div>
      <div class="ports-grid">
        <!-- Buenaventura -->
        <div class="port-card">
          <div class="port-card-img">
            <img src="https://transestrella.com/wp-content/uploads/2025/08/transporte-de-contenedores.jpg"
              alt="Puerto de Buenaventura — ITR Transportadora Estrella" loading="lazy">
            <div class="port-card-img-overlay"></div>
            <div class="port-card-img-label">
              <h3>Puerto de Buenaventura</h3>
              <span>Océano Pacífico — Valle del Cauca</span>
            </div>
          </div>
          <div class="port-card-body">
            <p>El puerto más importante de Colombia en el Pacífico y el más activo del país en volumen de carga. Maneja
              más del 60% del comercio exterior colombiano, conectando con mercados de Asia, Norteamérica y
              Centroamérica. Nuestra sucursal propia en Buenaventura garantiza atención local especializada en cada
              operación ITR.</p>
            <div class="port-facts">
              <div class="port-fact"><svg viewBox="0 0 24 24">
                  <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" />
                </svg>+60% comercio exterior nacional</div>
              <div class="port-fact"><svg viewBox="0 0 24 24">
                  <circle cx="12" cy="12" r="10" />
                  <line x1="2" y1="12" x2="22" y2="12" />
                </svg>Conexión Pacífico: Asia y Norteamérica</div>
              <div class="port-fact"><svg viewBox="0 0 24 24">
                  <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                </svg>Sucursal propia Estrella</div>
            </div>
          </div>
        </div>
        <!-- Cartagena -->
        <div class="port-card">
          <div class="port-card-img">
            <img
              src="https://transestrella.com/wp-content/uploads/2025/04/transportadora-estrella-nuestra-flota-transporte-de-carga-pesada-1.jpeg"
              alt="Puerto de Cartagena — ITR Transportadora Estrella" loading="lazy">
            <div class="port-card-img-overlay"></div>
            <div class="port-card-img-label">
              <h3>Puerto de Cartagena</h3>
              <span>Mar Caribe — Bolívar</span>
            </div>
          </div>
          <div class="port-card-body">
            <p>El puerto de aguas profundas más moderno de Latinoamérica y hub regional de transbordo del Caribe.
              Conecta a Colombia con Europa, la Costa Este de Estados Unidos y Centroamérica. Reconocido
              internacionalmente por su eficiencia operativa. Transportadora Estrella opera con sucursal propia en
              Cartagena.</p>
            <div class="port-facts">
              <div class="port-fact"><svg viewBox="0 0 24 24">
                  <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                </svg>Hub de transbordo Caribe</div>
              <div class="port-fact"><svg viewBox="0 0 24 24">
                  <circle cx="12" cy="12" r="10" />
                  <line x1="2" y1="12" x2="22" y2="12" />
                </svg>Conexión Europa y Costa Este EEUU</div>
              <div class="port-fact"><svg viewBox="0 0 24 24">
                  <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                </svg>Sucursal propia Estrella</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ══════════════════════════════════════════
     FLUJO OPERATIVO
══════════════════════════════════════════ -->
  <section class="flow">
    <div class="flow-inner">
      <div class="flow-header">
        <div class="eyebrow center">Cómo operamos</div>
        <h2>Flujo de una Operación <span>ITR Completa</span></h2>
        <p>Desde la recogida en planta hasta la entrega en puerto — o a la inversa — con trazabilidad total en cada
          etapa.</p>
      </div>
      <div class="flow-timeline">
        <div class="flow-step">
          <div class="flow-step-dot">
            <svg viewBox="0 0 24 24">
              <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" />
              <polyline points="14 2 14 8 20 8" />
            </svg>
          </div>
          <div class="flow-step-num">Paso 01</div>
          <div class="flow-step-title">Coordinación y Documentos</div>
          <div class="flow-step-desc">Revisión de BL, DAU, factura comercial, lista de empaque y coordinación con el
            agente de aduana.</div>
        </div>
        <div class="flow-step">
          <div class="flow-step-dot">
            <svg viewBox="0 0 24 24">
              <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
              <circle cx="12" cy="10" r="3" />
            </svg>
          </div>
          <div class="flow-step-num">Paso 02</div>
          <div class="flow-step-title">Recolección en Origen</div>
          <div class="flow-step-desc">Recogida de la carga en planta, bodega o terminal de contenedores con verificación
            de precinto y estado del contenedor.</div>
        </div>
        <div class="flow-step">
          <div class="flow-step-dot">
            <svg viewBox="0 0 24 24">
              <rect x="1" y="3" width="15" height="13" rx="1" />
              <path d="M16 8h4l3 5v4h-7V8z" />
              <circle cx="5.5" cy="18.5" r="2.5" />
              <circle cx="18.5" cy="18.5" r="2.5" />
            </svg>
          </div>
          <div class="flow-step-num">Paso 03</div>
          <div class="flow-step-title">Transporte ITR</div>
          <div class="flow-step-desc">Traslado terrestre con monitoreo GPS 24/7, cumpliendo tiempos de tránsito
            acordados con el puerto y la naviera.</div>
        </div>
        <div class="flow-step">
          <div class="flow-step-dot">
            <svg viewBox="0 0 24 24">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
              <polyline points="9 12 11 14 15 10" />
            </svg>
          </div>
          <div class="flow-step-num">Paso 04</div>
          <div class="flow-step-title">Gestión en Puerto</div>
          <div class="flow-step-desc">Ingreso al terminal portuario coordinado con nuestro aliado local: patio de
            contenedores, inspecciones aduaneras y entrega al operador portuario.</div>
        </div>
        <div class="flow-step">
          <div class="flow-step-dot">
            <svg viewBox="0 0 24 24">
              <polyline points="20 6 9 17 4 12" />
            </svg>
          </div>
          <div class="flow-step-num">Paso 05</div>
          <div class="flow-step-title">Confirmación y Trazabilidad</div>
          <div class="flow-step-desc">Confirmación de entrega, reporte de posición final y archivo completo de
            documentos para su gestión de comercio exterior.</div>
        </div>
      </div>
    </div>
  </section>



  <!-- ══════════════════════════════════════════
     BASC — GARANTÍA EN COMERCIO EXTERIOR
══════════════════════════════════════════ -->
  <section class="basc">
    <div class="basc-inner">
      <div class="basc-icon-col">
        <div class="basc-shield">
          <svg viewBox="0 0 24 24">
            <rect x="3" y="11" width="18" height="11" rx="2" ry="2" />
            <path d="M7 11V7a5 5 0 0 1 10 0v4" />
          </svg>
        </div>
        <div class="basc-cert-label">Certificación<br>BASC Vigente</div>
      </div>
      <div class="basc-body">
        <h3>BASC: La Garantía Esencial en <span>Comercio Exterior</span></h3>
        <p>En operaciones de importación y exportación, la certificación BASC (Business Alliance for Secure Commerce) no
          es un diferencial opcional: es un requisito fundamental. Los clientes internacionales, las navieras y los
          operadores portuarios exigen trabajar con proveedores BASC para garantizar que la cadena logística está libre
          de actividades ilícitas, especialmente el narcotráfico y el contrabando.</p>
        <p>Transportadora Estrella cuenta con certificación BASC vigente, lo que significa que cada eslabón de nuestra
          operación ITR ha sido auditado y certificado por un organismo internacional independiente. Su carga viaja con
          la misma garantía de seguridad que los estándares internacionales de comercio exigen.</p>
        <div class="basc-pills">
          <span class="basc-pill">Auditoría internacional anual</span>
          <span class="basc-pill">Cadena libre de actividades ilícitas</span>
          <span class="basc-pill">Requisito navieras y terminales</span>
          <span class="basc-pill">Complementa ISO 9001</span>
          <span class="basc-pill">Exigido en comercio con EE.UU. y Europa</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ══════════════════════════════════════════
     TIPOS DE CARGA ITR
══════════════════════════════════════════ -->
  <section class="cargo">
    <div class="cargo-inner">
      <div class="cargo-header">
        <div class="cargo-header-left">
          <div class="eyebrow">Qué transportamos</div>
          <h2>Tipos de Carga <span>que Manejamos en ITR</span></h2>
          <p>Flota diversificada para cada modalidad de carga en operaciones de comercio exterior.</p>
        </div>
        <a href="#cotizar" class="btn-outline-blue">Cotizar mi Operación →</a>
      </div>
      <div class="cargo-grid">
        <div class="cargo-card">
          <div class="cargo-icon">
            <svg viewBox="0 0 24 24">
              <rect x="2" y="7" width="20" height="14" rx="2" />
              <path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2" />
            </svg>
          </div>
          <h4>Contenedores FCL</h4>
          <p>Full Container Load. Contenedores completos de 20 y 40 pies (estándar y high-cube) desde planta hasta
            terminal portuaria o viceversa.</p>
        </div>
        <div class="cargo-card">
          <div class="cargo-icon">
            <svg viewBox="0 0 24 24">
              <path
                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z" />
            </svg>
          </div>
          <h4>Carga Suelta LCL</h4>
          <p>Less Container Load. Coordinación con agentes de consolidación para cargas de exportación que no llenan un
            contenedor completo.</p>
        </div>
        <div class="cargo-card">
          <div class="cargo-icon">
            <svg viewBox="0 0 24 24">
              <path
                d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z" />
            </svg>
          </div>
          <h4>Carga Masiva a Granel</h4>
          <p>Materias primas, minería y agroindustria que se embarcan a granel desde origen hasta instalaciones
            portuarias de cargue directo a buques graneleros.</p>
        </div>
        <div class="cargo-card">
          <div class="cargo-icon">
            <svg viewBox="0 0 24 24">
              <path d="M18 8h1a4 4 0 0 1 0 8h-1" />
              <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z" />
            </svg>
          </div>
          <h4>Carga Refrigerada Reefer</h4>
          <p>Contenedores refrigerados (reefer) para exportación de perecederos: flores, frutas tropicales, productos
            del mar y alimentos procesados con cadena de frío certificada.</p>
        </div>
        <div class="cargo-card">
          <div class="cargo-icon">
            <svg viewBox="0 0 24 24">
              <path
                d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z" />
            </svg>
          </div>
          <h4>Sobredimensionada y Pesada</h4>
          <p>Maquinaria industrial, equipos de gran tamaño y carga out-of-gauge que requiere planeación de ruta,
            permisos especiales y escolta para traslado a puerto.</p>
        </div>
        <div class="cargo-card">
          <div class="cargo-icon">
            <svg viewBox="0 0 24 24">
              <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z" />
              <line x1="12" y1="9" x2="12" y2="13" />
            </svg>
          </div>
          <h4>Mercancías Peligrosas IMDG</h4>
          <p>Materiales peligrosos para exportación marítima bajo el código IMDG, con documentación IMO completa y flota
            especializada certificada para este tipo de operaciones.</p>
        </div>
        <div class="cargo-card">
          <div class="cargo-icon">
            <svg viewBox="0 0 24 24">
              <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z" />
              <line x1="7" y1="7" x2="7.01" y2="7" />
            </svg>
          </div>
          <h4>Carga de Alto Valor</h4>
          <p>Mercancías de alto valor unitario con protocolos especiales de seguridad, seguimiento reforzado y
            coordinación con aseguradoras de carga internacional.</p>
        </div>
        <div class="cargo-card">
          <div class="cargo-icon">
            <svg viewBox="0 0 24 24">
              <ellipse cx="12" cy="5" rx="9" ry="3" />
              <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3" />
              <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5" />
            </svg>
          </div>
          <h4>Graneles Líquidos</h4>
          <p>Aceites vegetales, combustibles legales y productos químicos para exportación en camiones cisterna desde
            plantas de producción hasta terminales de líquidos portuarios.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ══════════════════════════════════════════
     POR QUÉ ESTRELLA PARA ITR
══════════════════════════════════════════ -->
  <section class="why">
    <div class="why-inner">
      <div class="why-text">
        <div class="eyebrow">Por qué elegirnos</div>
        <h2>La Ventaja de Operar con <span>Sucursales en los Puertos</span></h2>
        <p>No somos un operador que viaja al puerto y regresa. Tenemos presencia permanente en Buenaventura y Cartagena
          con equipos locales que conocen cada terminal, cada operador portuario y cada ventana de despacho.</p>
        <div class="why-list">
          <div class="why-item">
            <div class="why-item-icon">
              <svg viewBox="0 0 24 24">
                <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" />
                <polyline points="9 22 9 12 15 12 15 22" />
              </svg>
            </div>
            <div class="why-item-body">
              <h5>Sucursales Propias en Dos Puertos</h5>
              <p>Equipos locales en Buenaventura y Cartagena con contacto directo con los terminales portuarios, agentes
                navieros y operadores de patio.</p>
            </div>
          </div>
          <div class="why-item">
            <div class="why-item-icon">
              <svg viewBox="0 0 24 24">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
                <polyline points="9 12 11 14 15 10" />
              </svg>
            </div>
            <div class="why-item-body">
              <h5>BASC — Exigencia del Comercio Internacional</h5>
              <p>Certificación vigente que garantiza cadena logística libre de actividades ilícitas. Requisito
                indispensable para operar con navieras y terminales internacionales.</p>
            </div>
          </div>
          <div class="why-item">
            <div class="why-item-icon">
              <svg viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="10" />
                <line x1="2" y1="12" x2="22" y2="12" />
                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
              </svg>
            </div>
            <div class="why-item-body">
              <h5>Monitoreo GPS en Tiempo Real</h5>
              <p>Seguimiento permanente durante todo el trayecto ITR, con alertas ante desviaciones y comunicación
                directa con el equipo en puerto para coordinar la recepción.</p>
            </div>
          </div>
          <div class="why-item">
            <div class="why-item-icon">
              <svg viewBox="0 0 24 24">
                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                <circle cx="9" cy="7" r="4" />
                <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
              </svg>
            </div>
            <div class="why-item-body">
              <h5>Coordinación con Agentes Especializados</h5>
              <p>Coordinamos con agentes de aduana, operadores portuarios y agentes de carga especializados que
                complementan el servicio de transporte terrestre en cada operación.</p>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="why-metrics">
          <div class="why-metric">
            <div class="why-metric-num">2</div>
            <div class="why-metric-label">Sucursales propias en puertos principales del país</div>
          </div>
          <div class="why-metric">
            <div class="why-metric-num">30+</div>
            <div class="why-metric-label">Años de experiencia en logística de comercio exterior</div>
          </div>
          <div class="why-metric">
            <div class="why-metric-num">BASC</div>
            <div class="why-metric-label">Certificación internacional vigente para comercio exterior</div>
          </div>
          <div class="why-metric">
            <div class="why-metric-num">24/7</div>
            <div class="why-metric-label">Monitoreo GPS continuo en rutas portuarias</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ══════════════════════════════════════════
     SECTORES
══════════════════════════════════════════ -->
  <section class="sectors">
    <div class="sectors-inner">
      <div class="sectors-header">
        <div class="eyebrow center">Industrias que servimos</div>
        <h3>Sectores que Exportan e Importan con Nosotros</h3>
        <p>Empresas de todos los sectores productivos confían en Transportadora Estrella para sus operaciones de
          comercio exterior.</p>
      </div>
      <div class="sectors-grid">
        <div class="sector-chip">
          <svg viewBox="0 0 24 24">
            <path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z" />
            <line x1="7" y1="7" x2="7.01" y2="7" />
          </svg>
          <span>Agroindustria</span>
        </div>
        <div class="sector-chip">
          <svg viewBox="0 0 24 24">
            <path
              d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z" />
          </svg>
          <span>Minería</span>
        </div>
        <div class="sector-chip">
          <svg viewBox="0 0 24 24">
            <rect x="2" y="3" width="20" height="14" rx="2" ry="2" />
            <line x1="8" y1="21" x2="16" y2="21" />
            <line x1="12" y1="17" x2="12" y2="21" />
          </svg>
          <span>Manufactura</span>
        </div>
        <div class="sector-chip">
          <svg viewBox="0 0 24 24">
            <path d="M18 8h1a4 4 0 0 1 0 8h-1" />
            <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z" />
          </svg>
          <span>Alimentos</span>
        </div>
        <div class="sector-chip">
          <svg viewBox="0 0 24 24">
            <path
              d="M9 3H5a2 2 0 0 0-2 2v4m6-6h10a2 2 0 0 1 2 2v4M9 3v18m0 0h10a2 2 0 0 0 2-2V9M9 21H5a2 2 0 0 1-2-2V9m0 0h18" />
          </svg>
          <span>Química</span>
        </div>
        <div class="sector-chip">
          <svg viewBox="0 0 24 24">
            <path d="M19 21V5a2 2 0 0 0-2-2H7a2 2 0 0 0-2 2v16m14 0h2m-2 0H5m-2 0h2" />
          </svg>
          <span>Construcción</span>
        </div>
        <div class="sector-chip">
          <svg viewBox="0 0 24 24">
            <path
              d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
          </svg>
          <span>Textil</span>
        </div>
        <div class="sector-chip">
          <svg viewBox="0 0 24 24">
            <ellipse cx="12" cy="5" rx="9" ry="3" />
            <path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3" />
            <path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5" />
          </svg>
          <span>Petroquímica</span>
        </div>
        <div class="sector-chip">
          <svg viewBox="0 0 24 24">
            <path d="M22 17H2a3 3 0 0 0 3-3V9a7 7 0 0 1 14 0v5a3 3 0 0 0 3 3zm-8.27 4a2 2 0 0 1-3.46 0" />
          </svg>
          <span>Tecnología</span>
        </div>
        <div class="sector-chip">
          <svg viewBox="0 0 24 24">
            <path
              d="M8.5 14.5A2.5 2.5 0 0 0 11 12c0-1.38-.5-2-1-3-1.072-2.143-.224-4.054 2-6 .5 2.5 2 4.9 4 6.5 2 1.6 3 3.5 3 5.5a7 7 0 1 1-14 0c0-1.153.433-2.294 1-3a2.5 2.5 0 0 0 2.5 2.5z" />
          </svg>
          <span>Energía</span>
        </div>
        <div class="sector-chip">
          <svg viewBox="0 0 24 24">
            <path d="M22 12h-4l-3 9L9 3l-3 9H2" />
          </svg>
          <span>Farmacéutico</span>
        </div>
        <div class="sector-chip">
          <svg viewBox="0 0 24 24">
            <rect x="2" y="7" width="20" height="14" rx="2" />
            <path d="M16 7V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2" />
          </svg>
          <span>Consumo Masivo</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ══════════════════════════════════════════
     OTROS SERVICIOS
══════════════════════════════════════════ -->
  <section class="other-services">
    <div class="other-services-inner">
      <div class="other-header">
        <div class="eyebrow center">Portafolio completo</div>
        <h3>Otros Servicios Disponibles</h3>
        <p>Explore el resto de nuestra oferta de transporte especializado en Colombia.</p>
      </div>
      <div class="other-grid">
        <a href="<?php echo esc_url(home_url('/servicios/transporte-de-carga-terrestre-nacional/')); ?>"
          class="other-card">
          <div class="other-card-img">
            <img
              src="https://transestrella.com/wp-content/uploads/2025/04/transportadora-estrella-nuestra-flota-transporte-de-carga-pesada-1.jpeg"
              alt="Carga nacional" loading="lazy">
          </div>
          <div class="other-card-body">
            <div class="other-tag">Nacional</div>
            <h4>Transporte de Carga Nacional</h4>
            <p>Carga masiva y semi masiva en los 32 departamentos con flota propia.</p>
            <div class="other-link">Ver servicio →</div>
          </div>
        </a>
        <a href="<?php echo esc_url(home_url('/servicios/transporte-urbano-de-mercancias/')); ?>" class="other-card">
          <div class="other-card-img">
            <img src="https://transestrella.com/wp-content/uploads/2025/06/camio-urbano-de-transporte.webp"
              alt="Transporte urbano" loading="lazy">
          </div>
          <div class="other-card-body">
            <div class="other-tag">Urbano</div>
            <h4>Transporte Urbano de Mercancías</h4>
            <p>Distribución eficiente en las 8 ciudades donde tenemos sucursal.</p>
            <div class="other-link">Ver servicio →</div>
          </div>
        </a>
        <a href="<?php echo esc_url(home_url('/servicios/transporte-de-carga-peligrosa/')); ?>" class="other-card">
          <div class="other-card-img">
            <img src="https://transestrella.com/wp-content/uploads/2025/06/camion-cisterna.webp"
              alt="Mercancías peligrosas" loading="lazy">
          </div>
          <div class="other-card-body">
            <div class="other-tag">Especializado</div>
            <h4>Transporte de Mercancías Peligrosas</h4>
            <p>Conductores certificados y flota especializada bajo normativa ADR.</p>
            <div class="other-link">Ver servicio →</div>
          </div>
        </a>
      </div>
    </div>
  </section>

  <!-- ══════════════════════════════════════════
     CTA FINAL + FORMULARIO
══════════════════════════════════════════ -->
  <section class="cta" id="cotizar">
    <div class="cta-inner">
      <div class="cta-text">
        <div class="eyebrow">Hablemos hoy</div>
        <h2>Cotice su <span>Operación ITR de Importación o Exportación</span></h2>
        <p>Cuéntenos su ruta, tipo de carga y puerto de operación. Coordinamos con nuestros aliados y le ofrecemos una
          solución integral puerta a puerta.</p>
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
        <h3>Cotizar Operación ITR</h3>
        <p class="form-box-sub">Indique puerto, tipo de carga y ruta. Le respondemos en menos de 24 horas hábiles.</p>
        <div class="form-notice">
          <svg class="form-notice-icon" viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10" />
            <line x1="12" y1="8" x2="12" y2="12" />
            <line x1="12" y1="16" x2="12.01" y2="16" />
          </svg>
          <div>
            <div class="form-notice-title">Solo Operaciones Empresariales de Comercio Exterior</div>
            <div class="form-notice-text">Atendemos importaciones y exportaciones de empresas con volúmenes
              significativos. Tenga a mano el número de BL o referencia del embarque para una cotización más precisa.
            </div>
          </div>
        </div>
        <div class="forminator-placeholder">

          <span>
            <?php echo do_shortcode('[forminator_form id="536"]'); ?>
          </span>
        </div>
        <a href="https://wa.me/576045273300?text=Hola%2C%20necesito%20cotizar%20transporte%20ITR%20importacion%20exportacion"
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
</div>

<?php get_footer(); ?>
