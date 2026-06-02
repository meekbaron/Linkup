@extends('layouts.frontend')

@section('content')
    <div class="container" style="display: block;"> <!-- Block display for profile layout -->


        <!-- Profile Header -->
        <div class="profile-header">
            <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=80"
                alt="Profile" class="profile-avatar-lg">

            <div class="profile-info">
                <h1>Baron's code</h1>
                <span class="profile-handle">@meekbaron</span>

                <div class="profile-stats">
                    <div class="stat-item">
                        <span class="stat-value">42</span>
                        <span class="stat-label">Posts</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-value">1,205</span>
                        <span class="stat-label">Followers</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-value">450</span>
                        <span class="stat-label">Following</span>
                    </div>
                </div>

                <p style="margin-bottom: 20px; max-width: 500px;">Full Stack Developer 🚀 | Coffee Enthusiast ☕ |
                    Building cool things</p>

                <div style="display: flex; gap: 10px;">
                    <button class="btn-primary" onclick="window.location.href='update_profile.html'">Edit
                        Profile</button>
                    <button class="follow-btn" style="padding: 10px 20px;">Share Profile</button>
                </div>
            </div>
        </div>

        <!-- Profile Posts Grid -->
        <h2 style="margin-bottom: 20px; border-bottom: 1px solid var(--border-color); padding-bottom: 10px;">Posts
        </h2>
        <div class="profile-grid">
            <!-- Grid items will be injected by script.js -->
            <div class="grid-post">
                <img src="https://images.unsplash.com/photo-1628155930542-3c7a64e2c833?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1600&amp;q=80"
                    alt="Post">
                <div class="grid-overlay">
                    <span><i class="ri-heart-fill"></i> 124</span>
                    <span><i class="ri-chat-3-fill"></i> 2</span>
                </div>
            </div>
            <div class="grid-post">
                <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1600&amp;q=80"
                    alt="Post">
                <div class="grid-overlay">
                    <span><i class="ri-heart-fill"></i> 89</span>
                    <span><i class="ri-chat-3-fill"></i> 0</span>
                </div>
            </div>
            <div class="grid-post">
                <img src="https://images.unsplash.com/photo-1628155930542-3c7a64e2c833?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1600&amp;q=80"
                    alt="Post">
                <div class="grid-overlay">
                    <span><i class="ri-heart-fill"></i> 124</span>
                    <span><i class="ri-chat-3-fill"></i> 2</span>
                </div>
            </div>
            <div class="grid-post">
                <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1600&amp;q=80"
                    alt="Post">
                <div class="grid-overlay">
                    <span><i class="ri-heart-fill"></i> 89</span>
                    <span><i class="ri-chat-3-fill"></i> 0</span>
                </div>
            </div>
            <div class="grid-post">
                <img src="https://images.unsplash.com/photo-1628155930542-3c7a64e2c833?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1600&amp;q=80"
                    alt="Post">
                <div class="grid-overlay">
                    <span><i class="ri-heart-fill"></i> 124</span>
                    <span><i class="ri-chat-3-fill"></i> 2</span>
                </div>
            </div>
            <div class="grid-post">
                <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1600&amp;q=80"
                    alt="Post">
                <div class="grid-overlay">
                    <span><i class="ri-heart-fill"></i> 89</span>
                    <span><i class="ri-chat-3-fill"></i> 0</span>
                </div>
            </div>
        </div>

    </div>
@endsection
