function generateRandomString(num) {
  const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
  let result1 = ' ';
  const charactersLength = characters.length;
  for (let i = 0; i < num; i++) {
    result1 += characters.charAt(Math.floor(Math.random() * charactersLength));
  }

  return result1;
}

var app = new Vue({
  el: '#app',
  data: {
    errors: [],
    email: '',
    pwd: ''
  },
  methods: {
      checkForm: function (e) {
        this.errors = [];
  
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
          fetch(`consultas/login?email=${this.email}&pwd=${this.pwd}`, {credentials: 'same-origin'})
            .then(data => {
              if (data == null) {
                alertify.error("El email o contraseña no existen.");
              }
              else {
                localStorage.email = this.email;
                localStorage.msg = false;
                window.location.href = 'chat';
              }
            });
        }
        e.preventDefault();
      },
      validEmail: function (email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
      }
    }
});

var app2 = new Vue({
  el: '#modal_req',
  data: {
    errors: [],
    email: ''
  },
  methods: {
    sendEmail: function() {
      let code = generateRandomString(10);

      // Simple POST request with a JSON body using fetch
      fetch(`email?email=${this.email}&code=${code}`, { credentials: 'same-origin' })
        .then(data => {
          if (data == null) {
            alertify.error("El email no existe.");
          }
          else {
            alertify.success("Mensaje de recuperación enviado con exito");
          }
        });
    },
    validEmail: function (email) {
      var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
    }
  }
});