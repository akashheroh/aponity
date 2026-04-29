<?php

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Aponity App</title>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

<style>
body {
    margin: 0;
    font-family: 'Segoe UI', sans-serif;
    background: linear-gradient(135deg,#dfe9f3,#ffffff);
}

/* Header */
.header {
    background: linear-gradient(45deg, #ff6a00, #ee0979);
    padding: 20px;
    text-align: center;
    color: white;
    font-size: 26px;
    font-weight: bold;
}

/* Container */
.container {
    padding: 15px;
}

/* Card */
.card {
    background: rgba(255,255,255,0.85);
    backdrop-filter: blur(12px);
    border-radius: 20px;
    padding: 20px;
    margin-bottom: 15px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

/* App Box */
.app-box {
    text-align: center;
}

.app-logo {
    width: 100px;
    height: 100px;
    border-radius: 25px;
}

.app-name {
    font-size: 26px;
    font-weight: bold;
    margin-top: 10px;
}

/* Buttons */
.btn {
    margin-top: 12px;
    padding: 15px;
    width: 100%;
    border: none;
    border-radius: 12px;
    font-size: 16px;
    cursor: pointer;
    color: white;
}

.install-btn {
    background: linear-gradient(45deg,#00c853,#64dd17);
}

.website-btn {
    background: linear-gradient(45deg,#2979ff,#00b0ff);
}

/* Info */
.info {
    margin-top: 10px;
    color: gray;
    font-size: 14px;
}

/* Stats */
.stats {
    display: flex;
    justify-content: space-around;
    text-align: center;
}

.stat {
    font-size: 14px;
}

/* Features */
.features {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 10px;
}

.feature {
    background: #fff;
    padding: 12px;
    border-radius: 12px;
    text-align: center;
}

/* Review */
.review {
    display: flex;
    margin-top: 10px;
}

.review img {
    width: 45px;
    height: 45px;
    border-radius: 50%;
}

.review-content {
    margin-left: 10px;
}

.stars {
    color: gold;
}
</style>
</head>

<body>

<div class="header">
🚀 Aponity
</div>

<div class="container">

<!-- App -->
<div class="card app-box">
<img src="https://i.ibb.co.com/jZvbxLw4/file-00000000127072079f741104de0e9791.png" class="app-logo">
<div class="app-name">Aponity</div>

<button class="btn install-btn" onclick="window.location.href='https://apk.e-droid.net/apk/app3873200-4ujaqv.apk?v=17'">
⬇ Install App
</button>

<button class="btn website-btn" onclick="window.location.href='https://kpopbd.top'">
🌐 Visit Website
</button>

<div class="info">
⭐ 4.9 Rating • 👥 32+ Users <br>
📦 Size: 32MB • 🔞 12+
</div>
</div>

<!-- Stats -->
<div class="card">
<h3>📊 App Stats</h3>
<div class="stats">
<div class="stat">⭐ 4.9<br>Rating</div>
<div class="stat">📥 32+<br>Users</div>
<div class="stat">⚡ Fast<br>Performance</div>
</div>
</div>

<!-- About -->
<div class="card">
<h3>🔥 About Aponity</h3>
<p>
Aponity একটি নতুন জেনারেশনের সোশ্যাল প্ল্যাটফর্ম যেখানে ভিডিও, রিলস, লাইভ স্ট্রিমিং,
চ্যাটিং এবং কমিউনিটি সবকিছু একসাথে পাওয়া যায়।
</p>
<p>
এটি দ্রুত, স্মুথ এবং স্মার্ট অ্যালগরিদম ব্যবহার করে আপনাকে আপনার পছন্দের কনটেন্ট দেখায়।
</p>
</div>

<!-- Features -->
<div class="card">
<h3>✨ Features</h3>
<div class="features">
<div class="feature">🎬 Video Upload</div>
<div class="feature">🔥 Trending Feed</div>
<div class="feature">💬 Chat System</div>
<div class="feature">📩 Inbox</div>
<div class="feature">📡 Live Stream</div>
<div class="feature">👥 Follow</div>
<div class="feature">❤️ Like & Share</div>
<div class="feature">🚀 Ultra Fast</div>
</div>
</div>

<!-- Why Choose -->
<div class="card">
<h3>💡 Why Choose Aponity?</h3>
<p>✔ সহজ ব্যবহার</p>
<p>✔ লাইটওয়েট (32MB)</p>
<p>✔ দ্রুত লোডিং</p>
<p>✔ নতুন নতুন ফিচার আসবে</p>
</div>

<!-- Reviews -->
<div class="card">
<h3>⭐ User Reviews</h3>

<div class="review">
<img src="https://randomuser.me/api/portraits/men/1.jpg">
<div class="review-content">
<b>Rahim</b><br>
<span class="stars">★★★★★</span><br>
অনেক স্মুথ 🔥
</div>
</div>

<div class="review">
<img src="https://randomuser.me/api/portraits/women/2.jpg">
<div class="review-content">
<b>Sumaiya</b><br>
<span class="stars">★★★★☆</span><br>
ডিজাইনটা দারুণ 💙
</div>
</div>

<div class="review">
<img src="https://randomuser.me/api/portraits/men/3.jpg">
<div class="review-content">
<b>Kamal</b><br>
<span class="stars">★★★★★</span><br>
Best Bangladeshi app 🇧🇩
</div>
</div>

</div>

</div>

</body>
</html>
