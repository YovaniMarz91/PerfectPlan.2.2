var app = new Vue({
  el: '#app',
  data: {
    errors: []
  },
  methods: {
    logout: function(){
      localStorage.removeItem('email');
      localStorage.removeItem('msg');
      window.location.href = '';
    }
  },
  created(){
    if (localStorage.email) {
      if (localStorage.msg == false) {
        alertify.success("Inicio de sesión exitoso!");
        localStorage.msg = true;
      }
    }
    else {
      window.location.href = 'login';
    }
  }
});