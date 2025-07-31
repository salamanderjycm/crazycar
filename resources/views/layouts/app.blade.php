<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>CrazyCar - Taller de Mecánica Automotriz</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
   

    
</head>
<body>
    <!-- Elementos flotantes animados -->
    <div class="floating-elements">
        <div class="floating-dot dot-1"></div>
        <div class="floating-dot dot-2"></div>
        <div class="floating-dot dot-3"></div>
        <div class="floating-dot dot-4"></div>
    </div>

    <!-- Header -->
    <header class="header">
        <div class="container">
            <div class="nav-wrapper">
                <a href="#inicio" class="logo">
                    <div class="logo-icon">
                        <i class="fas fa-wrench"></i>
                    </div>
                    <span class="logo-text">CrazyCar</span>
                </a>

                <nav class="nav-desktop">
                    <a href="#inicio">Inicio</a>
                    <a href="#servicios">Servicios</a>
                    <a href="#nosotros">Nosotros</a>
                    <a href="#reservas">Reservas</a>
                    <a href="#contacto">Contacto</a>
                </nav>

                <div class="nav-actions">
                    <a href="#reservas" class="btn btn-primary">Reservar Cita</a>
                </div>

                <button class="mobile-menu-btn" id="mobileMenuBtn">
                    <i class="fas fa-bars"></i>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div class="mobile-menu" id="mobileMenu">
                <nav class="mobile-nav">
                    <a href="#inicio">Inicio</a>
                    <a href="#servicios">Servicios</a>
                    <a href="#nosotros">Nosotros</a>
                    <a href="#reservas">Reservas</a>
                    <a href="#contacto">Contacto</a>
                    <a href="#reservas" class="btn btn-primary">Reservar Cita</a>
                </nav>
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="inicio" class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1 class="hero-title">
                        <span class="crazy-text">Crazy</span>
                        <span class="car-text">Car<div class="ping-dot"></div></span>
                    </h1>
                    <p class="hero-description">
                        Tu taller de confianza para el cuidado completo de tu vehículo. 
                        Más de 15 años de experiencia en mecánica automotriz.
                    </p>
                    <div class="hero-buttons">
                        <a href="#reservas" class="btn btn-primary">Reservar Cita</a>
                        <a href="#servicios" class="btn btn-outline">Ver Servicios</a>
                    </div>
                    <div class="hero-features">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <p>Servicio Rápido</p>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <p>Garantía Total</p>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-star"></i>
                            </div>
                            <p>Calidad Premium</p>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="fas fa-car"></i>
                            </div>
                            <p>Todas las Marcas</p>
                        </div>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="https://images.unsplash.com/photo-1486262715619-67b85e0b08d3?w=800&h=600&fit=crop" alt="Taller CrazyCar">
                    <div class="experience-badge">
                        <div class="experience-number">15+</div>
                        <div class="experience-text">
                            <p>Años de</p>
                            <p>Experiencia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="servicios" class="services">
        <div class="container">
            <div class="section-header">
                <h2>Nuestros Servicios</h2>
                <p>Ofrecemos una amplia gama de servicios automotrices con la mejor calidad y garantía en cada trabajo realizado.</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-wrench"></i>
                    </div>
                    <h3>Cambio de Aceite</h3>
                    <p>Cambio de aceite y filtros con aceites de primera calidad</p>
                    <div class="service-details">
                        <span class="price">Desde $25</span>
                        <span class="duration">30 min</span>
                    </div>
                </div>

                <div class="service-card popular">
                    <div class="popular-badge">Popular</div>
                    <div class="service-icon">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <h3>Sistema de Frenos</h3>
                    <p>Revisión, reparación y cambio de pastillas y discos de freno</p>
                    <div class="service-details">
                        <span class="price">Desde $80</span>
                        <span class="duration">2 horas</span>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-cog"></i>
                    </div>
                    <h3>Transmisión</h3>
                    <p>Mantenimiento y reparación de transmisión manual y automática</p>
                    <div class="service-details">
                        <span class="price">Desde $150</span>
                        <span class="duration">4 horas</span>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-car"></i>
                    </div>
                    <h3>Motor</h3>
                    <p>Diagnóstico y reparación completa del motor</p>
                    <div class="service-details">
                        <span class="price">Desde $200</span>
                        <span class="duration">1 día</span>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Suspensión</h3>
                    <p>Reparación de amortiguadores, resortes y sistema de dirección</p>
                    <div class="service-details">
                        <span class="price">Desde $120</span>
                        <span class="duration">3 horas</span>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-wind"></i>
                    </div>
                    <h3>Aire Acondicionado</h3>
                    <p>Mantenimiento y reparación del sistema de climatización</p>
                    <div class="service-details">
                        <span class="price">Desde $60</span>
                        <span class="duration">1 hora</span>
                    </div>
                </div>

                <div class="service-card popular">
                    <div class="popular-badge">Popular</div>
                    <div class="service-icon">
                        <i class="fas fa-tachometer-alt"></i>
                    </div>
                    <h3>Diagnóstico Computarizado</h3>
                    <p>Escaneo completo con equipos de última generación</p>
                    <div class="service-details">
                        <span class="price">Desde $40</span>
                        <span class="duration">45 min</span>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Sistema Eléctrico</h3>
                    <p>Reparación de alternador, batería y sistema eléctrico</p>
                    <div class="service-details">
                        <span class="price">Desde $70</span>
                        <span class="duration">2 horas</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="nosotros" class="about">
        <div class="container">
            <div class="about-content">
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1581092160562-40aa08e78837?w=600&h=500&fit=crop" alt="Equipo CrazyCar">
                </div>
                <div class="about-text">
                    <h2>¿Por qué elegir CrazyCar?</h2>
                    <p>Somos un taller familiar con más de 15 años de experiencia en el sector automotriz. Nos especializamos en brindar servicios de calidad con la confianza y garantía que tu vehículo merece.</p>
                    
                    <div class="features-list">
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Mecánicos certificados con más de 15 años de experiencia</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Equipos de diagnóstico de última generación</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Repuestos originales y de primera calidad</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Garantía en todos nuestros servicios</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Atención personalizada y presupuestos transparentes</span>
                        </div>
                        <div class="feature-item">
                            <i class="fas fa-check-circle"></i>
                            <span>Servicio de grúa las 24 horas</span>
                        </div>
                    </div>

                    <div class="stats">
                        <div class="stat-item">
                            <div class="stat-number">500+</div>
                            <div class="stat-label">Clientes Satisfechos</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">15+</div>
                            <div class="stat-label">Años de Experiencia</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">100%</div>
                            <div class="stat-label">Trabajos Garantizados</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Booking Form Section -->
    <section id="reservas" class="booking">
        <div class="container">
            <div class="section-header">
                <h2>Reserva tu Cita</h2>
                <p>Programa tu cita de manera fácil y rápida. Te contactaremos para confirmar la disponibilidad y los detalles del servicio.</p>
            </div>
            <div class="booking-form-container">
                <form class="booking-form" id="bookingForm">
                    <div class="form-header">
                        <i class="fas fa-calendar-alt"></i>
                        <h3>Información de la Reserva</h3>
                        <p>Completa todos los campos para procesar tu solicitud de cita.</p>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">
                                <i class="fas fa-user"></i>
                                Nombre Completo *
                            </label>
                            <input type="text" id="name" name="name" placeholder="Tu nombre completo" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">
                                <i class="fas fa-phone"></i>
                                Teléfono *
                            </label>
                            <input type="tel" id="phone" name="phone" placeholder="Tu número de teléfono" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email">
                            <i class="fas fa-envelope"></i>
                            Email *
                        </label>
                        <input type="email" id="email" name="email" placeholder="tu@email.com" required>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="service">Servicio Requerido *</label>
                            <select id="service" name="service" required>
                                <option value="">Selecciona un servicio</option>
                                <option value="cambio-aceite">Cambio de Aceite</option>
                                <option value="frenos">Sistema de Frenos</option>
                                <option value="transmision">Transmisión</option>
                                <option value="motor">Motor</option>
                                <option value="suspension">Suspensión</option>
                                <option value="aire-acondicionado">Aire Acondicionado</option>
                                <option value="diagnostico">Diagnóstico Computarizado</option>
                                <option value="electrico">Sistema Eléctrico</option>
                                <option value="otro">Otro</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="date">Fecha Preferida *</label>
                            <input type="date" id="date" name="date" required>
                        </div>
                        <div class="form-group">
                            <label for="time">
                                <i class="fas fa-clock"></i>
                                Hora Preferida *
                            </label>
                            <select id="time" name="time" required>
                                <option value="">Selecciona una hora</option>
                                <option value="08:00">08:00 AM</option>
                                <option value="09:00">09:00 AM</option>
                                <option value="10:00">10:00 AM</option>
                                <option value="11:00">11:00 AM</option>
                                <option value="12:00">12:00 PM</option>
                                <option value="13:00">01:00 PM</option>
                                <option value="14:00">02:00 PM</option>
                                <option value="15:00">03:00 PM</option>
                                <option value="16:00">04:00 PM</option>
                                <option value="17:00">05:00 PM</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="carBrand">
                                <i class="fas fa-car"></i>
                                Marca del Vehículo *
                            </label>
                            <input type="text" id="carBrand" name="carBrand" placeholder="Ej: Toyota, Ford, Chevrolet" required>
                        </div>
                        <div class="form-group">
                            <label for="carModel">Modelo *</label>
                            <input type="text" id="carModel" name="carModel" placeholder="Ej: Corolla, Focus, Aveo" required>
                        </div>
                        <div class="form-group">
                            <label for="carYear">Año *</label>
                            <input type="number" id="carYear" name="carYear" placeholder="2020" min="1990" max="2024" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="description">Descripción del Problema (Opcional)</label>
                        <textarea id="description" name="description" placeholder="Describe brevemente el problema o servicio que necesitas..." rows="4"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="card-element">
                            <i class="fas fa-credit-card"></i>
                            Información de Pago
                        </label>
                        <div id="card-element">
                            <!-- Stripe Elements se insertará aquí -->
                        </div>
                        <div id="card-errors" role="alert"></div>
                    </div>

                    <input type="hidden" name="payment_method" id="payment_method">
                    <input type="hidden" name="amount" id="amount" value="0">

                    <button type="submit" class="btn btn-primary btn-large">
                        ✨ Enviar Solicitud de Cita ✨
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contacto" class="contact">
        <div class="container">
            <div class="section-header">
                <h2>Contáctanos</h2>
                <p>Estamos aquí para ayudarte. Visítanos o contáctanos por cualquiera de nuestros medios de comunicación.</p>
            </div>
            <div class="contact-grid">
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h3>Ubicación</h3>
                    <p>Anta-Izcuchaca<br>Camino a huarocondo<br>b6</p>
                </div>
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h3>Teléfono</h3>
                    <p><a href="tel:+1234567890">(123) 456-7890</a></p>
                    <small>Emergencias 24/7</small>
                </div>
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3>Email</h3>
                    <p><a href="mailto:info@crazycar.com">info@crazycar.com</a></p>
                    <small>Respuesta en 24h</small>
                </div>
                <div class="contact-card">
                    <div class="contact-icon">
                        <i class="fas fa-clock"></i>
                    </div>
                    <h3>Horarios</h3>
                    <p>Lun - Vie: 8:00 AM - 6:00 PM<br>Sábado: 8:00 AM - 4:00 PM<br>Domingo: Cerrado</p>
                </div>
            </div>

            <div class="emergency-section">
                <h3>¿Necesitas servicio de emergencia?</h3>
                <p>Contamos con servicio de grúa las 24 horas para emergencias en carretera.</p>
                <div class="emergency-buttons">
                    <a href="tel:+51958611758" class="btn btn-emergency">
                        <i class="fas fa-phone"></i>
                        Llamar Ahora
                    </a>
                    <a href="https://wa.me/958611758" class="btn btn-whatsapp" target="_blank">
                        <i class="fab fa-whatsapp"></i>
                        WhatsApp
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <a href="#" class="footer-logo">
                        <div class="logo-icon">
                            <i class="fas fa-wrench"></i>
                        </div>
                        <span class="logo-text">CrazyCar</span>
                    </a>
                    <p>Tu taller de confianza con más de 15 años de experiencia en mecánica automotriz.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h3>Enlaces Rápidos</h3>
                    <ul>
                        <li><a href="#inicio">Inicio</a></li>
                        <li><a href="#servicios">Servicios</a></li>
                        <li><a href="#nosotros">Nosotros</a></li>
                        <li><a href="#reservas">Reservas</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Servicios</h3>
                    <ul>
                        <li>Cambio de Aceite</li>
                        <li>Sistema de Frenos</li>
                        <li>Diagnóstico</li>
                        <li>Aire Acondicionado</li>
                        <li>Transmisión</li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Contacto</h3>
                    <p>Av. Principal #123<br>Centro, Ciudad<br>Tel: (123) 456-7890<br>Email: info@crazycar.com</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 CrazyCar. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');
        const mobileMenuIcon = mobileMenuBtn.querySelector('i');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('active');
            
            if (mobileMenu.classList.contains('active')) {
                mobileMenu.style.display = 'block';
                mobileMenuIcon.classList.remove('fa-bars');
                mobileMenuIcon.classList.add('fa-times');
            } else {
                mobileMenu.style.display = 'none';
                mobileMenuIcon.classList.remove('fa-times');
                mobileMenuIcon.classList.add('fa-bars');
            }
        });

        // Close mobile menu when clicking on links
        const mobileNavLinks = document.querySelectorAll('.mobile-nav a');
        mobileNavLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('active');
                mobileMenu.style.display = 'none';
                mobileMenuIcon.classList.remove('fa-times');
                mobileMenuIcon.classList.add('fa-bars');
            });
        });

        // Smooth scrolling for navigation links
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

        // Form submission
        const bookingForm = document.getElementById('bookingForm');
        bookingForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(bookingForm);
            const data = {};
            
            for (let [key, value] of formData.entries()) {
                data[key] = value;
            }
            
            // Simulate form submission
            console.log('Reserva enviada:', data);
            
            // Show success message
            alert('¡Reserva enviada exitosamente! Te contactaremos pronto para confirmar tu cita.');
            
            // Reset form
            bookingForm.reset();
        });

        // Set minimum date for booking form
        const dateInput = document.getElementById('date');
        if (dateInput) {
            const today = new Date().toISOString().split('T')[0];
            dateInput.setAttribute('min', today);
        }

        // Add scroll effect to header
        window.addEventListener('scroll', () => {
            const header = document.querySelector('.header');
            if (window.scrollY > 100) {
                header.style.background = 'rgba(255, 255, 255, 0.98)';
                header.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.1)';
            } else {
                header.style.background = 'rgba(255, 255, 255, 0.95)';
                header.style.boxShadow = 'none';
            }
        });
    </script>
</body>
</html>