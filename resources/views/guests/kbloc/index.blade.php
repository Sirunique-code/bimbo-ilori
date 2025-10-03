<x-guest-layout>
    <!-- Hero Section -->
<section class="bimbo-hero d-flex flex-column justify-content-center align-items-center">
  <div class="container text-center">
    <h1 class="bimbo-hero-title">
      Equipping professionals and organizations for clarity, excellence, and lasting impact.
    </h1>
    <p class="bimbo-hero-subtext">
      We design and deliver purpose-driven training in leadership, communication, mentoring, and resilience — helping organizations thrive and professionals grow.
    </p>
    <div class="bimbo-hero-buttons">
      <a href="{{ route('courses')}}" class="btn btn-primary bimbo-btn">📌 Explore Programs</a>
      <a href="{{ route('contact.index') }}" class="btn btn-outline-light bimbo-btn">📩 Contact Us</a>
    </div>
  </div>
</section>

<!-- About Section -->
<section id="about" class="bimbo-about py-5">
  <div class="container">
    <div class="row align-items-center">
      
      <!-- Text Content -->
      <div class="col-lg-7">
        <h2 class="bimbo-section-title">🌐 About Us – Kingswitbloc Consult</h2>
        
        <h4 class="bimbo-about-subtitle">Who We Are</h4>
        <p class="bimbo-about-text">
          Kingswitbloc Consult is a professional development and capacity-building firm dedicated 
          to transforming individuals and organizations. We provide tailored solutions that align 
          professional skills with organizational goals, building teams that are competent, 
          confident, and compassionate.
        </p>
        
        <h4 class="bimbo-about-subtitle">Vision</h4>
        <p class="bimbo-about-text">
          To equip competent, confident, and compassionate professionals who lead with clarity, 
          inspire excellence, and transform their organizations for lasting impact.
        </p>

        <a href="{{ route('kbloc-about') }}" class="btn btn-outline-primary bimbo-about-btn">
          Learn More About Us →
        </a>
      </div>

      <!-- Optional Image / Illustration -->
      <div class="col-lg-5 text-center mt-4 mt-lg-0">
        <img src="{{ asset('assets/img/kbloc.jpg') }}" alt="About Kingswitbloc" class="img-fluid rounded bimbo-about-img shadow-sm">
      </div>

    </div>
  </div>
</section>

<!-- Meet the Lead Consultant -->
<section id="lead-consultant" class="bimbo-lead py-5 bg-light">
  <div class="container">
    <div class="row align-items-center">
      
      <!-- Image -->
      <div class="col-lg-5 text-center mb-4 mb-lg-0">
        <img src="{{ asset('assets/img/about2.jpg') }}" alt="Adm. Abimbola Ilori" 
             class="img-fluid rounded-circle shadow-sm bimbo-lead-img">
      </div>

      <!-- Text Content -->
      <div class="col-lg-7">
        <h2 class="bimbo-section-title">Meet the Lead Consultant</h2>
        <h4 class="bimbo-lead-name">Adm. Abimbola Ilori <span class="bimbo-lead-cred">FCIA</span></h4>
        <p class="bimbo-lead-subtitle">
          Chartered Administrator | Certified Life Purpose Coach | Trained Guidance Professional
        </p>

        <p class="bimbo-lead-text">
          As the founder and Lead Consultant at Kingswitbloc Consult, Adm. Abimbola Ilori brings a 
          unique blend of administrative expertise, coaching insight, and guidance training to 
          organizational development.
        </p>

        <p class="bimbo-lead-text">
          With extensive experience in leadership development, communication training, and 
          mentoring systems, Abimbola Ilori has designed and facilitated capacity-building programs 
          for healthcare, education, corporate, and public service institutions. 
          His approach is practical, holistic, and tailored, ensuring both professional competence 
          and personal transformation.
        </p>

        <p class="bimbo-lead-text">
          Driven by the belief that people are an organization’s greatest asset, Abimbola Ilori helps 
          professionals gain clarity, resilience, and purpose, enabling organizations to thrive in 
          dynamic environments.
        </p>

        <a  href="{{ route('about.index') }}" class="btn btn-primary bimbo-lead-btn">Learn More About BI →</a>
      </div>

    </div>
  </div>
</section>

<!-- Our Programs (Highlight Cards + Expandable Section) -->
<section id="programs" class="bimbo-programs py-5">
  <div class="container text-center">
    <h2 class="bimbo-section-title mb-4">Our Programs</h2>
    <p class="bimbo-section-subtitle mb-5">
      Purpose-driven programs that equip professionals and organizations with clarity, competence, and confidence.
    </p>

    <div class="row g-4">
      <!-- Program Card -->
      <div class="col-md-6 col-lg-4">
        <div class="card shadow-sm h-100 border-0 bimbo-program-card">
          <div class="card-body">
            <h5 class="card-title">Leadership Development</h5>
            <p class="card-text">
              Equipping leaders to inspire, make decisions with clarity, and drive organizational success.
            </p>
          </div>
        </div>
      </div>

      <!-- Program Card -->
      <div class="col-md-6 col-lg-4">
        <div class="card shadow-sm h-100 border-0 bimbo-program-card">
          <div class="card-body">
            <h5 class="card-title">Effective Communication</h5>
            <p class="card-text">
              Building clarity, collaboration, and respect across all professional levels.
            </p>
          </div>
        </div>
      </div>

      <!-- Program Card -->
      <div class="col-md-6 col-lg-4">
        <div class="card shadow-sm h-100 border-0 bimbo-program-card">
          <div class="card-body">
            <h5 class="card-title">Mentoring & Coaching Systems</h5>
            <p class="card-text">
              Helping leaders nurture others and sustain growth through structured mentoring.
            </p>
          </div>
        </div>
      </div>

      <!-- Program Card -->
      <div class="col-md-6 col-lg-4">
        <div class="card shadow-sm h-100 border-0 bimbo-program-card">
          <div class="card-body">
            <h5 class="card-title">Resilience & Emotional Intelligence</h5>
            <p class="card-text">
              Equipping staff to thrive under pressure and remain adaptable in dynamic environments.
            </p>
          </div>
        </div>
      </div>

      <!-- Program Card -->
      <div class="col-md-6 col-lg-4">
        <div class="card shadow-sm h-100 border-0 bimbo-program-card">
          <div class="card-body">
            <h5 class="card-title">Organizational Culture & Performance</h5>
            <p class="card-text">
              Transforming teams and systems to align with purpose and excellence.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- View All Programs Button -->
    <div class="mt-4">
      <button class="btn btn-primary bimbo-btn-rounded" type="button" data-bs-toggle="collapse" data-bs-target="#allPrograms" aria-expanded="false" aria-controls="allPrograms">
        View All Programs ↓
      </button>
    </div>

    <!-- Hidden Detailed Programs -->
    <div class="collapse mt-5 text-start" id="allPrograms">
      <div class="card card-body shadow-sm border-0 bimbo-programs-detailed">

        <!-- Program 1 -->
        <div class="mb-5">
          <h4>1. Leadership Development</h4>
          <ul>
            <li>Leading with clarity and vision</li>
            <li>Decision-making and problem-solving</li>
            <li>Building trust and motivating teams</li>
            <li>Strategic leadership in changing environments</li>
          </ul>
          <p><strong>Ideal for:</strong> Managers, team leads, department heads, and executives.</p>
        </div>

        <!-- Program 2 -->
        <div class="mb-5">
          <h4>2. Effective Communication</h4>
          <ul>
            <li>Patient-centered and client-centered communication</li>
            <li>Team collaboration and inter-professional dialogue</li>
            <li>Conflict resolution and feedback delivery</li>
            <li>Public speaking and media communication</li>
          </ul>
          <p><strong>Ideal for:</strong> Healthcare professionals, administrators, corporate staff, and public-facing leaders.</p>
        </div>

        <!-- Program 3 -->
        <div class="mb-5">
          <h4>3. Mentoring & Coaching Systems</h4>
          <ul>
            <li>Designing mentoring frameworks</li>
            <li>Coaching skills for managers and supervisors</li>
            <li>Peer-to-peer and cross-professional mentoring</li>
            <li>Building next-generation leaders through structured guidance</li>
          </ul>
          <p><strong>Ideal for:</strong> Organizations seeking sustainable leadership pipelines.</p>
        </div>

        <!-- Program 4 -->
        <div class="mb-5">
          <h4>4. Resilience & Emotional Intelligence</h4>
          <ul>
            <li>Understanding and applying emotional intelligence</li>
            <li>Stress management and workplace well-being</li>
            <li>Building resilience in high-demand environments</li>
            <li>Enhancing adaptability and self-leadership</li>
          </ul>
          <p><strong>Ideal for:</strong> Staff in high-pressure roles such as healthcare, education, corporate, and public service.</p>
        </div>

        <!-- Program 5 -->
        <div class="mb-5">
          <h4>5. Organizational Culture & Performance Improvement</h4>
          <ul>
            <li>Defining and embedding organizational values</li>
            <li>Improving communication culture across departments</li>
            <li>Driving accountability and ethical practices</li>
            <li>Aligning daily activities with organizational mission and goals</li>
          </ul>
          <p><strong>Ideal for:</strong> Senior leadership teams, HR, and organizational development units.</p>
        </div>

        <!-- Program 6 -->
        <div class="mb-5">
          <h4>6. Custom Training Solutions</h4>
          <p>
            We understand that no two organizations are the same. Kingswitbloc Consult works with clients to co-create 
            customized training programs based on their specific needs, challenges, and goals.
          </p>
          <p><strong>Examples:</strong></p>
          <ul>
            <li>Media communication training for hospital PROs</li>
            <li>Team-building retreats for schools and NGOs</li>
            <li>Change management workshops for corporate staff</li>
            <li>Staff development seminars for administrative cadres</li>
          </ul>
        </div>

        <!-- Training Approach -->
        <div class="mb-5">
          <h4>Our Training Approach</h4>
          <ul>
            <li><strong>Interactive:</strong> We use role-plays, case studies, and group activities.</li>
            <li><strong>Contextual:</strong> Programs are tailored to reflect your sector’s realities.</li>
            <li><strong>Practical:</strong> Participants leave with actionable tools, not just theories.</li>
            <li><strong>Sustainable:</strong> We provide mentoring and follow-up for long-term results.</li>
          </ul>
        </div>

        <!-- Call to Action -->
        <div class="text-center">
          <p class="fw-bold mb-3">📌 Ready to strengthen your team?</p>
          <a href="{{ route('contact.index') }}" class="btn btn-primary bimbo-btn-rounded">📩 Contact Us Today</a>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- Why Choose Kingswitbloc -->
<section id="why-choose" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-4">Why Choose Kingswitbloc?</h2>
    <div class="row">
      <div class="col-md-6">
        <ul class="list-unstyled">
          <li>✔ Context-specific programs tailored to organizational needs.</li>
          <li>✔ Blend of professional competence and personal development.</li>
        </ul>
      </div>
      <div class="col-md-6">
        <ul class="list-unstyled">
          <li>✔ Interactive, practical, and results-driven training.</li>
          <li>✔ Commitment to sustainable impact through follow-up and mentoring.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Clients & Impact -->
<section id="clients-impact" class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">Clients & Impact</h2>
    <div class="row">
      <div class="col-md-6">
        <blockquote class="blockquote">
          <p>“The training you give is exceptional and we have found a good mentor in you.”</p>
          <footer class="blockquote-footer">Mrs Adejoh</footer>
        </blockquote>
        <blockquote class="blockquote">
          <p>“Your mentorship and programs transformed the way our team works together.”</p>
          <footer class="blockquote-footer">Mr Kola</footer>
        </blockquote>
      </div>
      <div class="col-md-6 d-flex align-items-center">
        <p class="lead text-center">
          Trusted by professionals across sectors for impact and purpose-driven growth.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Resources -->
<section id="resources" class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-4">Visit Resources</h2>
    <p class="text-center mb-5">Explore leadership insights, social media content, podcasts, and books curated by Kingswitbloc Consult.</p>

    <div class="row g-4">
      <!-- Leadership Posts -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Leadership Posts</h5>
            <ul class="list-unstyled mb-0">
              <li><a href="https://lnkd.in/p/g7ix6MEw" target="_blank">LinkedIn Post 1</a></li>
              <li><a href="https://lnkd.in/p/g_t8CDWa" target="_blank">LinkedIn Post 2</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Social Media -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Social Media Shares</h5>
            <ul class="list-unstyled mb-0">
              <li><a href="https://www.facebook.com/share/p/15vBX8Bgeb/" target="_blank">Facebook Resource 1</a></li>
              <li><a href="https://www.facebook.com/share/p/1Cmivvk37z/" target="_blank">Facebook Resource 2</a></li>
              <li><a href="https://www.facebook.com/share/p/1FBVKj3RQP/" target="_blank">Facebook Resource 3</a></li>
              <li><a href="https://www.facebook.com/share/p/1JhUuDc7gP/" target="_blank">Facebook Resource 4</a></li>
              <li><a href="https://www.facebook.com/share/p/1CjRckETxH/" target="_blank">Facebook Resource 5</a></li>
              <li><a href="https://www.facebook.com/share/p/1G58PLqGFE/" target="_blank">Facebook Resource 6</a></li>
              <li><a href="https://www.facebook.com/share/p/1KBD8xdv9C/" target="_blank">Facebook Resource 7</a></li>
              <li><a href="https://www.facebook.com/share/p/19miZdBnQn/" target="_blank">Facebook Resource 8</a></li>
            </ul>
          </div>
        </div>
      </div>

      <!-- Podcasts -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Podcasts</h5>
            <p>
              Listen to our supported podcast edition: 
              <a href="https://open.spotify.com/show/7iwYHW0a9gsFQeNRIQOErH?si=bOyVq0sWRaiPa5xlvjtrNA" target="_blank">(Irresistible Request)</a>
            </p>
          </div>
        </div>
      </div>

      <!-- Books -->
      <div class="col-md-6 col-lg-4">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Recommended Books</h5>
            <ul class="list-unstyled mb-0">
              <li>Asking Well</li>
              <li>Business Backends</li>
              <li>More coming soon…</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Organizational Strategy Consultation Section -->
<section id="consultation" class="consultation-section py-5">
  <div class="container">
    <!-- Header -->
    <div class="text-center mb-5">
      <h2 class="fw-bold">Organizational Strategy Consultation</h2>
      <p class="lead text-muted">Let’s Build Together</p>
      <p>Partner with Kingswitbloc Consult for your next training, leadership retreat, or organizational development program.</p>
      <a href="{{ route('contact.index') }}" class="btn btn-primary px-4 mt-3">📌 Request a Consultation/Session</a>
    </div>

    <!-- Tiers Row -->
    <div class="row g-4">
      <!-- Tier 1 -->
      <div class="col-md-4">
        <div class="card consultation-card shadow-lg h-100">
          <img src="{{ asset('assets/img/flyer-tier1.jpg') }}" class="card-img-top" alt="The Focus Brief">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title fw-bold">Tier 1 – The Focus Brief (30 mins)</h5>
            <p><strong>Theme:</strong> Quick Wins, Clear Direction</p>
            <p class="small text-muted">#QuickFocus #FastTrack #ExecutiveBrief</p>
            <p class="flex-grow-1">A short, targeted briefing to tackle one urgent organizational issue and provide immediate, actionable insight.</p>
            <p class="fw-bold">→ $100 – $250 (₦150,000 – ₦350,000)</p>
            <a href="https://paystack.com/buy/the-focus-brief-ypzkpf" class="btn btn-outline-primary mt-auto">Book Now</a>
          </div>
        </div>
      </div>

      <!-- Tier 2 -->
      <div class="col-md-4">
        <div class="card consultation-card shadow-lg h-100 border-primary">
          <img src="{{ asset('assets/img/flyer-tier2.jpg') }}" class="card-img-top" alt="The Strategy Reset">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title fw-bold">Tier 2 – The Strategy Reset (60 mins)</h5>
            <p><strong>Theme:</strong> Insight, Structure, Solutions</p>
            <p class="small text-muted">#DeepDive #StrategicShift #LeadershipLens</p>
            <p class="flex-grow-1">A one-hour strategy session to explore root issues, align leadership, and outline 3–5 clear action steps.</p>
            <p class="fw-bold">→ $200-$400 (₦300,000 – 600,000)</p>
            <a href="https://paystack.com/buy/the-strategy-reset-wnhzfx" class="btn btn-primary mt-auto">Book Now</a>
          </div>
        </div>
      </div>

      <!-- Tier 3 -->
      <div class="col-md-4">
        <div class="card consultation-card shadow-lg h-100">
          <img src="{{ asset('assets/img/flyer-tier3.jpg') }}" class="card-img-top" alt="The Transformation Leap">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title fw-bold">Tier 3 – The Transformation Leap (90 mins)</h5>
            <p><strong>Theme:</strong> Breakthrough Strategy, Lasting Change</p>
            <p class="small text-muted">#Transformation #Blueprint #HighImpact</p>
            <p class="flex-grow-1">A deep-dive strategy lab to scan organizational realities, introduce tailored frameworks, and draft a roadmap for lasting transformation. Includes post-session notes and summary.</p>
            <p class="fw-bold">→ $300-$500 (₦450,000 – ₦750,000)</p>
            <a href="https://paystack.com/buy/the-transformation-leap--90mins-jrcwpw" class="btn btn-outline-primary mt-auto">Book Now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>








</x-guest-layout>