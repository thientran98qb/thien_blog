window.Vue = require('vue').default;
window.axios = require('axios');

import ExampleComponent from "./components/ExampleComponent.vue";
 
Vue.use(Toasted);
Vue.use(VueAxiosPlugin, { axios: axios });
 
new Vue({
    el: "#app",
    components: {
        ExampleComponent
    }
});
 