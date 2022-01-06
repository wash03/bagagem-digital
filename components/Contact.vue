<template>
    <div id="contato">
        <div class="container-fluid">
            <div class="row">
                <div id="div-rocket" class="col-md-6 text-center">
                    <img src="../static/img/rocket-bagagem.png" alt="rocket" id="rocket">
                </div>
                <div class="col-md-6">
                    <img class="mx-auto d-block" id="hr" src="../static/img/hr.svg" alt="hr">
                    <h2>{{ $t('contactFormTitle') }}</h2>
                    <p id="subtitle" class="text-center">{{ $t('contactFormSubtitle') }}</p>
                    <form id="form-contato">
                        <form-group id="input-group-1">
                            <label for="input-nome">{{ $t('contactFormInputName') }}</label>
                            <input
                                id="input-nome" 
                                class="form-contact-input" 
                                name="nome"
                                type="text"
                                v-model="nome" 
                                :placeholder="$t('contactFormInputNamePlaceholder')"
                                required
                            >
                        </form-group>

                        <form-group id="input-group-2">
                            <label for="input-email">{{ $t('contactFormInputEmail') }}</label>
                            <input
                                id="input-email" 
                                class="form-contact-input" 
                                name="email"
                                type="email" 
                                v-model="email"
                                :placeholder="$t('contactFormInputEmailPlaceholder')"
                                required
                            >
                        </form-group>

                        <form-group id="input-group-3">
                            <label for="input-fone">{{ $t('contactFormInputFone') }}</label>
                            <input
                                id="input-fone" 
                                class="form-contact-input" 
                                name="telefone"
                                type="tel" 
                                v-model="telefone"
                                :placeholder="$t('contactFormInputFonePlaceholder')"
                                required
                            >
                        </form-group>

                        <button id="contact-button" type="submit" @click.prevent="enviar"> <img src="../static/img/send.svg" alt="send"> {{ $t('contactFormButton') }}</button>
                    </form>
                </div>
            </div>
        </div>
        <div id="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 text-right">
                        <img id="logo-footer" src="../static/img/logo-footer.png" alt="Logo-bagagem">
                    </div>
                    <div class="col-md-6">
                        <ul id="list-footer">
                            <li><img src="../static/img/phone-fill.svg" alt="phone"> 62 3602-0694</li>
                            <li><img src="../static/img/mail-send-line.svg" alt="mail"> comercial@bagagem.digital</li>
                            <li>
                                <img src="../static/img/map-pin-2-fill.svg" alt="address"> 
                                Brasil - Rua Cp-26 Sala 11, Celina Park Goiânia-GO, Brasil, CEP: 74375-000
                                <br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Londres - Tower Bridge Rd, London SE1 2UP, Reino Unido
                            </li>
                            
                        </ul>
                    </div>
                    <div class="col-md-3" id="redes-sociais-footer">
                        <a href="https://www.instagram.com/bagagem.digital/" target="_blank"><img src="../static/img/instagram.svg" alt="Instagram"></a>
                        <img src="../static/img/facebook.svg" alt="Facebook">
                        
                        <img src="../static/img/youtube.svg" alt="Youtube">
                        <br><br><br><br><br><br>
                        <p class="ml-5">
                            <img class="ml-5 mb-4" src="../static/img/lpb.svg" alt="Youtube">
                        </p>
                    </div>
                </div>
                <div class="row" id="red-bar-footer"></div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            nome: '',
            email: '',
            telefone: '',
            bodyMessage: '',
        }
    },

    methods: {
        enviar() {
            this.bodyMessage = 'Nome: ' + this.nome + '  ' + 'Email: ' + this.email + '  ' + 'Telefone: ' + this.telefone;
            console.log(this.bodyMessage)

            this.$axios.$post('/mail/send', {
                from: this.email,
                subject: 'Contato - site bagagem',
                text: this.bodyMessage,
            })
            
            alert('Contato registrado com sucesso! Entraremos em contato em breve!');
        }
    }
}
</script>