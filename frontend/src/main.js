
import { createApp } from 'vue'
import './style.css'
import App from './App.vue'
import { createPinia } from 'pinia'
import router from './router/index.js'
import { 
    Button,
    message,
    List,
    Menu,
} from 'ant-design-vue'



import 'ant-design-vue/dist/reset.css'
import 'bootstrap/dist/css/bootstrap-grid.min.css'
import 'bootstrap/dist/css/bootstrap-utilities.min.css'
import './static/fontawesome2/css/all.min.css'

const app = createApp(App);
app.use(createPinia());
app.use(router);
app.use(Button);
app.use(List);
app.use(Menu);


app.mount('#app');

app.config.globalProperties.$message = message;