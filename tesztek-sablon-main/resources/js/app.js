require('./bootstrap');
import ReactDOM from 'react-dom/client';
import App from './components/App'

const app = document.getElementById('app');

if (app) {
    console.log("asd");
    const root = ReactDOM.createRoot(app);
    root.render(
        <App />
    );
}
