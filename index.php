<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página Informativa</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-color: #6366f1;
            --secondary-color: #8b5cf6;
            --accent-color: #ec4899;
            --dark-color: #1f2937;
            --light-color: #f9fafb;
            --text-color: #374151;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--text-color);
            overflow-x: hidden;
        }

        /* Navegación */
        nav {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            transition: all 0.3s ease;
        }

        nav.scrolled {
            padding: 0.5rem 0;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: bold;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 2rem;
        }

        .nav-menu a {
            text-decoration: none;
            color: var(--text-color);
            font-weight: 500;
            transition: color 0.3s ease;
            position: relative;
        }

        .nav-menu a:hover {
            color: var(--primary-color);
        }

        .nav-menu a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
            transition: width 0.3s ease;
        }

        .nav-menu a:hover::after {
            width: 100%;
        }

        /* Hero Section */
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            position: relative;
            overflow: hidden;
            margin-top: 70px;
        }

        .hero::before {
            content: '';
            position: absolute;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 1px, transparent 1px);
            background-size: 50px 50px;
            animation: movePattern 20s linear infinite;
        }

        @keyframes movePattern {
            0% { transform: translate(0, 0); }
            100% { transform: translate(50px, 50px); }
        }

        .hero-content {
            text-align: center;
            color: white;
            z-index: 1;
            animation: fadeInUp 1s ease;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .hero p {
            font-size: 1.3rem;
            margin-bottom: 2rem;
            opacity: 0.95;
        }

        .btn {
            display: inline-block;
            padding: 1rem 2.5rem;
            background: white;
            color: var(--primary-color);
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }

        /* Secciones */
        section {
            padding: 5rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 3rem;
            color: var(--dark-color);
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }

        /* About Section */
        .about {
            background: var(--light-color);
        }

        .about-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3rem;
            align-items: center;
        }

        .about-text {
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .about-image {
            text-align: center;
        }

        .about-image img {
            max-width: 100%;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        .about-image img:hover {
            transform: scale(1.05);
        }

        /* Services Section */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .service-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            text-align: center;
            cursor: pointer;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .service-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            background: linear-gradient(135deg, var(--primary-color), var(--accent-color));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .service-card h3 {
            margin-bottom: 1rem;
            color: var(--dark-color);
        }

        /* Footer */
        footer {
            background: var(--dark-color);
            color: white;
            text-align: center;
            padding: 2rem;
        }

        .social-links {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin-bottom: 1rem;
        }

        .social-links a {
            color: white;
            font-size: 1.5rem;
            transition: transform 0.3s ease;
            text-decoration: none;
        }

        .social-links a:hover {
            transform: translateY(-3px) scale(1.1);
        }

        /* Scroll animations */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Estadísticas Section */
        .stats {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 2rem;
            border-radius: 15px;
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .stat-card:hover {
            transform: translateY(-10px);
            background: rgba(255, 255, 255, 0.15);
        }

        .stat-number {
            font-size: 3rem;
            font-weight: bold;
            margin-bottom: 0.5rem;
            background: linear-gradient(135deg, #fff, #f0f0f0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .stat-label {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* Problemas de Salud Section */
        .health {
            background: var(--light-color);
        }

        .health-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .health-card {
            background: white;
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border-left: 5px solid var(--accent-color);
        }

        .health-card:hover {
            transform: translateX(10px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        }

        .health-card h3 {
            color: var(--accent-color);
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }

        .health-card ul {
            list-style: none;
            padding-left: 0;
        }

        .health-card ul li {
            padding: 0.5rem 0;
            padding-left: 1.5rem;
            position: relative;
        }

        .health-card ul li::before {
            content: '⚠️';
            position: absolute;
            left: 0;
        }

        /* Reportes Section */
        .reports {
            background: white;
        }

        .reports-content {
            margin-top: 3rem;
        }

        .report-item {
            background: var(--light-color);
            padding: 2rem;
            border-radius: 15px;
            margin-bottom: 2rem;
            transition: all 0.3s ease;
            border-left: 5px solid var(--primary-color);
        }

        .report-item:hover {
            transform: translateX(10px);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }

        .report-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1rem;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .report-title {
            font-size: 1.5rem;
            color: var(--dark-color);
            margin: 0;
        }

        .report-date {
            color: var(--primary-color);
            font-weight: 600;
            font-size: 0.9rem;
        }

        .report-description {
            line-height: 1.8;
            margin-bottom: 1rem;
        }

        .report-tags {
            display: flex;
            gap: 0.5rem;
            flex-wrap: wrap;
        }

        .report-tag {
            background: var(--primary-color);
            color: white;
            padding: 0.3rem 1rem;
            border-radius: 20px;
            font-size: 0.85rem;
        }

        .info-box {
            background: linear-gradient(135deg, rgba(99, 102, 241, 0.1), rgba(236, 72, 153, 0.1));
            border-left: 4px solid var(--primary-color);
            padding: 1.5rem;
            border-radius: 10px;
            margin: 2rem 0;
        }

        .info-box h4 {
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-menu {
                flex-direction: column;
                gap: 1rem;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 1rem;
            }

            .stat-number {
                font-size: 2rem;
            }

            .health-grid {
                grid-template-columns: 1fr;
            }

            .report-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .report-title {
                font-size: 1.2rem;
            }
        }

        @media (max-width: 480px) {
            .stats-grid {
                grid-template-columns: 1fr;
            }

            .nav-menu {
                gap: 0.5rem;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <!-- Navegación -->
    <nav id="navbar">
        <div class="nav-container">
            <div class="logo">Acceso al agua potable</div>
            <ul class="nav-menu">
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#sobre">Introducción</a></li>
                <li><a href="#estadisticas">Estadísticas</a></li>
                <li><a href="#salud">Problemas de Salud</a></li>
                <li><a href="#reportes">Reportes</a></li>
                <li><a href="#servicios">Metodos Utilizados</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="inicio" class="hero">
        <div class="hero-content">
            <h1>Bienvenido a nuestra pagina sobre el acceso al agua potable</h1>
            <p>Esta pagina es informativa y tiene como objetivo crear conciencia sobre la dificultad del acceso al agua potable</p>
            <a href="#sobre" class="btn">Conoce Más</a>
        </div>
    </section>

    <!-- Sobre Section -->
    <section id="sobre" class="about fade-in">
        <h2 class="section-title">Introducción</h2>
        <div class="about-content">
            <div class="about-text">
                <h3>Por que elegimos este tema:</h3>
                <p>
                    <!-- AQUÍ PUEDES PONER TU INFORMACIÓN -->
                    Esta pagina fue creada con el objetivo de crear conciencia sobre la dificultad del acceso al agua potable, y los problemas que causa en la salud de las personas.
                </p>
                <p>
                    Este es un problema muy comun en la actualidad, nosotros nos enfocamos 
                    en la localidad de Mineral De la Reforma, Hidalgo. 
                    Ya que este problema es muy comun en esta localidad 
                    y nosotros mismos nos enfrentamos a este problema diariamente.
                </p>
            </div>
            <div class="about-image">
                <!-- AQUÍ PUEDES AGREGAR UNA IMAGEN -->
                <div style="width: 100%; height: 300px; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); border-radius: 20px; display: flex; align-items: center; justify-content: center; color: white; font-size: 1.5rem;">
                <img src="https://www.saguapac.com.bo/wp-content/uploads/2016/09/que-es-el-agua-saguapac-1012x630.jpg" 
         alt="Agua Potable Limpia" 
            </div>
        </div>
    </section>

    <!-- Estadísticas Section -->
    <section id="estadisticas" class="stats fade-in">
        <h2 class="section-title" style="color: white;">Estadísticas</h2>
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number" data-target="72">0</div>
                <div class="stat-label">
                    <!-- AQUÍ MODIFICA EL NÚMERO Y DESCRIPCIÓN -->
                    El 72% de las personas entrevistadas experimenta cortes de mediana duración, 
                    y la mitad de los que reciben agua tienen una presión insuficiente 
                    para el funcionamiento básico del hogar.
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-number" data-target="64">0</div>
                <div class="stat-label">
                    <!-- AQUÍ MODIFICA EL NÚMERO Y DESCRIPCIÓN -->
                    La calidad es un problema sistemático. La gran mayoría 
                    nota que el agua está visiblemente contaminada o con sedimentos 
                    en un 64% de las personas entrevistadas.
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-number" data-target="36">0</div>
                <div class="stat-label">
                    <!-- AQUÍ MODIFICA EL NÚMERO Y DESCRIPCIÓN -->
                    La respuesta lenta de la autoridad es un factor crítico. El 36%
                    de las fugas reportadas o tardan más de un mes o simplemente no han 
                    sido reparadas. 
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-number" data-target="42">0</div>
                <div class="stat-label">
                    <!-- AQUÍ MODIFICA EL NÚMERO Y DESCRIPCIÓN -->
                    El mayor problema para la comunidad es la Mala Administración
                     o Corrupción en un 42%, seguido por los Problemas de Infraestructura 
                     en un 22% y por ultimo la sequía en un 18%. 
                </div>
            </div>
        </div>
        <div class="info-box" style="background: rgba(255, 255, 255, 0.1); color: white; margin-top: 3rem; border-left-color: white;">
            <h4 style="color: white;">⚠️ Nota Importante</h4>
            <p style="margin: 0;">
                <!-- AQUÍ PUEDES AGREGAR INFORMACIÓN ADICIONAL SOBRE LAS ESTADÍSTICAS -->
                Las estadísticas mostradas están basadas en estudios e investigaciones recientes realizados por alumnos de la comunidad del CBTIS No. 8. 
                Los valores obtenidos fueron recopilados de manera confiable y verificada por el equipo de trabajo, esto siendo recopilado mediante entrevistas y encuestas realizadas a personas de la comunidad.
            </p>
        </div>
    </section>

    <!-- Problemas de Salud Section -->
    <section id="salud" class="health fade-in">
        <h2 class="section-title">Problemas de Salud</h2>
        <p style="text-align: center; max-width: 800px; margin: 0 auto 3rem; font-size: 1.1rem;">
            <!-- AQUÍ PUEDES AGREGAR UNA INTRODUCCIÓN GENERAL -->
            El problema puede causar diversos efectos adversos en la salud. A continuación, 
            se detallan los principales problemas de salud asociados:
        </p>
        <div class="health-grid">
            <div class="health-card">
                <h3>Cólera</h3>
                <p>
                    <!-- AQUÍ DESCRIBE EL PRIMER PROBLEMA DE SALUD -->
                    Una infección intestinal aguda que causa diarrea severa y deshidratación.
                     Se propaga rápidamente en áreas con saneamiento deficiente.
                         Estos son los Sintomas que pueden presentar⚠️:
                </p>
                <ul>
                    <li>Diarrea acuosa abundante</li>
                    <li>Vómitos intensos</li>
                    <li>Rápida deshidratación</li>
                </ul>
            </div>
            <div class="health-card">
                <h3>Tifoidea o Fiebre Tifoidea</h3>
                <p>
                    <!-- AQUÍ DESCRIBE EL SEGUNDO PROBLEMA DE SALUD -->
                    Una infección bacteriana que afecta múltiples órganos. 
                    Se transmite al consumir agua o alimentos contaminados 
                    con heces de una persona infectada.
                </p>
                <ul>
                    <li>Fiebre alta sostenida (puede llegar a 40°C)</li>
                    <li>Dolor de cabeza y dolor muscular</li>
                    <li>Debilidad extrema y pérdida de apetito</li>
                </ul>
            </div>
            <div class="health-card">
                <h3>Disentería</h3>
                <p>
                    <!-- AQUÍ DESCRIBE EL TERCER PROBLEMA DE SALUD -->
                    Una inflamación del intestino, particularmente del colon, 
                    causada por diversos microorganismos. Es una de las infecciones 
                    intestinales más graves.
                </p>
                <ul>
                    <li>Diarrea con sangre o moco visible en las heces</li>
                    <li>Cólicos abdominales severos y dolor al defecar</li>
                    <li>Náuseas o vómitos y fiebre</li>
                </ul>
            </div>
            <div class="health-card">
                <h3>Hepatitis A</h3>
                <p>
                    <!-- AQUÍ DESCRIBE EL CUARTO PROBLEMA DE SALUD -->
                    Una infección vírica que ataca principalmente el hígado. 
                    Se transmite por la vía fecal-oral, a menudo a través de 
                    agua o alimentos contaminados.
                </p>
                <ul>
                    <li>Ictericia (coloración amarilla de la piel y los ojos)</li>
                    <li>Orina oscura (similar al color del té o la cola)</li>
                    <li>Fatiga intensa y dolor abdominal en la parte superior derecha</li>
                </ul>
            </div>
        </div>
        <div class="info-box" style="margin-top: 3rem;">
            <h4>⚠️ Recomendaciones</h4>
            <p style="margin: 0;">
                <!-- AQUÍ PUEDES AGREGAR RECOMENDACIONES O CONSEJOS -->
                Estos problemas de salud son generados por un mal acceso al agua potable segura, es decir libre de turbidez y contaminacion de esta misma. 
                Si experimentas alguno de estos síntomas o problemas de salud, es importante 
                consultar con un profesional de la salud. La detección temprana puede prevenir 
                complicaciones graves y mejorar significativamente el pronóstico.
            </p>
        </div>
    </section>

    <!-- Reportes Section -->
    <section id="reportes" class="reports fade-in">
        <h2 class="section-title">Reportes e Investigaciones realizados</h2>
        <p style="text-align: center; max-width: 800px; margin: 0 auto 3rem; font-size: 1.1rem;">
            <!-- AQUÍ PUEDES AGREGAR UNA INTRODUCCIÓN -->
            A continuación, se presentan los reportes más relevantes y estudios realizados por nosotros 
            sobre este problema. 
            Esta información fue encontrada gracias a entrevitas y encuestas aplicadas a personas de nuestra comunidad.
        </p>
        <div class="reports-content">
            <div class="report-item">
                <div class="report-header">
                    <h3 class="report-title">Desabasto y Baja Presión</h3>
                    <span class="report-date">Noviembre 2025</span>
                </div>
                <div class="report-description">
                    <!-- AQUÍ DESCRIBE EL PRIMER REPORTE -->
                    La mayoría (72%) experimenta cortes de mediana duración, y la mitad de los que 
                    reciben agua tienen una presión insuficiente para el funcionamiento básico del 
                    hogar (subir al tinaco sin bomba). Esto convierte el servicio en una "media-entrega".
                    <br><br>
                    Esto convierte el servicio en una "media-entrega".
                </div>
                <div class="report-tags">
                    <span class="report-tag">Encuesta</span>
                    <span class="report-tag">Datos recopilados 2025</span>
                </div>
            </div>

            <div class="report-item">
                <div class="report-header">
                    <h3 class="report-title">Calidad y Contaminación</h3>
                    <span class="report-date">Noviembre 2025</span>
                </div>
                <div class="report-description">
                    <!-- AQUÍ DESCRIBE EL SEGUNDO REPORTE -->
                    La calidad es un problema sistemático. La gran mayoría nota que el agua está 
                    visiblemente contaminada o con sedimentos en un 64%, lo que valida el riesgo sanitario.
                    Esto sugiere que las tuberías están en mal estado o que el vacío de presión succiona contaminantes.
                    <br><br>
                    Esto sugiere que las tuberías están en mal estado o que el vacío de presión succiona contaminantes.
                </div>
                <div class="report-tags">
                    <span class="report-tag">Encuesta</span>
                    <span class="report-tag">Datos recopilados 2025</span>
                </div>
            </div>

            <div class="report-item">
                <div class="report-header">
                    <h3 class="report-title">Acceso a servicios privados</h3>
                    <span class="report-date">Noviembre 2025</span>
                </div>
                <div class="report-description">
                    <!-- AQUÍ DESCRIBE EL TERCER REPORTE -->
                    Las familias se ven forzadas a equilibrar entre tratamientos caseros 
                    imperfectos y un costo económico elevado para acceder a agua segura.
                    <br><br>
                    Lo que subraya la necesidad urgente de mejorar la infraestructura y gestión
                    del agua pública para garantizar un suministro confiable, saludable y económicamente 
                    viable para todos.
                </div>
                <div class="report-tags">
                    <span class="report-tag">Entrevista</span>
                    <span class="report-tag">Datos recopilados 2025</span>
                </div>
            </div>

            <div class="report-item">
                <div class="report-header">
                    <h3 class="report-title">Acceso a agua potable a bajo costo para personas necesitadas</h3>
                    <span class="report-date">Octubre 2023</span>
                </div>
                <div class="report-description">
                    <!-- AQUÍ DESCRIBE EL CUARTO REPORTE -->
                    El Gobierno de la Ciudad de México implementa una tarifa social que otorga 
                    hasta un 50% de descuento en el servicio de agua para grupos vulnerables 
                    (adultos mayores, personas con discapacidad, jubilados, etc.).
                    <br><br>
                    Siempre y cuando presenten la credencial INAPAM y documentos que acrediten 
                    su condición y domicilio. Este subsidio garantiza el acceso al agua como un
                    derecho básico para quienes tienen dificultades financieras.
                </div>
                <div class="report-tags">
                    <span class="report-tag">Encuesta</span>
                    <span class="report-tag">Datos recopilados 2025</span>
                </div>
            </div>
        </div>
        <div class="info-box" style="margin-top: 3rem;">
            <h4>📚 Fuentes </h4>
            <p style="margin: 0;">
                <!-- AQUÍ PUEDES LISTAR TUS FUENTES O ENLACES A LOS REPORTES -->
                Todos los reportes están basados en entrevistas y encuestas aplicadas
                a personas de nuestra comunidad que han sido afectadas por este problema.
                Que inclusive, hay personas que ya lo ven como un problema normalizado, ya
                que utilizan como uso diario agua almacenada, lo cual conlleva a graves problemas
                 de salud por agua estancada/almacenada.
            </p>
        </div>
    </section>

    <!-- Servicios Section -->
    <section id="servicios" class="fade-in">
        <h2 class="section-title">Nuestros metodos aplicados para recopilar esta información</h2>
        <div class="services-grid">
            <div class="service-card">
                <div class="service-icon">🚀</div>
                <h3>Encuesta</h3>
                <p>
                    <!-- AQUÍ DESCRIBE TU SERVICIO -->
                    Se usó para contar y medir (frecuencias, porcentajes, gastos) y dar peso estadístico al problema.
                </p>
            </div>
            <div class="service-card">
                <div class="service-icon">💡</div>
                <h3>Entrevista</h3>
                <p>
                    <!-- AQUÍ DESCRIBE TU SERVICIO -->
                    Se usó para entender y humanizar (historias, sentimientos, causas) y dar rostro al impacto de la crisis.
                </p>
            </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="social-links">

        </div>
        <p>&copy; <?php echo date('Y'); ?> Acceso al Agua Potable. CBTIS 8</p>
    </footer>

    <script>
        // Navegación suave
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Navbar efecto al hacer scroll
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Animaciones al hacer scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });

        // Efecto hover en las tarjetas de servicio
        document.querySelectorAll('.service-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-10px) scale(1.02)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Animación de contadores de estadísticas
        function animateCounter(element) {
            const target = parseInt(element.getAttribute('data-target'));
            const duration = 2000; // 2 segundos
            const increment = target / (duration / 16); // 60 FPS
            let current = 0;

            const updateCounter = () => {
                current += increment;
                if (current < target) {
                    element.textContent = Math.floor(current);
                    requestAnimationFrame(updateCounter);
                } else {
                    element.textContent = target;
                }
            };

            updateCounter();
        }

        // Observar las estadísticas para animarlas cuando sean visibles
        const statsObserver = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const statNumbers = entry.target.querySelectorAll('.stat-number');
                    statNumbers.forEach(stat => {
                        if (!stat.classList.contains('animated')) {
                            stat.classList.add('animated');
                            animateCounter(stat);
                        }
                    });
                    statsObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        const statsSection = document.getElementById('estadisticas');
        if (statsSection) {
            statsObserver.observe(statsSection);
        }
    </script>
</body>
</html>
