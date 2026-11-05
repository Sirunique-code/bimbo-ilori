@php
    $previewTitle = $insight->title . ' | Bimbo Ilori Purpose Insights';
    $previewDescription = !empty($insight->opening_tip)
        ? Str::limit(strip_tags($insight->opening_tip), 200)
        : Str::limit(strip_tags($insight->content), 200);
    $previewImage = $insight->link_preview_image_url;
    $canonicalUrl = route('purpose-insight.show', $insight->slug);
    $publishedTime = $insight->published_at ? $insight->published_at->toIso8601String() : $insight->created_at->toIso8601String();
    $section = $insight->category;
@endphp

<x-guest-layout 
    :title="$previewTitle"
    :description="$previewDescription"
    :image="$previewImage"
    :url="$canonicalUrl"
    type="article"
    :published-time="$publishedTime"
    :section="$section"
>
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
        /* Comments & Questions Section Styles */
        .comments-section-card {
            background: #ffffff;
            border-radius: 20px;
            border: 1px solid #ECE7F6;
            box-shadow: 0 10px 30px rgba(63, 32, 127, 0.05);
        }
        .comment-item-card {
            background: #ffffff;
            border-radius: 16px;
            border: 1px solid #F0EBF8;
            padding: 22px;
            transition: all 0.25s ease;
        }
        .comment-item-card:hover {
            border-color: #D3C4F0;
            box-shadow: 0 8px 24px rgba(63, 32, 127, 0.06);
            transform: translateY(-2px);
        }
        .comment-avatar {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            object-fit: cover;
            flex-shrink: 0;
            border: 2px solid #EAE2F8;
            box-shadow: 0 2px 8px rgba(63, 32, 127, 0.1);
        }
        .author-reply-box {
            background: #F9F7FC;
            border-left: 4px solid #3F207F;
            border-radius: 0 14px 14px 0;
            padding: 16px 20px;
            margin-top: 16px;
        }
        .comment-type-pill input[type="radio"] {
            display: none;
        }
        .comment-type-pill label {
            cursor: pointer;
            padding: 7px 16px;
            border-radius: 30px;
            font-size: 0.84rem;
            font-weight: 600;
            border: 1px solid #D8CEF0;
            background: #FFFFFF;
            color: #555555;
            transition: all 0.2s ease;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            user-select: none;
        }
        .comment-type-pill input[type="radio"]:checked + label {
            background: #3F207F;
            color: #FFFFFF;
            border-color: #3F207F;
            box-shadow: 0 4px 12px rgba(63, 32, 127, 0.25);
        }
        .comment-type-pill label:hover {
            border-color: #3F207F;
            color: #3F207F;
        }
        .comment-type-pill input[type="radio"]:checked + label:hover {
            color: #FFFFFF;
        }
        .comment-form-box {
            background: linear-gradient(135deg, #FBF9FD 0%, #F5F1FB 100%);
            border: 1px solid #ECE4F7;
            border-radius: 18px;
            padding: 26px;
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
                    @if($insight->featured_image_url)
                        <div class="mb-5 text-center">
                            <img src="{{ $insight->featured_image_url }}" alt="{{ $insight->title }}" class="img-fluid rounded-4 shadow-sm w-100" style="max-height: 450px; object-fit: cover;">
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

                    <!-- Comments & Questions Section -->
                    <div id="comments-section" class="comments-section-card p-4 p-md-5 mb-5">
                        
                        <!-- Header with count badge -->
                        <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 pb-3 mb-4 border-bottom">
                            <div>
                                <h3 class="fw-bold mb-1" style="color: #3F207F;">
                                    <i class="fa fa-comments me-2 text-warning"></i> Reader Questions &amp; Feedback
                                </h3>
                                <p class="text-muted mb-0 small">
                                    Have a thought, question, or reflection on this topic? Join the conversation below.
                                </p>
                            </div>
                            <div>
                                <span class="badge rounded-pill px-3 py-2 fw-semibold" style="background-color: #3F207F; color: #FFFFFF; font-size: 0.9rem;">
                                    <i class="fa fa-comment-dots me-1 text-warning"></i> {{ $insight->comments->count() }} {{ Str::plural('Contribution', $insight->comments->count()) }}
                                </span>
                            </div>
                        </div>

                        <!-- Success Flash Message -->
                        @if(session('comment_success'))
                            <div class="alert alert-success alert-dismissible fade show rounded-3 p-3 mb-4 d-flex align-items-center" role="alert">
                                <i class="fa fa-check-circle fs-4 me-3 text-success"></i>
                                <div>
                                    <h6 class="fw-bold mb-0 text-success">Thank You for Engaging!</h6>
                                    <small>{{ session('comment_success') }}</small>
                                </div>
                                <button type="button" class="btn-close ms-auto" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <!-- Validation Errors -->
                        @if($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show rounded-3 p-3 mb-4" role="alert">
                                <div class="d-flex align-items-center mb-1">
                                    <i class="fa fa-exclamation-triangle me-2"></i>
                                    <strong>Please correct the following:</strong>
                                </div>
                                <ul class="mb-0 small ps-3">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <!-- Comment Submission Form -->
                        <div class="comment-form-box mb-5">
                            <div class="d-flex align-items-center mb-3">
                                <div class="rounded-circle p-2 me-2 d-inline-flex align-items-center justify-content-center" style="background-color: #E8E0F7; color: #3F207F; width: 36px; height: 36px;">
                                    <i class="fa fa-pen"></i>
                                </div>
                                <div>
                                    <h5 class="fw-bold mb-0 text-dark">Leave Your Reflection or Question</h5>
                                    <small class="text-muted">Your email will remain private and won't be displayed publicly.</small>
                                </div>
                            </div>

                            <form action="{{ route('purpose-insight.comments.store', $insight->slug) }}" method="POST">
                                @csrf

                                <!-- Anti-Spam Honeypot Field -->
                                <input type="text" name="website_hp" style="display: none !important;" tabindex="-1" autocomplete="off">

                                <!-- Type Selector Pills -->
                                <div class="mb-3">
                                    <label class="form-label small fw-bold text-muted text-uppercase mb-2">Select Contribution Type</label>
                                    <div class="d-flex flex-wrap gap-2">
                                        <div class="comment-type-pill">
                                            <input type="radio" id="type_comment" name="type" value="comment" {{ old('type', 'comment') === 'comment' ? 'checked' : '' }}>
                                            <label for="type_comment">
                                                <i class="fa fa-comment-dots text-primary"></i> General Comment
                                            </label>
                                        </div>
                                        <div class="comment-type-pill">
                                            <input type="radio" id="type_question" name="type" value="question" {{ old('type') === 'question' ? 'checked' : '' }}>
                                            <label for="type_question">
                                                <i class="fa fa-question-circle text-info"></i> Question for Author
                                            </label>
                                        </div>
                                        <div class="comment-type-pill">
                                            <input type="radio" id="type_feedback" name="type" value="feedback" {{ old('type') === 'feedback' ? 'checked' : '' }}>
                                            <label for="type_feedback">
                                                <i class="fa fa-lightbulb text-warning"></i> Feedback / Key Takeaway
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row g-3 mb-3">
                                    <div class="col-md-6">
                                        <label for="comment_name" class="form-label small fw-bold text-dark">Your Name <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-white border-end-0 text-muted">
                                                <i class="fa fa-user"></i>
                                            </span>
                                            <input type="text" id="comment_name" name="name" class="form-control border-start-0 ps-0" placeholder="e.g. Samuel Adeyemi" value="{{ old('name') }}" required maxlength="100">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="comment_email" class="form-label small fw-bold text-dark">Your Email <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-white border-end-0 text-muted">
                                                <i class="fa fa-envelope"></i>
                                            </span>
                                            <input type="email" id="comment_email" name="email" class="form-control border-start-0 ps-0" placeholder="e.g. samuel@example.com" value="{{ old('email') }}" required maxlength="150">
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="comment_body" class="form-label small fw-bold text-dark">Your Thoughts, Question or Reflection <span class="text-danger">*</span></label>
                                    <textarea id="comment_body" name="comment" rows="4" class="form-control" placeholder="What stood out to you in this article? Ask questions, share personal insights, or encourage other readers..." required minlength="3" maxlength="3000">{{ old('comment') }}</textarea>
                                </div>

                                <div class="d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary rounded-pill px-4 py-2 fw-semibold shadow-sm d-inline-flex align-items-center gap-2" style="background-color: #3F207F; border-color: #3F207F;">
                                        <i class="fa fa-paper-plane"></i> Post Contribution
                                    </button>
                                </div>
                            </form>
                        </div>

                        <!-- Existing Comments List -->
                        <div class="comments-list-wrapper">
                            @if($insight->comments->count() > 0)
                                <div class="d-flex flex-column gap-3">
                                    @foreach($insight->comments as $comment)
                                        <div id="comment-{{ $comment->id }}" class="comment-item-card">
                                            <div class="d-flex align-items-start gap-3">
                                                <img src="{{ $comment->avatar_url }}" alt="{{ $comment->name }}" class="comment-avatar">
                                                <div class="flex-grow-1">
                                                    <div class="d-flex flex-wrap align-items-center justify-content-between gap-2 mb-2">
                                                        <div class="d-flex align-items-center gap-2">
                                                            <h6 class="fw-bold mb-0 text-dark">{{ $comment->name }}</h6>
                                                            @php $badge = $comment->type_badge; @endphp
                                                            <span class="badge {{ $badge['class'] }} rounded-pill small" style="font-size: 0.72rem;">
                                                                <i class="{{ $badge['icon'] }} me-1"></i> {{ $badge['label'] }}
                                                            </span>
                                                        </div>
                                                        <small class="text-muted">
                                                            <i class="far fa-clock me-1"></i> {{ $comment->created_at->diffForHumans() }}
                                                        </small>
                                                    </div>

                                                    <div class="text-secondary lh-base mb-0" style="white-space: pre-line; font-size: 0.96rem;">
                                                        {{ $comment->comment }}
                                                    </div>

                                                    <!-- Author / Admin Reply if present -->
                                                    @if(!empty($comment->admin_reply))
                                                        <div class="author-reply-box">
                                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                                <div class="d-flex align-items-center gap-2">
                                                                    <span class="badge rounded-pill px-2 py-1 fw-bold" style="background-color: #E4B548; color: #180938; font-size: 0.75rem;">
                                                                        <i class="fa fa-star me-1"></i> Author Response
                                                                    </span>
                                                                    <strong class="text-dark small">Bimbo Ilori</strong>
                                                                </div>
                                                                @if($comment->admin_replied_at)
                                                                    <small class="text-muted" style="font-size: 0.75rem;">
                                                                        {{ $comment->admin_replied_at->diffForHumans() }}
                                                                    </small>
                                                                @endif
                                                            </div>
                                                            <div class="text-dark small lh-base mb-0" style="white-space: pre-line;">
                                                                {{ $comment->admin_reply }}
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @else
                                <!-- Empty State -->
                                <div class="text-center py-5 px-3 rounded-4 bg-light border border-dashed">
                                    <div class="rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 60px; height: 60px; background-color: #EDE7F8; color: #3F207F;">
                                        <i class="fa fa-comments fs-3"></i>
                                    </div>
                                    <h6 class="fw-bold text-dark mb-1">No comments or questions yet</h6>
                                    <p class="text-muted small mb-0" style="max-width: 420px; margin: 0 auto;">
                                        Be the first reader to share your reflection, feedback, or ask Bimbo Ilori a question about this insight!
                                    </p>
                                </div>
                            @endif
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
