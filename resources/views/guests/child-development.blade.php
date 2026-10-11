<x-guest-layout>

<!-- Unique wrapper for page-specific CSS targeting -->
<div data-page="stc-landing" class="stc-landing-page font-sans antialiased text-gray-800">

    <!-- =========================
         1. HERO SECTION
    ========================== -->
    <section class="stc-hero relative overflow-hidden bg-gradient-to-br from-blue-900 via-blue-700 to-green-600 text-white">
        <!-- Decorative background blurs -->
        <div class="absolute inset-0 opacity-10 pointer-events-none">
            <div class="absolute -top-24 -right-24 w-96 h-96 rounded-full bg-white blur-3xl"></div>
            <div class="absolute bottom-0 left-0 w-80 h-80 rounded-full bg-green-300 blur-3xl"></div>
        </div>

        <div class="container mx-auto px-6 lg:px-16 py-24 relative z-10">
            <div class="max-w-4xl mx-auto text-center mb-16">
                <span class="stc-hero-badge uppercase tracking-[4px] text-sm font-semibold text-yellow-300 block mb-4">
                    Student Transformation Companion (STC) Series
                </span>
                <h1 class="stc-hero-title text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight">
                    Growing Character, <br class="hidden md:block">Building Competence, <br class="hidden md:block">
                    Discovering Clarity, <br class="hidden md:block">Inspiring Contribution.
                </h1>
                <p class="stc-hero-subtitle mt-6 text-lg md:text-xl text-blue-100 leading-relaxed max-w-3xl mx-auto">
                    A progressive child development framework that supports learners from childhood through adolescence, equipping them with the knowledge, habits, character, and mindset needed for lifelong learning and purposeful living.
                </p>
                <div class="mt-10 flex flex-wrap justify-center gap-4">
                    <a href="#stc-collections" class="stc-btn-primary px-8 py-4 rounded-full bg-yellow-400 hover:bg-yellow-300 text-gray-900 font-bold transition transform hover:scale-105 shadow-lg">
                        Explore the Journey
                    </a>
                    <a href="{{ route('child-partner') }}" class="stc-btn-secondary px-8 py-4 rounded-full border-2 border-white hover:bg-white hover:text-blue-800 font-semibold transition transform hover:scale-105">
                        Collaborate with BIPPs
                    </a>
                </div>
            </div>

            <!-- 4 Pillars Icon Blocks -->
<div class="stc-pillars-grid grid grid-cols-2 md:grid-cols-4 gap-6 max-w-5xl mx-auto">
    
    <div class="stc-pillar-card bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-6 text-center hover:bg-white/20 transition cursor-pointer" onclick="openPillarModal('character')">
        <div class="text-4xl mb-3">🌱</div>
        <h3 class="font-bold text-lg">Character</h3>
        <p class="text-sm text-blue-100 mt-2">Values & Integrity</p>
    </div>

    <div class="stc-pillar-card bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-6 text-center hover:bg-white/20 transition cursor-pointer" onclick="openPillarModal('competence')">
        <div class="text-4xl mb-3">📘</div>
        <h3 class="font-bold text-lg">Competence</h3>
        <p class="text-sm text-blue-100 mt-2">Skills & Excellence</p>
    </div>

    <div class="stc-pillar-card bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-6 text-center hover:bg-white/20 transition cursor-pointer" onclick="openPillarModal('clarity')">
        <div class="text-4xl mb-3">🧭</div>
        <h3 class="font-bold text-lg">Clarity</h3>
        <p class="text-sm text-blue-100 mt-2">Direction & Purpose</p>
    </div>

    <div class="stc-pillar-card bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-6 text-center hover:bg-white/20 transition cursor-pointer" onclick="openPillarModal('contribution')">
        <div class="text-4xl mb-3">✨</div>
        <h3 class="font-bold text-lg">Contribution</h3>
        <p class="text-sm text-blue-100 mt-2">Meaningful Impact</p>
    </div>

</div>
        </div>
    </section>
    
    <!-- =========================
     MEET THE FOUNDER
========================== -->
<section class="bi-founder-section">
    <div class="container mx-auto px-6 lg:px-16">
        <div class="bi-founder-grid">
            
            <!-- Image Column -->
            <div class="bi-founder-image-col">
                <div class="bi-image-frame">
                    <img src="{{ asset('assets/img/stc-founder.jpg') }}" alt="Bimbo Ilori - Educational Leader and Author" class="bi-founder-img">
                </div>
            </div>

            <!-- Content Column -->
            <div class="bi-founder-content-col">
                <span class="bi-overline">The Founder</span>
                <h2 class="bi-main-title">Meet Bimbo Ilori</h2>
                
                <!-- Credentials Grid -->
                <div class="bi-credentials-grid">
                    <div class="bi-credential-item"><span class="bi-check">✓</span> Educational Leader</div>
                    <div class="bi-credential-item"><span class="bi-check">✓</span> PGDE Holder</div>
                    <div class="bi-credential-item"><span class="bi-check">✓</span> Certified Guidance Counsellor</div>
                    <div class="bi-credential-item"><span class="bi-check">✓</span> Life Purpose Development Expert</div>
                    <div class="bi-credential-item"><span class="bi-check">✓</span> Author</div>
                    <div class="bi-credential-item"><span class="bi-check">✓</span> Parenting Advocate</div>
                </div>

                <!-- Bio Text -->
                <p class="bi-bio-text">
                    Bimbo Ilori has worked alongside children, parents, educators, and schools, helping them build environments where children flourish academically, develop strong character, discover purpose, and grow into responsible adults.
                </p>
                <p class="bi-bio-text">
                    Her approach combines educational practice, guidance and counselling, life purpose development, and practical parenting experience to create resources that are both meaningful and practical.
                </p>
                <p class="bi-bio-text">
                    Every workbook, journal, and parenting resource has been developed from this integrated perspective with one goal:
                </p>

                <!-- Core Goal Highlight -->
                <div class="bi-core-goal">
                    <span class="bi-goal-quote">“</span>
                    <p>Helping children become the best version of themselves - through childhood into adulthood.</p>
                </div>
            </div>

        </div>
    </div>
</section>


    <!-- =========================
         2. THE STC PATHWAY (Largest Element)
    ========================== -->
   <!-- =========================
     STC COLLECTIONS & BOOKS
========================== -->
 <section id="stc-collections" class="stc-books-section">
            <div class="container mx-auto px-6 lg:px-16">
                <div class="text-center mb-16">
                    <h2 class="stc-section-title">The STC Collections & Books</h2>
                    <p class="stc-section-subtitle">A progressive library designed for every stage of a learner's
                        development.</p>
                </div>

                <!-- Collection 1: Character Builder -->
                <div class="stc-collection-block">
                    <div class="stc-collection-header stc-header-cbc">
                        <div class="stc-collection-icon">🌱</div>
                        <div>
                            <h3 class="stc-collection-name">Character Builder Collection</h3>
                            <span class="stc-collection-ages">Ages 6–9 Years</span>
                        </div>
                    </div>
                    <div class="stc-books-grid stc-grid-3">
                        <div class="stc-book-card">
                            <div class="stc-book-image-wrapper">
                                <img src="{{ asset('assets/img/CBC1.jpg') }}" alt="Character Builder Level 1"
                                    class="stc-book-img">
                            </div>
                            <div class="stc-book-details">
                                <span class="stc-book-level">Level 1</span>
                                <h4 class="stc-book-title">Building Good Habits</h4>
                                <span class="stc-book-age">Ages 6–7</span>
                                <p class="stc-book-desc">Focuses on foundational daily routines, positive behaviour patterns, self-care, and basic emotional awareness.</p>
                            </div>
                        </div>
                        <div class="stc-book-card">
                            <div class="stc-book-image-wrapper">
                                <img src="{{ asset('assets/img/CBC2.jpg') }}" alt="Character Builder Level 2"
                                    class="stc-book-img">
                            </div>
                            <div class="stc-book-details">
                                <span class="stc-book-level">Level 2</span>
                                <h4 class="stc-book-title">Growing in Responsibility</h4>
                                <span class="stc-book-age">Ages 7–8</span>
                                <p class="stc-book-desc">Helps young learners take ownership of personal tasks, respect others, and develop accountability.</p>
                            </div>
                        </div>
                        <div class="stc-book-card">
                            <div class="stc-book-image-wrapper">
                                <img src="{{ asset('assets/img/CBC3.jpg') }}" alt="Character Builder Level 3"
                                    class="stc-book-img">
                            </div>
                            <div class="stc-book-details">
                                <span class="stc-book-level">Level 3</span>
                                <h4 class="stc-book-title">Living My Values</h4>
                                <span class="stc-book-age">Ages 8–9</span>
                                <p class="stc-book-desc">Guides children to understand core moral principles, honesty, empathy, and making thoughtful choices.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Collection 2: Building My Success -->
                <div class="stc-collection-block">
                    <div class="stc-collection-header stc-header-bms">
                        <div class="stc-collection-icon">📘</div>
                        <div>
                            <h3 class="stc-collection-name">Building My Success Collection</h3>
                            <span class="stc-collection-ages">Ages 9–12 Years</span>
                        </div>
                    </div>
                    <div class="stc-books-grid stc-grid-3">
                        <div class="stc-book-card">
                            <div class="stc-book-image-wrapper">
                                <img src="{{ asset('assets/img/BMS1.jpg') }}" alt="Building My Success Level 1"
                                    class="stc-book-img">
                            </div>
                            <div class="stc-book-details">
                                <span class="stc-book-level">Level 1</span>
                                <h4 class="stc-book-title">Building My Success System</h4>
                                <span class="stc-book-age">Ages 9–10</span>
                                <p class="stc-book-desc">Introduces structured study routines, time management, organizational skills, and goal setting.</p>
                            </div>
                        </div>
                        <div class="stc-book-card">
                            <div class="stc-book-image-wrapper">
                                <img src="{{ asset('assets/img/BMS2.jpg') }}" alt="Building My Success Level 2"
                                    class="stc-book-img">
                            </div>
                            <div class="stc-book-details">
                                <span class="stc-book-level">Level 2</span>
                                <h4 class="stc-book-title">Becoming a Better Learner</h4>
                                <span class="stc-book-age">Ages 10–11</span>
                                <p class="stc-book-desc">Enhances active listening, effective note-taking, critical thinking, and problem-solving abilities.</p>
                            </div>
                        </div>
                        <div class="stc-book-card">
                            <div class="stc-book-image-wrapper">
                                <img src="{{ asset('assets/img/BMS3.jpg') }}" alt="Building My Success Level 3"
                                    class="stc-book-img">
                            </div>
                            <div class="stc-book-details">
                                <span class="stc-book-level">Level 3</span>
                                <h4 class="stc-book-title">Growing as an Independent Learner</h4>
                                <span class="stc-book-age">Ages 11–12</span>
                                <p class="stc-book-desc">Fosters self-direction, personal goal tracking, resilience, and confidence in independent study.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Collection 3: Career Explorer -->
                <div class="stc-collection-block">
                    <div class="stc-collection-header stc-header-cec">
                        <div class="stc-collection-icon">🧭</div>
                        <div>
                            <h3 class="stc-collection-name">Career Explorer Collection</h3>
                            <span class="stc-collection-ages">Ages 12–15 Years</span>
                        </div>
                    </div>
                    <div class="stc-books-grid stc-grid-3">
                        <div class="stc-book-card">
                            <div class="stc-book-image-wrapper">
                                <img src="{{ asset('assets/img/CEC1.jpg') }}" alt="Career Explorer Level 1"
                                    class="stc-book-img">
                            </div>
                            <div class="stc-book-details">
                                <span class="stc-book-level">Level 1</span>
                                <h4 class="stc-book-title">Discovering My Strengths</h4>
                                <span class="stc-book-age">Ages 12–13</span>
                                <p class="stc-book-desc">Helps early teens identify unique talents, personal interests, personality traits, and skill sets.</p>
                            </div>
                        </div>
                        <div class="stc-book-card">
                            <div class="stc-book-image-wrapper">
                                <img src="{{ asset('assets/img/CEC2.jpg') }}" alt="Career Explorer Level 2"
                                    class="stc-book-img">
                            </div>
                            <div class="stc-book-details">
                                <span class="stc-book-level">Level 2</span>
                                <h4 class="stc-book-title">Exploring My Opportunities</h4>
                                <span class="stc-book-age">Ages 13–14</span>
                                <p class="stc-book-desc">Broadens awareness of career pathways, emerging industries, educational routes, and real-world roles.</p>
                            </div>
                        </div>
                        <div class="stc-book-card">
                            <div class="stc-book-image-wrapper">
                                <img src="{{ asset('assets/img/CEC3.jpg') }}" alt="Career Explorer Level 3"
                                    class="stc-book-img">
                            </div>
                            <div class="stc-book-details">
                                <span class="stc-book-level">Level 3</span>
                                <h4 class="stc-book-title">Planning My Future</h4>
                                <span class="stc-book-age">Ages 14–15</span>
                                <p class="stc-book-desc">Guides subject selection, academic pathway planning, personal branding, and career roadmaps.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Collection 4: Purpose Journey -->
                <div class="stc-collection-block">
                    <div class="stc-collection-header stc-header-pjc">
                        <div class="stc-collection-icon">✨</div>
                        <div>
                            <h3 class="stc-collection-name">Purpose Journey Collection</h3>
                            <span class="stc-collection-ages">Ages 15–18 Years</span>
                        </div>
                    </div>
                    <div class="stc-books-grid stc-grid-2">
                        <div class="stc-book-card">
                            <div class="stc-book-image-wrapper">
                                <img src="{{ asset('assets/img/PJC1.jpg') }}" alt="Purpose Journey Level 1"
                                    class="stc-book-img">
                            </div>
                            <div class="stc-book-details">
                                <span class="stc-book-level">Level 1</span>
                                <h4 class="stc-book-title">Discovering My Identity</h4>
                                <span class="stc-book-age">Ages 15–16</span>
                                <p class="stc-book-desc">Encourages self-reflection, self-worth, emotional intelligence, and discovering core personal identity.</p>
                            </div>
                        </div>
                        <div class="stc-book-card">
                            <div class="stc-book-image-wrapper">
                                <img src="{{ asset('assets/img/PJC2.jpg') }}" alt="Purpose Journey Level 2"
                                    class="stc-book-img">
                            </div>
                            <div class="stc-book-details">
                                <span class="stc-book-level">Level 2</span>
                                <h4 class="stc-book-title">Connecting My Purpose</h4>
                                <span class="stc-book-age">Ages 16–18</span>
                                <p class="stc-book-desc">Aligns personal values, gifts, and academic goals toward vision and meaningful societal contribution.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Collection 5: Future Ready Companion -->
                <div class="stc-collection-block">
                    <div class="stc-collection-header stc-header-frc">
                        <div class="stc-collection-icon">🎓</div>
                        <div>
                            <h3 class="stc-collection-name">Future Ready Companion</h3>
                            <span class="stc-collection-ages">Graduation (Typically Ages 17–18+)</span>
                        </div>
                    </div>
                    <div class="stc-books-grid stc-grid-1">
                        <div class="stc-book-card stc-book-featured">
                            <div class="stc-book-image-wrapper">
                                <img src="{{ asset('assets/img/FRC1.jpg') }}" alt="Future Ready Companion"
                                    class="stc-book-img">
                            </div>
                            <div class="stc-book-details">
                                <span class="stc-book-level">Graduation Edition</span>
                                <h4 class="stc-book-title">Ready for What's Next</h4>
                                <span class="stc-book-age">Recommended for Graduating Learners</span>
                                <p class="stc-book-desc">Equips graduating students with essential life skills, transition strategies, and mindset for adulthood.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order Button for Schools -->
                <div class="text-center mt-12">
                    <a href="https://forms.gle/tCi66BffoAxhTdsL7" target="_blank" rel="noopener noreferrer"
                        class="stc-btn-primary inline-block">
                        Place an Order for Your School
                    </a>
                </div>

            </div>
        </section>


    <!-- =========================
         3. COLLECTIONS SNAPSHOT
    ========================== -->
    {{-- <section class="stc-collections-section py-24 bg-white">
        <div class="container mx-auto px-6 lg:px-16">
            <div class="text-center mb-16">
                <h2 class="stc-section-title text-3xl md:text-4xl font-extrabold text-gray-800">
                    STC Collections Snapshot
                </h2>
                <p class="stc-section-subtitle mt-4 text-gray-600">
                    Tailored resources for every stage of development.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Collection 1 -->
                <div class="stc-collection-card border border-gray-100 rounded-2xl p-8 hover:shadow-xl transition bg-green-50/50">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-3xl">🌱</span>
                        <h3 class="text-xl font-bold text-gray-800">Character Builder</h3>
                    </div>
                    <span class="text-xs font-bold text-green-600 uppercase tracking-wider">3 Levels</span>
                    <p class="mt-3 text-gray-600">Good Habits • Responsibility • Values</p>
                </div>

                <!-- Collection 2 -->
                <div class="stc-collection-card border border-gray-100 rounded-2xl p-8 hover:shadow-xl transition bg-blue-50/50">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-3xl">📘</span>
                        <h3 class="text-xl font-bold text-gray-800">Building My Success</h3>
                    </div>
                    <span class="text-xs font-bold text-blue-600 uppercase tracking-wider">3 Levels</span>
                    <p class="mt-3 text-gray-600">Study Skills • Better Learning • Independent Learning</p>
                </div>

                <!-- Collection 3 -->
                <div class="stc-collection-card border border-gray-100 rounded-2xl p-8 hover:shadow-xl transition bg-cyan-50/50">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-3xl">🧭</span>
                        <h3 class="text-xl font-bold text-gray-800">Career Explorer</h3>
                    </div>
                    <span class="text-xs font-bold text-cyan-600 uppercase tracking-wider">3 Levels</span>
                    <p class="mt-3 text-gray-600">Strengths • Opportunities • Future</p>
                </div>

                <!-- Collection 4 -->
                <div class="stc-collection-card border border-gray-100 rounded-2xl p-8 hover:shadow-xl transition bg-purple-50/50">
                    <div class="flex items-center gap-3 mb-4">
                        <span class="text-3xl">✨</span>
                        <h3 class="text-xl font-bold text-gray-800">Purpose Journey</h3>
                    </div>
                    <span class="text-xs font-bold text-purple-600 uppercase tracking-wider">2 Levels</span>
                    <p class="mt-3 text-gray-600">Identity • Purpose</p>
                </div>

               <!-- Collection 5 - Future Ready Companion (Clickable) -->
<div class="stc-collection-card border border-gray-100 rounded-2xl p-8 hover:shadow-xl transition bg-indigo-50/50 md:col-span-2 lg:col-span-2 cursor-pointer" onclick="openPillarModal('frc')">
    <div class="flex items-center gap-3 mb-4">
        <span class="text-3xl">🎓</span>
        <h3 class="text-xl font-bold text-gray-800">Future Ready Companion</h3>
    </div>
    <span class="text-xs font-bold text-indigo-600 uppercase tracking-wider">1 Book</span>
    <p class="mt-3 text-gray-600">Graduation Edition: Preparing learners for what's next with confidence and clarity.</p>
</div>
            </div>
        </div>
    </section> --}}


    <!-- =========================
         4. BEYOND THE WORKBOOKS
    ========================== -->
   <section class="stc-beyond-section py-24 bg-gray-50">
    <div class="container mx-auto px-6 lg:px-16">
        <div class="text-center mb-16">
            <h2 class="stc-section-title text-3xl md:text-4xl font-extrabold text-gray-800">
                Beyond the Workbooks
            </h2>
            <p class="stc-section-subtitle mt-4 text-gray-600 max-w-2xl mx-auto">
                Comprehensive support across four key areas of intentional development.
            </p>
        </div>

        @php
            $categories = [
                [
                    'image' => 'learner-development.png',
                    'alt' => 'Student Development and Learning',
                    'title' => 'Develop the Learner',
                    'subtitle' => 'STC Series',
                    'desc' => 'A progressive child development framework supporting learners from childhood through adolescence.'
                ],
                [
                    'image' => 'teacher-development.png',
                    'alt' => 'Teacher Professional Development',
                    'title' => 'Develop the Teacher',
                    'subtitle' => 'Professional Capacity Building',
                    'desc' => 'Equipping educators with practical developmental skills to see, understand, and guide learners.'
                ],
                [
                    'image' => 'school-systems.png',
                    'alt' => 'School Systems and Development',
                    'title' => 'Develop the Institution',
                    'subtitle' => 'School Development & Systems',
                    'desc' => 'Designing intentional systems that connect learner development, teaching practice, and school culture.'
                ],
                [
                    'image' => 'parent-resources.png',
                    'alt' => 'Parenting and Family Resources',
                    'title' => 'Equip the Parent',
                    'subtitle' => 'Parenting & Family Resources',
                    'desc' => 'Providing parents with practical tools to support their children\'s growth and reinforce life skills at home.'
                ],
            ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-7xl mx-auto">
            @foreach ($categories as $category)
                <div class="stc-service-card bg-white border border-gray-100 rounded-2xl overflow-hidden hover:shadow-xl hover:-translate-y-2 transition duration-300 flex flex-col h-full">
                    
                    <!-- Image Container -->
                    <div class="stc-card-image-wrapper h-48 overflow-hidden">
                        <img src="{{ asset('assets/img/' . $category['image']) }}" 
                             alt="{{ $category['alt'] }}" 
                             class="stc-card-img w-full h-full object-cover">
                    </div>
                    
                    <!-- Content Container -->
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-lg font-extrabold text-gray-800 uppercase tracking-wide mb-1">
                            {{ $category['title'] }}
                        </h3>
                        
                        <span class="text-sm font-bold text-blue-600 mb-3 block">
                            {{ $category['subtitle'] }}
                        </span>
                        
                        <p class="text-gray-600 text-sm leading-relaxed mt-auto">
                            {{ $category['desc'] }}
                        </p>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</section>


    
    <!-- =========================
         5. WHO IT SERVES
    ========================== -->
<!-- =========================
         5. WHO IT SERVES
    ========================== -->
<section class="stc-audience-section py-24 bg-white">
    <div class="container mx-auto px-6 lg:px-16">
        <div class="text-center mb-16">
            <h2 class="stc-section-title text-3xl md:text-4xl font-extrabold text-gray-800">
                Who STC Serves
            </h2>
        </div>

        <!-- Connected Circles Layout - Orbital Design -->
        <div class="stc-audience-orbital-wrapper">
            <div class="stc-audience-orbital">
                
                <!-- Central STC Hub -->
                <div class="stc-audience-circle-central">
                    <h3>STC</h3>
                    <span>Hub</span>
                </div>

                <!-- Students - Top -->
                <div class="stc-audience-circle stc-circle-students">
                    <div class="stc-circle-icon">👨🎓</div>
                    <h4>Students</h4>
                </div>

                <!-- Schools - Bottom Left -->
                <div class="stc-audience-circle stc-circle-schools">
                    <div class="stc-circle-icon">🏫</div>
                    <h4>Schools</h4>
                </div>

                <!-- Families - Bottom Right -->
                <div class="stc-audience-circle stc-circle-families">
                    <div class="stc-circle-icon">👨‍👩‍</div>
                    <h4>Families</h4>
                </div>

                <!-- Connecting Lines -->
                <svg class="stc-connecting-lines" viewBox="0 0 600 600">
                    <line x1="300" y1="300" x2="300" y2="90" stroke="#1e40af" stroke-width="3" stroke-dasharray="8,8" opacity="0.3"/>
                    <line x1="300" y1="300" x2="100" y2="510" stroke="#1e40af" stroke-width="3" stroke-dasharray="8,8" opacity="0.3"/>
                    <line x1="300" y1="300" x2="500" y2="510" stroke="#1e40af" stroke-width="3" stroke-dasharray="8,8" opacity="0.3"/>
                </svg>

            </div>
        </div>
    </div>
</section>

    <!-- =========================
         6. CALL TO ACTION
    ========================== -->
    <section id="stc-cta" class="stc-cta-section py-24 bg-gradient-to-r from-blue-800 to-purple-700 text-white relative overflow-hidden">
    <!-- Decorative blur -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-white opacity-5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>

    <div class="container mx-auto px-6 text-center relative z-10">
        <h2 class="stc-cta-title text-white text-3xl md:text-5xl font-extrabold mb-6">
            Partner with BIPPs Child Development
        </h2>
        
        <p class="stc-cta-subtitle max-w-3xl mx-auto text-lg md:text-xl leading-relaxed text-blue-100 mb-12">
            <span class="font-semibold text-yellow-300">Training • Coaching • Resources • Implementation Support</span>
            <br><br>
            Whether introducing STC in one classroom or across an entire school, we are ready to support your implementation journey.
        </p>

        <!-- CTA Button -->
        <div>
            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfzx439f_5HOaBB8g1f-sh-1OGUXqJqY2b0w7_SrWUH3n_kOA/viewform?usp=header" class="stc-cta-btn inline-block bg-yellow-400 text-black font-bold px-10 py-4 rounded-full hover:bg-yellow-300 transition transform hover:scale-105 shadow-xl text-lg md:text-xl">
                Request a School Partnership Consultation
            </a>
        </div>

    </div>
</section>


    <!-- =========================
         7. FOOTER
    ========================== -->
   <!-- =========================
     FAQ SECTION
========================== -->
<section class="stc-faq-section">
    <div class="container mx-auto px-6 lg:px-16">
        <div class="stc-faq-header text-center mb-16">
            <span class="stc-faq-badge">Got Questions?</span>
            <h2 class="stc-section-title">Frequently Asked Questions</h2>
            <p class="stc-section-subtitle">Everything you need to know about the Student Transformation Companion (STC).</p>
        </div>

        <div class="stc-faq-container">
            @php
                $faqs = [
                    [
                        'q' => 'What is the Student Transformation Companion (STC)?',
                        'a' => 'The Student Transformation Companion (STC) is a progressive child development framework designed to help learners grow academically, personally, socially, emotionally, and purposefully from childhood through adolescence. It intentionally develops learners in Character, Competence, Clarity, and Contribution.'
                    ],
                    [
                        'q' => 'Is STC another school subject?',
                        'a' => 'No. STC is not designed as another examinable subject. It is a structured learner development programme that complements the school curriculum by intentionally developing the whole child beyond academic achievement.'
                    ],
                    [
                        'q' => 'Does STC replace Civic Education, Moral Instruction, or Guidance and Counselling?',
                        'a' => 'No. STC complements existing subjects and programmes. While Civic Education focuses on citizenship and social responsibility, STC intentionally develops personal growth, learning habits, leadership, identity, purpose, decision making, and contribution.'
                    ],
                    [
                        'q' => 'Who is the STC Series designed for?',
                        'a' => 'The STC Series serves learners from approximately six years of age through graduation from secondary school through age appropriate collections:<ul><li>Character Builder Collection (CBC)</li><li>Building My Success Collection (BMS)</li><li>Career Explorer Collection (CEC)</li><li>Purpose Journey Collection (PJC)</li><li>Future Ready Companion (FRC)</li></ul>Each collection is designed specifically for the learner\'s developmental stage.'
                    ],
                    [
                        'q' => 'Can parents use STC at home?',
                        'a' => 'Yes. Although many schools implement the STC Series, parents can also use the companions at home to intentionally support their children\'s growth and reinforce important life skills.'
                    ],
                    [
                        'q' => 'How often should STC be used?',
                        'a' => 'Schools have flexibility. Many schools successfully implement one section each week, allowing time for discussion, reflection, practical application, and completion of the STC Challenge. Other schools may adapt implementation to suit their timetable and developmental programmes.'
                    ],
                    [
                        'q' => 'Should learners take end of term examinations in STC?',
                        'a' => 'Not necessarily. Because STC is a developmental programme, learner growth is best assessed through continuous observation, participation, reflection, application, projects, portfolios, leadership opportunities, and demonstrated behaviours. Schools that wish to include STC in formal reporting are encouraged to report learner development within the Affective Domain or Personal Development section of their report cards.'
                    ],
                    [
                        'q' => 'How is learner progress assessed?',
                        'a' => 'The STC Series encourages developmental assessment rather than memorisation. Learners demonstrate growth through:<ul><li>Reflection</li><li>Practical application</li><li>STC Challenges</li><li>Projects</li><li>Leadership opportunities</li><li>Portfolio evidence</li><li>Teacher observations</li><li>Parent observations where appropriate</li></ul>'
                    ],
                    [
                        'q' => 'What are the Signature Experiences?',
                        'a' => 'Each STC collection includes distinctive Signature Experiences that reinforce learning and capture the learner\'s developmental journey. These include:<ul><li>Fun Zone (CBC)</li><li>My Plans (BMS)</li><li>My Career Portfolio (CEC)</li><li>Purpose Journal (PJC)</li><li>Future Ready Shift, Real Life Connection, and My Life Script (FRC)</li></ul>These experiences make each collection unique while supporting intentional learner development.'
                    ],
                    [
                        'q' => 'Can schools adopt the STC Series?',
                        'a' => 'Yes. Schools may adopt individual collections or implement the complete STC developmental pathway. BIPPs also provides implementation resources and support to help schools maximise learner outcomes.'
                    ],
                    [
                        'q' => 'What implementation support is available for schools?',
                        'a' => 'Participating schools may access:<ul><li>School Implementation Guide</li><li>Teacher Facilitation Guide</li><li>Parent Partnership Guide</li><li>Assessment Framework</li><li>Progress Reporting Framework</li><li>Student Portfolio System</li><li>Recognition and Certification Framework</li><li>Facilitator Training</li><li>School Coaching</li><li>Ongoing implementation support</li></ul>'
                    ],
                    [
                        'q' => 'Can STC be integrated into an existing school timetable?',
                        'a' => 'Yes. Schools have flexibility to implement STC through:<ul><li>Weekly learner development periods</li><li>Character education sessions</li><li>Mentoring periods</li><li>Guidance lessons</li><li>Assemblies</li><li>Leadership development programmes</li></ul>The implementation model can be adapted to suit each school\'s context.'
                    ],
                    [
                        'q' => 'Are teachers trained before implementation?',
                        'a' => 'Yes. Schools may request facilitator training and implementation support to ensure teachers understand both the philosophy and practical delivery of the STC framework.'
                    ],
                    [
                        'q' => 'Will learners receive certificates?',
                        'a' => 'Yes. Schools that wish to recognise learners upon completing an STC collection or the full STC developmental journey may request the official STC Digital Certificate of Completion. The certificate is provided as part of the STC implementation resources and enables participating schools to celebrate learners\' commitment to character, competence, clarity, and contribution in a meaningful way. Schools may personalise the certificate with learner and school details before presentation.'
                    ],
                    [
                        'q' => 'What makes STC different from ordinary workbooks?',
                        'a' => 'STC is more than a workbook series. It is a complete learner development ecosystem supported by implementation guides, teacher resources, parent partnerships, developmental assessments, portfolios, coaching, recognition systems, and professional learning. Its purpose is not simply to help learners complete activities, but to help them become capable, responsible, purposeful, and contributing individuals.'
                    ],
                    [
                        'q' => 'How can my school or organisation partner with BIPPs?',
                        'a' => 'Schools, educational organisations, churches, community groups, and learning centres may partner with BIPPs to implement the STC Series, organise facilitator training, provide learner development programmes, or access customised child development support. Please visit the School Partnership Services section or contact us for further information.'
                    ],
                    [
                        'q' => 'Where can I purchase the STC Series and related resources?',
                        'a' => 'The STC Series and other child development resources are available through authorised BIPPs channels. Please visit the Resources section of this website for current purchasing information and availability.'
                    ]
                ];
            @endphp

            @foreach($faqs as $faq)
                <details class="stc-faq-item">
                    <summary class="stc-faq-question">{{ $faq['q'] }}</summary>
                    <div class="stc-faq-answer">
                        {!! $faq['a'] !!}
                    </div>
                </details>
            @endforeach
        </div>
    </div>
</section>

</div>
<!-- =========================
     4 PILLARS MODAL
========================== -->
<div id="pillar-modal" class="stc-modal-overlay">
    <div class="stc-modal-content">
        <button class="stc-modal-close" onclick="closePillarModal()">&times;</button>
        <div class="stc-modal-icon" id="modal-icon"></div>
        <h2 class="stc-modal-title" id="modal-title"></h2>
        <h3 class="stc-modal-subtitle" id="modal-subtitle"></h3>
        <div class="stc-modal-divider"></div>
        <p class="stc-modal-desc" id="modal-desc"></p>
    </div>
</div>

<script>
    const pillarData = {
        character: {
            icon: '🌱',
            title: 'Character',
            subtitle: 'Who I am and how I choose to live',
            desc: 'Character is the foundation of personal growth. It helps students develop good values, responsible habits, integrity, self-discipline, and a positive attitude. Strong character shapes the choices students make and the kind of person they are becoming.'
        },
        competence: {
            icon: '📘',
            title: 'Competence',
            subtitle: 'What I can learn and do well',
            desc: 'Competence is about developing the knowledge, skills, and abilities needed to succeed. Students learn how to learn, organise themselves, solve problems, communicate effectively, and take responsibility for their performance.'
        },
        clarity: {
            icon: '🧭',
            title: 'Clarity',
            subtitle: 'Where I am going and why it matters',
            desc: 'Clarity helps students understand themselves, recognise their strengths, set meaningful goals, and develop a sense of direction. It helps them move from simply doing things to understanding what they are working towards and why.'
        },
        contribution: {
            icon: '✨',
            title: 'Contribution',
            subtitle: 'How I can make a meaningful difference',
            desc: 'Contribution helps students recognise that their growth is not only about personal success. It is also about using their abilities, values, and opportunities to serve others, solve problems, and make a positive impact in their school, community, and world.'
        },
        frc: {
            icon: '🎓',
            title: 'Future Ready Companion (FRC)',
            subtitle: 'Graduation Edition • Typically Age: 17–18+',
            // Using backticks (`) allows natural line breaks and quotes without breaking the code
            desc: `Preparing graduating students for higher education, vocational training, entrepreneurship, work, leadership, and purposeful living.

📖 Future Ready Companion: Ready for What's Next

☆ Collection Signature Experience: Future Ready Experiences

This collection includes three distinctive features that prepare learners for life beyond school:

• Future Ready Shift – Connecting classroom learning with the realities of adulthood.
• Real Life Connection – Applying each lesson to authentic life situations.
• My Life Script – Developing a personal blueprint for purposeful living, lifelong growth, and future impact.

Together, these Signature Experiences transform the STC Series from a collection of workbooks into a lifelong record of growth, reflection, and purposeful development.`
        }
    };

    function openPillarModal(pillar) {
        const data = pillarData[pillar];
        if (!data) return; // Safety check
        
        document.getElementById('modal-icon').innerText = data.icon;
        document.getElementById('modal-title').innerText = data.title;
        document.getElementById('modal-subtitle').innerText = data.subtitle;
        document.getElementById('modal-desc').innerText = data.desc;
        
        document.getElementById('pillar-modal').classList.add('active');
        document.body.style.overflow = 'hidden'; 
    }

    function closePillarModal() {
        document.getElementById('pillar-modal').classList.remove('active');
        document.body.style.overflow = 'auto'; 
    }

    // Close modal when clicking outside the content box
    document.getElementById('pillar-modal').addEventListener('click', function(e) {
        if (e.target === this) {
            closePillarModal();
        }
    });
</script>
</x-guest-layout>