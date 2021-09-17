<template>
    <div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-10 text-center">
            <h1>¡Contáctanos ahora!</h1>
            <p>Nuestro equipo resolverá todas tus dudas</p>
        </div>
    </div>
    <hr>
        <form class="needs-validation" novalidate @submit.prevent="submitForm">
            <div class="row justify-content-center">
                <div class="col-md-8">
                        <label>Nombre</label>
                        <input type="text" class="form-control" label="Nombre" v-model="fields.name" required>
                </div>
                <div class="col-md-8">
                    <label>Correo electronico</label>
                        <input type="email" class="form-control" label="Correo electronico" v-model="fields.email" required>
                </div>
                <div class="col-md-8">
                    <label>¿En que estas interesado?</label>
                        <input type="text" class="form-control" label="¿En que estas interesado?" v-model="fields.subject" required>
                </div>
                <div class="col-md-8">
                        <label>Tu mensaje o duda</label>
                        <textarea class="form-control" label="Tu mensaje"
                        v-model="fields.message"
                        required></textarea>
                </div>
                <div class="col-md-8">
                    <br>
                    <button class="btn btn-secondary" type="submit">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</template>
<script>
  import axios from "axios";

  export default {
    components: {
      
    },
    data() {
      return {
        fields: {
          name: "",
          email: "",
          subject: "",
          message: ""
        }
      };
    },
    methods: {
      validate() {
        const form = [...arguments];
        const emailRegexp = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        for (let index in form) {
          let field = form[index];
          if (field === "email" && !emailRegexp.test(this.fields[field])) {
            return false;
          } else if (this.fields[field] === "") {
            return false;
          }
        }
        return true;
      },
      submitForm(event) {
        event.target.classList.add("was-validated");
        if (this.validate("email", "name", "message", "subject")) {
          axios
            .post("/enviar", this.fields)
            .then(response => {
              alert("Mensaje enviado!");
              this.fields = {};
              event.target.classList.remove("was-validated");
            })
            .catch(error => {
              console.log(error);
            });
        }
      }
    }
  };
</script>
<style>
    h1{
        font-family: 'Rubik', sans-serif;
        font-weight: 800;
        font-size: 80px;
        color:#F4DD61;
    }
    p{
        color:#fff;
        font-size:22px;
    }
</style>
