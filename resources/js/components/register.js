import axios from "axios";
import Vue from "vue/dist/vue.js";

new Vue({
    el: "#app",
    data: {
        name: "",
        address: "",
        phone: "",
        email: "",
        username: "",
        password: "",
        errors: [],
    },
    methods: {
        submit: function () {
            this.resetError();

            axios
                .post("/api/register", {
                    name: this.name,
                    address: this.address,
                    phone: this.phone,
                    email: this.email,
                    username: this.username,
                    password: this.password,
                })
                .then((res) => {
                    alert(res.data.success);
                    location.href = "/login";
                })
                .catch((err) => {
                    this.errors = err.response.data.errors;
                    console.error(err);
                });
        },
        resetForm: function () {
            this.name = "";
            this.address = "";
            this.phone = "";
            this.email = "";
            this.username = "";
            this.password = "";
        },
        resetError: function () {
            this.errors = [];
        },
    },
});
