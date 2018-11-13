Nova.booting((Vue, router) => {
    Vue.component('index-ellipsis-textarea', require('./components/IndexField'));
    Vue.component('detail-ellipsis-textarea', require('./components/DetailField'));
    Vue.component('form-ellipsis-textarea', require('./components/FormField'));
})
