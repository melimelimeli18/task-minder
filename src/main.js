import './styles/global.css';
// import './styles/tailwind.css';
import App from './routes/+page.svelte';

const app = new App({
    target: document.body,
});

export default app;