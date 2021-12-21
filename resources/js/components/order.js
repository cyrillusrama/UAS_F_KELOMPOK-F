import axios from "axios";
import Vue from "vue/dist/vue.js";

new Vue({
    el: "#app",
    data: {
        formTitle: 'TAMBAH PEMESANAN',
        buttonAction: 'PESAN',
        isAuthenticated: false,
        bookingLocation: '',
        bookingDate: '',
        firstName: '',
        lastName: '',
        phone: '',
        address: '',
        errors: [],
        destinations: [],
        isEdit: false,
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
        this.fetchDestinations()

        if (window.location.pathname.charAt(7) != '') {
            this.formTitle = 'EDIT PESANAN';
            this.buttonAction = 'Update Pesanan';
            this.isEdit = true;
            this.fetchOrderDetail(window.location.pathname.charAt(7));
        }

    },
    methods: {
        signOut: function () {
            localStorage.clear();
            location.href = "/";
        },

        submit: function () {
            this.resetError();

            if (this.isEdit) {

                const id = window.location.pathname.charAt(7);

                axios.put('/api/orders/' + id, {
                    booking_location: this.bookingLocation,
                    booking_date: this.bookingDate,
                    first_name: this.firstName,
                    last_name: this.lastName,
                    phone: this.phone,
                    address: this.address
                })
                .then(res => {
                    alert(res.data.success.message)
                    location.href = "/order-history"
                })
                .catch(err => console.error(err))
                return;
            }

            axios.post('/api/orders', {
                booking_location: this.bookingLocation,
                booking_date: this.bookingDate,
                first_name: this.firstName,
                last_name: this.lastName,
                phone: this.phone,
                address: this.address
            })
            .then(res => {
                alert(res.data.success.message)

                location.href = "/order-history"
            })
            .catch(err => {
                this.errors = err.response.data.errors

                if (err.response.data.errors.system) {
                    alert(err.response.data.errors.system)
                }

                console.error(err.response.data.errors)
            })
        },

        resetForm: function () {
            this.bookingLocation = '';
            this.bookingDate = '';
            this.firstName = '';
            this.lastName = '';
            this.phone = '';
            this.address = '';
        },

        resetError: function () {
            this.errors = []
        },

        fetchDestinations: function () {
            axios.get('/api/destination')
                .then(res => {
                    this.destinations = res.data.data;
                })
                .catch(err => {
                    console.err(err.response.data)
                })
        },

        fetchOrderDetail: function (id) {
            axios.get('/api/orders/' + id)
                .then(res => {

                    const {data} = res.data;

                    this.bookingLocation = data.paket_wisata_id;
                    this.bookingDate = data.booking_date;
                    this.firstName = data.first_name;
                    this.lastName = data.last_name;
                    this.phone = data.phone;
                    this.address = data.address;
                })
                .catch(err => console.error(err))
        }
    },
});
