var app = new Vue({
    el: '#app',
    data: {
      errors: [],
      nombre: '',
      email: '',
      ubicacion: '',
      pwd: ''
    },
    methods: {
        checkForm: function (e) {
          this.errors = [];
    
          if (!this.nombre) {
            this.errors.push("El nombre es obligatorio.");
          }
          if (!this.ubicacion) {
            this.errors.push("La ubicación es obligatoria.");
          }
          if (!this.email) {
            this.errors.push('El correo electrónico es obligatorio.');
          } else if (!this.validEmail(this.email)) {
            this.errors.push('El correo electrónico debe ser válido.');
          }
          if (!this.pwd) {
            this.errors.push("La contraseña es obligatoria.");
          }
    
          if (this.errors.length) {
            let textError = '';
            this.errors.forEach(element => textError += element + "</br>");

            alertify.error(textError);
          }
          else {
            // Simple POST request with a JSON body using fetch
            const requestOptions = {
              body: JSON.stringify({ 
                nombre: this.nombre,
                email: this.email,
                ubicacion: this.ubicacion,
                pwd: this.pwd
               })
            };
            fetch(`consultas/store?nombre=${this.nombre}&email=${this.email}&ubicacion=${this.ubicacion}&pwd=${this.pwd}`, {credentials: 'same-origin'})
              .then(
                response => {
                  if (response.status == 200) {
                    alertify.notify("Registrado!", "success", 3, function(){
                      window.location.href = 'login';
                    });
                  }
                  else {
                    alertify.error("No se pudo registrar!");
                  }
                }
              );
          }
          e.preventDefault();
        },
        validEmail: function (email) {
          var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
          return re.test(email);
        }
      }
  })