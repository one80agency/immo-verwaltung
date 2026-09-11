<?php
/**
 * Immo Verwaltung Rheinland
 * Onepager Theme
 */

defined('ABSPATH') || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        Immo Verwaltung Rheinland — Werte erhalten. Werte entwickeln.
    </title>

    <meta
        name="description"
        content="Professionelle WEG-, Miet- und Sondereigentumsverwaltung in Hilden, Langenfeld, Monheim, Düsseldorf und im Rheinland."
    >

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >

    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap"
        rel="stylesheet"
    >

    <?php wp_head(); ?>

    <style>

        :root {
            --navy: #0A1E3D;
            --navy-2: #132A4E;
            --line-dark: #284169;
            --muted-dark: #AAB2C4;

            --gold: #C49A50;
            --gold-light: #D9BC85;
            --gold-deep: #A67F3A;
            --gold-glow: rgba(196,154,80,.30);

            --paper: #F5F5F5;
            --paper-2: #FFFFFF;
            --paper-line: #E1E2E4;

            --text: #12192A;
            --muted: #666B73;

            --radius: 10px;
            --maxw: 1180px;

            --display: 'Cinzel', serif;
            --body: 'Montserrat', -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            background: var(--paper);
            color: var(--text);
            font-family: var(--body);
            font-size: 16px;
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
            overflow-x: hidden;
        }

        img,
        svg {
            display: block;
            max-width: 100%;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        button {
            font: inherit;
        }

        p {
            margin: 0;
        }

        section {
            position: relative;
            scroll-margin-top: 90px;
        }

        .wrap {
            max-width: var(--maxw);
            margin: 0 auto;
            padding: 0 32px;
        }

        .section {
            padding: 96px 0;
        }

        .icon {
            width: 22px;
            height: 22px;
            stroke: currentColor;
            fill: none;
            stroke-width: 1.6;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        h1,
        h2,
        h3,
        h4 {
            margin: 0;
        }

        h1,
        h2,
        h3 {
            font-family: var(--display);
            font-weight: 600;
            letter-spacing: .01em;
        }

        h2 {
            font-size: clamp(26px,3.2vw,36px);
            line-height: 1.2;
        }

        h3 {
            font-size: 22px;
            line-height: 1.3;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .22em;
            text-transform: uppercase;
        }

        .eyebrow.on-dark {
            color: var(--gold);
        }

        .eyebrow.on-light {
            color: var(--gold-deep);
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 11px 22px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-family: var(--body);
            font-size: 14px;
            font-weight: 600;
            white-space: nowrap;
            transition:
                transform .18s,
                box-shadow .18s,
                background .18s,
                border-color .18s;
        }

        .btn-gold {
            background: var(--gold);
            color: #241A08;
        }

        .btn-gold:hover {
            background: var(--gold-light);
            transform: translateY(-1px);
            box-shadow: 0 8px 22px var(--gold-glow);
        }

        .btn-ghost-dark {
            background: transparent;
            color: #fff;
            border: 1px solid var(--line-dark);
        }

        .btn-ghost-dark:hover {
            border-color: var(--muted-dark);
        }

        .site-logo {
            display: block;
            width: 100%;
            height: auto;
        }

        /* ========================================
           WHITE BRAND STRIP
        ======================================== */

        .brand-strip {
            width: 100%;
            background: #fff;
            border-bottom: 1px solid #ececec;
        }

        .brand-strip-inner {
            max-width: var(--maxw);
            margin: 0 auto;
            padding: 24px 32px 22px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .brand-logo {
            width: 250px;
            max-width: 70vw;
        }

        /* ========================================
           NAV
        ======================================== */

        header.nav {
            position: sticky;
            top: 0;
            z-index: 100;
            background: rgba(10,30,61,.97);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--line-dark);
        }

        .nav-inner {
            max-width: var(--maxw);
            margin: 0 auto;
            padding: 15px 32px;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 34px;
        }

        .nav-links {
            display: flex;
            align-items: center;
        }

        .nav-links a {
            margin-right: 30px;
            color: var(--muted-dark);
            font-size: 14px;
            font-weight: 500;
            transition: color .2s;
        }

        .nav-links a:last-child {
            margin-right: 0;
        }

        .nav-links a:hover {
            color: #fff;
        }

        /* ========================================
           HERO
        ======================================== */

        .hero {
            overflow: hidden;
            padding: 82px 0 0;
            text-align: center;
            color: #fff;
            background:
                radial-gradient(
                    circle at 50% 17%,
                    rgba(196,154,80,.15),
                    transparent 38%
                ),
                var(--navy);
        }

        .hero::after {
            content: "";
            position: absolute;
            left: 50%;
            top: 70px;
            width: 700px;
            height: 500px;
            transform: translateX(-50%);
            background:
                radial-gradient(
                    circle,
                    rgba(196,154,80,.08),
                    transparent 70%
                );
            pointer-events: none;
        }

        .hero-inner {
            position: relative;
            z-index: 2;
            max-width: 820px;
            margin: 0 auto;
            padding: 0 24px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .hero h1 {
            width: 100%;
            max-width: 720px;
            margin-bottom: 20px;
            color: #fff;
            font-size: clamp(29px,4vw,42px);
            line-height: 1.24;
        }

        .hero p.lead {
            max-width: 630px;
            margin-bottom: 36px;
            color: var(--muted-dark);
            font-size: 16.5px;
            line-height: 1.7;
        }

        .hero p.lead strong {
            color: #fff;
            font-weight: 600;
        }

        .hero-ctas {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 14px;
            margin-bottom: 44px;
        }

        .pill-row {
            width: 100%;
            padding: 30px 0 38px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            gap: 12px;
            border-top: 1px solid var(--line-dark);
        }

        .pill {
            padding: 9px 17px;
            border: 1px solid var(--line-dark);
            border-radius: 999px;
            color: var(--muted-dark);
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .06em;
            text-transform: uppercase;
        }

        /* ========================================
           SECTION HEAD
        ======================================== */

        .section-head {
            max-width: 640px;
            margin-bottom: 52px;
        }

        .section-head.center {
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }

        .section-head .eyebrow {
            margin-bottom: 14px;
        }

        .section-head p.sub {
            margin-top: 16px;
            color: var(--muted);
            font-size: 16px;
            line-height: 1.6;
        }

        /* ========================================
           CARDS
        ======================================== */

        .card-grid3 {
            display: grid;
            grid-template-columns: repeat(3,1fr);
            gap: 22px;
        }

        .pcard {
            padding: 30px 26px;
            background: var(--paper-2);
            border: 1px solid var(--paper-line);
            border-radius: var(--radius);
            transition:
                transform .25s ease,
                box-shadow .25s ease;
        }

        .pcard:hover {
            transform: translateY(-3px);
            box-shadow: 0 16px 30px rgba(10,30,61,.07);
        }

        .pcard .icn {
            width: 46px;
            height: 46px;
            margin-bottom: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            background: var(--navy);
            color: var(--gold);
        }

        .pcard h4 {
            margin-bottom: 8px;
            font-family: var(--display);
            font-size: 17px;
            font-weight: 600;
        }

        .pcard p {
            color: var(--muted);
            font-size: 14.5px;
            line-height: 1.55;
        }

        /* ========================================
           SERVICES
        ======================================== */

        .services {
            background: var(--navy);
            color: #fff;
        }

        .services h2 {
            color: #fff;
        }

        .services .section-head p.sub {
            color: var(--muted-dark);
        }

        .svc-grid {
            display: grid;
            grid-template-columns: repeat(3,1fr);
            gap: 20px;
        }

        .svc-item {
            padding: 32px 28px;
            background: var(--navy-2);
            border: 1px solid var(--line-dark);
            border-radius: var(--radius);
        }

        .svc-item .icn {
            width: 30px;
            height: 30px;
            margin-bottom: 20px;
            color: var(--gold);
        }

        .svc-item h4 {
            margin-bottom: 12px;
            color: #fff;
            font-family: var(--display);
            font-size: 19px;
            font-weight: 600;
        }

        .svc-item p {
            margin-bottom: 20px;
            color: var(--muted-dark);
            font-size: 14px;
            line-height: 1.6;
        }

        .svc-item a.jump {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            color: var(--gold);
            font-size: 12.5px;
            font-weight: 700;
            letter-spacing: .04em;
        }

        /* ========================================
           DETAILS
        ======================================== */

        .detail {
            padding: 92px 0;
            border-top: 1px solid var(--paper-line);
        }

        .detail-grid {
            display: grid;
            grid-template-columns: 1.15fr .85fr;
            gap: 56px;
            align-items: start;
        }

        .detail.reverse .detail-grid > *:nth-child(1) {
            order: 2;
        }

        .detail.reverse .detail-grid > *:nth-child(2) {
            order: 1;
        }

        .kicker-row {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 16px;
        }

        .kicker {
            color: var(--gold-deep);
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .16em;
            text-transform: uppercase;
        }

        .detail h3 {
            margin-bottom: 10px;
        }

        .detail .dek {
            max-width: 480px;
            margin-bottom: 28px;
            color: var(--muted);
            font-size: 15.5px;
        }

        .leistungen {
            margin: 0 0 24px;
            padding: 0;
            display: grid;
            gap: 13px;
            list-style: none;
        }

        .leistungen li {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            color: var(--text);
            font-size: 14.5px;
            line-height: 1.5;
        }

        .leistungen li .icon {
            width: 17px;
            height: 17px;
            flex: none;
            margin-top: 2px;
            color: var(--gold-deep);
        }

        .footnote {
            margin-top: 6px;
            padding-top: 16px;
            border-top: 1px solid var(--paper-line);
            color: var(--muted);
            font-size: 12.5px;
            line-height: 1.6;
        }

        .info-card {
            position: sticky;
            top: 100px;
            padding: 30px 28px;
            background: var(--navy);
            color: #fff;
            border-radius: var(--radius);
        }

        .info-card .lbl {
            display: block;
            margin-bottom: 14px;
            color: var(--gold);
            font-size: 11.5px;
            font-weight: 700;
            letter-spacing: .14em;
            text-transform: uppercase;
        }

        .info-card p {
            color: var(--muted-dark);
            font-size: 14px;
            line-height: 1.65;
        }

        .info-card p + p {
            margin-top: 14px;
        }

        /* ========================================
           BENEFITS
        ======================================== */

        .card-grid6 {
            display: grid;
            grid-template-columns: repeat(3,1fr);
            gap: 2px;
            overflow: hidden;
            background: var(--paper-line);
            border: 1px solid var(--paper-line);
            border-radius: var(--radius);
        }

        .bcell {
            padding: 32px 26px;
            background: var(--paper-2);
        }

        .bcell .icn {
            width: 36px;
            height: 36px;
            margin-bottom: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--paper);
            color: var(--gold-deep);
            border-radius: 8px;
        }

        .bcell h4 {
            margin-bottom: 8px;
            font-family: var(--display);
            font-size: 16px;
            font-weight: 600;
        }

        .bcell p {
            color: var(--muted);
            font-size: 14px;
            line-height: 1.55;
        }

        /* ========================================
           PROCESS
        ======================================== */

        .process-grid {
            position: relative;
            display: grid;
            grid-template-columns: repeat(3,1fr);
            gap: 26px;
        }

        .process-grid::before {
            content: "";
            position: absolute;
            top: 25px;
            left: 16.6%;
            right: 16.6%;
            height: 1px;
            background: var(--paper-line);
        }

        .process-item {
            position: relative;
            z-index: 1;
            padding-top: 6px;
        }

        .process-item .n {
            width: 38px;
            height: 38px;
            margin-bottom: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: var(--navy);
            color: var(--gold);
            font-family: var(--display);
            font-size: 15px;
            font-weight: 600;
        }

        .process-item h4 {
            margin-bottom: 10px;
            font-family: var(--display);
            font-size: 17px;
            font-weight: 600;
        }

        .process-item p {
            color: var(--muted);
            font-size: 14px;
            line-height: 1.6;
        }

        /* ========================================
           FAQ
        ======================================== */

        .faq-list {
            max-width: 820px;
        }

        .faq-item {
            border-bottom: 1px solid var(--paper-line);
        }

        .faq-q {
            width: 100%;
            padding: 22px 4px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            border: none;
            background: none;
            cursor: pointer;
            color: var(--text);
            text-align: left;
            font-family: var(--display);
            font-size: 17px;
            font-weight: 600;
        }

        .faq-q .icon {
            width: 18px;
            height: 18px;
            flex: none;
            color: var(--gold-deep);
            transition: transform .25s ease;
        }

        .faq-item.open .faq-q .icon {
            transform: rotate(45deg);
        }

        .faq-a {
            max-height: 0;
            overflow: hidden;
            transition: max-height .35s ease;
        }

        .faq-a-inner {
            max-width: 700px;
            padding: 0 4px 24px;
            color: var(--muted);
            font-size: 14.5px;
            line-height: 1.65;
        }

        /* ========================================
           CTA
        ======================================== */

        .cta {
            background: var(--navy);
            color: #fff;
        }

        .cta-grid {
            display: grid;
            grid-template-columns: 1.2fr .8fr;
            gap: 56px;
            align-items: start;
        }

        .cta h2 {
            margin-bottom: 18px;
            color: #fff;
        }

        .cta p.lead {
            max-width: 520px;
            margin-bottom: 34px;
            color: var(--muted-dark);
            font-size: 15.5px;
            line-height: 1.6;
        }

        .steps {
            display: grid;
            gap: 16px;
        }

        .step {
            display: flex;
            align-items: flex-start;
            gap: 14px;
        }

        .step .n {
            width: 28px;
            height: 28px;
            flex: none;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 1px solid var(--line-dark);
            border-radius: 50%;
            background: var(--navy-2);
            color: var(--gold);
            font-size: 12.5px;
            font-weight: 700;
        }

        .step p {
            padding-top: 3px;
            color: #fff;
            font-size: 14.5px;
        }

        .contact-card {
            padding: 32px;
            background: var(--navy-2);
            border: 1px solid var(--line-dark);
            border-radius: var(--radius);
        }

        .contact-card .lbl {
            margin-bottom: 6px;
            color: var(--muted-dark);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .14em;
            text-transform: uppercase;
        }

        .contact-card .name {
            margin-bottom: 2px;
            color: #fff;
            font-family: var(--display);
            font-size: 18px;
            font-weight: 600;
        }

        .contact-card .role {
            margin-bottom: 18px;
            color: var(--muted-dark);
            font-size: 13px;
        }

        .contact-card hr {
            margin: 16px 0;
            border: none;
            border-top: 1px solid var(--line-dark);
        }

        .contact-line {
            margin-bottom: 13px;
            display: flex;
            align-items: flex-start;
            gap: 11px;
            color: #fff;
            font-size: 14px;
        }

        a.contact-line:hover {
            color: var(--gold-light);
        }

        .contact-line .icon {
            width: 16px;
            height: 16px;
            flex: none;
            margin-top: 3px;
            color: var(--gold);
        }

        .contact-card .btn {
            width: 100%;
            margin-top: 12px;
        }

        /* ========================================
           FOOTER
        ======================================== */

        footer {
            background: #fff;
            color: var(--muted);
            border-top: 1px solid var(--paper-line);
        }

        .footer-brand {
            width: 100%;
            padding: 30px 0 24px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .footer-logo {
            width: 220px;
            max-width: 70vw;
        }

        .footer-bottom {
            border-top: 1px solid var(--paper-line);
            background: var(--navy);
            color: var(--muted-dark);
        }

        .foot-inner {
            min-height: 78px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 22px;
        }

        .foot-links {
            display: flex;
            flex-wrap: wrap;
        }

        .foot-links a {
            margin-right: 22px;
            font-size: 13px;
        }

        .foot-links a:last-child {
            margin-right: 0;
        }

        .foot-links a:hover {
            color: #fff;
        }

        .foot-legal {
            font-size: 12px;
        }

        /* ========================================
           REVEAL
        ======================================== */

        .reveal {
            opacity: 1;
            transform: none;
        }

        body.io .reveal {
            opacity: 0;
            transform: translateY(18px);
            transition:
                opacity .7s ease,
                transform .7s ease;
        }

        body.io .reveal.in {
            opacity: 1;
            transform: none;
        }

        /* ========================================
           TABLET
        ======================================== */

        @media (max-width:1080px) {

            .card-grid6 {
                grid-template-columns: repeat(2,1fr);
            }
        }

        @media (max-width:920px) {

            .detail-grid,
            .cta-grid {
                grid-template-columns: 1fr;
                gap: 36px;
            }

            .detail.reverse .detail-grid > *:nth-child(1),
            .detail.reverse .detail-grid > *:nth-child(2) {
                order: initial;
            }

            .info-card {
                position: static;
            }
        }

        @media (max-width:860px) {

            .nav-links {
                display: none;
            }

            .nav-inner {
                justify-content: center;
            }

            .card-grid3,
            .svc-grid,
            .process-grid {
                grid-template-columns: 1fr;
            }

            .card-grid6 {
                grid-template-columns: 1fr;
            }

            .process-grid::before {
                display: none;
            }
        }

        /* ========================================
           MOBILE
        ======================================== */

        @media (max-width:600px) {

            .wrap {
                padding: 0 20px;
            }

            .section,
            .detail {
                padding: 68px 0;
            }

            h1,
            h2,
            h3,
            h4 {
                max-width: 100%;
                word-break: normal;
                overflow-wrap: break-word;
                hyphens: auto;
            }

            h2 {
                font-size: 27px;
                line-height: 1.25;
            }

            h3 {
                font-size: 20px;
                line-height: 1.3;
            }

            .brand-strip-inner {
                padding: 18px 20px 17px;
            }

            .brand-logo {
                width: 205px;
                max-width: 72vw;
            }

            .nav-inner {
                padding: 10px 16px;
            }

            .nav-cta.btn {
                width: 100%;
                max-width: 250px;
                padding: 10px 14px;
                font-size: 12px;
            }

            .hero {
                padding-top: 52px;
            }

            .hero-inner {
                width: 100%;
                max-width: 100%;
                padding: 0 20px;
            }

            .hero h1 {
                width: 100%;
                max-width: 100%;
                font-size: 22px;
                line-height: 1.32;
                letter-spacing: 0;
                margin-bottom: 20px;
                overflow-wrap: normal;
                word-break: normal;
                hyphens: manual;
            }

            .hero p.lead {
                margin-bottom: 30px;
                font-size: 15px;
                line-height: 1.65;
            }

            .hero-ctas {
                width: 100%;
                margin-bottom: 34px;
                flex-direction: column;
            }

            .hero-ctas .btn {
                width: 100%;
            }

            .pill-row {
                padding: 25px 0 31px;
                gap: 8px;
            }

            .pill {
                padding: 8px 11px;
                font-size: 10.5px;
                letter-spacing: .035em;
                line-height: 1.4;
            }

            .section-head {
                margin-bottom: 36px;
            }

            .section-head p.sub {
                font-size: 14.5px;
            }

            .pcard,
            .svc-item,
            .bcell {
                padding: 25px 22px;
            }

            .detail-grid {
                gap: 26px;
            }

            .detail .dek {
                font-size: 14.5px;
            }

            .leistungen li {
                font-size: 14px;
            }

            .info-card {
                padding: 25px 22px;
            }

            .faq-q {
                padding: 20px 0;
                font-size: 15.5px;
                line-height: 1.45;
            }

            .faq-a-inner {
                padding-left: 0;
                padding-right: 0;
            }

            .cta-grid {
                gap: 36px;
            }

            .contact-card {
                padding: 25px 20px;
            }

            .contact-line {
                font-size: 13.5px;
                word-break: break-word;
            }

            .footer-brand {
                padding: 24px 0 20px;
            }

            .footer-logo {
                width: 185px;
            }

            .foot-inner {
                min-height: 0;
                padding-top: 26px;
                padding-bottom: 26px;
                flex-direction: column;
                align-items: center;
                text-align: center;
            }

            .foot-links {
                justify-content: center;
                gap: 13px 18px;
            }

            .foot-links a {
                margin-right: 0;
            }
        }

        @media (max-width:390px) {

            .brand-logo {
                width: 185px;
            }

            .hero h1 {
                font-size: 20px;
                line-height: 1.34;
            }

            .pill {
                padding: 7px 9px;
                font-size: 9.8px;
            }
        }

    </style>

</head>


<body <?php body_class(); ?>>

<?php wp_body_open(); ?>


<!-- WHITE BRAND STRIP -->

<div class="brand-strip">

    <div class="brand-strip-inner">

        <img
            class="site-logo brand-logo"
            src="<?php echo esc_url(get_template_directory_uri()); ?>/logo_immo_verwaltung.jpg"
            alt="Immo Verwaltung Rheinland"
        >

    </div>

</div>


<!-- NAV -->

<header class="nav">

    <div class="nav-inner">

        <nav class="nav-links">

            <a href="#leistungen">
                Leistungen
            </a>

            <a href="#vorteile">
                Vorteile
            </a>

            <a href="#ablauf">
                Ablauf
            </a>

            <a href="#faq">
                FAQ
            </a>

        </nav>

        <a
            class="btn btn-gold nav-cta"
            href="#kontakt"
        >
            Beratung anfragen
        </a>

    </div>

</header>


<main id="top">


    <!-- HERO -->

    <section class="hero">

        <div class="hero-inner">

            <h1>
                Professionelle WEG-, Miet- und
                Sondereigentums&shy;verwaltung im Rheinland
            </h1>

            <p class="lead">
                Wir übernehmen die kaufmännische, technische und rechtliche Verwaltung
                Ihrer Immobilie – zuverlässig, transparent und
                <strong>mit persönlichen Ansprechpartnern vor Ort.</strong>
            </p>

            <div class="hero-ctas">

                <a
                    href="#kontakt"
                    class="btn btn-gold"
                >
                    Kostenlose Erstberatung
                </a>

                <a
                    href="#leistungen"
                    class="btn btn-ghost-dark"
                >
                    Leistungen ansehen
                </a>

            </div>

            <div class="pill-row">

                <span class="pill">
                    WEG-Verwaltung
                </span>

                <span class="pill">
                    Mietverwaltung
                </span>

                <span class="pill">
                    Sondereigentumsverwaltung
                </span>

                <span class="pill">
                    Hilden · Langenfeld · Monheim · Düsseldorf &amp; Rheinland
                </span>

            </div>

        </div>

    </section>


    <!-- AUSGANGSLAGE -->

    <section class="section" id="ausgangslage">

        <div class="wrap">

            <div class="section-head reveal">

                <span class="eyebrow on-light">
                    Ausgangslage
                </span>

                <h2>
                    Eine Immobilie verwaltet sich nicht von selbst
                </h2>

                <p class="sub">
                    Gesetzliche Anforderungen, laufende Instandhaltung und die
                    Kommunikation mit Eigentümern und Mietern binden viel Zeit –
                    und erfordern Fachwissen, das sich stetig weiterentwickelt.
                </p>

            </div>


            <div class="card-grid3">

                <div class="pcard reveal">

                    <div class="icn">

                        <svg class="icon" viewBox="0 0 24 24">

                            <path d="M14 3v4a1 1 0 0 0 1 1h4" />

                            <path d="M17 21H7a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h7l5 5v11a2 2 0 0 1-2 2z" />

                        </svg>

                    </div>

                    <h4>
                        Rechtliche Anforderungen
                    </h4>

                    <p>
                        WEG- und Mietrecht ändern sich – Fristen, Beschlüsse und
                        Abrechnungen müssen korrekt eingehalten werden.
                    </p>

                </div>


                <div class="pcard reveal">

                    <div class="icn">

                        <svg class="icon" viewBox="0 0 24 24">

                            <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z" />

                        </svg>

                    </div>

                    <h4>
                        Instandhaltungsstau
                    </h4>

                    <p>
                        Ohne vorausschauende Planung häufen sich Reparaturen –
                        und mit ihnen der Werteverlust der Immobilie.
                    </p>

                </div>


                <div class="pcard reveal">

                    <div class="icn">

                        <svg class="icon" viewBox="0 0 24 24">

                            <path d="M21 11.5a8.38 8.38 0 0 1-8.5 8.4 8.5 8.5 0 0 1-4-1L3 20l1.1-4.5A8.38 8.38 0 0 1 3 11.5 8.5 8.5 0 0 1 12 3a8.5 8.5 0 0 1 9 8.5z" />

                        </svg>

                    </div>

                    <h4>
                        Kommunikationsaufwand
                    </h4>

                    <p>
                        Eigentümerversammlungen, Mieteranfragen und Dienstleister –
                        ohne klare Prozesse gehen Zeit und Übersicht verloren.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- LEISTUNGEN -->

    <section class="section services" id="leistungen">

        <div class="wrap">

            <div class="section-head reveal">

                <span class="eyebrow on-dark">
                    Unsere Leistungen
                </span>

                <h2>
                    Drei Verwaltungsbereiche, ein Ansprechpartner
                </h2>

                <p class="sub">
                    Ob Eigentümergemeinschaft, vermietete Einheit oder einzelne
                    Eigentumswohnung – wir übernehmen die Verwaltung, die zu Ihrer
                    Immobilie passt.
                </p>

            </div>


            <div class="svc-grid">

                <div class="svc-item reveal">

                    <svg class="icon icn" viewBox="0 0 24 24">

                        <rect x="5" y="3" width="14" height="18" rx="1" />

                        <path d="M9 8h2M13 8h2M9 12h2M13 12h2M9 16h2M13 16h2" />

                    </svg>

                    <h4>
                        WEG-Verwaltung
                    </h4>

                    <p>
                        Kaufmännische, technische und rechtliche Verwaltung Ihrer
                        Wohnungseigentümergemeinschaft.
                    </p>

                    <a class="jump" href="#weg">
                        Details →
                    </a>

                </div>


                <div class="svc-item reveal">

                    <svg class="icon icn" viewBox="0 0 24 24">

                        <circle cx="8" cy="15" r="4" />

                        <path d="M10.5 12.5 20 3M17 6l3 3M14 9l2 2" />

                    </svg>

                    <h4>
                        Mietverwaltung
                    </h4>

                    <p>
                        Laufende Verwaltung vermieteter Wohn- und Gewerbeeinheiten –
                        von Mietvertrag bis Nebenkostenabrechnung.
                    </p>

                    <a class="jump" href="#miet">
                        Details →
                    </a>

                </div>


                <div class="svc-item reveal">

                    <svg class="icon icn" viewBox="0 0 24 24">

                        <rect x="7" y="3" width="10" height="18" rx="1" />

                        <circle cx="14" cy="12" r="1.2" fill="currentColor" stroke="none" />

                    </svg>

                    <h4>
                        Sondereigentumsverwaltung
                    </h4>

                    <p>
                        Individuelle Verwaltung einzelner Eigentumswohnungen
                        im Auftrag der Eigentümerin oder des Eigentümers.
                    </p>

                    <a class="jump" href="#sonder">
                        Details →
                    </a>

                </div>

            </div>

        </div>

    </section>


    <!-- WEG -->

    <section class="detail" id="weg">

        <div class="wrap">

            <div class="detail-grid">

                <div class="reveal">

                    <div class="kicker-row">
                        <span class="kicker">
                            WEG-Verwaltung
                        </span>
                    </div>

                    <h3>
                        Professionelle Verwaltung Ihrer Eigentümergemeinschaft
                    </h3>

                    <p class="dek">
                        Wir übernehmen die kaufmännische, technische und rechtliche
                        Verwaltung Ihrer Wohnungseigentümergemeinschaft – zuverlässig,
                        transparent und den gesetzlichen Anforderungen entsprechend.
                    </p>

                    <ul class="leistungen">

                        <li>
                            <svg class="icon" viewBox="0 0 24 24">
                                <path d="M20 6 9 17l-5-5" />
                            </svg>
                            Vorbereitung und Durchführung von Eigentümerversammlungen
                        </li>

                        <li>
                            <svg class="icon" viewBox="0 0 24 24">
                                <path d="M20 6 9 17l-5-5" />
                            </svg>
                            Umsetzung gefasster Beschlüsse
                        </li>

                        <li>
                            <svg class="icon" viewBox="0 0 24 24">
                                <path d="M20 6 9 17l-5-5" />
                            </svg>
                            Erstellung von Wirtschaftsplänen und Jahresabrechnungen
                        </li>

                        <li>
                            <svg class="icon" viewBox="0 0 24 24">
                                <path d="M20 6 9 17l-5-5" />
                            </svg>
                            Verwaltung der Instandhaltungsrücklage
                        </li>

                        <li>
                            <svg class="icon" viewBox="0 0 24 24">
                                <path d="M20 6 9 17l-5-5" />
                            </svg>
                            Laufende Kommunikation mit Eigentümern und Dienstleistern
                        </li>

                    </ul>

                    <p class="footnote">
                        Nicht enthalten: bauliche Sonderprojekte und rechtliche
                        Vertretung vor Gericht; hierfür vermitteln wir bei Bedarf an
                        spezialisierte Partner.
                    </p>

                </div>


                <div class="reveal">

                    <div class="info-card">

                        <span class="lbl">
                            Gut zu wissen
                        </span>

                        <p>
                            Seit der WEG-Reform 2020 gelten für
                            Eigentümergemeinschaften erweiterte Anforderungen –
                            etwa bei Beschlussfassung und Rücklagenbildung.
                        </p>

                        <p>
                            Wir sorgen dafür, dass Ihre Gemeinschaft diese Anforderungen
                            zuverlässig erfüllt und behalten gesetzliche Änderungen
                            für Sie im Blick.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- MIETVERWALTUNG -->

    <section class="detail reverse" id="miet">

        <div class="wrap">

            <div class="detail-grid">

                <div class="reveal">

                    <div class="info-card">

                        <span class="lbl">
                            Gut zu wissen
                        </span>

                        <p>
                            Eine korrekte, fristgerechte Nebenkostenabrechnung ist
                            gesetzlich vorgeschrieben und häufig Grund für Streit
                            zwischen Eigentümer und Mieter.
                        </p>

                        <p>
                            Wir übernehmen die Erstellung und stehen sowohl Ihnen als
                            auch Ihren Mieterinnen und Mietern als Ansprechpartner zur
                            Verfügung.
                        </p>

                    </div>

                </div>


                <div class="reveal">

                    <div class="kicker-row">
                        <span class="kicker">
                            Mietverwaltung
                        </span>
                    </div>

                    <h3>
                        Verlässliche Verwaltung vermieteter Immobilien
                    </h3>

                    <p class="dek">
                        Wir übernehmen die laufende kaufmännische und technische
                        Verwaltung Ihrer vermieteten Wohn- oder Gewerbeeinheiten –
                        von der Mietvertragsverwaltung bis zur Nebenkostenabrechnung.
                    </p>

                    <ul class="leistungen">

                        <li>
                            <svg class="icon" viewBox="0 0 24 24">
                                <path d="M20 6 9 17l-5-5" />
                            </svg>
                            Verwaltung und Pflege der Mietverträge
                        </li>

                        <li>
                            <svg class="icon" viewBox="0 0 24 24">
                                <path d="M20 6 9 17l-5-5" />
                            </svg>
                            Erstellung der jährlichen Nebenkostenabrechnung
                        </li>

                        <li>
                            <svg class="icon" viewBox="0 0 24 24">
                                <path d="M20 6 9 17l-5-5" />
                            </svg>
                            Kommunikation mit Mieterinnen und Mietern
                        </li>

                        <li>
                            <svg class="icon" viewBox="0 0 24 24">
                                <path d="M20 6 9 17l-5-5" />
                            </svg>
                            Koordination von Instandhaltungs- und Reparaturmaßnahmen
                        </li>

                        <li>
                            <svg class="icon" viewBox="0 0 24 24">
                                <path d="M20 6 9 17l-5-5" />
                            </svg>
                            Unterstützung bei Mietanpassungen im gesetzlichen Rahmen
                        </li>

                    </ul>

                    <p class="footnote">
                        Nicht enthalten: Maklertätigkeiten bei Neuvermietung; hierfür
                        arbeiten wir bei Bedarf mit lokalen Partnern zusammen.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- SONDEREIGENTUM -->

    <section class="detail" id="sonder">

        <div class="wrap">

            <div class="detail-grid">

                <div class="reveal">

                    <div class="kicker-row">
                        <span class="kicker">
                            Sondereigentumsverwaltung
                        </span>
                    </div>

                    <h3>
                        Verwaltung einzelner Eigentumswohnungen
                    </h3>

                    <p class="dek">
                        Für Eigentümerinnen und Eigentümer einzelner Wohnungen
                        übernehmen wir die individuelle Verwaltung im Auftrag –
                        unabhängig von der WEG-Verwaltung der Gesamtanlage.
                    </p>

                    <ul class="leistungen">

                        <li>
                            <svg class="icon" viewBox="0 0 24 24">
                                <path d="M20 6 9 17l-5-5" />
                            </svg>
                            Prüfung von Abrechnungen und Beschlüssen der Eigentümergemeinschaft
                        </li>

                        <li>
                            <svg class="icon" viewBox="0 0 24 24">
                                <path d="M20 6 9 17l-5-5" />
                            </svg>
                            Kommunikation mit der WEG-Verwaltung
                        </li>

                        <li>
                            <svg class="icon" viewBox="0 0 24 24">
                                <path d="M20 6 9 17l-5-5" />
                            </svg>
                            Verwaltung bei Vermietung der Einheit
                        </li>

                        <li>
                            <svg class="icon" viewBox="0 0 24 24">
                                <path d="M20 6 9 17l-5-5" />
                            </svg>
                            Ansprechpartner bei Fragen rund um Ihr Sondereigentum
                        </li>

                    </ul>

                    <p class="footnote">
                        Besonders geeignet für Eigentümerinnen und Eigentümer,
                        die nicht selbst am Wohnort der Immobilie leben.
                    </p>

                </div>


                <div class="reveal">

                    <div class="info-card">

                        <span class="lbl">
                            Gut zu wissen
                        </span>

                        <p>
                            Auch wenn für die Gesamtanlage bereits eine WEG-Verwaltung
                            bestellt ist, können Sie Ihr Sondereigentum zusätzlich
                            durch uns betreuen lassen.
                        </p>

                        <p>
                            So haben Sie einen persönlichen Ansprechpartner, der
                            ausschließlich Ihre Interessen als Eigentümer im Blick hat.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- VORTEILE -->

    <section class="section" id="vorteile">

        <div class="wrap">

            <div class="section-head reveal">

                <span class="eyebrow on-light">
                    Warum wir
                </span>

                <h2>
                    Werte erhalten. Werte entwickeln.
                </h2>

            </div>


            <div class="card-grid6 reveal">

                <div class="bcell">

                    <div class="icn">

                        <svg class="icon" viewBox="0 0 24 24">

                            <path d="M12 21s7-6.5 7-11a7 7 0 1 0-14 0c0 4.5 7 11 7 11z" />

                            <circle cx="12" cy="10" r="2.5" />

                        </svg>

                    </div>

                    <h4>
                        Lokale Präsenz im Rheinland
                    </h4>

                    <p>
                        Wir kennen den Immobilienmarkt und die Besonderheiten
                        der Region im Rheinland.
                    </p>

                </div>


                <div class="bcell">

                    <div class="icn">

                        <svg class="icon" viewBox="0 0 24 24">

                            <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7-10-7-10-7z" />

                            <circle cx="12" cy="12" r="3" />

                        </svg>

                    </div>

                    <h4>
                        Transparente Kommunikation
                    </h4>

                    <p>
                        Klare Abrechnungen und verständliche Informationen
                        statt Verwaltungs-Fachchinesisch.
                    </p>

                </div>


                <div class="bcell">

                    <div class="icn">

                        <svg class="icon" viewBox="0 0 24 24">

                            <rect x="3" y="4" width="18" height="13" rx="2" />

                            <path d="M8 21h8M12 17v4" />

                        </svg>

                    </div>

                    <h4>
                        Digitale Prozesse
                    </h4>

                    <p>
                        Dokumente und Abrechnungen digital verfügbar –
                        für Eigentümer und Mieter jederzeit einsehbar.
                    </p>

                </div>


                <div class="bcell">

                    <div class="icn">

                        <svg class="icon" viewBox="0 0 24 24">

                            <path d="M12 2 3 6v6c0 5 4 8.5 9 10 5-1.5 9-5 9-10V6l-9-4z" />

                        </svg>

                    </div>

                    <h4>
                        Rechtssichere Verwaltung
                    </h4>

                    <p>
                        Verwaltung nach aktuellem WEG- und Mietrecht –
                        Fristen und Pflichten fest im Blick.
                    </p>

                </div>


                <div class="bcell">

                    <div class="icn">

                        <svg class="icon" viewBox="0 0 24 24">

                            <circle cx="12" cy="8" r="4" />

                            <path d="M4 21c0-4.4 3.6-7 8-7s8 2.6 8 7" />

                        </svg>

                    </div>

                    <h4>
                        Fester Ansprechpartner
                    </h4>

                    <p>
                        Ein Ansprechpartner kennt Ihre Immobilie,
                        Ihre Historie und Ihre Anliegen.
                    </p>

                </div>


                <div class="bcell">

                    <div class="icn">

                        <svg class="icon" viewBox="0 0 24 24">

                            <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z" />

                        </svg>

                    </div>

                    <h4>
                        Nachhaltiger Werterhalt
                    </h4>

                    <p>
                        Vorausschauende Instandhaltungsplanung
                        statt Reparatur erst im Ernstfall.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- ABLAUF -->

    <section class="section process" id="ablauf">

        <div class="wrap">

            <div class="section-head center reveal">

                <span class="eyebrow on-light">
                    Ablauf
                </span>

                <h2>
                    So beginnt die Zusammenarbeit
                </h2>

            </div>


            <div class="process-grid reveal">

                <div class="process-item">

                    <div class="n">
                        1
                    </div>

                    <h4>
                        Kontaktaufnahme &amp; Bestandsaufnahme
                    </h4>

                    <p>
                        Wir lernen Ihre Immobilie und Ihre Anforderungen kennen.
                    </p>

                </div>


                <div class="process-item">

                    <div class="n">
                        2
                    </div>

                    <h4>
                        Individuelles Angebot
                    </h4>

                    <p>
                        Sie erhalten ein auf Ihre Immobilie zugeschnittenes,
                        transparentes Angebot.
                    </p>

                </div>


                <div class="process-item">

                    <div class="n">
                        3
                    </div>

                    <h4>
                        Übergabe &amp; Start der Verwaltung
                    </h4>

                    <p>
                        Geordnete Übernahme aller Unterlagen
                        und Start der laufenden Betreuung.
                    </p>

                </div>

            </div>

        </div>

    </section>


    <!-- FAQ -->

    <section
        class="section"
        id="faq"
        style="background:var(--paper-2);"
    >

        <div class="wrap">

            <div class="section-head reveal">

                <span class="eyebrow on-light">
                    Häufige Fragen
                </span>

                <h2>
                    Was Eigentümerinnen und Eigentümer uns oft fragen
                </h2>

            </div>


            <div class="faq-list reveal">

                <div class="faq-item open">

                    <button class="faq-q" type="button">

                        <span>
                            Was kostet eine WEG- oder Mietverwaltung?
                        </span>

                        <svg class="icon" viewBox="0 0 24 24">
                            <path d="M12 5v14M5 12h14" />
                        </svg>

                    </button>

                    <div class="faq-a">

                        <div class="faq-a-inner">
                            Die Kosten richten sich nach Größe, Zustand und Umfang
                            der zu verwaltenden Immobilie. Nach einer ersten
                            Bestandsaufnahme erstellen wir Ihnen ein individuelles,
                            transparentes Angebot.
                        </div>

                    </div>

                </div>


                <div class="faq-item">

                    <button class="faq-q" type="button">

                        <span>
                            Wie läuft ein Verwalterwechsel ab?
                        </span>

                        <svg class="icon" viewBox="0 0 24 24">
                            <path d="M12 5v14M5 12h14" />
                        </svg>

                    </button>

                    <div class="faq-a">

                        <div class="faq-a-inner">
                            Wir übernehmen die Kommunikation mit der bisherigen
                            Verwaltung, sichten die vorhandenen Unterlagen und sorgen
                            für einen geordneten Übergang – möglichst ohne
                            Unterbrechung für Eigentümer und Mieter.
                        </div>

                    </div>

                </div>


                <div class="faq-item">

                    <button class="faq-q" type="button">

                        <span>
                            Übernehmen Sie auch einzelne Eigentumswohnungen
                            (Sondereigentum)?
                        </span>

                        <svg class="icon" viewBox="0 0 24 24">
                            <path d="M12 5v14M5 12h14" />
                        </svg>

                    </button>

                    <div class="faq-a">

                        <div class="faq-a-inner">
                            Ja. Auch wenn für die Gesamtanlage bereits eine
                            WEG-Verwaltung besteht, können wir Ihre einzelne Einheit
                            zusätzlich für Sie betreuen.
                        </div>

                    </div>

                </div>


                <div class="faq-item">

                    <button class="faq-q" type="button">

                        <span>
                            In welchen Regionen sind Sie tätig?
                        </span>

                        <svg class="icon" viewBox="0 0 24 24">
                            <path d="M12 5v14M5 12h14" />
                        </svg>

                    </button>

                    <div class="faq-a">

                        <div class="faq-a-inner">
                            Unser Schwerpunkt liegt auf dem Rheinland, mit Hilden,
                            Langenfeld, Monheim und Düsseldorf. Sprechen Sie uns gerne
                            auf Ihre konkrete Immobilie an.
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- CONTACT -->

    <section class="section cta" id="kontakt">

        <div class="wrap">

            <div class="cta-grid">

                <div class="reveal">

                    <span
                        class="eyebrow on-dark"
                        style="margin-bottom:20px;"
                    >
                        Nächste Schritte
                    </span>

                    <h2>
                        Lernen wir Ihre Immobilie kennen.
                    </h2>

                    <p class="lead">
                        Ob Eigentümergemeinschaft, vermietete Einheit oder einzelne
                        Eigentumswohnung – wir freuen uns auf ein unverbindliches
                        Erstgespräch.
                    </p>

                    <div class="steps">

                        <div class="step">

                            <span class="n">
                                1
                            </span>

                            <p>
                                Kontaktaufnahme &amp; Bestandsaufnahme
                            </p>

                        </div>


                        <div class="step">

                            <span class="n">
                                2
                            </span>

                            <p>
                                Individuelles Angebot
                            </p>

                        </div>


                        <div class="step">

                            <span class="n">
                                3
                            </span>

                            <p>
                                Übergabe &amp; Start der Verwaltung
                            </p>

                        </div>

                    </div>

                </div>


                <div class="reveal">

                    <div class="contact-card">

                        <div class="lbl">
                            Ansprechpartner
                        </div>

                        <div class="name">
                            Gabriel Czajor
                        </div>

                        <div class="role">
                            Geschäftsführer
                        </div>

                        <hr>

                        <div class="contact-line">

                            <svg class="icon" viewBox="0 0 24 24">

                                <path d="M12 21s7-6.5 7-11a7 7 0 1 0-14 0c0 4.5 7 11 7 11z" />

                                <circle cx="12" cy="10" r="2.5" />

                            </svg>

                            <span>
                                Klotzstraße 19<br>
                                40721 Hilden
                            </span>

                        </div>


                        <a
                            href="tel:+4921034937240"
                            class="contact-line"
                        >

                            <svg class="icon" viewBox="0 0 24 24">

                                <path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3.1-8.6A2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.3 1.8.6 2.7a2 2 0 0 1-.4 2.1L8 9.9a16 16 0 0 0 6 6l1.4-1.4a2 2 0 0 1 2.1-.4c.9.3 1.8.5 2.7.6a2 2 0 0 1 1.8 2z" />

                            </svg>

                            <span>
                                02103-4937240
                            </span>

                        </a>


                        <a
                            href="tel:+491627487916"
                            class="contact-line"
                        >

                            <svg class="icon" viewBox="0 0 24 24">

                                <path d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6 19.8 19.8 0 0 1-3.1-8.6A2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1.9.3 1.8.6 2.7a2 2 0 0 1-.4 2.1L8 9.9a16 16 0 0 0 6 6l1.4-1.4a2 2 0 0 1 2.1-.4c.9.3 1.8.5 2.7.6a2 2 0 0 1 1.8 2z" />

                            </svg>

                            <span>
                                0162-7487916
                            </span>

                        </a>


                        <a
                            href="mailto:kontakt@immo-verwaltung.de"
                            class="contact-line"
                        >

                            <svg class="icon" viewBox="0 0 24 24">

                                <rect x="2" y="4" width="20" height="16" rx="2" />

                                <path d="m2 7 10 6 10-6" />

                            </svg>

                            <span>
                                kontakt@immo-verwaltung.de
                            </span>

                        </a>


                        <a
                            href="mailto:kontakt@immo-verwaltung.de"
                            class="btn btn-gold"
                        >
                            Beratung anfragen
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>


</main>


<!-- FOOTER -->

<footer>

    <div class="footer-brand">

        <img
            class="site-logo footer-logo"
            src="<?php echo esc_url(get_template_directory_uri()); ?>/logo_immo_verwaltung.jpg"
            alt="Immo Verwaltung Rheinland"
        >

    </div>


    <div class="footer-bottom">

        <div class="wrap foot-inner">

            <div class="foot-links">

                <a href="#leistungen">
                    Leistungen
                </a>

                <a href="#vorteile">
                    Vorteile
                </a>

                <a href="#ablauf">
                    Ablauf
                </a>

                <a href="#faq">
                    FAQ
                </a>

            </div>


            <div class="foot-legal">
                © <?php echo esc_html(date('Y')); ?>
                Immo Verwaltung Rheinland
                · Impressum
                · Datenschutz
            </div>

        </div>

    </div>

</footer>


<script>

    document
        .querySelectorAll('.faq-item')
        .forEach(function(item) {

            var question =
                item.querySelector('.faq-q');

            var answer =
                item.querySelector('.faq-a');


            function setState(open) {

                if (open) {

                    answer.style.maxHeight =
                        answer.scrollHeight + 'px';

                    item.classList.add('open');

                } else {

                    answer.style.maxHeight = '0px';

                    item.classList.remove('open');

                }

            }


            setState(
                item.classList.contains('open')
            );


            question.addEventListener(
                'click',
                function() {

                    setState(
                        !item.classList.contains('open')
                    );

                }
            );

        });


    window.addEventListener(
        'resize',
        function() {

            document
                .querySelectorAll('.faq-item.open .faq-a')
                .forEach(function(answer) {

                    answer.style.maxHeight =
                        answer.scrollHeight + 'px';

                });

        }
    );


    var reduceMotion =
        window.matchMedia &&
        window
            .matchMedia('(prefers-reduced-motion: reduce)')
            .matches;


    if (
        'IntersectionObserver' in window &&
        !reduceMotion
    ) {

        document.body.classList.add('io');


        var observer =
            new IntersectionObserver(

                function(entries) {

                    entries.forEach(
                        function(entry) {

                            if (entry.isIntersecting) {

                                entry.target
                                    .classList
                                    .add('in');

                                observer
                                    .unobserve(
                                        entry.target
                                    );

                            }

                        }
                    );

                },

                {
                    threshold: 0.12
                }

            );


        document
            .querySelectorAll('.reveal')
            .forEach(function(element) {

                observer.observe(element);

            });

    }

</script>


<?php wp_footer(); ?>


</body>
</html>
