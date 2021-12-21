import axios from "axios";
import Vue from "vue/dist/vue.js";

new Vue({
    el: "#app",
    data: {
        isAuthenticated: false,
        orders: []
    },
    beforeMount() {

        if (localStorage.token) {
            this.isAuthenticated = true;
        }

        if (! this.isAuthenticated) {
            alert('Anda belum melakukan login')
            location.href = "/login";
        }
    },
    mounted() {
        this.fetchOrders()
    },
    methods: {
        signOut: function () {
            localStorage.clear();
            location.href = "/";
        },

        fetchOrders: function () {
            axios.get('/api/orders')
                .then(res => {
                    this.orders = res.data.data
                })
                .catch(err => console.error(err))
        },

        deleteOrder: function (id) {
            let check = confirm("Yakin ? ");

            if (check) {
                axios.delete('/api/orders/' + id)
                .then(res => {
                    console.info(res.data.success.message);

                    alert(res.data.success.message);
                    location.href = "/order-history";
                })
                .catch(err => console.error(err))
            }
        },
    },
});
