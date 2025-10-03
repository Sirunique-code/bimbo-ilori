import './bootstrap';
import Echo from "laravel-echo";
import Pusher from "pusher-js";

console.log("Starting Laravel Echo...");

try {
    window.Pusher = Pusher;

    window.Echo = new Echo({
        broadcaster: 'pusher',
        key: import.meta.env.VITE_PUSHER_APP_KEY,
        cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
        forceTLS: true,
        encrypted: true,
        wsHost: `ws-${import.meta.env.VITE_PUSHER_APP_CLUSTER}.pusher.com`,
        wsPort: 443,
        disableStats: true,
    });

    console.log("✅ Echo initialized successfully!", window.Echo);
} catch (error) {
    console.error("❌ Failed to initialize Echo", error);
}
