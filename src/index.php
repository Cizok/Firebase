<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO LIST</title>
<script type="module">
    // Import the functions you need from the SDKs you need
    import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.1/firebase-app.js";
    import { getAnalytics } from "https://www.gstatic.com/firebasejs/10.12.1/firebase-analytics.js";
    // TODO: Add SDKs for Firebase products that you want to use
    // https://firebase.google.com/docs/web/setup#available-libraries

    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    const firebaseConfig = {
    apiKey: "AIzaSyD1wP-2wEiXdQK5s_qGRxTYHeGOJQYgZLE",
    authDomain: "guaianazes-2c470.firebaseapp.com",
    projectId: "guaianazes-2c470",
    storageBucket: "guaianazes-2c470.appspot.com",
    messagingSenderId: "515107496088",
    appId: "1:515107496088:web:55b677b27094b3181b70ed",
    measurementId: "G-CSFVEXGTZ4"
    };

    // Initialize Firebase
    window.app = initializeApp(firebaseConfig);
    console.log(app);
    const analytics = getAnalytics(app);
</script>
</head>
<body>
    <h1>TODO LIST</h1>
    <?php
        include 'main.php' ?>

    <label for="email">Email</label><br>
    <input type="email" id="email" name="email"><br>
    <label for="password">Password</label><br>
    <input type="password" id="password" name="password"><br>
    <button id="btblogin">Login</button> 
    <button id="btnregistro">Registro</button>
 
</body>
</html>