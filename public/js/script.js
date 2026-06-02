// Mock Data
const currentUser = {
    id: 1,
    name: "Baron's code",
    username: "@meekbaron",
    avatar: "https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80",
    bio: "Full Stack Developer 🚀 | Coffee Enthusiast ☕ | Building cool things",
    posts: 42,
    followers: 2057,
    following: 400,
};

const posts = [
    {
        id: 1,
        user: {
            name: "Sarah Design",
            username: "@sarah_d",
            avatar: "https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
        },
        image: "https://images.unsplash.com/photo-1628155930542-3c7a64e2c833?ixlib=rb-1.2.1&auto=format&fit=crop&w=1600&q=80",
        caption: "Working on a new dashboard design! 🎨 What do you think?",
        likes: 124,
        comments: [
            { user: "John Doe", text: "Looks amazing! 🔥" },
            { user: "Jane Smith", text: "Love the color palette!" }
        ],
        time: "2 hours ago"
    },
    {
        id: 2,
        user: {
            name: "Alex Dev",
            username: "@alex_code",
            avatar: "https://images.unsplash.com/photo-1527980965255-d3b416303d12?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
        },
        image: "https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&auto=format&fit=crop&w=1600&q=80",
        caption: "Late night coding session. 💻 #developer #coding",
        likes: 89,
        comments: [],
        time: "5 hours ago"
    }
];

// DOM Elements & Event Listeners
document.addEventListener('DOMContentLoaded', () => {
    // Determine current page
    const path = window.location.pathname;
    
    if (path.includes('index.html') || path === '/') {
        renderFeed();
    } else if (path.includes('profile.html')) {
        renderProfile();
    }
    
    // Global Listeners
    setupImagePreviews();
});

// Render Feed
function renderFeed() {
    const feedContainer = document.querySelector('.feed-posts');
    if (!feedContainer) return;

    posts.forEach(post => {
        const postElement = createPostElement(post);
        feedContainer.appendChild(postElement);
    });
}

function createPostElement(post) {
    const div = document.createElement('div');
    div.className = 'post-card';
    div.innerHTML = `
        <div class="post-header">
            <div class="user-info">
                <img src="${post.user.avatar}" alt="User" class="user-avatar-sm">
                <div>
                    <div class="username">${post.user.name}</div>
                    <div class="time">${post.time}</div>
                </div>
            </div>
            <i class="ri-more-fill" style="cursor: pointer; color: var(--text-muted);"></i>
        </div>
        
        <div class="caption">
            <span>${post.user.username}</span> ${post.caption}
        </div>
        
        <img src="${post.image}" alt="Post Image" class="post-image">
        
        <div class="post-actions">
            <button class="action-btn" onclick="toggleLike(this)">
                <i class="ri-heart-line"></i> ${post.likes}
            </button>
            <button class="action-btn">
                <i class="ri-chat-3-line"></i> ${post.comments.length}
            </button>
            <button class="action-btn">
                <i class="ri-share-forward-line"></i>
            </button>
        </div>
        
        <div class="comments-section">
            ${post.comments.map(c => `
                <div style="font-size: 14px; margin-bottom: 5px;">
                    <span style="font-weight: 600;">${c.user}</span> <span style="color: var(--text-muted);">${c.text}</span>
                </div>
            `).join('')}
            
            <div class="comment-input-area">
                <input type="text" placeholder="Add a comment..." class="input-field">
                <button class="btn-primary" onclick="addComment(this)">Post</button>
            </div>
        </div>
    `;
    return div;
}

// Interaction Functions
function toggleLike(btn) {
    const icon = btn.querySelector('i');
    if (btn.classList.contains('liked')) {
        btn.classList.remove('liked');
        icon.className = 'ri-heart-line';
        btn.innerHTML = `<i class="ri-heart-line"></i> ${parseInt(btn.innerText) - 1}`;
    } else {
        btn.classList.add('liked');
        icon.className = 'ri-heart-fill';
        btn.innerHTML = `<i class="ri-heart-fill"></i> ${parseInt(btn.innerText) + 1}`;
    }
}

function addComment(btn) {
    const input = btn.previousElementSibling;
    const text = input.value;
    if (!text.trim()) return;
    
    const commentSection = btn.parentElement.parentElement;
    const newComment = document.createElement('div');
    newComment.style.cssText = 'font-size: 14px; margin-bottom: 5px;';
    newComment.innerHTML = `<span style="font-weight: 600;">You</span> <span style="color: var(--text-muted);">${text}</span>`;
    
    commentSection.insertBefore(newComment, btn.parentElement);
    input.value = '';
}

function followUser(btn) {
    if (btn.innerText === "Follow") {
        btn.innerText = "Following";
        btn.style.background = "var(--primary-color)";
        btn.style.color = "#fff";
        btn.style.borderColor = "transparent";
    } else {
        btn.innerText = "Follow";
        btn.style.background = "transparent";
        btn.style.color = "var(--text-main)";
        btn.style.borderColor = "var(--border-color)";
    }
}

// Image File Preview
function setupImagePreviews() {
    const fileInput = document.getElementById('file-upload');
    const preview = document.getElementById('image-preview');
    
    if (fileInput && preview) {
        fileInput.addEventListener('change', function(e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }
                reader.readAsDataURL(file);
            }
        });
    }
}

// Mock Render Profile for Profile Page
function renderProfile() {
    // Populate header info
    document.querySelector('.profile-info h1').innerText = currentUser.name;
    document.querySelector('.profile-handle').innerText = currentUser.username;
    
    // Create mock posts grid
    const grid = document.querySelector('.profile-grid');
    if (grid) {
        // Just duplicating the mock posts for grid visual
        [...posts, ...posts, ...posts].forEach(post => {
            const div = document.createElement('div');
            div.className = 'grid-post';
            div.innerHTML = `
                <img src="${post.image}" alt="Post">
                <div class="grid-overlay">
                    <span><i class="ri-heart-fill"></i> ${post.likes}</span>
                    <span><i class="ri-chat-3-fill"></i> ${post.comments.length}</span>
                </div>
            `;
            grid.appendChild(div);
        });
    }
}
