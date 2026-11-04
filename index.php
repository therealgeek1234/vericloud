<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>VeriCloud | Verify Before You Believe</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <!-- Mobile Device Frame -->
    <div class="app-container">
        
        <!-- ================= SCREEN 1: HOME ================= -->
        <div id="screen-home" class="screen active">
            
            <!-- Hero Header Area -->
            <div class="home-header">
                <!-- Background Abstract Graphic -->
                <div class="bg-graphic"></div>
                
                <div class="brand-area">
                    <div class="brand-logo">
                        <!-- Shield SVG -->
                        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 22C12 22 20 18 20 12V5L12 2L4 5V12C4 18 12 22 12 22Z" fill="#22C55E" stroke="#ffffff" stroke-width="2" stroke-linejoin="round"/>
                            <path d="M9 12L11 14L15 10" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h1 class="brand-title">Veri<span>Cloud</span></h1>
                    <p class="brand-tagline">Verify Before You Believe.</p>
                </div>

                <div class="hero-text">
                    <h2>Check. Verify. Share.</h2>
                    <p>Find out if information on social media is true or false.</p>
                </div>
            </div>

            <!-- Main Content Area -->
            <div class="home-content">
                
                <!-- Input Card -->
                <div class="input-card">
                    <div class="input-wrapper">
                        <svg class="input-icon" viewBox="0 0 24 24" fill="none" stroke="#94a3b8" stroke-width="2">
                            <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71" />
                            <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71" />
                        </svg>
                        <input type="text" id="claimInput" placeholder="Type a claim or upload a screenshot...">
                        
                        <!-- Hidden file input & Camera Icon -->
                        <input type="file" id="imageInput" accept="image/*" style="display: none;" onchange="handleImageUpload(event)">
                        <button class="upload-btn" onclick="document.getElementById('imageInput').click()" title="Upload Screenshot">
                            <svg viewBox="0 0 24 24" fill="none" stroke="#22C55E" stroke-width="2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" y1="3" x2="12" y2="15"></line></svg>
                        </button>
                    </div>

                    <!-- Image Preview Area (Hidden by default) -->
                    <div id="imagePreviewContainer" style="display: none; margin-bottom: 15px; position: relative;">
                        <img id="imagePreview" style="width: 100%; border-radius: 10px; max-height: 150px; object-fit: contain; background: #f1f5f9;">
                        <button onclick="removeImage()" style="position: absolute; top: 5px; right: 5px; background: rgba(0,0,0,0.6); color: white; border: none; border-radius: 50%; width: 24px; height: 24px; cursor: pointer;">×</button>
                    </div>

                    <button onclick="verifyClaim()" class="btn-primary">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                        Verify Information
                    </button>
                </div>

                <!-- Social Platform Quick Links -->
                <div class="social-divider">
                    <span>or</span>
                </div>
                <div class="social-row">
                    <div class="social-btn" title="Facebook" onclick="quickSelect('Facebook')"><svg viewBox="0 0 24 24" fill="#1877F2"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.469h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.469h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg></div>
                    <div class="social-btn" title="TikTok" onclick="quickSelect('TikTok')"><svg viewBox="0 0 24 24" fill="#000000"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"/></svg></div>
                    <div class="social-btn" title="X (Twitter)" onclick="quickSelect('X (Twitter)')"><svg viewBox="0 0 24 24" fill="#000000"><path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"/></svg></div>
                    <div class="social-btn" title="Instagram" onclick="quickSelect('Instagram')"><svg viewBox="0 0 24 24" fill="#E1306C"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg></div>
                </div>
                <p style="text-align:center; font-size:11px; color:#94a3b8; margin-bottom:20px; padding:0 10px;">
                    Note: Click an icon to start typing the claim, or upload a screenshot above.
                </p>

                <!-- Action Menu -->
                <div class="action-menu">
                    <div class="action-item" onclick="showScreen('history')">
                        <div class="action-icon"><svg viewBox="0 0 24 24" fill="none" stroke="#0B1E36" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg></div>
                        <span>History</span>
                    </div>
                    <div class="action-item" onclick="showScreen('settings')">
                        <div class="action-icon"><svg viewBox="0 0 24 24" fill="none" stroke="#0B1E36" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg></div>
                        <span>Settings</span>
                    </div>
                    <div class="action-item" onclick="showScreen('about')">
                        <div class="action-icon"><svg viewBox="0 0 24 24" fill="none" stroke="#0B1E36" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg></div>
                        <span>About</span>
                    </div>
                </div>

                <!-- Trust Badge -->
                <div class="trust-badge">
                    <svg viewBox="0 0 24 24" fill="none" stroke="#22C55E" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                    <span>Trusted by many.</span>
                </div>

            </div>

            <!-- Bottom Navigation -->
            <div class="bottom-nav">
                <a href="#" class="nav-item active" onclick="showScreen('home')">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg>
                    <span>Home</span>
                </a>
                <a href="#" class="nav-item" onclick="showScreen('history')">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                    <span>History</span>
                </a>
                <a href="#" class="nav-item" onclick="showScreen('settings')">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>
                    <span>Settings</span>
                </a>
                <a href="#" class="nav-item" onclick="showScreen('about')">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                    <span>About</span>
                </a>
            </div>
        </div>

        <!-- ================= SCREEN 2: LOADING ================= -->
        <div id="screen-loading" class="screen">
            <div class="header dark-header">
                <button class="back-btn" onclick="showScreen('home')">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                </button>
                <h2>Verifying...</h2>
                <div style="width: 24px;"></div> <!-- Spacer -->
            </div>
            
            <div class="loader-container">
                <div class="radar-spinner">
                    <svg class="radar-svg" viewBox="0 0 100 100">
                        <circle cx="50" cy="50" r="45" fill="none" stroke="#22C55E" stroke-width="4" stroke-dasharray="283" stroke-dashoffset="70" stroke-linecap="round"/>
                        <path d="M50 50 L50 5 A45 45 0 0 1 95 50 Z" fill="#22C55E" opacity="0.2"/>
                    </svg>
                    <svg class="search-icon" viewBox="0 0 24 24" fill="none" stroke="#0B1E36" stroke-width="2.5"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                </div>
                
                <h3 class="loading-title">Checking the claim...</h3>
                <p class="loading-subtitle">This may take a few seconds.</p>
                
                <ul class="loading-steps">
                    <li class="completed">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#22C55E" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        Searching fact-check databases...
                    </li>
                    <li class="completed">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#22C55E" stroke-width="3"><polyline points="20 6 9 17 4 12"></polyline></svg>
                        Analysing the information...
                    </li>
                    <li class="processing">
                        <svg class="spin-icon" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="3"><circle cx="12" cy="12" r="10" stroke-dasharray="32" stroke-dashoffset="10"></circle></svg>
                        Finding trusted sources...
                    </li>
                </ul>

                <div class="tip-box">
                    <div class="tip-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#22C55E" stroke-width="2"><path d="M9 18h6"></path><path d="M10 22h4"></path><path d="M12 2a7 7 0 0 0-7 7c0 2.38 1.19 4.47 3 5.74V17h8v-2.26c1.81-1.27 3-3.36 3-5.74a7 7 0 0 0-7-7z"></path></svg>
                    </div>
                    <div class="tip-text">
                        <strong>Tip:</strong> Be cautious of sensational headlines, especially on social media.
                    </div>
                </div>
            </div>
        </div>

        <!-- ================= SCREEN 3: RESULT ================= -->
        <div id="screen-result" class="screen">
            <div class="header dark-header">
                <button class="back-btn" onclick="showScreen('home')">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                </button>
                <h2>Verification Result</h2>
                <div style="width: 24px;"></div>
            </div>

            <div class="result-content">
                <!-- Verdict Banner -->
                <div id="verdictBanner" class="verdict-banner">
                    <div class="verdict-icon">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/></svg>
                    </div>
                    <div class="verdict-text-area">
                        <span class="verdict-label">Verdict:</span>
                        <h3 id="verdictText">MISLEADING</h3>
                    </div>
                </div>
                <p class="verdict-desc" id="verdictDesc">This claim contains partly false information.</p>

                <!-- Score Card -->
                <div class="score-card">
                    <div class="score-circle-container">
                        <svg class="score-circle-svg" viewBox="0 0 100 100">
                            <circle cx="50" cy="50" r="45" fill="none" stroke="#e2e8f0" stroke-width="8"/>
                            <circle id="scoreRing" cx="50" cy="50" r="45" fill="none" stroke="#FACC15" stroke-width="8" stroke-linecap="round" stroke-dasharray="283" stroke-dashoffset="113" transform="rotate(-90 50 50)"/>
                        </svg>
                        <div class="score-number" id="scoreText">60%</div>
                    </div>
                    <div class="score-info">
                        <h4>Credibility Score</h4>
                        <p id="scoreLabel">Low Confidence</p>
                    </div>
                </div>

                <!-- Details Box -->
                <div class="details-card">
                    <div class="details-header">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                        <h4>Details</h4>
                    </div>
                    <p id="detailsText">Loading details...</p>
                </div>

                <!-- Action Buttons -->
                <div class="result-actions">
                    <button class="btn-secondary" onclick="showScreen('home')">Check Another</button>
                    <button class="btn-primary" onclick="shareResult()">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="18" cy="5" r="3"></circle><circle cx="6" cy="12" r="3"></circle><circle cx="18" cy="19" r="3"></circle><line x1="8.59" y1="13.51" x2="15.42" y2="17.49"></line><line x1="15.41" y1="6.51" x2="8.59" y2="10.49"></line></svg>
                        Share
                    </button>
                </div>
            </div>
        </div>

        <!-- ================= SCREEN 4: HISTORY ================= -->
        <div id="screen-history" class="screen">
            <div class="header dark-header">
                <button class="back-btn" onclick="showScreen('home')">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                </button>
                <h2>Verification History</h2>
                <button class="back-btn" onclick="clearHistory()" title="Clear">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg>
                </button>
            </div>
            <div id="historyList" class="history-list">
                <!-- Loaded via JS -->
            </div>
            <div class="bottom-nav">
                <a href="#" class="nav-item" onclick="showScreen('home')">
                    <svg viewBox="0 0 24 24" fill="currentColor"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg><span>Home</span>
                </a>
                <a href="#" class="nav-item active"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg><span>History</span></a>
                <a href="#" class="nav-item" onclick="showScreen('settings')"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg><span>Settings</span></a>
                <a href="#" class="nav-item" onclick="showScreen('about')"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg><span>About</span></a>
            </div>
        </div>

        <!-- ================= SCREEN 5: SETTINGS ================= -->
        <div id="screen-settings" class="screen">
            <div class="header dark-header">
                <button class="back-btn" onclick="showScreen('home')">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                </button>
                <h2>Settings</h2>
                <div style="width: 24px;"></div>
            </div>
            
            <div class="settings-list">
                <div class="profile-card">
                    <div class="avatar">
                        <svg viewBox="0 0 24 24" fill="#94a3b8"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
                    </div>
                    <div class="profile-info">
                        <h3>VeriCloud User</h3>
                        <p>vericloud@user.com</p>
                    </div>
                </div>

                <div class="settings-group">
                    <div class="setting-item">
                        <div class="setting-left">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>
                            <span>Notifications</span>
                        </div>
                        <label class="switch">
                            <input type="checkbox" checked>
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="setting-item">
                        <div class="setting-left">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                            <span>Language</span>
                        </div>
                        <span class="setting-value">English</span>
                    </div>
                    <div class="setting-item">
                        <div class="setting-left">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                            <span>Privacy & Security</span>
                        </div>
                        <svg class="chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                    <div class="setting-item">
                        <div class="setting-left">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                            <span>About VeriCloud</span>
                        </div>
                        <svg class="chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                    <div class="setting-item">
                        <div class="setting-left">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
                            <span>Help & Support</span>
                        </div>
                        <svg class="chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    </div>
                </div>

                <button class="btn-logout">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                    Log Out
                </button>
            </div>
        </div>

        <!-- ================= SCREEN 6: ABOUT ================= -->
        <div id="screen-about" class="screen">
            <div class="header dark-header">
                <button class="back-btn" onclick="showScreen('home')">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>
                </button>
                <h2>About VeriCloud</h2>
                <div style="width: 24px;"></div>
            </div>
            
            <div class="about-content">
                <div class="about-bg-graphic"></div>
                
                <div class="brand-logo large">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 22C12 22 20 18 20 12V5L12 2L4 5V12C4 18 12 22 12 22Z" fill="#22C55E" stroke="#ffffff" stroke-width="2" stroke-linejoin="round"/>
                        <path d="M9 12L11 14L15 10" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                
                <h1 class="about-title">Veri<span>Cloud</span></h1>
                <p class="about-tagline">Verify Before You Believe.</p>
                
                <p class="about-desc">VeriCloud is a fact-checking app that helps you verify information from social media and other online sources.</p>
                
                <ul class="about-features">
                    <li><span class="check">✔</span> Check claims in seconds</li>
                    <li><span class="check">✔</span> Get trusted evidence</li>
                    <li><span class="check">✔</span> Share verified results</li>
                </ul>

                <div class="about-footer">
                    <p>Version 1.0.0</p>
                    <p>Built for a more informed and responsible digital community.</p>
                </div>
            </div>
            
            <div class="bottom-nav">
                <a href="#" class="nav-item" onclick="showScreen('home')"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"/></svg><span>Home</span></a>
                <a href="#" class="nav-item" onclick="showScreen('history')"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg><span>History</span></a>
                <a href="#" class="nav-item" onclick="showScreen('settings')"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg><span>Settings</span></a>
                <a href="#" class="nav-item active"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg><span>About</span></a>
            </div>
        </div>

    </div>
    <script src="js/app.js"></script>
</body>
</html>