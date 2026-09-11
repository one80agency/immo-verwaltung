<?php
/**
 * Standard Page Template
 * Immo Verwaltung Rheinland
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

    <?php wp_head(); ?>

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

    <style>

        :root {
            --navy: #0A1E3D;
            --navy-2: #132A4E;
            --line-dark: #284169;
            --muted-dark: #AAB2C4;

            --gold: #C49A50;
            --gold-light: #D9BC85;

            --paper: #F5F5F5;
            --paper-line: #E1E2E4;

            --text: #12192A;
            --muted: #666B73;

            --maxw: 1180px;

            --display: 'Cinzel', serif;

            --body:
                'Montserrat',
                -apple-system,
                BlinkMacSystemFont,
                "Segoe UI",
                sans-serif;
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
            line-height: 1.7;
            -webkit-font-smoothing: antialiased;
            overflow-x: hidden;
        }

        img {
            display: block;
            max-width: 100%;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .wrap {
            width: 100%;
            max-width: var(--maxw);
            margin: 0 auto;
            padding: 0 32px;
        }

        /* LOGO */

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
            height: auto;
        }

        /* NAV */

        .nav {
            background: var(--navy);
            border-bottom: 1px solid var(--line-dark);
        }

        .nav-inner {
            max-width: var(--maxw);
            margin: 0 auto;
            padding: 15px 32px;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            gap: 30px;
        }

        .nav a {
            color: var(--muted-dark);
            font-size: 14px;
            font-weight: 500;
        }

        .nav a:hover {
            color: #fff;
        }

        .back-home {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 10px 20px;
            background: var(--gold);
            color: #241A08 !important;
            border-radius: 4px;
            font-weight: 600 !important;
        }

        .back-home:hover {
            background: var(--gold-light);
        }

        /* PAGE */

        .page-hero {
            padding: 72px 0 52px;
            background: var(--navy);
            text-align: center;
            color: #fff;
        }

        .page-hero h1 {
            max-width: 850px;
            margin: 0 auto;
            font-family: var(--display);
            font-size: clamp(31px,4vw,46px);
            line-height: 1.2;
            font-weight: 600;
        }

        .page-main {
            padding: 72px 0 96px;
        }

        .page-content {
            max-width: 820px;
            margin: 0 auto;
            padding: 46px 48px;
            background: #fff;
            border: 1px solid var(--paper-line);
            border-radius: 10px;
        }

        .page-content h2,
        .page-content h3,
        .page-content h4 {
            margin-top: 38px;
            margin-bottom: 14px;
            color: var(--text);
            font-family: var(--display);
            line-height: 1.3;
        }

        .page-content h2:first-child,
        .page-content h3:first-child {
            margin-top: 0;
        }

        .page-content h2 {
            font-size: 26px;
        }

        .page-content h3 {
            font-size: 21px;
        }

        .page-content h4 {
            font-size: 18px;
        }

        .page-content p {
            margin: 0 0 18px;
            color: var(--muted);
        }

        .page-content ul,
        .page-content ol {
            margin: 0 0 20px;
            padding-left: 24px;
            color: var(--muted);
        }

        .page-content li {
            margin-bottom: 8px;
        }

        .page-content a {
            color: #A67F3A;
            text-decoration: underline;
            text-underline-offset: 3px;
        }

        .page-content strong {
            color: var(--text);
        }

        /* FOOTER */

        footer {
            background: #fff;
            border-top: 1px solid var(--paper-line);
        }

        .footer-brand {
            padding: 30px 0 24px;
            display: flex;
            justify-content: center;
        }

        .footer-logo {
            width: 220px;
            max-width: 70vw;
            height: auto;
        }

        .footer-bottom {
            background: var(--navy);
            border-top: 1px solid var(--line-dark);
            color: var(--muted-dark);
        }

        .footer-inner {
            min-height: 78px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .footer-links {
            display: flex;
            gap: 20px;
            flex-wrap: wrap;
        }

        .footer-links a {
            font-size: 13px;
        }

        .footer-links a:hover {
            color: #fff;
        }

        .copyright {
            font-size: 12px;
        }

        @media (max-width: 600px) {

            .wrap {
                padding: 0 20px;
            }

            .brand-strip-inner {
                padding: 18px 20px;
            }

            .brand-logo {
                width: 205px;
            }

            .nav-inner {
                justify-content: center;
                padding: 10px 20px;
            }

            .page-hero {
                padding: 52px 0 38px;
            }

            .page-hero h1 {
                font-size: 29px;
            }

            .page-main {
                padding: 42px 0 64px;
            }

            .page-content {
                padding: 30px 22px;
            }

            .page-content h2 {
                font-size: 23px;
            }

            .page-content h3 {
                font-size: 19px;
            }

            .footer-logo {
                width: 185px;
            }

            .footer-inner {
                padding-top: 25px;
                padding-bottom: 25px;
                flex-direction: column;
                text-align: center;
            }

            .footer-links {
                justify-content: center;
            }

        }

    </style>

</head>


<body <?php body_class(); ?>>

<?php wp_body_open(); ?>


<!-- LOGO -->

<div class="brand-strip">

    <div class="brand-strip-inner">

        <a href="<?php echo esc_url(home_url('/')); ?>">

            <img
                class="brand-logo"
                src="<?php echo esc_url(get_template_directory_uri()); ?>/logo_immo_verwaltung.jpg"
                alt="Immo Verwaltung Rheinland"
            >

        </a>

    </div>

</div>


<!-- NAV -->

<header class="nav">

    <div class="nav-inner">

        <a href="<?php echo esc_url(home_url('/#leistungen')); ?>">
            Leistungen
        </a>

        <a href="<?php echo esc_url(home_url('/#vorteile')); ?>">
            Vorteile
        </a>

        <a
            class="back-home"
            href="<?php echo esc_url(home_url('/')); ?>"
        >
            Zur Startseite
        </a>

    </div>

</header>


<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>


        <!-- PAGE HERO -->

        <section class="page-hero">

            <div class="wrap">

                <h1>
                    <?php the_title(); ?>
                </h1>

            </div>

        </section>


        <!-- CONTENT -->

        <main class="page-main">

            <div class="wrap">

                <article class="page-content">

                    <?php the_content(); ?>

                </article>

            </div>

        </main>


    <?php endwhile; ?>

<?php endif; ?>


<!-- FOOTER -->

<footer>

    <div class="footer-brand">

        <a href="<?php echo esc_url(home_url('/')); ?>">

            <img
                class="footer-logo"
                src="<?php echo esc_url(get_template_directory_uri()); ?>/logo_immo_verwaltung.jpg"
                alt="Immo Verwaltung Rheinland"
            >

        </a>

    </div>


    <div class="footer-bottom">

        <div class="wrap footer-inner">

            <div class="footer-links">

                <a href="<?php echo esc_url(home_url('/')); ?>">
                    Startseite
                </a>

                <a href="<?php echo esc_url(home_url('/impressum/')); ?>">
                    Impressum
                </a>

                <a href="<?php echo esc_url(home_url('/datenschutz/')); ?>">
                    Datenschutz
                </a>

            </div>


            <div class="copyright">

                © <?php echo esc_html(date('Y')); ?>
                Immo Verwaltung Rheinland

            </div>

        </div>

    </div>

</footer>


<?php wp_footer(); ?>


</body>
</html>
