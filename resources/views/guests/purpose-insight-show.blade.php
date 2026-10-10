<x-guest-layout>
    <style>
        .article-opening-tip {
            background: linear-gradient(135deg, #f8f6ff 0%, #ffffff 100%);
            border-left: 5px solid #3F207F;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(63, 32, 127, 0.06);
        }
        .share-btn {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            color: #ffffff !important;
            text-decoration: none;
            transition: transform 0.2s ease, opacity 0.2s ease;
        }
        .share-btn:hover {
            transform: translateY(-3px);
            opacity: 0.9;
        }
        .share-whatsapp { background-color: #25D366; }
        .share-facebook { background-color: #1877F2; }
        .share-twitter { background-color: #000000; }
        .share-linkedin { background-color: #0A66C2; }
        .share-copy { background-color: #3F207F; cursor: pointer; }
        .insight-content p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #333333;
            margin-bottom: 1.5rem;
        }
    </style>

    <!-- Header Banner Start -->
    <div class="container-fluid bg-primary py-5 mb-5 page-header" style="background-color: #3F207F !important;">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <span class="badge bg-warning text-dark px-3 py-2 rounded-pill fw-bold mb-3 animated slideInDown">
                        {{ $insight->category }}
                    </span>
                    <h1 class="display-4 text-white animated slideInDown mb-3">{{ $insight->title }}</h1>
                    <div class="text-white-50 animated slideInDown fs-6">
                        <i class="far fa-calendar-alt me-1"></i> {{ $insight->published_at ? $insight->published_at->format('F d, Y') : $insight->created_at->format('F d, Y') }}
                        <span class="mx-2">•</span>
                        <i class="far fa-clock me-1"></i> {{ ceil(str_word_count(strip_tags($insight->content)) / 200) }} min read
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Banner End -->

    <!-- Article Main Body Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    
                    <!-- Back Link -->
                    <div class="mb-4">
                        <a href="{{ route('purpose-insight') }}" class="text-decoration-none fw-semibold" style="color: #3F207F;">
                            <i class="fa fa-arrow-left me-2"></i> Back to Purpose Insights
                        </a>
                    </div>

                    <!-- Featured Image if available -->
                    @if($insight->image)
                        <div class="mb-5 text-center">
                            <img src="{{ asset('storage/' . $insight->image) }}" alt="{{ $insight->title }}" class="img-fluid rounded-4 shadow-sm w-100" style="max-height: 450px; object-fit: cover;">
                        </div>
                    @endif

                    <!-- Opening Tip Callout Card -->
                    <div class="article-opening-tip p-4 p-md-5 mb-5">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fa fa-lightbulb text-warning fs-3 me-3"></i>
                            <h5 class="fw-bold mb-0 text-dark" style="color: #3F207F !important;">Opening Tip / Key Takeaway</h5>
                        </div>
                        <p class="fs-5 mb-0 text-dark fst-italic">
                            "{{ $insight->opening_tip }}"
                        </p>
                    </div>

                    <!-- Article Body Content -->
                    <div class="insight-content mb-5">
                        {!! nl2br(e($insight->content)) !!}
                    </div>

                    <!-- Social Share Section -->
                    <div class="p-4 bg-light rounded-4 border mb-5 d-md-flex align-items-center justify-content-between">
                        <div class="mb-3 mb-md-0">
                            <h6 class="fw-bold mb-1 text-dark">Share this Purpose Insight</h6>
                            <small class="text-muted">Pass on wisdom and inspire someone's purpose journey today.</small>
                        </div>
                        <div class="d-flex gap-2">
                            <a href="https://api.whatsapp.com/send?text={{ urlencode($insight->title . ' - ' . url()->current()) }}" target="_blank" class="share-btn share-whatsapp" title="Share on WhatsApp">
                                <i class="fab fa-whatsapp"></i>
                            </a>
                            <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" class="share-btn share-facebook" title="Share on Facebook">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="https://twitter.com/intent/tweet?text={{ urlencode($insight->title) }}&url={{ urlencode(url()->current()) }}" target="_blank" class="share-btn share-twitter" title="Share on X (Twitter)">
                                <i class="fab fa-x-twitter"></i>
                            </a>
                            <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(url()->current()) }}&title={{ urlencode($insight->title) }}" target="_blank" class="share-btn share-linkedin" title="Share on LinkedIn">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <span class="share-btn share-copy" onclick="copyCurrentUrl()" title="Copy Link">
                                <i class="fa fa-link"></i>
                            </span>
                        </div>
                    </div>

                    <!-- Related Insights Section -->
                    @if(count($relatedInsights) > 0)
                        <div class="mt-5 pt-4 border-top">
                            <h4 class="fw-bold mb-4" style="color: #3F207F;">More Insights You Might Like</h4>
                            <div class="row g-4">
                                @foreach($relatedInsights as $related)
                                    <div class="col-md-4">
                                        <div class="card h-100 border-0 shadow-sm rounded-3 overflow-hidden">
                                            <div class="card-body p-4">
                                                <span class="badge bg-light text-dark border mb-2">{{ $related->category }}</span>
                                                <h6 class="card-title fw-bold mb-2">
                                                    <a href="{{ route('purpose-insight.show', $related->slug) }}" class="text-decoration-none text-dark">
                                                        {{ $related->title }}
                                                    </a>
                                                </h6>
                                                <p class="card-text text-muted small text-truncate" style="max-width: 100%;">
                                                    "{{ $related->opening_tip }}"
                                                </p>
                                            </div>
                                            <div class="card-footer bg-white border-0 p-4 pt-0">
                                                <a href="{{ route('purpose-insight.show', $related->slug) }}" class="btn btn-sm btn-outline-primary rounded-pill w-100">Read Article</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
    <!-- Article Main Body End -->

    <script>
        function copyCurrentUrl() {
            navigator.clipboard.writeText(window.location.href).then(function() {
                alert('Article link copied to clipboard!');
            });
        }
    </script>
</x-guest-layout>
