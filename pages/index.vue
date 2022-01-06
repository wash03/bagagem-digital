<template>
  <div>
    <Header/>
    <Services/>
    <Clients/>
    <Portfolio/>
    <About/>
    <Contact/>

    <a :href="whatsappLink" class="btn btn-contact" target="_blank" role="button">
      <img src="../static/img/fale-conosco.png" alt="">
    </a>
    
  </div>
</template>

<script>
export default {
  data() {
    return {
      whatsappLink: 'https://api.whatsapp.com/send?phone=5562982079738&text=Quero%20embarcar%20nessa%20viagem!'
    }
  }
}
</script>
