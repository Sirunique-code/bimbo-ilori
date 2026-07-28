<x-guest-layout>

    <!-- Unique wrapper for page-specific CSS targeting -->
    <div data-page="stc-landing" class="stc-landing-page font-sans antialiased text-gray-800">

        <!-- =========================
         1. HERO SECTION
    ========================== -->
        <section
            class="stc-hero relative overflow-hidden bg-gradient-to-br from-blue-900 via-blue-700 to-green-600 text-white">
            <!-- Decorative background blurs -->
            <div class="absolute inset-0 opacity-10 pointer-events-none">
                <div class="absolute -top-24 -right-24 w-96 h-96 rounded-full bg-white blur-3xl"></div>
                <div class="absolute bottom-0 left-0 w-80 h-80 rounded-full bg-green-300 blur-3xl"></div>
            </div>

            <div class="container mx-auto px-6 lg:px-16 py-24 relative z-10">
                <div class="max-w-4xl mx-auto text-center mb-16">
                    <span
                        class="stc-hero-badge uppercase tracking-[4px] text-sm font-semibold text-yellow-300 block mb-4">
                        Student Transformation Companion (STC) Series
                    </span>
                    <h1 class="stc-hero-title text-4xl md:text-5xl lg:text-6xl font-extrabold leading-tight">
                        Growing Character • Building Competence •<br class="hidden md:block">
                        Discovering Clarity • Inspiring Contribution
                    </h1>
                    <p
                        class="stc-hero-subtitle mt-6 text-lg md:text-xl text-blue-100 leading-relaxed max-w-3xl mx-auto">
                        A progressive child development framework that supports learners from childhood through
                        adolescence, equipping them with the knowledge, habits, character, and mindset needed for
                        lifelong learning and purposeful living.
                    </p>
                    <div class="mt-10 flex flex-wrap justify-center gap-4">
                        <a href="#stc-pathway"
                            class="stc-btn-primary px-8 py-4 rounded-full bg-yellow-400 hover:bg-yellow-300 text-gray-900 font-bold transition transform hover:scale-105 shadow-lg">
                            Explore the Journey
                        </a>
                        <a href="#stc-cta"
                            class="stc-btn-secondary px-8 py-4 rounded-full border-2 border-white hover:bg-white hover:text-blue-800 font-semibold transition transform hover:scale-105">
                            Partner with BIPPs
                        </a>
                    </div>
                </div>

                <!-- 4 Pillars Icon Blocks (Integrated into Hero for immediate identity) -->
                <div class="stc-pillars-grid grid grid-cols-2 md:grid-cols-4 gap-6 max-w-5xl mx-auto">
                    <div
                        class="stc-pillar-card bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-6 text-center hover:bg-white/20 transition">
                        <div class="text-4xl mb-3">🌱</div>
                        <h3 class="font-bold text-lg">Character</h3>
                        <p class="text-sm text-blue-100 mt-2">Values & Integrity</p>
                    </div>
                    <div
                        class="stc-pillar-card bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-6 text-center hover:bg-white/20 transition">
                        <div class="text-4xl mb-3">📘</div>
                        <h3 class="font-bold text-lg">Competence</h3>
                        <p class="text-sm text-blue-100 mt-2">Skills & Excellence</p>
                    </div>
                    <div
                        class="stc-pillar-card bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-6 text-center hover:bg-white/20 transition">
                        <div class="text-4xl mb-3">🧭</div>
                        <h3 class="font-bold text-lg">Clarity</h3>
                        <p class="text-sm text-blue-100 mt-2">Direction & Purpose</p>
                    </div>
                    <div
                        class="stc-pillar-card bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-6 text-center hover:bg-white/20 transition">
                        <div class="text-4xl mb-3">✨</div>
                        <h3 class="font-bold text-lg">Contribution</h3>
                        <p class="text-sm text-blue-100 mt-2">Meaningful Impact</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- =========================
         2. THE STC PATHWAY (Largest Element)
    ========================== -->
        <section id="stc-pathway" class="stc-pathway-section py-24 bg-gray-50">
            <div class="container mx-auto px-6 lg:px-16">
                <div class="text-center mb-16">
                    <h2 class="stc-section-title text-3xl md:text-4xl font-extrabold text-gray-800">
                        The Student Transformation Journey
                    </h2>
                    <p class="stc-section-subtitle mt-4 text-gray-600 max-w-2xl mx-auto">
                        A progressive pathway from childhood to purposeful adulthood.
                    </p>
                </div>

                <!-- Pathway Timeline -->
                <div class="stc-pathway-container relative">
                    <!-- Connecting Line (Desktop) -->
                    <div class="hidden lg:block absolute top-1/2 left-0 w-full h-1 bg-gray-200 -translate-y-1/2 z-0">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-8 relative z-10">
                        <!-- Stage 1 -->
                        <div
                            class="stc-pathway-step bg-white rounded-3xl shadow-lg p-6 border-t-8 border-green-500 hover:-translate-y-2 transition duration-300 text-center">
                            <div class="text-5xl mb-4">🌱</div>
                            <h3 class="font-bold text-xl text-gray-800">Character Builder</h3>
                            <span
                                class="inline-block mt-2 px-3 py-1 bg-green-100 text-green-700 text-sm font-bold rounded-full">Ages
                                6–9</span>
                            <p class="text-sm text-gray-500 mt-4 font-medium">CBC</p>
                        </div>

                        <!-- Stage 2 -->
                        <div
                            class="stc-pathway-step bg-white rounded-3xl shadow-lg p-6 border-t-8 border-blue-600 hover:-translate-y-2 transition duration-300 text-center">
                            <div class="text-5xl mb-4">📘</div>
                            <h3 class="font-bold text-xl text-gray-800">Building My Success</h3>
                            <span
                                class="inline-block mt-2 px-3 py-1 bg-blue-100 text-blue-700 text-sm font-bold rounded-full">Ages
                                9–12</span>
                            <p class="text-sm text-gray-500 mt-4 font-medium">BMS</p>
                        </div>

                        <!-- Stage 3 -->
                        <div
                            class="stc-pathway-step bg-white rounded-3xl shadow-lg p-6 border-t-8 border-cyan-500 hover:-translate-y-2 transition duration-300 text-center">
                            <div class="text-5xl mb-4">🧭</div>
                            <h3 class="font-bold text-xl text-gray-800">Career Explorer</h3>
                            <span
                                class="inline-block mt-2 px-3 py-1 bg-cyan-100 text-cyan-700 text-sm font-bold rounded-full">Ages
                                12–15</span>
                            <p class="text-sm text-gray-500 mt-4 font-medium">CEC</p>
                        </div>

                        <!-- Stage 4 -->
                        <div
                            class="stc-pathway-step bg-white rounded-3xl shadow-lg p-6 border-t-8 border-purple-500 hover:-translate-y-2 transition duration-300 text-center">
                            <div class="text-5xl mb-4">✨</div>
                            <h3 class="font-bold text-xl text-gray-800">Purpose Journey</h3>
                            <span
                                class="inline-block mt-2 px-3 py-1 bg-purple-100 text-purple-700 text-sm font-bold rounded-full">Ages
                                15–18+</span>
                            <p class="text-sm text-gray-500 mt-4 font-medium">PJC</p>
                        </div>

                        <!-- Stage 5 -->
                        <div
                            class="stc-pathway-step bg-white rounded-3xl shadow-lg p-6 border-t-8 border-indigo-700 hover:-translate-y-2 transition duration-300 text-center">
                            <div class="text-5xl mb-4">🎓</div>
                            <h3 class="font-bold text-xl text-gray-800">Future Ready</h3>
                            <span
                                class="inline-block mt-2 px-3 py-1 bg-indigo-100 text-indigo-700 text-sm font-bold rounded-full">Graduation</span>
                            <p class="text-sm text-gray-500 mt-4 font-medium">FRC</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- =========================
         3. COLLECTIONS SNAPSHOT
    ========================== -->
        <section class="stc-collections-section py-24 bg-white">
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
                    <div
                        class="stc-collection-card border border-gray-100 rounded-2xl p-8 hover:shadow-xl transition bg-green-50/50">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="text-3xl">🌱</span>
                            <h3 class="text-xl font-bold text-gray-800">Character Builder</h3>
                        </div>
                        <span class="text-xs font-bold text-green-600 uppercase tracking-wider">3 Levels</span>
                        <p class="mt-3 text-gray-600">Good Habits • Responsibility • Values</p>
                    </div>

                    <!-- Collection 2 -->
                    <div
                        class="stc-collection-card border border-gray-100 rounded-2xl p-8 hover:shadow-xl transition bg-blue-50/50">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="text-3xl">📘</span>
                            <h3 class="text-xl font-bold text-gray-800">Building My Success</h3>
                        </div>
                        <span class="text-xs font-bold text-blue-600 uppercase tracking-wider">3 Levels</span>
                        <p class="mt-3 text-gray-600">Study Skills • Better Learning • Independent Learning</p>
                    </div>

                    <!-- Collection 3 -->
                    <div
                        class="stc-collection-card border border-gray-100 rounded-2xl p-8 hover:shadow-xl transition bg-cyan-50/50">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="text-3xl">🧭</span>
                            <h3 class="text-xl font-bold text-gray-800">Career Explorer</h3>
                        </div>
                        <span class="text-xs font-bold text-cyan-600 uppercase tracking-wider">3 Levels</span>
                        <p class="mt-3 text-gray-600">Strengths • Opportunities • Future</p>
                    </div>

                    <!-- Collection 4 -->
                    <div
                        class="stc-collection-card border border-gray-100 rounded-2xl p-8 hover:shadow-xl transition bg-purple-50/50">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="text-3xl">✨</span>
                            <h3 class="text-xl font-bold text-gray-800">Purpose Journey</h3>
                        </div>
                        <span class="text-xs font-bold text-purple-600 uppercase tracking-wider">2 Levels</span>
                        <p class="mt-3 text-gray-600">Identity • Purpose</p>
                    </div>

                    <!-- Collection 5 -->
                    <div
                        class="stc-collection-card border border-gray-100 rounded-2xl p-8 hover:shadow-xl transition bg-indigo-50/50 md:col-span-2 lg:col-span-2">
                        <div class="flex items-center gap-3 mb-4">
                            <span class="text-3xl">🎓</span>
                            <h3 class="text-xl font-bold text-gray-800">Future Ready Companion</h3>
                        </div>
                        <span class="text-xs font-bold text-indigo-600 uppercase tracking-wider">1 Book</span>
                        <p class="mt-3 text-gray-600">Graduation Edition: Preparing learners for what's next with
                            confidence and clarity.</p>
                    </div>
                </div>
            </div>
        </section>


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
                        Comprehensive support for schools, teachers, families, and learners.
                    </p>
                </div>

                @php
                    $services = [
                        [
                            'icon' => '👩🏽‍🏫',
                            'title' => 'Staff Training',
                            'desc' => 'Empowering educators with modern child development methodologies.',
                        ],
                        [
                            'icon' => '👨‍👩‍👧',
                            'title' => 'Parent Engagement',
                            'desc' => 'Bridging the gap between home and school for consistent growth.',
                        ],
                        [
                            'icon' => '🎤',
                            'title' => 'Student Workshops',
                            'desc' => 'Interactive sessions that bring the STC pillars to life.',
                        ],
                        [
                            'icon' => '🤝',
                            'title' => 'Coaching',
                            'desc' => 'One-on-one and group coaching for sustained personal development.',
                        ],
                        [
                            'icon' => '📚',
                            'title' => 'Implementation Guides',
                            'desc' => 'Step-by-step resources for seamless framework adoption.',
                        ],
                        [
                            'icon' => '🏫',
                            'title' => 'School Systems Support',
                            'desc' => 'Holistic integration of STC into your institution\'s culture.',
                        ],
                    ];
                @endphp

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
                    @foreach ($services as $service)
                        <div
                            class="stc-service-card bg-white border border-gray-100 rounded-2xl p-8 hover:shadow-xl hover:-translate-y-1 transition duration-300">
                            <div class="text-4xl mb-4">{{ $service['icon'] }}</div>
                            <h3 class="text-xl font-bold text-gray-800 mb-3">{{ $service['title'] }}</h3>
                            <p class="text-gray-600 text-sm leading-relaxed">{{ $service['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>


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

                <!-- Connected Circles Layout -->
                <div
                    class="stc-audience-grid flex flex-col md:flex-row items-center justify-center gap-8 md:gap-16 max-w-4xl mx-auto">

                    <!-- Students -->
                    <div
                        class="stc-audience-circle w-40 h-40 md:w-48 md:h-48 rounded-full bg-green-100 flex flex-col items-center justify-center text-center shadow-lg hover:scale-105 transition duration-300 border-4 border-white">
                        <div class="text-4xl md:text-5xl mb-2">👨‍🎓</div>
                        <h4 class="font-bold text-gray-800">Students</h4>
                    </div>

                    <!-- Central STC -->
                    <div
                        class="stc-audience-circle-central w-56 h-56 md:w-64 md:h-64 rounded-full bg-gradient-to-br from-blue-700 to-blue-900 text-white flex flex-col items-center justify-center shadow-2xl z-10 border-4 border-yellow-400">
                        <h3 class="text-5xl md:text-6xl font-black tracking-tight">STC</h3>
                        <span
                            class="text-xs md:text-sm font-semibold text-blue-200 mt-2 uppercase tracking-widest">Hub</span>
                    </div>

                    <!-- Schools & Families (Stacked on mobile, side-by-side on desktop if needed, or just flex wrap) -->
                    <div class="flex flex-col sm:flex-row gap-8 md:gap-12">
                        <div
                            class="stc-audience-circle w-40 h-40 md:w-48 md:h-48 rounded-full bg-yellow-100 flex flex-col items-center justify-center text-center shadow-lg hover:scale-105 transition duration-300 border-4 border-white">
                            <div class="text-4xl md:text-5xl mb-2">🏫</div>
                            <h4 class="font-bold text-gray-800">Schools</h4>
                        </div>

                        <div
                            class="stc-audience-circle w-40 h-40 md:w-48 md:h-48 rounded-full bg-pink-100 flex flex-col items-center justify-center text-center shadow-lg hover:scale-105 transition duration-300 border-4 border-white">
                            <div class="text-4xl md:text-5xl mb-2">👨‍👩‍👧</div>
                            <h4 class="font-bold text-gray-800">Families</h4>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- =========================
         6. CALL TO ACTION
    ========================== -->
        <section id="stc-cta"
            class="stc-cta-section py-24 bg-gradient-to-r from-blue-800 to-purple-700 text-white relative overflow-hidden">
            <!-- Decorative blur -->
            <div
                class="absolute top-0 right-0 w-96 h-96 bg-white opacity-5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2">
            </div>

            <div class="container mx-auto px-6 text-center relative z-10">
                <h2 class="stc-cta-title text-3xl md:text-5xl font-extrabold mb-6">
                    Partner with BIPPs Child Development
                </h2>
                <p class="stc-cta-subtitle max-w-3xl mx-auto text-lg md:text-xl leading-relaxed text-blue-100">
                    <span class="font-semibold text-yellow-300">Training • Coaching • Resources • Implementation
                        Support</span>
                    <br><br>
                    Whether introducing STC in one classroom or across an entire school, we are ready to support your
                    implementation journey.
                </p>

                <div class="mt-10">
                    <a href="tel:09028763627"
                        class="stc-cta-btn inline-block bg-yellow-400 text-gray-900 font-bold px-10 py-4 rounded-full hover:bg-yellow-300 transition transform hover:scale-105 shadow-xl text-lg">
                        Contact Us Today
                    </a>
                </div>

                <div class="mt-12 space-y-3 text-lg text-blue-200">
                    <p class="flex items-center justify-center gap-2">
                        <span>📞</span> <a href="tel:09028763627" class="hover:text-white transition">090 2876
                            3627</a>
                    </p>
                    <p class="flex items-center justify-center gap-2">
                        <span>🌐</span> <a href="https://bimboilori.com/childdevelopment"
                            class="hover:text-white transition underline decoration-yellow-400/50 hover:decoration-yellow-400">bimboilori.com/childdevelopment</a>
                    </p>
                </div>
            </div>
        </section>


        <!-- =========================
         7. FOOTER
    ========================== -->
        <footer class="stc-footer bg-gray-900 text-gray-400 py-16 border-t border-gray-800">
            <div class="container mx-auto px-6 lg:px-16">
                <div class="grid md:grid-cols-3 gap-12 text-center md:text-left">

                    <!-- Brand -->
                    <div class="stc-footer-brand">
                        <h3 class="text-white text-2xl font-bold mb-4">Student Transformation Companion</h3>
                        <p class="leading-relaxed text-sm">
                            Growing Character.<br>
                            Building Competence.<br>
                            Discovering Clarity.<br>
                            Inspiring Contribution.
                        </p>
                    </div>

                    <!-- Collections Links -->
                    <div class="stc-footer-links">
                        <h4 class="text-white font-semibold mb-4 uppercase tracking-wider text-sm">Collections</h4>
                        <ul class="space-y-3 text-sm">
                            <li><a href="#" class="hover:text-yellow-400 transition">🌱 Character Builder
                                    (CBC)</a></li>
                            <li><a href="#" class="hover:text-yellow-400 transition">📘 Building My Success
                                    (BMS)</a></li>
                            <li><a href="#" class="hover:text-yellow-400 transition">🧭 Career Explorer
                                    (CEC)</a></li>
                            <li><a href="#" class="hover:text-yellow-400 transition">✨ Purpose Journey (PJC)</a>
                            </li>
                            <li><a href="#" class="hover:text-yellow-400 transition">🎓 Future Ready Companion
                                    (FRC)</a></li>
                        </ul>
                    </div>

                    <!-- Attribution -->
                    <div class="stc-footer-attribution">
                        <h4 class="text-white font-semibold mb-4 uppercase tracking-wider text-sm">Created By</h4>
                        <p class="text-lg text-white font-bold">Bimbo Ilori</p>
                        <p class="text-sm mt-2">A BIPPs Child Development Initiative</p>
                        <div class="mt-6 flex justify-center md:justify-start gap-4">
                            <!-- Add social icons here if needed -->
                        </div>
                    </div>

                </div>

                <div class="border-t border-gray-800 mt-12 pt-8 text-center text-xs text-gray-500">
                    &copy; {{ date('Y') }} BIPPs Child Development. All rights reserved.
                </div>
            </div>
        </footer>

    </div>
</x-guest-layout>
