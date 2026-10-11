import './bootstrap';

// resources/js/app.js
import Echo from "laravel-echo";
import Pusher from "pusher-js";

console.log("Starting Laravel Echo...");

try {
    window.Pusher = Pusher;

    window.Echo = new Echo({
        broadcaster: 'pusher',
        key: import.meta.env.VITE_PUSHER_APP_KEY,
        cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
        encrypted: true
    });

    console.log("✅ Echo initialized successfully!", window.Echo);
} catch (error) {
    console.error("❌ Failed to initialize Echo", error);
}