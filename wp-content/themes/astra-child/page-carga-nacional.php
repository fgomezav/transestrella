<?php
/**
 * Template Name: Carga Nacional
 */

get_header();
?>

<style>
  :root {
    --ts-blue: #0F5BA7;
    --ts-blue-dark: #0A4580;
    --ts-blue-deep: #083266;
    --ts-gold: #F5A623;
    --ts-white: #FFFFFF;
    --ts-gray-bg: #F5F5F5;
    --ts-gray: #999999;
    --ts-gray-dark: #333333;
    --ts-gray-line: #E0E0E0;
  }

  /* ── UTILITIES ── */
  .eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-family: var(--font-display);
    font-size: 12px;
    font-weight: 600;
    letter-spacing: .2em;
    text-transform: uppercase;
    color: var(--ts-gold);
  }

  .eyebrow::before {
    content: '';
    width: 34px;
    height: 2px;
    background: var(--ts-gold);
  }

  .eyebrow.center {
    justify-content: center;
  }

  .eyebrow.center::before {
    display: none;
  }

  .eyebrow.center::after {
    content: '';
    width: 34px;
    height: 2px;
    background: var(--ts-gold);
  }

  .btn-primary {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 15px 34px;
    background: var(--ts-gold);
    color: #fff;
    font-family: var(--font-display);
    font-size: 15px;
    font-weight: 700;
    letter-spacing: .07em;
    text-transform: uppercase;
    border-radius: 4px;
    text-decoration: none;
    border: 2px solid var(--ts-gold);
  }

  .btn-outline-white {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 15px 34px;
    background: transparent;
    color: #FFFFFF;
    font-family: var(--font-display);
    font-size: 15px;
    font-weight: 700;
    letter-spacing: .07em;
    text-transform: uppercase;
    border-radius: 4px;
    text-decoration: none;
    border: 2px solid rgba(255, 255, 255, .35);
  }

  .btn-outline-blue {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    padding: 13px 28px;
    background: transparent;
    color: var(--ts-blue);
    font-family: var(--font-display);
    font-size: 14px;
    font-weight: 700;
    letter-spacing: .07em;
    text-transform: uppercase;
    border-radius: 4px;
    text-decoration: none;
    border: 2px solid var(--ts-blue);
  }

  /* ── HERO ── */
  .hero {
    position: relative;
    min-height: 92vh;
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
    background-position: center right;
    opacity: .22;
  }

  .hero-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(105deg, rgba(8, 50, 102, .97) 0%, rgba(8, 50, 102, .88) 45%, rgba(15, 91, 167, .25) 100%);
  }

  .hero-line {
    position: absolute;
    top: 0;
    right: 36%;
    width: 1px;
    height: 100%;
    background: linear-gradient(to bottom, transparent, rgba(245, 166, 35, .12), transparent);
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

  .hero h1 {
    font-family: var(--font-display);
    font-size: clamp(46px, 6.5vw, 82px);
    font-weight: 800;
    line-height: .92;
    text-transform: uppercase;
    color: #FFFFFF;
    letter-spacing: .01em;
    margin-bottom: 22px;
    max-width: 740px;
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
    max-width: 560px;
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

  /* ── INTRO 2-COL ── */
  .intro {
    padding: 88px 40px;
    background: #FFFFFF;
  }

  .intro-inner {
    max-width: 1240px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: start;
  }

  .intro-text h2 {
    font-family: var(--font-display);
    font-size: clamp(28px, 3.2vw, 42px);
    font-weight: 800;
    text-transform: uppercase;
    color: #333333;
    line-height: 1.0;
    margin-bottom: 18px;
  }

  .intro-text h2 span {
    color: var(--ts-gold);
  }

  .intro-text p {
    font-size: 15px;
    color: #333333;
    line-height: 1.8;
    margin-bottom: 14px;
  }

  .intro-visual {
    display: flex;
    flex-direction: column;
    gap: 16px;
  }

  .intro-img {
    border-radius: 12px;
    overflow: hidden;
    border: 1px solid var(--ts-gray-line);
  }

  .intro-img img {
    width: 100%;
    display: block;
    height: 260px;
    object-fit: cover;
  }

  .intro-quote {
    background: var(--ts-blue-deep);
    border-radius: 12px;
    padding: 28px 28px 28px 32px;
    border-left: 4px solid var(--ts-gold);
  }

  .intro-quote p {
    font-family: var(--font-display);
    font-size: 18px;
    font-weight: 600;
    color: rgba(255, 255, 255, .82);
    line-height: 1.5;
    font-style: italic;
  }

  .intro-quote p span {
    color: var(--ts-gold);
  }

  .intro-quote cite {
    display: block;
    font-size: 12px;
    color: rgba(255, 255, 255, .38);
    margin-top: 12px;
    font-style: normal;
    text-transform: uppercase;
    letter-spacing: .08em;
  }

  /* ── CARACTERÍSTICAS ── */
  .features {
    padding: 88px 40px;
    background: var(--ts-gray-bg);
  }

  .features-inner {
    max-width: 1240px;
    margin: 0 auto;
  }

  .features-header {
    text-align: center;
    max-width: 560px;
    margin: 0 auto 52px;
  }

  .features-header h2 {
    font-family: var(--font-display);
    font-size: clamp(28px, 3.5vw, 46px);
    font-weight: 800;
    text-transform: uppercase;
    color: #333333;
    line-height: 1.0;
    margin-bottom: 12px;
    margin-top: 12px;
  }

  .features-header h2 span {
    color: var(--ts-gold);
  }

  .features-header p {
    font-size: 16px;
    color: #333333;
  }

  .features-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
  }

  .feat-card {
    background: #FFFFFF;
    border-radius: 12px;
    padding: 28px 22px;
    border: 1px solid var(--ts-gray-line);
    transition: border-color .2s, box-shadow .2s;
  }

  .feat-card:hover {
    border-color: var(--ts-gold);
    box-shadow: 0 8px 24px rgba(245, 166, 35, .08);
  }

  .feat-icon {
    width: 50px;
    height: 50px;
    background: rgba(245, 166, 35, .1);
    border-radius: 9px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 16px;
    border: 1px solid rgba(245, 166, 35, .18);
  }

  .feat-icon svg {
    width: 24px;
    height: 24px;
    stroke: var(--ts-gold);
    fill: none;
    stroke-width: 1.8;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  .feat-card h4 {
    font-family: var(--font-display);
    font-size: 18px;
    font-weight: 800;
    text-transform: uppercase;
    color: #333333;
    margin-bottom: 8px;
    line-height: 1.1;
  }

  .feat-card p {
    font-size: 13px;
    color: #333333;
    line-height: 1.65;
  }

  .feat-card ul {
    list-style: none;
    margin-top: 10px;
    display: flex;
    flex-direction: column;
    gap: 5px;
  }

  .feat-card ul li {
    font-size: 12px;
    color: var(--ts-gray);
    display: flex;
    align-items: center;
    gap: 6px;
  }

  .feat-card ul li::before {
    content: '';
    width: 4px;
    height: 4px;
    background: var(--ts-gold);
    border-radius: 50%;
    flex-shrink: 0;
  }

  /* ── TIPOS DE CARGA ── */
  .cargo-types {
    padding: 88px 40px;
    background: #FFFFFF;
  }

  .cargo-types-inner {
    max-width: 1240px;
    margin: 0 auto;
  }

  .cargo-types-header {
    display: grid;
    grid-template-columns: 1fr auto;
    align-items: end;
    gap: 20px;
    margin-bottom: 48px;
  }

  .cargo-types-header h2 {
    font-family: var(--font-display);
    font-size: clamp(28px, 3.5vw, 44px);
    font-weight: 800;
    text-transform: uppercase;
    color: #333333;
    line-height: 1.0;
    margin-bottom: 10px;
    margin-top: 12px;
  }

  .cargo-types-header h2 span {
    color: var(--ts-gold);
  }

  .cargo-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2px;
    border-radius: 14px;
    overflow: hidden;
    border: 1px solid var(--ts-gray-line);
    margin-bottom: 2px;
  }

  .cargo-card {
    background: var(--ts-gray-bg);
    padding: 28px 24px;
    transition: background .2s;
  }

  .cargo-card:hover {
    background: #EEF3FA;
  }

  .cargo-card-icon {
    width: 44px;
    height: 44px;
    background: #FFFFFF;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 14px;
    border: 1px solid var(--ts-gray-line);
  }

  .cargo-card-icon svg {
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
    font-size: 18px;
    font-weight: 800;
    text-transform: uppercase;
    color: #333333;
    margin-bottom: 8px;
    line-height: 1.1;
  }

  .cargo-card p {
    font-size: 13px;
    color: #333333;
    line-height: 1.6;
  }

  .cargo-card .cargo-examples {
    margin-top: 10px;
    font-size: 12px;
    color: var(--ts-gray);
  }

  /* ── TECNOLOGÍA ── */
  .tech {
    padding: 88px 40px;
    background: var(--ts-blue-deep);
    position: relative;
    overflow: hidden;
  }

  .tech::before {
    content: '';
    position: absolute;
    inset: 0;
    background-image: linear-gradient(rgba(255, 255, 255, .02) 1px, transparent 1px), linear-gradient(90deg, rgba(255, 255, 255, .02) 1px, transparent 1px);
    background-size: 52px 52px;
  }

  .tech-inner {
    max-width: 1240px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: center;
    position: relative;
    z-index: 2;
  }

  .tech-text h2 {
    font-family: var(--font-display);
    font-size: clamp(28px, 3.2vw, 44px);
    font-weight: 800;
    text-transform: uppercase;
    color: #FFFFFF;
    line-height: 1.0;
    margin-bottom: 18px;
  }

  .tech-text h2 span {
    color: var(--ts-gold);
  }

  .tech-text p {
    font-size: 15px;
    color: rgba(255, 255, 255, .6);
    line-height: 1.8;
    margin-bottom: 28px;
  }

  .tech-list {
    display: flex;
    flex-direction: column;
    gap: 16px;
  }

  .tech-item {
    display: flex;
    align-items: flex-start;
    gap: 16px;
  }

  .tech-item-icon {
    width: 44px;
    height: 44px;
    background: rgba(255, 255, 255, .06);
    border: 1px solid rgba(255, 255, 255, .1);
    border-radius: 9px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }

  .tech-item-icon svg {
    width: 20px;
    height: 20px;
    stroke: var(--ts-gold);
    fill: none;
    stroke-width: 1.8;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  .tech-item-body h5 {
    font-family: var(--font-display);
    font-size: 16px;
    font-weight: 800;
    text-transform: uppercase;
    color: #FFFFFF;
    margin-bottom: 4px;
  }

  .tech-item-body p {
    font-size: 13px;
    color: rgba(255, 255, 255, .52);
    line-height: 1.6;
  }

  .tech-metrics {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 16px;
  }

  .tech-metric {
    background: rgba(255, 255, 255, .05);
    border: 1px solid rgba(255, 255, 255, .08);
    border-radius: 12px;
    padding: 28px 22px;
    text-align: center;
  }

  .tech-metric-num {
    font-family: var(--font-display);
    font-size: 44px;
    font-weight: 800;
    color: var(--ts-gold);
    line-height: 1;
    margin-bottom: 6px;
  }

  .tech-metric-label {
    font-size: 13px;
    color: rgba(255, 255, 255, .45);
    line-height: 1.4;
  }

  /* ── SOLUCIONES PERSONALIZADAS ── */
  .solutions {
    padding: 88px 40px;
    background: var(--ts-gray-bg);
  }

  .solutions-inner {
    max-width: 1240px;
    margin: 0 auto;
  }

  .solutions-header {
    text-align: center;
    max-width: 540px;
    margin: 0 auto 52px;
  }

  .solutions-header h2 {
    font-family: var(--font-display);
    font-size: clamp(28px, 3.5vw, 44px);
    font-weight: 800;
    text-transform: uppercase;
    color: #333333;
    line-height: 1.0;
    margin-bottom: 12px;
    margin-top: 12px;
  }

  .solutions-header h2 span {
    color: var(--ts-gold);
  }

  .solutions-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
  }

  .sol-card {
    background: #FFFFFF;
    border-radius: 12px;
    padding: 28px 24px;
    border: 1px solid var(--ts-gray-line);
    display: flex;
    gap: 18px;
  }

  .sol-icon {
    width: 48px;
    height: 48px;
    background: #EEF3FA;
    border-radius: 9px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }

  .sol-icon svg {
    width: 22px;
    height: 22px;
    stroke: var(--ts-blue);
    fill: none;
    stroke-width: 1.8;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  .sol-body h4 {
    font-family: var(--font-display);
    font-size: 18px;
    font-weight: 800;
    text-transform: uppercase;
    color: #333333;
    margin-bottom: 6px;
    line-height: 1.1;
  }

  .sol-body p {
    font-size: 14px;
    color: #333333;
    line-height: 1.65;
  }

  /* ── COBERTURAS RUTAS ── */
  .coverage {
    padding: 88px 40px;
    background: #FFFFFF;
  }

  .coverage-inner {
    max-width: 1240px;
    margin: 0 auto;
  }

  .coverage-header {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 64px;
    align-items: start;
    margin-bottom: 48px;
  }

  .coverage-header-left h2 {
    font-family: var(--font-display);
    font-size: clamp(28px, 3.5vw, 44px);
    font-weight: 800;
    text-transform: uppercase;
    color: #333333;
    line-height: 1.0;
    margin-bottom: 12px;
    margin-top: 12px;
  }

  .coverage-header-left h2 span {
    color: var(--ts-gold);
  }

  .coverage-header-left p {
    font-size: 16px;
    color: #333333;
    line-height: 1.75;
    margin-bottom: 22px;
  }

  .corridors-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 12px;
  }

  .corridor {
    background: var(--ts-gray-bg);
    border-radius: 10px;
    padding: 18px 18px;
    border: 1px solid var(--ts-gray-line);
    display: flex;
    align-items: center;
    gap: 14px;
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
    font-size: 15px;
    font-weight: 800;
    color: #333333;
    text-transform: uppercase;
    line-height: 1.1;
  }

  .corridor-cities {
    font-size: 12px;
    color: var(--ts-gray);
    margin-top: 2px;
  }

  .coverage-branches {
    background: var(--ts-blue-deep);
    border-radius: 14px;
    padding: 32px;
    position: relative;
    overflow: hidden;
  }

  .coverage-branches h3 {
    font-family: var(--font-display);
    font-size: 20px;
    font-weight: 800;
    text-transform: uppercase;
    color: #FFFFFF;
    margin-bottom: 6px;
  }

  .branch-pills {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
  }

  .branch-pill {
    display: flex;
    align-items: center;
    gap: 6px;
    background: rgba(255, 255, 255, .06);
    border: 1px solid rgba(255, 255, 255, .1);
    border-radius: 6px;
    padding: 7px 12px;
  }

  .branch-pill svg {
    width: 12px;
    height: 12px;
    stroke: var(--ts-gold);
    fill: none;
    stroke-width: 2;
    stroke-linecap: round;
    stroke-linejoin: round;
  }

  .branch-pill span {
    font-family: var(--font-display);
    font-size: 12px;
    font-weight: 700;
    text-transform: uppercase;
    color: rgba(255, 255, 255, .7);
  }

  .branch-pill.main {
    border-color: rgba(245, 166, 35, .35);
  }

  .branch-pill.main span {
    color: var(--ts-gold);
  }

  /* ── TESTIMONIOS ── */
  .testi {
    padding: 88px 40px;
    background: var(--ts-gray-bg);
  }

  .testi-inner {
    max-width: 1240px;
    margin: 0 auto;
  }

  .testi-header {
    text-align: center;
    max-width: 480px;
    margin: 0 auto 48px;
  }

  .testi-header h2 {
    font-family: var(--font-display);
    font-size: clamp(28px, 3.5vw, 44px);
    font-weight: 800;
    text-transform: uppercase;
    color: #333333;
    line-height: 1.0;
    margin-bottom: 12px;
    margin-top: 12px;
  }

  .testi-header h2 span {
    color: var(--ts-gold);
  }

  .testi-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 22px;
  }

  .testi-card {
    background: #FFFFFF;
    border-radius: 12px;
    padding: 32px;
    border: 1px solid rgba(0, 0, 0, .06);
    position: relative;
  }

  .testi-stars {
    display: flex;
    gap: 3px;
    margin-bottom: 16px;
  }

  .testi-stars svg {
    width: 14px;
    height: 14px;
    fill: var(--ts-gold);
  }

  .testi-quote-mark {
    font-family: Georgia, serif;
    font-size: 72px;
    line-height: .7;
    color: rgba(245, 166, 35, .15);
    margin-bottom: 8px;
    display: block;
  }

  .testi-text {
    font-size: 16px;
    color: #333333;
    line-height: 1.78;
    margin-bottom: 24px;
    font-style: italic;
  }

  .testi-author {
    display: flex;
    align-items: center;
    gap: 12px;
    border-top: 1px solid var(--ts-gray-line);
    padding-top: 18px;
  }

  .testi-av {
    width: 44px;
    height: 44px;
    background: linear-gradient(135deg, var(--ts-blue) 0%, var(--ts-blue-deep) 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-family: var(--font-display);
    font-size: 17px;
    font-weight: 700;
    flex-shrink: 0;
  }

  .testi-name {
    font-family: var(--font-display);
    font-size: 14px;
    font-weight: 700;
    color: #333333;
    text-transform: uppercase;
    letter-spacing: .02em;
  }

  .testi-role {
    font-size: 12px;
    color: var(--ts-gray);
  }

  /* ── OTHER SERVICES ── */
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

  /* ── CTA FINAL ── */
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

  /* ── RESPONSIVE ── */
  @media(max-width:1024px) {

    .intro-inner,
    .tech-inner,
    .coverage-header {
      grid-template-columns: 1fr;
      gap: 44px;
    }

    .features-grid {
      grid-template-columns: repeat(2, 1fr);
    }

    .cta-inner {
      grid-template-columns: 1fr;
      gap: 44px;
    }

    .corridors-grid {
      grid-template-columns: 1fr;
    }
  }

  @media(max-width:768px) {
    .hero-content {
      padding: 96px 20px 72px;
    }

    .hero h1 {
      font-size: 42px;
    }

    .hero-btns {
      flex-direction: column;
    }

    .hero-btns a {
      width: 100%;
      justify-content: center;
    }

    .intro,
    .features,
    .cargo-types,
    .tech,
    .solutions,
    .coverage,
    .testi,
    .other-services,
    .cta {
      padding: 60px 20px;
    }

    .features-grid {
      grid-template-columns: 1fr 1fr;
    }

    .cargo-grid {
      grid-template-columns: 1fr;
    }

    .solutions-grid {
      grid-template-columns: 1fr;
    }

    .testi-grid {
      grid-template-columns: 1fr;
    }

    .other-grid {
      grid-template-columns: 1fr 1fr;
    }

    .coverage-header {
      grid-template-columns: 1fr;
    }
  }

  @media(max-width:480px) {
    .hero h1 {
      font-size: 36px;
    }

    .features-grid,
    .other-grid {
      grid-template-columns: 1fr;
    }
  }
</style>

<div class="page-carga-nacional-content">
  <!-- HERO -->
  <section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-overlay"></div>
    <div class="hero-line"></div>
    <div class="hero-content">
      <div class="breadcrumb">
        <a href="<?php echo esc_url(home_url('/')); ?>">Inicio</a>
        <span class="breadcrumb-sep">›</span>
        <a href="<?php echo esc_url(home_url('/servicios/')); ?>">Servicios</a>
        <span class="breadcrumb-sep">›</span>
        <span>Carga Nacional</span>
      </div>
      <h1>Transporte Terrestre de <em>Carga Nacional</em></h1>
      <p class="hero-desc">Soluciones logísticas eficientes para el traslado de carga masiva y semi masiva con cobertura
        en todo el territorio colombiano. Más de 30 años como aliado estratégico.</p>
      <div class="hero-btns">
        <a href="#cotizar" class="btn-primary">Solicitar Cotización →</a>
        <a href="#caracteristicas" class="btn-outline-white">Conocer el Servicio</a>
      </div>
      <div class="hero-pills">
        <div class="hero-pill">
          <svg viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10" />
            <line x1="2" y1="12" x2="22" y2="12" />
            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
          </svg>
          <span>Monitoreo GPS 24/7</span>
        </div>
        <div class="hero-pill">
          <svg viewBox="0 0 24 24">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
            <polyline points="9 12 11 14 15 10" />
          </svg>
          <span>ISO 9001 · BASC Certificados</span>
        </div>
      </div>
    </div>
  </section>

  <!-- INTRO -->
  <section class="intro">
    <div class="intro-inner">
      <div class="intro-text">
        <div class="eyebrow">El servicio</div>
        <h2>El Aliado Logístico que <span>Colombia Necesita</span></h2>
        <p>El transporte terrestre de carga nacional es esencial para la economía colombiana. Facilita la distribución
          de mercancías entre regiones, apoya el comercio interno y conecta la producción industrial.</p>
        <p>Transportadora Estrella, con más de 30 años de experiencia, se destaca en este ámbito como aliado estratégico
          de empresas que manejan carga masiva, semi masiva y maquinaria pesada.</p>
      </div>
      <div class="intro-visual">
        <div class="intro-img">
          <img src="https://transestrella.com/wp-content/uploads/2025/04/transportadora-estrella-carga-volco.jpeg"
            alt="Flota Transportadora Estrella" loading="lazy">
        </div>
        <div class="intro-quote">
          <p>"Si la materia prima no para, es porque la <span>Transportadora Estrella S.A.S.</span> nunca se detiene."
          </p>
          <cite>Jaime Andrés Giraldo — Gerente, ICO FORMAS</cite>
        </div>
      </div>
    </div>
  </section>

  <!-- CARACTERÍSTICAS -->
  <section class="features" id="caracteristicas">
    <div class="features-inner">
      <div class="features-header">
        <div class="eyebrow center">Lo que nos distingue</div>
        <h2>Características del <span>Servicio Nacional</span></h2>
        <p>Cuatro pilares que garantizan la eficiencia y confiabilidad de cada operación.</p>
      </div>
      <div class="features-grid">
        <div class="feat-card">
          <div class="feat-icon"><svg viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5z" />
              <path d="M2 17l10 5 10-5" />
              <path d="M2 12l10 5 10-5" />
            </svg></div>
          <h4>Flexibilidad</h4>
          <p>Ajustes en rutas y horarios de acuerdo a las exigencias específicas de cada cliente.</p>
        </div>
        <div class="feat-card">
          <div class="feat-icon"><svg viewBox="0 0 24 24">
              <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z" />
              <polyline points="9 12 11 14 15 10" />
            </svg></div>
          <h4>Seguridad</h4>
          <p>Medidas integrales para proteger su mercancía con monitoreo en tiempo real.</p>
        </div>
        <div class="feat-card">
          <div class="feat-icon"><svg viewBox="0 0 24 24">
              <rect x="2" y="3" width="20" height="14" rx="2" ry="2" />
              <line x1="8" y1="21" x2="16" y2="21" />
              <line x1="12" y1="17" x2="12" y2="21" />
            </svg></div>
          <h4>Tecnología</h4>
          <p>Herramientas digitales que optimizan el proceso logístico y el seguimiento.</p>
        </div>
        <div class="feat-card">
          <div class="feat-icon"><svg viewBox="0 0 24 24">
              <path d="M4 15s1-1 4-1 5 2 8 2 4-1 4-1V3s-1 1-4 1-5-2-8-2-4 1-4 1z" />
              <line x1="4" y1="22" x2="4" y2="15" />
            </svg></div>
          <h4>Sostenibilidad</h4>
          <p>Alternativas responsables para reducir el impacto ambiental de cada operación.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- TIPOS DE CARGA -->
  <section class="cargo-types">
    <div class="cargo-types-inner">
      <div class="cargo-types-header">
        <div>
          <div class="eyebrow">Qué transportamos</div>
          <h2>Tipos de Carga <span>que Atendemos</span></h2>
        </div>
        <a href="#cotizar" class="btn-outline-blue">Cotizar mi Carga →</a>
      </div>
      <div class="cargo-grid">
        <div class="cargo-card">
          <h4>Carga Masiva</h4>
          <p>Materias primas y productos industriales en tractocamiones o volcos.</p>
        </div>
        <div class="cargo-card">
          <h4>Carga Semi Masiva</h4>
          <p>Mercancías de mediano volumen con seguimiento permanente.</p>
        </div>
        <div class="cargo-card">
          <h4>Maquinaria</h4>
          <p>Transporte de equipos industriales y carga sobredimensionada.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- TECNOLOGÍA -->
  <section class="tech">
    <div class="tech-inner">
      <div class="tech-text">
        <div class="eyebrow">Innovación</div>
        <h2>Tecnología al Servicio de <span>su Carga</span></h2>
        <p>Implementamos herramientas digitales que optimizan el proceso logístico y brindan visibilidad.</p>
      </div>
      <div class="tech-metrics">
        <div class="tech-metric">
          <div class="tech-metric-num">30%</div>
          <div class="tech-metric-label">Reducción en tiempos</div>
        </div>
        <div class="tech-metric">
          <div class="tech-metric-num">98%</div>
          <div class="tech-metric-label">Satisfacción</div>
        </div>
      </div>
    </div>
  </section>

  <!-- COBERTURA -->
  <section class="coverage">
    <div class="coverage-inner">
      <div class="coverage-header">
        <div class="coverage-header-left">
          <div class="eyebrow">Presencia</div>
          <h2>Cobertura <span>Nacional</span></h2>
          <p>Llegamos a todos los rincones del país con 8 sucursales propias estratégicas.</p>
        </div>
        <div class="branch-pills">
          <div class="branch-pill main"><span>Medellín</span></div>
          <div class="branch-pill"><span>Bogotá</span></div>
          <div class="branch-pill"><span>Cali</span></div>
          <div class="branch-pill"><span>Barranquilla</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="cta" id="cotizar">
    <div class="cta-inner">
      <div class="cta-text">
        <h2>Cotice su <span>Carga Nacional</span></h2>
        <p>Cuéntenos su operación y diseñamos la solución logística ideal.</p>
      </div>
      <div class="form-box">
        <h3>Cotizar Ahora</h3>
        <div class="forminator-placeholder">
          <p>[forminator_form id="XX"]</p>
        </div>
        <a href="https://wa.me/576045273300" target="_blank" class="form-wa">
          <span class="form-wa-text">WhatsApp</span>
        </a>
      </div>
    </div>
  </section>
</div>

<?php
get_footer();