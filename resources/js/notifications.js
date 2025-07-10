// Frontend notification system
class NotificationManager {
    constructor() {
        this.container = null;
        this.init();
    }

    init() {
        // Create notification container if it doesn't exist
        if (!document.getElementById('notification-container')) {
            this.container = document.createElement('div');
            this.container.id = 'notification-container';
            document.body.appendChild(this.container);
        } else {
            this.container = document.getElementById('notification-container');
        }
    }

    show(type, title, message, duration = 5000) {
        const notification = document.createElement('div');
        notification.className = `notification ${type}`;
        
        const iconMap = {
            success: 'fas fa-check-circle',
            error: 'fas fa-times-circle',
            warning: 'fas fa-exclamation-triangle',
            info: 'fas fa-info-circle'
        };

        notification.innerHTML = `
            <button class="notification-close" onclick="this.parentElement.remove()">×</button>
            <div class="notification-title">
                <i class="${iconMap[type]}"></i>
                ${title}
            </div>
            <div class="notification-body">${message}</div>
        `;

        this.container.appendChild(notification);

        // Auto remove after duration
        if (duration > 0) {
            setTimeout(() => {
                if (notification.parentElement) {
                    notification.classList.add('hiding');
                    setTimeout(() => {
                        if (notification.parentElement) {
                            notification.remove();
                        }
                    }, 300);
                }
            }, duration);
        }

        return notification;
    }

    success(title, message, duration = 5000) {
        return this.show('success', title, message, duration);
    }

    error(title, message, duration = 5000) {
        return this.show('error', title, message, duration);
    }

    warning(title, message, duration = 5000) {
        return this.show('warning', title, message, duration);
    }

    info(title, message, duration = 5000) {
        return this.show('info', title, message, duration);
    }
}

// Initialize notification manager
const notifications = new NotificationManager();

// Make it globally available
window.notifications = notifications;

// Track if listeners are already set up to avoid duplicates
let listenersSetup = false;

// Livewire integration - setup once and handle navigation
function setupLivewireListeners() {
    if (window.Livewire && !listenersSetup) {
        // Mark as setup to prevent duplicate registrations
        listenersSetup = true;
        
        // Register the notify event listener
        Livewire.on('notify', (data) => {
            const { type, title, message, duration } = data[0] || data;
            notifications.show(type, title, message, duration);
        });
        
        console.log('Livewire notify listener registered');
    }
}

// Setup on DOM ready
document.addEventListener('DOMContentLoaded', () => {
    setupLivewireListeners();
});

// Setup when Livewire initializes
document.addEventListener('livewire:init', () => {
    setupLivewireListeners();
});

// Don't re-register on navigation, just ensure container exists
document.addEventListener('livewire:navigated', () => {
    // Just ensure the notification container exists after navigation
    notifications.init();
});

// Setup immediately if Livewire is already available
if (window.Livewire) {
    setupLivewireListeners();
}
