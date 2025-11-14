const { createApp } = Vue;

createApp({
    data() {
        return {
            urlApi: "http://localhost:8000/api",
        };
    },

    methods: {

        async getAllHangszer() {
            console.log("GET /instruments");
            const res = await fetch(`${this.urlApi}/instruments`);
            console.log(await res.json());
        },

        async getHangszer() {
            console.log("GET /instruments/1");
            const res = await fetch(`${this.urlApi}/instruments/1`);
            console.log(await res.json());
        },

        async createHangszer() {
            console.log("POST /instruments");
            const res = await fetch(`${this.urlApi}/instruments`, {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({
                    name: "Furulyaa",
                    description: "hangszer",
                    brand: "Yamahha",
                    price: 12345,
                    quantity: 3
                })
            });
            console.log(await res.json());
        },

        async updateHangszer() {
            console.log("PATCH /instruments/1");
            const res = await fetch(`${this.urlApi}/instruments/1`, {
                method: "PATCH",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ quantity: 99 })
            });
            console.log(await res.json());
        },

        async deleteHangszer() {
            console.log("DELETE /instruments/1");
            const res = await fetch(`${this.urlApi}/instruments/1`, {
                method: "DELETE"
            });
            console.log(await res.json());
        }

    }

}).mount("#app");
