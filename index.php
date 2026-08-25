<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=yes">
  <title>Find Local Partner Dating | Meaningful Connections</title>
 <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
      background: #fcf9f7;
      color: #2c1e1a;
      line-height: 1.5;
      scroll-behavior: smooth;
    }

    h1, h2, h3 {
      font-weight: 600;
      letter-spacing: -0.02em;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 24px;
    }

    /* sticky header */
    .header {
      position: sticky;
      top: 0;
      background: rgba(252, 249, 247, 0.92);
      backdrop-filter: blur(8px);
      border-bottom: 1px solid rgba(160, 100, 90, 0.12);
      z-index: 100;
      padding: 12px 0;
    }

    .header-inner {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .logo {
      font-size: 1.5rem;
      font-weight: 700;
      background: linear-gradient(145deg, #b24a3a, #7f3a2e);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      letter-spacing: -0.5px;
    }

    .nav-links {
      display: flex;
      gap: 28px;
      font-weight: 500;
      font-size: 0.95rem;
    }

    .nav-links a {
      text-decoration: none;
      color: #3e2a24;
      transition: color 0.2s;
    }

    .nav-links a:hover {
      color: #b24a3a;
    }

    .header-actions {
      display: flex;
      align-items: center;
      gap: 16px;
    }

    .btn-outline {
      background: transparent;
      border: 1.5px solid #b24a3a;
      color: #b24a3a;
      padding: 8px 20px;
      border-radius: 40px;
      font-weight: 600;
      font-size: 0.9rem;
      cursor: default;
      transition: 0.2s;
    }

    .btn-primary {
      background: #b24a3a;
      border: none;
      color: white;
      padding: 8px 24px;
      border-radius: 40px;
      font-weight: 600;
      font-size: 0.9rem;
      cursor: default;
      box-shadow: 0 4px 10px rgba(178, 74, 58, 0.2);
      transition: 0.2s;
    }

    .btn-primary:hover {
      background: #9f3f30;
      box-shadow: 0 6px 14px rgba(178, 74, 58, 0.25);
    }

    .hamburger {
      display: none;
      flex-direction: column;
      gap: 5px;
      background: none;
      border: none;
      cursor: default;
    }

    .hamburger span {
      display: block;
      width: 26px;
      height: 2.5px;
      background: #3e2a24;
      border-radius: 6px;
    }

    /* mobile nav */
    .mobile-nav {
      display: none;
      flex-direction: column;
      background: #fcf9f7;
      padding: 20px 24px 30px;
      border-bottom: 1px solid rgba(160, 100, 90, 0.1);
    }

    .mobile-nav a {
      padding: 12px 0;
      border-bottom: 1px solid #f0e3df;
      text-decoration: none;
      color: #2c1e1a;
      font-weight: 500;
    }

    .mobile-nav .btn-outline, .mobile-nav .btn-primary {
      display: inline-block;
      text-align: center;
      margin-top: 12px;
      width: 100%;
    }

    /* hero */
    .hero {
      background: linear-gradient(135deg, #f5ebe7 0%, #fcf9f7 100%);
      padding: 60px 0 70px;
      position: relative;
    }

    .hero-grid {
      display: flex;
      align-items: center;
      gap: 40px;
      flex-wrap: wrap;
    }

    .hero-content {
      flex: 1 1 45%;
    }

    .hero-content h1 {
      font-size: 2.8rem;
      line-height: 1.2;
      color: #281d19;
      margin-bottom: 20px;
    }

    .hero-content p {
      font-size: 1.2rem;
      color: #4f3730;
      margin-bottom: 28px;
      max-width: 550px;
    }

    .hero-buttons {
      display: flex;
      flex-wrap: wrap;
      gap: 16px;
      margin-bottom: 24px;
    }

    .hero-buttons .btn-primary {
      padding: 14px 40px;
      font-size: 1rem;
    }

    .hero-buttons .btn-outline {
      padding: 14px 36px;
      font-size: 1rem;
    }

    .trust-line {
      color: #6e4d43;
      font-size: 0.95rem;
      border-left: 3px solid #b24a3a;
      padding-left: 16px;
      font-style: italic;
    }

    .hero-image {
      flex: 1 1 45%;
      background: #dccac3;
      border-radius: 32px;
      min-height: 280px;
      background-image: url('banner.jpg');
      background-size: cover;
      background-position: center;
      box-shadow: 0 20px 40px -12px rgba(0,0,0,0.12);
    }

    /* sections */
    section {
      padding: 70px 0;
      border-bottom: 1px solid #f0e3df;
    }

    .section-title {
      font-size: 2.2rem;
      margin-bottom: 16px;
      color: #281d19;
    }

    .section-sub {
      font-size: 1.1rem;
      color: #4f3730;
      max-width: 700px;
      margin-bottom: 40px;
    }

    .grid-3 {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 30px;
    }

    .card {
      background: white;
      padding: 30px 24px;
      border-radius: 28px;
      box-shadow: 0 8px 24px rgba(0,0,0,0.04);
      transition: all 0.2s ease;
      border: 1px solid #f0e3df;
    }

    .card h3 {
      color: #b24a3a;
      margin-bottom: 8px;
    }

    .step-number {
      font-size: 2.5rem;
      font-weight: 700;
      color: #dccac3;
      margin-bottom: 8px;
    }

    .split {
      display: flex;
      align-items: center;
      gap: 50px;
      flex-wrap: wrap;
    }

    .split-content {
      flex: 1 1 45%;
    }

    .split-image {
      flex: 1 1 45%;
      min-height: 220px;
      background: #dccac3;
      border-radius: 32px;
      background-image: url('about.jpg');
      background-size: cover;
      background-position: center;
    }

    .testimonial-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
    }

    .testimonial-card {
      background: white;
      padding: 28px 24px;
      border-radius: 28px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.03);
      border: 1px solid #f0e3df;
    }

    .testimonial-card h4 {
      color: #b24a3a;
      margin-bottom: 8px;
    }

    .disclaimer {
      font-size: 0.8rem;
      color: #7a5f55;
      margin-top: 16px;
    }

    .safety-box {
      background: #f5edea;
      padding: 30px 32px;
      border-radius: 32px;
    }

    .safety-box ul {
      list-style: none;
      columns: 2 200px;
      column-gap: 30px;
      margin: 20px 0;
    }

    .safety-box li {
      padding: 6px 0;
      padding-left: 24px;
      position: relative;
    }

    .safety-box li::before {
      content: "•";
      color: #b24a3a;
      font-weight: 700;
      position: absolute;
      left: 4px;
    }

    .stat-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(140px, 1fr));
      gap: 20px;
      margin: 30px 0;
    }

    .stat {
      background: white;
      padding: 18px 12px;
      border-radius: 24px;
      text-align: center;
      border: 1px solid #f0e3df;
    }

    .stat strong {
      font-size: 1.8rem;
      color: #b24a3a;
      display: block;
    }

    /* faq */
    .faq-item {
      border-bottom: 1px solid #f0e3df;
      padding: 16px 0;
    }

    .faq-question {
      font-weight: 600;
      display: flex;
      justify-content: space-between;
      align-items: center;
      cursor: default;
      color: #281d19;
    }

    .faq-answer {
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.25s ease;
      color: #4f3730;
    }

    .faq-answer.open {
      max-height: 200px;
      padding-top: 12px;
    }

    .faq-toggle {
      font-size: 1.5rem;
      color: #b24a3a;
    }

    /* contact */
    .contact-form {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 20px;
      max-width: 700px;
    }

    .contact-form .full-width {
      grid-column: 1 / -1;
    }

    .contact-form input, .contact-form textarea {
      padding: 14px 18px;
      border: 1px solid #e6d7d0;
      border-radius: 30px;
      font-family: inherit;
      background: white;
      width: 100%;
    }

    .contact-form textarea {
      min-height: 120px;
      border-radius: 24px;
      resize: vertical;
    }

    .contact-info {
      margin-top: 24px;
      color: #3e2a24;
    }

    .footer {
      background: #f5edea;
      padding: 50px 0 30px;
    }

    .footer-grid {
      display: grid;
      grid-template-columns: 2fr 1fr 1fr 1fr;
      gap: 30px;
    }

    .footer a {
      display: block;
      color: #4f3730;
      text-decoration: none;
      padding: 4px 0;
      font-size: 0.95rem;
    }

    .footer a:hover {
      color: #b24a3a;
    }

    .social-icons {
      display: flex;
      gap: 16px;
      margin: 12px 0;
    }

    .social-icons span {
      background: #dccac3;
      padding: 6px 14px;
      border-radius: 30px;
      font-size: 0.8rem;
      font-weight: 500;
      color: #3e2a24;
    }

    .footer-bottom {
      border-top: 1px solid #dccac3;
      margin-top: 30px;
      padding-top: 24px;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      font-size: 0.9rem;
      color: #5a4036;
    }

    .footer-bottom small {
      display: block;
    }

    @media (max-width: 820px) {
      .nav-links, .header-actions {
        display: none;
      }
      .hamburger {
        display: flex;
      }
      .mobile-nav.open {
        display: flex;
      }
      .hero-content h1 {
        font-size: 2.2rem;
      }
      .split {
        flex-direction: column;
      }
      .footer-grid {
        grid-template-columns: 1fr 1fr;
      }
      .contact-form {
        grid-template-columns: 1fr;
      }
      .safety-box ul {
        columns: 1;
      }
    }

    @media (max-width: 480px) {
      .hero-content h1 {
        font-size: 1.8rem;
      }
      .section-title {
        font-size: 1.7rem;
      }
      .container {
        padding: 0 16px;
      }
    }

    /* reveal animation */
    .reveal {
      opacity: 0;
      transform: translateY(24px);
      transition: opacity 0.6s ease, transform 0.6s ease;
    }
    .reveal.visible {
      opacity: 1;
      transform: translateY(0);
    }
  </style>
</head>
<body>

<header class="header">
  <div class="container header-inner">
    <span class="logo">Find Local Partner</span>
    <nav class="nav-links">
      <a href="#">Home</a>
      <a href="#how">How It Works</a>
      <a href="#features">Features</a>
      <a href="#stories">Success Stories</a>
      <a href="#safety">Safety</a>
      <a href="#contact">Contact</a>
    </nav>
   
    <button class="hamburger" id="hamburgerBtn" aria-label="Menu">
      <span></span><span></span><span></span>
    </button>
  </div>
  <div class="mobile-nav" id="mobileNav">
    <a href="#">Home</a>
    <a href="#how">How It Works</a>
    <a href="#features">Features</a>
    <a href="#stories">Success Stories</a>
    <a href="#safety">Safety</a>
    <a href="#contact">Contact</a>
   </div>
</header>

<main>
  <!-- hero -->
  <section class="hero">
    <div class="container hero-grid">
      <div class="hero-content">
        <h1>Meet Someone Who<br>Truly Matches You</h1>
        <p>A modern dating experience designed to help singles across the USA discover meaningful connections, genuine conversations, and lasting relationships.</p>
        <div class="hero-buttons">
          <span class="btn-primary">Join Free</span>
          <span class="btn-outline">How It Works</span>
        </div>
        <div class="trust-line">Private. Respectful. Designed for meaningful connections.</div>
      </div>
      <div class="hero-image"></div>
    </div>
  </section>

  <!-- intro -->
  <section>
    <div class="container reveal">
      <h2 class="section-title">Dating With Purpose</h2>
      <p class="section-sub">Find Local Partner helps people connect based on shared interests, personality, values, and relationship goals. Whether you're looking for companionship, a meaningful relationship, or someone special to build a future with, our platform makes meeting compatible people easier.</p>
      <div class="grid-3">
        <div class="card"><h3>❤️ Meaningful Matches</h3><p>Discover people who share your values and interests.</p></div>
        <div class="card"><h3>💬 Real Conversations</h3><p>Genuine dialogue that goes beyond small talk.</p></div>
        <div class="card"><h3>🔒 Privacy First</h3><p>Your data and comfort are our priority.</p></div>
      </div>
    </div>
  </section>

  <!-- how it works -->
  <section id="how">
    <div class="container reveal">
      <h2 class="section-title">How It Works</h2>
      <div class="grid-3">
        <div><div class="step-number">01</div><h3>Create Your Profile</h3><p>Tell us about yourself, your interests, and what you're looking for.</p></div>
        <div><div class="step-number">02</div><h3>Discover Compatible People</h3><p>Explore profiles based on shared interests, preferences, and relationship goals.</p></div>
        <div><div class="step-number">03</div><h3>Start a Conversation</h3><p>Connect respectfully and get to know someone who could be a great match.</p></div>
      </div>
    </div>
  </section>

  <!-- features -->
  <section id="features">
    <div class="container reveal">
      <h2 class="section-title">Features</h2>
      <div class="grid-3">
        <div class="card"><h3>Smart Matching</h3><p>Discover people based on interests, preferences, and relationship goals.</p></div>
        <div class="card"><h3>Profile Discovery</h3><p>Browse detailed profiles and learn more about potential matches.</p></div>
        <div class="card"><h3>Private Messaging</h3><p>Start conversations in a comfortable and respectful environment.</p></div>
        <div class="card"><h3>Profile Controls</h3><p>Choose what information you share and manage your visibility.</p></div>
        <div class="card"><h3>Block & Report</h3><p>Easily block or report profiles that violate community standards.</p></div>
        <div class="card"><h3>Mobile Friendly</h3><p>Enjoy a seamless experience across phones, tablets, and desktops.</p></div>
      </div>
    </div>
  </section>

  <!-- why choose -->
  <section>
    <div class="container split reveal">
      <div class="split-content">
        <h2 class="section-title">A Better Way to Connect</h2>
        <ul style="list-style:none; margin: 20px 0;">
          <li style="padding:6px 0;">✔ Genuine profiles</li><li style="padding:6px 0;">✔ Respectful community</li>
          <li style="padding:6px 0;">✔ Privacy-focused experience</li><li style="padding:6px 0;">✔ Easy-to-use interface</li>
          <li style="padding:6px 0;">✔ Personalized discovery</li><li style="padding:6px 0;">✔ Safety tools</li>
        </ul>
        <span class="btn-primary" style="padding:14px 40px;">Start Your Journey</span>
      </div>
      <div class="split-image"></div>
    </div>
  </section>

  <!-- success stories -->
  <section id="stories">
    <div class="container reveal">
      <h2 class="section-title">Success Stories</h2>
      <div class="testimonial-grid">
        <div class="testimonial-card"><h4>Emily & Daniel — Chicago, IL</h4><p>“After trying several dating platforms, we finally found a place where conversations felt genuine. We connected through shared interests and haven't looked back.”</p></div>
        <div class="testimonial-card"><h4>Sophia & Michael — Austin, TX</h4><p>“Find Local Partner made meeting someone with similar values feel natural and comfortable.”</p></div>
        <div class="testimonial-card"><h4>Olivia & James — Seattle, WA</h4><p>“We started with a simple conversation and discovered how much we had in common.”</p></div>
      </div>
      <div class="disclaimer">Stories are shared with permission. Individual experiences may vary.</div>
    </div>
  </section>

  <!-- safety -->
  <section id="safety">
    <div class="container reveal">
      <h2 class="section-title">Your Safety Matters</h2>
      <div class="safety-box">
        <ul>
          <li>Protect your personal information</li><li>Never share financial information with someone you just met</li>
          <li>Take time to get to know people</li><li>Use the platform's block and report tools</li>
          <li>Meet in public places when meeting someone offline</li><li>Tell a trusted person about your plans</li>
          <li>Report suspicious or inappropriate behavior</li>
        </ul>
        <span class="btn-primary" style="padding:12px 36px;">Learn About Dating Safety</span>
      </div>
    </div>
  </section>

  <!-- community -->
  <section>
    <div class="container reveal">
      <h2 class="section-title">Real People. Real Conversations. Real Possibilities.</h2>
      <p class="section-sub">Building a respectful community where adults can meet, communicate, and explore relationships at their own pace.</p>
      <div class="stat-grid">
        <div class="stat"><strong>50K+</strong> Members</div>
        <div class="stat"><strong>100K+</strong> Conversations</div>
        <div class="stat"><strong>50</strong> States</div>
        <div class="stat"><strong>24/7</strong> Community Access</div>
      </div>
    </div>
  </section>

  <!-- faq -->
  <section>
    <div class="container reveal">
      <h2 class="section-title">FAQ</h2>
      <div class="faq-item"><div class="faq-question" onclick="toggleFaq(this)">Is Find Local Partner free to join? <span class="faq-toggle">+</span></div><div class="faq-answer">Registration is free with optional premium access. Specific pricing will be disclosed when available.</div></div>
      <div class="faq-item"><div class="faq-question" onclick="toggleFaq(this)">How does matching work? <span class="faq-toggle">+</span></div><div class="faq-answer">Profiles are discovered based on information, interests, preferences, and relationship goals you provide.</div></div>
      <div class="faq-item"><div class="faq-question" onclick="toggleFaq(this)">Can I control who contacts me? <span class="faq-toggle">+</span></div><div class="faq-answer">Yes, you have privacy and communication controls to manage your experience.</div></div>
      <div class="faq-item"><div class="faq-question" onclick="toggleFaq(this)">How do I report someone? <span class="faq-toggle">+</span></div><div class="faq-answer">Use the block/report feature on any profile or message to alert our team.</div></div>
      <div class="faq-item"><div class="faq-question" onclick="toggleFaq(this)">Is my personal information private? <span class="faq-toggle">+</span></div><div class="faq-answer">We handle information according to our Privacy Policy. We never share data without consent.</div></div>
      <div class="faq-item"><div class="faq-question" onclick="toggleFaq(this)">Can I delete my account? <span class="faq-toggle">+</span></div><div class="faq-answer">Yes, you can request account deletion at any time through your settings or contact support.</div></div>
    </div>
  </section>

  <!-- contact -->
  <section id="contact">
    <div class="container reveal">
      <h2 class="section-title">We're Here to Help</h2>
      <form class="contact-form" onsubmit="return false;">
        <input type="text" placeholder="Full Name" required>
        <input type="email" placeholder="Email Address" required>
        <input type="text" placeholder="Subject" class="full-width">
        <textarea placeholder="Message" class="full-width" required></textarea>
        <button type="submit" class="btn-primary" style="grid-column:1/-1;padding:14px;">Send Message</button>
      </form>
      <div class="contact-info">
        <p><strong>Find Local Partner Dating</strong><br>800 Boylston Street, Suite 1555
Boston, MA 02199
United States</p>
      </div>
    </div>
  </section>
<!-- =========================
     PRIVACY POLICY
========================= -->
<section id="privacy">
  <div class="container reveal">

    <h2 class="section-title">Privacy Policy</h2>

    <p>
      <strong>Last Updated: August 2026</strong><br>
      We respect your privacy and are committed to protecting the personal
      information you provide while using our dating website and services.
      This Privacy Policy explains what information we may collect, how we use
      it, and the choices available to you.
    </p>

    <p>
      <strong>1. Information We Collect</strong><br>
      Depending on how you use our website, we may collect information such as
      your name, email address, phone number, account details, profile
      information, interests, preferences, relationship goals, photographs,
      and other information you voluntarily provide. We may also collect
      information contained in messages or communications you send through the
      platform.
    </p>

    <p>
      <strong>2. How We Use Your Information</strong><br>
      We may use your information to create and maintain your account, display
      your profile to other users according to your settings, facilitate
      communications, provide and improve our services, respond to support
      requests, maintain platform security, prevent fraud or misuse, and comply
      with applicable legal requirements.
    </p>

    <p>
      <strong>3. Profile & Dating Information</strong><br>
      Information you choose to include in your dating profile may be visible
      to other users of the platform. Please carefully consider what you share
      publicly or with another member. Do not include sensitive information
      such as financial account details, passwords, government identification
      numbers, or your exact home address in your profile.
    </p>

    <p>
      <strong>4. Messages & Communications</strong><br>
      If the platform provides messaging or communication features, information
      you submit through those features may be processed to provide the
      communication service, maintain security, investigate reported abuse,
      and enforce our Terms and Community Guidelines where appropriate.
    </p>

    <p>
      <strong>5. Cookies & Analytics</strong><br>
      We may use cookies and similar technologies to remember preferences,
      maintain essential website functionality, understand general website
      usage, and improve our services. Where required by applicable law,
      non-essential cookies or analytics technologies will be used only with
      appropriate consent.
    </p>

    <p>
      <strong>6. Third-Party Services</strong><br>
      We may work with trusted third-party providers that support services such
      as website hosting, analytics, email delivery, security, and technical
      functionality. These providers may process information only as necessary
      to provide their services and may have their own privacy policies.
    </p>

    <p>
      <strong>7. Data Security</strong><br>
      We use reasonable technical, administrative, and organizational measures
      designed to protect personal information from unauthorized access,
      alteration, disclosure, or loss. However, no online service can
      guarantee absolute security.
    </p>

    <p>
      <strong>8. Data Retention</strong><br>
      We retain personal information for as long as reasonably necessary to
      provide our services, maintain account and business records, prevent
      misuse, resolve disputes, or satisfy applicable legal obligations.
    </p>

    <p>
      <strong>9. Your Privacy Choices</strong><br>
      Depending on applicable law and the features available on the platform,
      you may have choices regarding your profile visibility, communications,
      personal information, and marketing preferences. You may also request
      access to, correction of, or deletion of certain personal information.
    </p>

    <p>
      <strong>10. Account Deletion</strong><br>
      You may request deletion of your account and associated personal
      information, subject to information that we may be required or permitted
      to retain for legitimate business, security, or legal purposes.
    </p>

    <p>
      <strong>11. Children's Privacy</strong><br>
      This dating website is intended for adults aged 18 and over. We do not
      knowingly collect personal information from children. If you believe a
      child has provided personal information through the website, please
      contact us so that appropriate action can be taken.
    </p>

    <p>
      <strong>12. External Links</strong><br>
      Our website may contain links to third-party websites or services. We are
      not responsible for the privacy practices, security, or content of those
      external websites. We recommend reviewing their privacy policies before
      providing personal information.
    </p>

    <p>
      <strong>13. Changes to This Privacy Policy</strong><br>
      We may update this Privacy Policy from time to time to reflect changes in
      our services, technology, or applicable requirements. Any updated version
      will be posted on this page with a revised "Last Updated" date.
    </p>

    <p>
      <strong>14. Contact Us</strong><br>
      If you have questions about this Privacy Policy, want to exercise an
      applicable privacy right, or have concerns about how your information is
      handled, please contact us using the email address provided on this
      website.
    </p>

    <div style="margin-top:24px;padding:20px;background:#fff;border-radius:12px;">
      <p style="margin:0;">
        <strong>Privacy Reminder:</strong><br>
        Dating profiles and private conversations may contain personal
        information. Never share passwords, financial information, government
        identification numbers, or other sensitive information with someone
        you have met online unless you fully understand the risks.
      </p>
    </div>

  </div>
</section>

  <!-- terms & guidelines -->
 <section id="terms-guidelines">
  <div class="container reveal">

    <h2 class="section-title">Terms & Community Guidelines</h2>

    <p class="section-sub">
      Our goal is to create a respectful, welcoming, and trustworthy dating
      community. By using this website, you agree to follow these Terms of Use
      and Community Guidelines.
    </p>

    <div style="display:flex;flex-wrap:wrap;gap:40px;">

      <!-- Terms of Use -->
      <div style="flex:1;min-width:300px;">
        <h3>Terms of Use</h3>

        <p>
          <strong>Eligibility</strong><br>
          You must be at least 18 years old to use this dating website. By
          creating an account or using our services, you confirm that you meet
          this requirement.
        </p>

        <p>
          <strong>User Responsibilities</strong><br>
          You are responsible for the information you provide in your profile
          and for your interactions with other members. Please provide accurate
          information and communicate honestly and respectfully.
        </p>

        <p>
          <strong>Prohibited Behavior</strong><br>
          Users may not use the website to harass, threaten, deceive, exploit,
          impersonate, or otherwise harm another person. The platform must not
          be used for unlawful activities, spam, fraud, or unauthorized
          commercial solicitation.
        </p>

        <p>
          <strong>Accounts & Security</strong><br>
          You are responsible for maintaining the confidentiality of your
          account information. Do not share your password or allow another
          person to use your account.
        </p>

        <p>
          <strong>Account Suspension or Termination</strong><br>
          We may restrict, suspend, or terminate access to an account when we
          reasonably believe that a user has violated these terms, applicable
          law, or our community standards.
        </p>

        <p>
          <strong>Intellectual Property</strong><br>
          Website content, branding, graphics, text, and other materials are
          protected by applicable intellectual property laws and may not be
          copied, reproduced, or distributed without appropriate permission.
        </p>

        <p>
          <strong>Limitation of Liability</strong><br>
          Online dating involves interactions with people you may not know
          personally. Users are responsible for making their own decisions
          regarding communication and in-person meetings. We do not guarantee
          the identity, intentions, behavior, or compatibility of any user.
        </p>

        <p>
          <strong>Changes to These Terms</strong><br>
          We may update these Terms of Use from time to time. Updated terms will
          be posted on this website, and continued use of the service after
          changes are posted may constitute acceptance of the revised terms.
        </p>
      </div>

      <!-- Community Guidelines -->
      <div style="flex:1;min-width:300px;">
        <h3>Community Guidelines</h3>

        <p>
          <strong>Be Respectful</strong><br>
          Treat other members with courtesy and respect. Differences in
          opinions, backgrounds, interests, and relationship goals should be
          handled respectfully.
        </p>

        <p>
          <strong>No Harassment or Threats</strong><br>
          Do not send threatening, abusive, intimidating, hateful, or
          unwanted messages. Respect another person's decision to stop
          communicating.
        </p>

        <p>
          <strong>No Impersonation</strong><br>
          Do not pretend to be another person, use someone else's photographs
          without authorization, or provide intentionally misleading
          information about your identity.
        </p>

        <p>
          <strong>No Scams or Fraud</strong><br>
          Financial scams, romance scams, requests for money, fraudulent
          schemes, or attempts to obtain another person's financial or
          personal information are strictly prohibited.
        </p>

        <p>
          <strong>No Illegal Content or Activities</strong><br>
          Do not use the platform to promote or facilitate illegal activities
          or to share content that violates applicable laws.
        </p>

        <p>
          <strong>No Explicit Sexual Content</strong><br>
          Keep profiles, photographs, and communications appropriate for the
          platform. Explicit sexual content or sexually exploitative material
          is not permitted.
        </p>

        <p>
          <strong>No Unwanted Solicitation</strong><br>
          Do not use the platform for unsolicited advertising, spam, recruiting,
          or commercial solicitation without authorization.
        </p>

        <p>
          <strong>Protect Personal Information</strong><br>
          Do not publish or share another person's private information,
          including phone numbers, addresses, financial information, private
          photographs, or personal communications without permission.
        </p>

        <p>
          <strong>Report Suspicious Behavior</strong><br>
          If you encounter harassment, impersonation, fraud, or other
          inappropriate behavior, use the available reporting tools or contact
          our support team.
        </p>

        <p>
          <strong>Meet Safely</strong><br>
          If you decide to meet someone in person, consider meeting in a public
          location, tell someone you trust about your plans, arrange your own
          transportation, and avoid sharing sensitive financial information.
        </p>
      </div>

    </div>

    <div style="margin-top:40px;padding:24px;background:#fff;border-radius:12px;">
      <h3>Important Safety Notice</h3>
      <p style="color:#4f3730;line-height:1.8;margin:0;">
        Online dating requires good judgment. Never send money or financial
        information to someone you have met online, even if they provide an
        urgent or convincing reason. Take your time getting to know someone and
        report suspicious activity through the appropriate channels.
      </p>
    </div>

  </div>
</section>
</main>

<footer class="footer">
  <div class="container">
    <div class="footer-grid">
      <div><span class="logo" style="font-size:1.7rem;">Find Local Partner</span><p style="margin-top:8px;color:#4f3730;">Meaningful connections begin with a genuine conversation.</p></div>
      <div><a href="#">Home</a><a href="#how">How It Works</a><a href="#features">Features</a><a href="#safety">Safety</a></div>
      <div><a href="#contact">Contact</a><a href="#">Privacy Policy</a><a href="#">Terms of Use</a><a href="#">Community Guidelines</a></div>
      <div><div class="social-icons"></div><p style="color:#4f3730;">18+ only. Dating platform intended for adults.</p></div>
    </div>
    <div class="footer-bottom"><span>© 2026 Find Local Partner Dating. All Rights Reserved.</span></div>
  </div>
</footer>

<script>
  // hamburger
  document.getElementById('hamburgerBtn').addEventListener('click', function() {
    document.getElementById('mobileNav').classList.toggle('open');
  });

  // faq toggle
  function toggleFaq(el) {
    const answer = el.nextElementSibling;
    const toggle = el.querySelector('.faq-toggle');
    if (answer.classList.contains('open')) {
      answer.classList.remove('open');
      toggle.textContent = '+';
    } else {
      answer.classList.add('open');
      toggle.textContent = '−';
    }
  }

  // reveal on scroll
  const reveals = document.querySelectorAll('.reveal');
  function checkReveal() {
    const windowHeight = window.innerHeight;
    reveals.forEach(el => {
      const rect = el.getBoundingClientRect();
      if (rect.top < windowHeight - 80) {
        el.classList.add('visible');
      }
    });
  }
  window.addEventListener('scroll', checkReveal);
  window.addEventListener('load', checkReveal);
</script>
</body>
</html>