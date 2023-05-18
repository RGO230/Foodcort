import React from 'react';
import ReactDOM from 'react-dom/client';
import './index.css';
import App from './components/App/App';



import { BrowserRouter } from 'react-router-dom';
window._ = require('lodash');


try {
    require('bootstrap');
} catch (e) { }



const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
  <BrowserRouter>
    <App />
  </BrowserRouter>
);


