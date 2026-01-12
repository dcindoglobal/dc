<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>WhatsApp Floating Chat</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
    body {
        
        font-family: Arial, sans-serif;
    }

    .whatsapp-float {
        position: fixed;
        bottom: 20px;
        right: 20px;
        width: 60px;
        height: 60px;
        background-color: #25d366;
        border-radius: 50%;
        box-shadow: 0 4px 12px rgba(0,0,0,0.3);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
        transition: transform 0.3s ease;
    }

    .whatsapp-float:hover {
        transform: scale(1.1);
    }

    .whatsapp-float img {
        width: 35px;
        height: 35px;
    }
</style>
</head>
<body>

<!-- Floating WhatsApp Button -->
<a 
   href="https://wa.me/919919910405?text=Hello%20I%20need%20support"
   class="whatsapp-float"
   target="_blank"
   aria-label="Chat on WhatsApp">
   
   <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp">
</a>

</body>
</html>
