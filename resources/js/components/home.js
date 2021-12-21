import Vue from "vue/dist/vue.js";

new Vue({
    el: "#app",
    data: {
        banners: [
            {
                image: "http://e-travell.000webhostapp.com/page/gambarWisata/21.jpg",
                title: "E-TRAVELL",
                caption: "Travelling Aman Tanpa Kendala",
            },
            {
                image: "http://e-travell.000webhostapp.com/page/gambarWisata/22.jpg",
                title: "KEINDAHAN ALAM MEMPESONA",
                caption: "Nikmati Keindahan Alam Pegunungan di Yogyakarta",
            },
            {
                image: "http://e-travell.000webhostapp.com/page/gambarWisata/23.jpg",
                title: "PENGALAMAN TANPA BATAS",
                caption:
                    "Rasakan Segarnya Udara Dengan Rebahan di Pantai Yogyakarta",
            },
        ],

        abouts: [
            {
                image: "http://e-travell.000webhostapp.com/atribut/1,1.jpg",
                title: "Visi Misi",
                content:
                    "Misi kami adalah memberdayakan Anda untuk memenuhi aspirasi gaya hidup Anda. Dengan produk terintegrasi kami dalam satu platform, yang berbagai kebutuhanmu diperjalanan.",
            },
            {
                image: "http://e-travell.000webhostapp.com/atribut/3,3.jpg",
                title: "Pengenalan Produk",
                content:
                    "E-Travell Perusahaan teknologi yang menyediakan akses bagi pengguna untuk mencari berbagai produk untuk perjalananmu yang menyenangkan.",
            },
            {
                image: "http://e-travell.000webhostapp.com/page/gambarWisata/24a.jpg",
                title: "Fitur Kami",
                content:
                    "Memberikan Wisata- wisata lengkap yang ada di Yogyakarta dengan dukungan pemesanan tercepat untuk memudahkan para pengunjung untuk menikmati wisata yang ada di Yogyakarta.",
            },
            {
                image: "http://e-travell.000webhostapp.com/atribut/2,2.jpg",
                title: "Alamat",
                content:
                    "Universitas Atma Jaya Yogyakarta, Jl. Babarsari No.43, Janti, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281.",
            },
        ],

        socials: [
            {
                name: "Yogi Hua",
                link: "https://www.instagram.com/yogihualim_",
            },
            {
                name: "Cyrillus Rama Hendrawan",
                link: "https://www.instagram.com/cyrillusrama",
            },
            {
                name: "Raynald Setiawan",
                link: "https://www.instagram.com/",
            },
        ],

        isAuthenticated: false,
    },

    mounted() {
        if (localStorage.token) {
            this.isAuthenticated = true;
        }
    },
    methods: {
        signOut: function () {
            localStorage.clear();
            location.href = "/";
        },
    },
});
