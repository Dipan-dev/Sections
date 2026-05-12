<?php
/**
 * Auto-generated template for migrating old page builder layout
 * ID: 69
 * Title: Our Team
 * URL: https://solulab.com/our-team/
 * Post Type: page
 */

?>

<!-- ORIGINAL PAGE HTML -->
<?php get_header() ?>
<!-- Hero Section -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Our Team</title>

    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #ffffff;
            color: #0f172a;
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
        }

        img {
            width: 100%;
            display: block;
        }

        .container {
            width: 100%;
            max-width: 1280px;
            margin: auto;
            padding: 0 24px;
        }

        /* =================================
       HERO SECTION
    ================================= */

        .hero {
            position: relative;
            min-height: 100vh;
            overflow: hidden;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, #00152e 0%, #002B5B 50%, #021226 100%);
        }

        .hero-bg {
            inset: 0;
            z-index: 1;
            width: 100%;
            height: 100vh;
            position: absolute;
        }


        .hero-img {
            min-height: 100%;
            object-fit: cover;
            object-position: center;
            width: 100%;
            opacity: 0.5;
            display: block;
        }

        .hero-overlay {
            position: absolute;
            inset: 0;
            background:
                radial-gradient(circle at top left,
                    rgba(59, 130, 246, .25),
                    transparent 35%);
        }

        .hero-content {
            position: relative;
            z-index: 2;
            width: 100%;
            padding: 120px 0;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 14px 22px;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(12px);
            margin-bottom: 32px;
        }

        .badge-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background: #38bdf8;
        }

        .badge span {
            color: #dbeafe;
            font-size: 14px;
            font-weight: 400;
            letter-spacing: .5px;
        }

        .hero h1 {
            color: #ffffff;
            font-size: 80px;
            line-height: 85px;
            font-weight: 700;
            max-width: 850px;
            letter-spacing: -2px;
        }

        .gradient-text {
            background: linear-gradient(to right, #7dd3fc, #3b82f6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero p {
            margin-top: 32px;
            max-width: 720px;
            color: #cbd5e1;
            font-size: 20px;
            line-height: 1.8;
        }

        .hero-buttons {
            display: flex;
            gap: 18px;
            margin-top: 48px;
            flex-wrap: wrap;
        }

        .btn-primary {
            padding: 18px 34px;
            border-radius: 50px;
            background: linear-gradient(to right, #0ea5e9, #2563eb);
            color: #ffffff;
            font-weight: 600;
            transition: .35s;
        }

        .btn-primary:hover {
            transform: translateY(-4px);
        }

        .btn-secondary {
            padding: 18px 34px;
            border-radius: 50px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            background: rgba(255, 255, 255, 0.06);
            backdrop-filter: blur(10px);
            color: #ffffff;
            font-weight: 600;
            transition: .35s;
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.12);
        }

        .hero-stats {
            margin-top: 80px;
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 40px;
        }

        .hero-stats img {
            width: 80px;
            height: 80px;
        }

        .hero-stats h3 {
            color: #fff;
            font-size: 42px;
            font-weight: 800;
        }

        .hero-stats p {
            margin-top: 10px;
            font-size: 15px;
            color: #94a3b8;
        }

        /* =================================
       INTRO SECTION
    ================================= */

        .intro {
            padding: 120px 0;
            text-align: center;
            background: #fff;
        }

        .section-badge {
            display: inline-block;
            padding: 12px 22px;
            background: #dbeafe;
            color: #002B5B;
            border-radius: 999px;
            font-size: 14px;
            font-weight: 700;
            letter-spacing: .5px;
        }

        .section-title {
            margin-top: 28px;
            font-size: 60px;
            line-height: 60px;
            font-weight: 600;
            color: #64748b;
        }

        .section-description {
            max-width: 850px;
            margin: 28px auto 0;
            font-size: 19px;
            line-height: 1.9;
            color: #64748b;
        }

        /* =================================
       TEAM SECTION
    ================================= */

        .team {
            padding: 120px 0;
            background: #000000;
        }

        .team-grid {
            margin-top: 80px;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
        }

        .team-card {
            background: #fff;
            border-radius: 32px;
            padding: 34px;
            border: 1px solid #e2e8f0;
            transition: .45s;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
        }

        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 25px 60px rgba(0, 0, 0, 0.08);
        }

        .team-inner {
            display: flex;
            gap: 32px;
            align-items: flex-start;
        }

        .team-image {
            width: 260px;
            min-width: 260px;
            border-radius: 24px;
            overflow: hidden;
            position: relative;
        }

        .team-image::after {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(to top,
                    rgba(0, 43, 91, .45),
                    transparent);
        }

        .team-content h3 {
            font-size: 34px;
            font-weight: 800;
            color: #0f172a;
        }

        .team-role {
            margin-top: 10px;
            color: #2563eb;
            font-size: 14px;
            font-weight: 700;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .team-content p {
            margin-top: 24px;
            color: #64748b;
            line-height: 1.9;
            font-size: 17px;
        }

        .socials {
            display: flex;
            gap: 14px;
            margin-top: 34px;
        }

        .socials a {
            width: 48px;
            height: 48px;
            border-radius: 16px;
            background: #f1f5f9;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #0f172a;
            transition: .35s;
        }

        .socials a:hover {
            background: #002B5B;
            color: #fff;
        }

        .fusion-section {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            /*position: relative;*/
            padding: 40px 50px;
            gap: 30px;
            margin-top: 58px;
            width: 100%;
            height: 100vh;
            background: radial-gradient(circle at top left,

                    rgba(59, 130, 246, 0.45),

                    transparent 45%);
        }

        .fusion-content {
            display: ;
            /*position: absolute;*/
            left: 50px;
        }

        .fusion-content h3 {
            color: #00152e;
            font-size: 30px;
        }

        .fusion-content h4 {
            font-size: 20px;
        }

        .fusion-content p {
            color: #00152e;
            font-size: 18px;
        }

        .fusion-content1 {

            left: 50px;
        }

        .fusion-content1 h3 {
            color: #00152e;
            font-size: 30px;
        }

        .fusion-content1 h4 {
            font-size: 20px;
        }

        .fusion-content1 p {
            color: #00152e;
            font-size: 18px;
        }

        /* =================================
       CULTURE SECTION
    ================================= */

        .culture {
            position: relative;
            overflow: hidden;
            padding: 120px 0;
            background: linear-gradient(135deg, #00152e 0%, #002B5B 50%, #021226 100%);
        }

        .culture-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 70px;
            align-items: center;
        }

        .culture-content h2 {
            margin-top: 28px;
            color: #fff;
            font-size: 58px;
            line-height: 1.15;
            font-weight: 800;
        }

        .culture-content p {
            margin-top: 28px;
            color: #cbd5e1;
            line-height: 1.9;
            font-size: 18px;
        }

        .culture-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 24px;
        }

        .culture-card {
            padding: 34px;
            border-radius: 28px;
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(14px);
        }

        .culture-card h3 {
            color: #fff;
            font-size: 24px;
            font-weight: 600;
        }

        .culture-card p {
            margin-top: 16px;
            color: #cbd5e1;
            line-height: 1.7;
            font-size: 16px;
        }

        /* =================================
       CTA SECTION
    ================================= */

        .cta {
            padding: 120px 0;
            background: #ffffff;
        }

        .cta-box {
            padding: 80px;
            border-radius: 40px;
            text-align: center;
            background: linear-gradient(to right, #00152e, #002B5B, #003d82);
            color: #fff;
            box-shadow: 0 30px 80px rgba(0, 43, 91, .25);
        }

        .cta-box h2 {
            font-size: 44px;
            font-weight: 500;
            line-height: 1.2;
        }

        .cta-box p {
            margin: 28px auto 0;
            max-width: 760px;
            color: #cbd5e1;
            line-height: 1.9;
            font-size: 19px;
        }

        .cta-btn {
            display: inline-block;
            margin-top: 42px;
            padding: 18px 36px;
            border-radius: 50px;
            background: #fff;
            color: #002B5B;
            font-weight: 700;
            transition: .35s;
        }

        .cta-btn:hover {
            transform: translateY(-4px);
        }

        .join-form-section {
            padding: 120px 0;
            background: #f8fbff;
        }

        .form-box {
            max-width: 700px;
            margin: auto;
            background: #fff;
            padding: 50px;
            border-radius: 32px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
        }

        .form-box h2 {
            font-size: 40px;
            font-weight: 700;
            color: #00152e;
        }

        .form-box p {
            margin-top: 16px;
            color: #64748b;
            line-height: 1.8;
        }

        form {
            margin-top: 40px;
        }

        .input-group {
            margin-bottom: 24px;
        }

        .input-group input,
        .input-group textarea {
            width: 100%;
            padding: 18px 22px;
            border: 1px solid #cbd5e1;
            border-radius: 18px;
            font-size: 16px;
            font-family: 'Inter', sans-serif;
            outline: none;
            transition: .3s;
        }

        .input-group textarea {
            min-height: 160px;
            resize: vertical;
        }

        .input-group input:focus,
        .input-group textarea:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1);
        }

        .submit-btn {
            width: 100%;
            padding: 18px;
            border: none;
            border-radius: 50px;
            background: linear-gradient(to right, #003d82, #00152e);
            color: #fff;
            font-size: 16px;
            font-weight: 700;
            cursor: pointer;
            transition: .35s;
        }

        .submit-btn:hover {
            transform: translateY(-3px);
        }

        /* =================================
       RESPONSIVE
    ================================= */

        @media(max-width:1200px) {

            .hero h1 {
                font-size: 64px;
            }

            .section-title {
                font-size: 48px;
            }

            .culture-content h2 {
                font-size: 48px;
            }

            .cta-box h2 {
                font-size: 48px;
            }

            .team-inner {
                flex-direction: column;
            }

            .team-image {
                width: 100%;
            }
        }

        @media(max-width:991px) {

            .hero {
                min-height: auto;
            }

            .hero-content {
                padding: 100px 0;
            }

            .hero h1 {
                font-size: 52px;
            }

            .hero p {
                font-size: 18px;
            }

            .hero-stats {
                grid-template-columns: repeat(2, 1fr);
            }

            .section-title {
                font-size: 42px;
            }

            .team-grid {
                grid-template-columns: 1fr;
            }

            .culture-wrapper {
                grid-template-columns: 1fr;
            }

            .cta-box {
                padding: 60px 40px;
            }

            .cta-box h2 {
                font-size: 42px;
            }
        }

        @media(max-width:767px) {

            .hero h1 {
                font-size: 42px;
                line-height: 1.15;
            }

            .hero p {
                font-size: 16px;
            }

            .hero-buttons {
                flex-direction: column;
            }

            .btn-primary,
            .btn-secondary {
                width: 100%;
                text-align: center;
            }

            .hero-stats {
                grid-template-columns: 1fr;
            }

            .section-title {
                font-size: 34px;
            }

            .section-description {
                font-size: 16px;
            }

            .team-card {
                padding: 24px;
            }

            .team-content h3 {
                font-size: 28px;
            }

            .culture-content h2 {
                font-size: 38px;
            }

            .culture-grid {
                grid-template-columns: 1fr;
            }

            .cta-box {
                padding: 50px 28px;
            }

            .cta-box h2 {
                font-size: 34px;
            }

            .cta-box p {
                font-size: 16px;
            }

            .form-box {

                padding: 32px 24px;

            }

            .form-box h2 {

                font-size: 32px;

            }
        }

        @media(max-width:480px) {

            .hero h1 {
                font-size: 34px;
            }

            .hero-content {
                padding: 80px 0;
            }

            .badge {
                padding: 12px 18px;
            }

            .hero-stats h3 {
                font-size: 34px;
            }

            .section-title {
                font-size: 30px;
            }

            .culture-content h2 {
                font-size: 32px;
            }

            .team-image {
                min-width: 100%;
            }

            .cta-box h2 {
                font-size: 30px;
            }
        }
    </style>
</head>

<body>
    <div class="hero-img">
        <img src="https://www.solulab.com/wp-content/uploads/2017/09/teambanner.jpg" alt="team banner">
    </div>
    <!-- HERO -->
    <section class="hero">



        <div class="hero-bg">

        </div>

        <!-- <div class="hero-overlay"></div> -->

        <div class="container hero-content">

            <div class="badge">
                <div class="badge-dot"></div>
                <span>Our Global Team</span>
            </div>

            <h1>
                A team of
                <span class="gradient-text">solution-driven</span>
                individuals
                we are
                <span class="gradient-text">Team</span>
            </h1>

            <p>
                We bring together strategists, engineers, designers, and innovators
                passionate about building scalable digital solutions for ambitious brands.
            </p>

            <div class="hero-buttons">
                <a href="#" class="btn-primary">Meet The Team</a>
                <a href="#" class="btn-secondary">Explore Culture</a>
            </div>

            <div class="hero-stats">

                <div>
                    <img src="https://www.solulab.com/wp-content/themes/solu-lab/icons/people-1.svg" alt="">
                    <h3>250+</h3>
                    <p>Experts</p>
                </div>

                <div>
                    <img src="https://www.solulab.com/wp-content/themes/solu-lab/icons/office-1.svg" alt="">
                    <h3>15+</h3>
                    <p>Countries</p>
                </div>

                <div>
                    <img src="https://www.solulab.com/wp-content/themes/solu-lab/icons/reviews-1.svg" alt="">
                    <h3>500+</h3>
                    <p>Projects</p>
                </div>

                <div>
                    <img src="https://www.solulab.com/wp-content/uploads/2026/02/Frame-4.svg" alt="">
                    <h3>10Y+</h3>
                    <p>Experience</p>
                </div>

            </div>

        </div>
    </section>

    <!-- INTRO -->
    <section class="intro">

        <div class="container">

            <div class="section-badge">
                Our Team
            </div>

            <h2 class="section-title">
                A culture driven by innovation,
                ownership & collaboration
            </h2>

            <p class="section-description">
                We’re proud of our team of solution driven
                enthusiasts and always looking for more people with a similar passion
                &amp; experience in the world of technology. We strive to bring the best
                out of our Blockchain, IoT and AI Ninjas. We put our legs into the shoe
                of our clients to understand their requirements and we add heart to
                technology while delivering their desired output.
            </p>

        </div>

    </section>

    <!-- TEAM -->
    <section class="team">

        <div class="container">

            <div class="section-badge">
                LEADERSHIP TEAM
            </div>

            <h2 class="section-title">
                Meet the minds behind SoluLab
            </h2>

            <div class="team-grid">

                <!-- CARD -->
                <div class="team-card">

                    <div class="team-inner">

                        <div class="team-image">
                            <img src="https://www.solulab.com/wp-content/uploads/2017/09/chintan.jpg"
                                alt="Chintan Thakkar">
                        </div>

                        <div class="team-content">

                            <h3>Chintan Thakkar</h3>

                            <div class="team-role">
                                Co-Founder
                            </div>

                            <p>
                                Vice President, Front
                                Office Technology at Goldman Sachs. 10+ years of
                                experience in global projects and team management,
                                client engagement, and consulting in financial
                                services &amp; IT.
                            </p>
                            <p><span style="font-weight: 400;">Repeated success building
                                    highly effective technical engineering teams. Lead
                                    on enterprise system deployments and complex system
                                    migrations at Goldman Sachs, NYC.</span></p>

                            <div class="socials">
                                <a href="https://www.linkedin.com/in/chintan7/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.facebook.com/chintan.thakkar.9"><i
                                        class="fab fa-facebook-f"></i></a>
                                <a href="skype:solulablive?chat"><i class="fab fa-skype"></i></a>
                            </div>

                        </div>

                    </div>

                </div>

                <!-- CARD -->
                <div class="team-card">

                    <div class="team-inner">

                        <div class="team-image">
                            <img src="https://www.solulab.com/wp-content/uploads/2017/09/rajat.jpg" alt="Rajat Lala">
                        </div>

                        <div class="team-content">

                            <h3>Rajat Lala</h3>

                            <div class="team-role">
                                Co-Founder
                            </div>

                            <p><span>Lead Engineer, Mobile
                                    Apps at Citrix. Co-founder of Zuriy.com,
                                    entrepreneur and Apps enthusiast with 10+ years of
                                    product development experience.</span></p>
                            <p><span style="font-weight: 400;">Developed several
                                    enterprise mobile apps at Citrix Systems which are
                                    downloaded and used by millions of users everyday.
                                    Proven track record of building complex software
                                    products from scratch.</span></p>

                            <div class="socials">
                                <a href="https://www.linkedin.com/in/rajatlala/"><i class="fab fa-linkedin-in"></i></a>
                                <a href="https://www.facebook.com/rajat.lala.7"><i class="fab fa-facebook-f"></i></a>
                                <a href="https://twitter.com/Rajat_Lala"><i class="fab fa-x"></i></a>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

    <section class="fusion-section">
        <div class="fusion-content">

            <h3 class="">Gyuri Dragomir
            </h3>
            <h4 class="team-role">Vice
                President></h4>
            <p><a class="f-w-300" href="/cdn-cgi/l/email-protection#4330222f263003302c2f362f22216d202c2e"><span
                        class="__cf_email__"
                        data-cfemail="bccfddd0d9cffccfd3d0c9d0ddde92dfd3d1">[email&#160;protected]</span></a>
            </p>
            <div class="team-inner">
                <p><span style="font-weight: 400;">Gyuri is Founder of
                        Statesmen Capital Investment Fund and Co-Founder of
                        Deals En Route.He enjoys working in fast-paced,
                        high-stress and deadline-oriented environments;
                        believes in turning ideas into reality. </span></p>
                <p><span style="font-weight: 400;">At SoluLab, Gyuri
                        overlooks project completion, resource management,
                        talent management, and client relationship building.
                        Gyuri also handles lead generation process, and
                        cloud consultancy department. </span></p>
            </div>


        </div>

        <div class="fusion-section1">
            <div class="fusion-content1">
                <h3>
                    Doug Tidstrand</h3>
                <h4 class="team-role">Chief Commercial
                    Officer></h4>
                <p><a class="f-w-300" href="/cdn-cgi/l/email-protection#4330222f263003302c2f362f22216d202c2e"><span
                            class="__cf_email__"
                            data-cfemail="bccfddd0d9cffccfd3d0c9d0ddde92dfd3d1">[email&#160;protected]</span></a>
                </p>
                <div class="team-inner">
                    <p><span style="font-weight: 400;">Doug
                            strongly believes in
                            implementing innovative thought
                            leadership and
                            branding strategy, in order to
                            position SoluLab as a
                            market leader in international
                            markets. His key role
                            as the CCO involves ensuring
                            that the branding and
                            marketing initiatives of SoluLab
                            is continually
                            responding to the challenges and
                            opportunities of
                            the dynamic industry. </span>
                    </p>
                    <p><span style="font-weight: 400;">Doug
                            persistently works
                            towards enabling SoluLab to
                            excel in the backdrop of
                            globally competitive business
                            scenario &#8211;
                            driving growth and maximizing
                            business
                            performance.</span></p>
                </div>


            </div>
        </div>
    </section>


    <!-- CULTURE -->
    <section class="culture">

        <div class="container">

            <div class="culture-wrapper">

                <div class="culture-content">

                    <div class="badge">
                        <div class="badge-dot"></div>
                        <span>OUR CULTURE</span>
                    </div>

                    <h2>
                        We build products like
                        <span class="gradient-text">founders</span>
                    </h2>

                    <p>
                        From AI and blockchain to enterprise SaaS systems,
                        our team embraces ownership, experimentation,
                        collaboration, and continuous innovation.
                    </p>

                </div>

                <div class="culture-grid">

                    <div class="culture-card">
                        <h3>Innovation</h3>
                        <p>We constantly explore future technologies and disruptive
                            ideas.</p>
                    </div>

                    <div class="culture-card">
                        <h3>Ownership</h3>
                        <p>Every team member takes responsibility for delivering
                            excellence.</p>
                    </div>

                    <div class="culture-card">
                        <h3>Collaboration</h3>
                        <p>Cross-functional teams working seamlessly toward shared
                            goals.</p>
                    </div>

                    <div class="culture-card">
                        <h3>Scalability</h3>
                        <p>We engineer systems designed for long-term growth and
                            performance.</p>
                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- CTA -->
    <section class="cta">

        <div class="container">

            <div class="cta-box">

                <h2>
                    Want to work with our team?
                </h2>

                <p>
                    Join a fast-growing and emerging tech company building
                    the future of digital innovation.
                </p>

                <a href="#join-form" class="cta-btn">
                    Join Our Team
                </a>

            </div>

        </div>

    </section>
    <section class="join-form-section" id="join-form">

        <div class="container">

            <div class="form-box">

                <h2>Apply To Join Our Team</h2>

                <p>
                    Fill out the form below and our team will get back to you.
                </p>

                <form>

                    <div class="input-group">
                        <input type="text" placeholder="Full Name" required>
                    </div>

                    <div class="input-group">
                        <input type="email" placeholder="Email Address" required>
                    </div>

                    <div class="input-group">
                        <input type="text" placeholder="Position Applying For">
                    </div>

                    <div class="input-group">
                        <textarea placeholder="Tell us about yourself"></textarea>
                    </div>

                    <button type="submit" class="submit-btn">
                        Submit Application
                    </button>

                </form>

            </div>

        </div>

    </section>

</body>

</html>
<?php get_footer();