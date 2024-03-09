// Import specific components or functions from your Laravel application's bootstrap.js file
import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';

// Import your application's CSS file
import '../css/app.css';

// Configure Inertia.js
const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
  title: (title) => `${title} - ${appName}`,
  resolve: (name) => import(`./Pages/${name}.vue`),
  setup({ el, App, props }) {
    const app = createApp({ render: () => h(App, props) });

    // Register global components
    app.component('example-component', require('./Components/ExampleComponent.vue').default);

    app.mount(el);
  },
});

// Initialize Inertia Progress
InertiaProgress.init({ color: '#4B5BD5' });
