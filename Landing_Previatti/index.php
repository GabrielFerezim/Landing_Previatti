<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./src/styles/style_landing.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Landing page</title>
</head>
<body>
    <header>
        <nav id="navbar">
            <i id="nav_logo"> Previatti </i>

            <ul id="nav_list">
                <li class="nav-item active">
                    <a href="#home">Início</a>
                </li>
                <li class="nav-item">
                    <a href="#menu">Serviços</a>
                </li>
                <li class="nav-item">
                    <a href="#testimonials">Avaliações</a>
                </li>
            </ul>
        <section class="section_header">
            <a href="./views/login.php">
                <button class="btn-default">
                    Entrar
                </button>
            </a>
            <a href="./views/reuniao.php">
                <button class="btn-default">
                    Marcar Reunião
                </button>
            </a>
        </section>

            <button id="mobile_btn">
                <i class="fa-solid fa-bars"></i>
            </button>
        </nav>

        <div id="mobile_menu">
            <ul id="mobile_nav_list">
                <li class="nav-item">
                    <a href="#home">Início</a>
                </li>
                <li class="nav-item">
                    <a href="#menu">Marcar Reunião</a>
                </li>
                <li class="nav-item">
                    <a href="#testimonials">Avaliações</a>
                </li>
            </ul>

            <a href="./views/login.php">
                <button class="btn-default">
                    Entrar
                </button>
            </a>
        </div>
    </header>

    <main id="content">
    <section id="home">
        <div id="cta">
            <h1 class="title">
                O sistema que você 
                <span>espera</span>
            </h1>

            <p class="description">
                Simplificando a advocacia e potencializando seus resultados com gestão inteligente.
            </p>

            <div id="cta_buttons">
                <a href="#menu" class="btn-default-reuniao">
                Marcar Reunião
                </a>

                <a href="tel:" id="phone_button">
                    <button class="btn-default">
                        <i class="fa-solid fa-phone"></i>
                    </button>
                    (xx) xxxxx-xxxx
                </a>
            </div>

            <div class="social-media-buttons">
                <a href="">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>

                <a href="">
                    <i class="fa-brands fa-instagram"></i>
                </a>

                <a href="">
                    <i class="fa-brands fa-facebook"></i>
                </a>
            </div>
        </div>
        
        <div class="image-container">
            <img src="src/images/cargo1.jpg" alt="Imagem de exemplo">
        </div>
    </section>


        </section>

        <section id="menu">
            <h2 class="section-title">Serviços</h2>
            <h3 class="section-subtitle">Nossos serviços especiais</h3>

            <div id="dishes">
                <div class="dish">
                    <img src="src/images/cargo3.jpg" class="dish-image" alt="">
                    <h3 class="dish-title">
                    Consultoria Jurídica Personalizada
                    </h3>
                    <span class="dish-description">
                    Serviço que envolve a análise detalhada das necessidades do cliente, oferecendo soluções jurídicas sob medida, seja para empresas ou indivíduos. Isso pode incluir a criação de estratégias legais específicas para evitar litígios ou otimizar operações empresariais.
                    </span>
                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(750+)</span>
                    </div>
                </div>

                <div class="dish">
                    <img src="src/images/cargo2.png" class="dish-image" alt="">
                    <h3 class="dish-title">
                        Gestão de Crises e Contencioso 
                    </h3>
                    <span class="dish-description">
                    Advogados especializados podem gerenciar crises que envolvem litígios complexos e de alto risco, representando clientes em disputas críticas e desenvolvendo estratégias para mitigar impactos legais e financeiros.<br><br>
                    </span>
                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(1000+)</span>
                    </div>
                </div>

                <div class="dish">
                    <img src="src/images/cargo1.jpg" class="dish-image" alt="">
                    <h3 class="dish-title">
                        Planejamento Patrimonial
                    </h3>
                    <span class="dish-description">
                        Serviço exclusivo voltado para a organização e proteção do patrimônio pessoal e familiar, incluindo a estruturação de holdings, elaboração de testamentos e planejamento sucessório para assegurar a continuidade dos negócios e a preservação do patrimônio ao longo das gerações
                    </span>
                    <div class="dish-rate">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <span>(420+)</span>
                    </div>
                </div>

                </div>
            </div>
        </section>

        <section id="testimonials">
            <img src="src/images/balao2.png" id="testimonial_chef" alt="">

            <div id="testimonials_content">
                <h2 class="section-title">
                    Depoimentos
                </h2>
                <h3 class="section-subtitle">
                    O que os <span class="cliente">clientes</span> falam sobre nós
                </h3>

                <div id="feedbacks">
                    <div class="feedback">
                        <img src="src/images/persona3.jpg" class="feedback-avatar" alt="">

                        <div class="feedback-content">
                            <p>
                                Felipe Albuquerque
                                <span>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                            </p>

                            <p>
                                "Otima gestão, resolveu meu problema com exito, clareza e muita agilidade!"
                            </p>
                        </div>
                    </div>

                    <div class="feedback">
                        <img src="src/images/persona4.jpg" class="feedback-avatar" alt="">

                        <div class="feedback-content">
                            <p>
                                Helena Martins
                                <span>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                            </p>

                            <p>
                                "Recebi um atendimento excepcional! A equipe foi ágil, clara e me transmitiu muita confiança. Super recomendo!"
                            </p>
                        </div>
                    </div>

                    <div class="feedback">
                        <img src="src/images/persona5.jpg" class="feedback-avatar" alt="">

                        <div class="feedback-content">
                            <p>
                                Gustavo Oliveira
                                <span>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                            </p>

                            <p>
                            "Fiquei extremamente satisfeito com o atendimento! A equipe foi super atenciosa, rápida nas respostas e me deixou muito seguro. Recomendo de olhos fechados!"
                            </p>
                        </div>
                    </div>

                    <div class="feedback">
                        <img src="src/images/persona6.jpg" class="feedback-avatar" alt="">

                        <div class="feedback-content">
                            <p>
                                Gabrielly Schovtz
                                <span>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                            </p>

                            <p>
                            "O atendimento foi impecável! A equipe demonstrou grande profissionalismo, clareza nas informações e rapidez na solução. Com certeza, recomendarei para todos!"
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <footer>
        <img src="src/images/wave.svg" alt="">

        <div id="footer_items">
            <span id="copyright">
                <b>GDevs<b><br>
                &copy 2024 
            </span>

            <div class="social-media-buttons">
                <a href="">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>

                <a href="https://www.instagram.com/ferezim_/">
                    <i class="fa-brands fa-instagram"></i>
                </a>

                <a href="">
                    <i class="fa-brands fa-facebook"></i>
                </a>
            </div>
        </div>
    </footer>
    <script src="src/javascript/script.js"></script>
</body>
</html>