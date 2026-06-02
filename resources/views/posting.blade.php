@extends('layouts.frontend')

@section('content')
<div class="container" style="display: block;">

            <div class="form-card">
                <h2 style="margin-bottom: 20px; text-align: center;">Create New Post</h2>

                <form onsubmit="event.preventDefault(); window.location.href='index.html';">
                    <div class="form-group">
                        <label class="file-upload">
                            <i class="ri-image-add-line" style="font-size: 48px; color: var(--text-muted); margin-bottom: 10px;"></i>
                            <p class="text-muted">Drag &amp; drop or click to upload</p>
                            <input type="file" id="file-upload" accept="image/*">
                            <img id="image-preview" src="#" alt="Preview" class="upload-preview">
                        </label>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Caption</label>
                        <textarea class="input-field" placeholder="Write a caption..."></textarea>
                    </div>

                    <div style="display: flex; justify-content: flex-end; gap: 10px;">
                        <button type="button" class="action-btn" onclick="window.history.back()">Cancel</button>
                        <button type="submit" class="btn-primary">Share Post</button>
                    </div>
                </form>
            </div>

</div>

@endsection