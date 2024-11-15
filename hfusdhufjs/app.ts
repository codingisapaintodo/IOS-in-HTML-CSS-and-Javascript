interface AppIcon {
    id: string;
    name: string;
    onClick: () => void;
}

class IpodApp {
    private icons: AppIcon[];

    constructor() {
        this.icons = [
            {
                id: "music",
                name: "Music",
                onClick: this.launchMusicApp
            },
            {
                id: "apps",
                name: "Apps",
                onClick: this.launchApps
            },
            {
                id: "settings",
                name: "Settings",
                onClick: this.launchSettings
            }
        ];

        this.addEventListeners();
    }

    private addEventListeners() {
        this.icons.forEach(icon => {
            const element = document.getElementById(icon.id);
            if (element) {
                element.addEventListener('click', icon.onClick);
            }
        });
    }

    private launchMusicApp() {
        alert('Music App Launched');
    }

    private launchApps() {
        alert('Opening Apps...');
    }

    private launchSettings() {
        alert('Opening Settings...');
    }
}

// Initialize iPod App
const ipodApp = new IpodApp();
