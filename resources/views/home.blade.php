@extends('layouts.frontend')

@section('content')
        <div class="container">
            <!-- Feed -->
            <div class="feed">
                <!-- Create Post Trigger (Optional quick access) -->
                <div class="post-card" style="display: flex; gap: 15px; align-items: center; cursor: pointer;" onclick="window.location.href='posting.html'">
                    <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="Profile" class="user-avatar-sm">
                    <input type="text" placeholder="What's on your mind?" class="input-field" style="background: var(--bg-body); cursor: pointer;" readonly>
                    <i class="ri-image-add-line" style="font-size: 24px; color: var(--primary-color);"></i>
                </div>

                <div class="feed-posts">
                    <!-- Posts will be injected here by script.js -->
                </div>
            </div>

            <!-- Sidebar (Desktop Only) -->
            <div class="sidebar-right">
                <div class="sidebar-card">
                    <div class="sidebar-title">Suggested for you</div>
                    
                    <div class="suggested-user">
                        <div class="user-info">
                            <img src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="User" class="user-avatar-sm">
                            <div>
                                <div class="username" style="font-size: 14px;">Tyler Code</div>
                                <div class="time">New to Soca</div>
                            </div>
                        </div>
                        <button class="follow-btn" onclick="followUser(this)">Follow</button>
                    </div>

                    <div class="suggested-user">
                        <div class="user-info">
                            <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" alt="User" class="user-avatar-sm">
                            <div>
                                <div class="username" style="font-size: 14px;">Anna Tech</div>
                                <div class="time">Followed by Alex</div>
                            </div>
                        </div>
                        <button class="follow-btn" onclick="followUser(this)">Follow</button>
                    </div>

                </div>
            </div>
        </div>
@endsection
