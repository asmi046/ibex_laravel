import './bootstrap';
import './v-script';

import {createApp} from 'vue/dist/vue.esm-bundler';

import ProductQuestions from "./components/ProductQuestions.vue"

const product_list_app = createApp({
    components:{
        ProductQuestions
    },
    setup() {}
})

product_list_app.mount("#product_list");

const product_page_app = createApp({
    components:{
        ProductQuestions
    },
    setup() {}
})

product_page_app.mount("#product_page");
