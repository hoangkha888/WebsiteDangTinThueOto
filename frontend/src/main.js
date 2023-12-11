
import { createApp } from 'vue'
import './style.css'
import App from './App.vue'
import { createPinia } from 'pinia'
import { UploadOutlined} from '@ant-design/icons';
import router from './router/index.js'

import axios from 'axios';
window.axios = axios;

import { 
    Button,
    message,
    List,
    Menu,
    Form,
    Input,
    Select,
    DatePicker,
    InputNumber,
    Upload,
    Radio,
    Table,
    Avatar,

} from 'ant-design-vue'



import 'ant-design-vue/dist/reset.css'
import 'bootstrap/dist/css/bootstrap-grid.min.css'
import 'bootstrap/dist/css/bootstrap-utilities.min.css'

import './static/fontawesome2/css/all.min.css'


//vue slide
import VueSplide from '@splidejs/vue-splide';
import '@splidejs/vue-splide/css';

//datetimepicker
import VueDatePicker from '@vuepic/vue-datepicker';
import '@vuepic/vue-datepicker/dist/main.css';

//phân trang



const app = createApp(App);
app.use(createPinia());
app.use(router);
app.use(Button);
app.use(List);
app.use(Menu);
app.use(VueSplide);
app.use(Form);
app.use(Input);
app.use(Select);
app.use(DatePicker);
app.use(InputNumber);
app.use(Upload);
app.use(Radio);
app.use(Table);
app.use(Avatar);


app.component('VueDatePicker', VueDatePicker);
app.component('UploadOutlined', UploadOutlined);


app.mount('#app');

app.config.globalProperties.$message = message;

